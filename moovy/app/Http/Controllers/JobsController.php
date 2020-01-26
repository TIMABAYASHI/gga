<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Job;
    
    //=======================================================================
    class JobsController extends Controller
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
                $Jobs = Job::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("client_id", "LIKE", "%$keyword%")->orWhere("job_title", "LIKE", "%$keyword%")->orWhere("job_occupation", "LIKE", "%$keyword%")->orWhere("job_position", "LIKE", "%$keyword%")->orWhere("job_type", "LIKE", "%$keyword%")->orWhere("job_message", "LIKE", "%$keyword%")->orWhere("image_url", "LIKE", "%$keyword%")->orWhere("job_status", "LIKE", "%$keyword%")->orWhere("delated_at", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Jobs = Job::paginate($perPage);
                
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [jobs]--
				// ----------------------------------------------------
				// $Jobs = DB::table("jobs")
				// ->leftJoin("clients","clients.id", "=", "jobs.client_id")
				// ->paginate($perPage);
				// dd($Jobs); //For checking

            }          
            return view("Jobs.index", compact("Jobs"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Jobs.create");
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
				"client_id" => "nullable|integer", //integer('client_id')->nullable()
				"job_title" => "nullable", //string('job_title',40)->nullable()
				"job_occupation" => "nullable", //string('job_occupation',15)->nullable()
				"job_position" => "nullable", //string('job_position',15)->nullable()
				"job_type" => "nullable", //string('job_type',15)->nullable()
				"job_message" => "nullable", //string('job_message',100)->nullable()
				"image_url" => "nullable", //string('image_url',200)->nullable()
				"job_status" => "nullable|integer", //integer('job_status')->nullable()
				"delated_at" => "nullable|date", //timestamp('delated_at')->nullable()

            ]);
            $requestData = $request->all();
            
            Job::create($requestData);
    
            return redirect("Jobs")->with("flash_message", "Jobs added!");
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
            $Jobs = Job::findOrFail($id);
    
            return view("Jobs.show", compact("Jobs"));
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
            $Jobs = Job::findOrFail($id);
    
            return view("Jobs.edit", compact("Jobs"));
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
				"client_id" => "nullable|integer", //integer('client_id')->nullable()
				"job_title" => "nullable", //string('job_title',40)->nullable()
				"job_occupation" => "nullable", //string('job_occupation',15)->nullable()
				"job_position" => "nullable", //string('job_position',15)->nullable()
				"job_type" => "nullable", //string('job_type',15)->nullable()
				"job_message" => "nullable", //string('job_message',100)->nullable()
				"image_url" => "nullable", //string('image_url',200)->nullable()
				"job_status" => "nullable|integer", //integer('job_status')->nullable()
				"delated_at" => "nullable|date", //timestamp('delated_at')->nullable()

            ]);
            $requestData = $request->all();
            
            $Jobs = Job::findOrFail($id);
            $Jobs->update($requestData);
    
            return redirect("Jobs")->with("flash_message", "Jobs updated!");
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
            Job::destroy($id);
    
            return redirect("Jobs")->with("flash_message", "Jobs deleted!");
        }
    }
    //=======================================================================
    
    