<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\ClientRole;
    
    //=======================================================================
    class ClientRolesController extends Controller
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
                $ClientRoles = ClientRole::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("role_name", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $ClientRoles = ClientRole::paginate($perPage);
                
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [client_roles]--
				// ----------------------------------------------------
				// $ClientRoles = DB::table("client_roles")
				// ->paginate($perPage);
				// dd($ClientRoles); //For checking

            }          
            return view("ClientRoles.index", compact("ClientRoles"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("ClientRoles.create");
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
				"role_name" => "nullable", //string('role_name',20)->nullable()

            ]);
            $requestData = $request->all();
            
            ClientRole::create($requestData);
    
            return redirect("ClientRoles")->with("flash_message", "ClientRoles added!");
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
            $ClientRoles = ClientRole::findOrFail($id);
    
            return view("ClientRoles.show", compact("ClientRoles"));
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
            $ClientRoles = ClientRole::findOrFail($id);
    
            return view("ClientRoles.edit", compact("ClientRoles"));
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
				"role_name" => "nullable", //string('role_name',20)->nullable()

            ]);
            $requestData = $request->all();
            
            $ClientRoles = ClientRole::findOrFail($id);
            $ClientRoles->update($requestData);
    
            return redirect("ClientRoles")->with("flash_message", "ClientRoles updated!");
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
            ClientRole::destroy($id);
    
            return redirect("ClientRoles")->with("flash_message", "ClientRoles deleted!");
        }
    }
    //=======================================================================
    
    