<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\Client;
    
    //=======================================================================
    class ClientsController extends Controller
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
                $Clients = Client::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("lid", "LIKE", "%$keyword%")->orWhere("password", "LIKE", "%$keyword%")->orWhere("client_name", "LIKE", "%$keyword%")->orWhere("founded_in", "LIKE", "%$keyword%")->orWhere("location", "LIKE", "%$keyword%")->orWhere("company_url", "LIKE", "%$keyword%")->orWhere("client_url", "LIKE", "%$keyword%")->orWhere("client_industry", "LIKE", "%$keyword%")->orWhere("client_business", "LIKE", "%$keyword%")->orWhere("client_employees_num", "LIKE", "%$keyword%")->orWhere("client_image_url", "LIKE", "%$keyword%")->orWhere("client_job_sum", "LIKE", "%$keyword%")->orWhere("client_role_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Clients = Client::paginate($perPage);
                
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [clients]--
				// ----------------------------------------------------
				// $Clients = DB::table("clients")
				// ->leftJoin("client_roles","client_roles.id", "=", "clients.client_role_id")
				// ->paginate($perPage);
				// dd($Clients); //For checking

            }          
            return view("Clients.index", compact("Clients"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Clients.create");
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
				"lid" => "nullable", //string('lid',50)->nullable()
				"password" => "nullable", //string('password',50)->nullable()
				"client_name" => "nullable", //string('client_name',100)->nullable()
				"founded_in" => "nullable|date", //date('founded_in')->nullable()
				"location" => "nullable", //string('location',20)->nullable()
				"company_url" => "nullable", //string('company_url',200)->nullable()
				"client_url" => "nullable", //string('client_url',200)->nullable()
				"client_industry" => "nullable", //string('client_industry')->nullable()
				"client_business" => "nullable", //string('client_business',500)->nullable()
				"client_employees_num" => "nullable", //string('client_employees_num',20)->nullable()
				"client_image_url" => "nullable", //string('client_image_url',500)->nullable()
				"client_job_sum" => "nullable|integer", //integer('client_job_sum')->nullable()
				"client_role_id" => "nullable|integer", //integer('client_role_id')->nullable()

            ]);
            $requestData = $request->all();
            
            Client::create($requestData);
    
            return redirect("Clients")->with("flash_message", "Clients added!");
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
            $Clients = Client::findOrFail($id);
    
            return view("Clients.show", compact("Clients"));
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
            $Clients = Client::findOrFail($id);
    
            return view("Clients.edit", compact("Clients"));
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
				"lid" => "nullable", //string('lid',50)->nullable()
				"password" => "nullable", //string('password',50)->nullable()
				"client_name" => "nullable", //string('client_name',100)->nullable()
				"founded_in" => "nullable|date", //date('founded_in')->nullable()
				"location" => "nullable", //string('location',20)->nullable()
				"company_url" => "nullable", //string('company_url',200)->nullable()
				"client_url" => "nullable", //string('client_url',200)->nullable()
				"client_industry" => "nullable", //string('client_industry')->nullable()
				"client_business" => "nullable", //string('client_business',500)->nullable()
				"client_employees_num" => "nullable", //string('client_employees_num',20)->nullable()
				"client_image_url" => "nullable", //string('client_image_url',500)->nullable()
				"client_job_sum" => "nullable|integer", //integer('client_job_sum')->nullable()
				"client_role_id" => "nullable|integer", //integer('client_role_id')->nullable()

            ]);
            $requestData = $request->all();
            
            $Clients = Client::findOrFail($id);
            $Clients->update($requestData);
    
            return redirect("Clients")->with("flash_message", "Clients updated!");
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
            Client::destroy($id);
    
            return redirect("Clients")->with("flash_message", "Clients deleted!");
        }
    }
    //=======================================================================
    
    