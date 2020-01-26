<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Applicant;
    
    //=======================================================================
    class ApplicantsController extends Controller
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
                $Applicants = Applicant::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("job_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Applicants = Applicant::paginate($perPage);
                
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [applicants]--
				// ----------------------------------------------------
				// $Applicants = DB::table("applicants")
				// ->leftJoin("users","users.id", "=", "applicants.user_id")
				// ->leftJoin("jobs","jobs.id", "=", "applicants.job_id")
				// ->paginate($perPage);
				// dd($Applicants); //For checking

            }          
            return view("Applicants.index", compact("Applicants"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Applicants.create");
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
				"job_id" => "nullable|integer", //integer('job_id')->nullable()

            ]);
            $requestData = $request->all();
            
            Applicant::create($requestData);
    
            return redirect("Applicants")->with("flash_message", "Applicants added!");
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
            $Applicants = Applicant::findOrFail($id);
    
            return view("Applicants.show", compact("Applicants"));
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
            $Applicants = Applicant::findOrFail($id);
    
            return view("Applicants.edit", compact("Applicants"));
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
				"job_id" => "nullable|integer", //integer('job_id')->nullable()

            ]);
            $requestData = $request->all();
            
            $Applicants = Applicant::findOrFail($id);
            $Applicants->update($requestData);
    
            return redirect("Applicants")->with("flash_message", "Applicants updated!");
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
            Applicant::destroy($id);
    
            return redirect("Applicants")->with("flash_message", "Applicants deleted!");
        }
    }
    //=======================================================================
    
    