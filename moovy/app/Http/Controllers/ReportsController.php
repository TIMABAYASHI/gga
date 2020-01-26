<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Report;
    
    //=======================================================================
    class ReportsController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\View\View
         */
        public function index(Request $request)
        {
            $keyword = $request->get("search");
            $perPage = 25;
    
            if (!empty($keyword)) {
                $Reports = Report::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("clients_id", "LIKE", "%$keyword%")->orWhere("job_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Reports = Report::paginate($perPage);
                
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [reports]--
				// ----------------------------------------------------
				// $Reports = DB::table("reports")
				// ->leftJoin("users","users.id", "=", "reports.user_id")
				// ->leftJoin("clients","clients.id", "=", "reports.clients_id")
				// ->leftJoin("jobs","jobs.id", "=", "reports.job_id")
				// ->paginate($perPage);
				// dd($Reports); //For checking

            }          
            return view("Reports.index", compact("Reports"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Reports.create");
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function store(Request $request)
        {
            $this->validate($request, [
				"user_id" => "nullable|integer", //integer('user_id')->nullable()
				"clients_id" => "nullable|integer", //integer('clients_id')->nullable()
				"job_id" => "nullable|integer", //integer('job_id')->nullable()

            ]);
            $requestData = $request->all();
            
            Report::create($requestData);
    
            return redirect("Reports")->with("flash_message", "Reports added!");
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function show($id)
        {
            $Reports = Report::findOrFail($id);
    
            return view("Reports.show", compact("Reports"));
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         *
         * @return \Illuminate\View\View
         */
        public function edit($id)
        {
            $Reports = Report::findOrFail($id);
    
            return view("Reports.edit", compact("Reports"));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  int  $id
         * @param \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function update(Request $request, $id)
        {
            $this->validate($request, [
				"user_id" => "nullable|integer", //integer('user_id')->nullable()
				"clients_id" => "nullable|integer", //integer('clients_id')->nullable()
				"job_id" => "nullable|integer", //integer('job_id')->nullable()

            ]);
            $requestData = $request->all();
            
            $Reports = Report::findOrFail($id);
            $Reports->update($requestData);
    
            return redirect("Reports")->with("flash_message", "Reports updated!");
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         *
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function destroy($id)
        {
            Report::destroy($id);
    
            return redirect("Reports")->with("flash_message", "Reports deleted!");
        }
    }
    //=======================================================================
    
    