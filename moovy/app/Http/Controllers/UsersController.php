<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\User;
    
    //=======================================================================
    class UsersController extends Controller
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
                $Users = User::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("name", "LIKE", "%$keyword%")->orWhere("name_mei", "LIKE", "%$keyword%")->orWhere("kana_sei", "LIKE", "%$keyword%")->orWhere("kana_mei", "LIKE", "%$keyword%")->orWhere("email", "LIKE", "%$keyword%")->orWhere("password", "LIKE", "%$keyword%")->orWhere("phone", "LIKE", "%$keyword%")->orWhere("address", "LIKE", "%$keyword%")->orWhere("birthday", "LIKE", "%$keyword%")->orWhere("language", "LIKE", "%$keyword%")->orWhere("licence", "LIKE", "%$keyword%")->orWhere("school", "LIKE", "%$keyword%")->orWhere("school_dept", "LIKE", "%$keyword%")->orWhere("school_subject", "LIKE", "%$keyword%")->orWhere("gender", "LIKE", "%$keyword%")->orWhere("salary", "LIKE", "%$keyword%")->orWhere("image_url", "LIKE", "%$keyword%")->orWhere("back_image_url", "LIKE", "%$keyword%")->orWhere("remember_token", "LIKE", "%$keyword%")->orWhere("user_role_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $Users = User::paginate($perPage);
                
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [users]--
				// ----------------------------------------------------
				// $Users = DB::table("users")
				// ->leftJoin("user_roles","user_roles.id", "=", "users.user_role_id")
				// ->paginate($perPage);
				// dd($Users); //For checking

            }          
            return view("Users.index", compact("Users"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("Users.create");
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
				"name" => "nullable", //string('name',30)->nullable()
				"name_mei" => "nullable", //string('name_mei',30)->nullable()
				"kana_sei" => "nullable", //string('kana_sei',30)->nullable()
				"kana_mei" => "nullable", //string('kana_mei',30)->nullable()
				"email" => "nullable", //string('email',100)->nullable()
				"password" => "nullable", //string('password',30)->nullable()
				"phone" => "nullable", //string('phone',20)->nullable()
				"address" => "nullable", //string('address',20)->nullable()
				"birthday" => "nullable|date", //date('birthday')->nullable()
				"language" => "nullable", //string('language',50)->nullable()
				"licence" => "nullable", //string('licence')->nullable()
				"school" => "nullable", //string('school',50)->nullable()
				"school_dept" => "nullable", //string('school_dept',50)->nullable()
				"school_subject" => "nullable", //string('school_subject',50)->nullable()
				"gender" => "nullable", //string('gender',5)->nullable()
				"salary" => "nullable|integer", //integer('salary')->nullable()
				"image_url" => "nullable", //string('image_url',300)->nullable()
				"back_image_url" => "nullable", //string('back_image_url',300)->nullable()
				"remember_token" => "nullable", //string('remember_token',100)->nullable()
				"user_role_id" => "nullable|integer", //integer('user_role_id')->nullable()

            ]);
            $requestData = $request->all();
            
            User::create($requestData);
    
            return redirect("Users")->with("flash_message", "Users added!");
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
            $Users = User::findOrFail($id);
    
            return view("Users.show", compact("Users"));
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
            $Users = User::findOrFail($id);
    
            return view("Users.edit", compact("Users"));
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
				"name" => "nullable", //string('name',30)->nullable()
				"name_mei" => "nullable", //string('name_mei',30)->nullable()
				"kana_sei" => "nullable", //string('kana_sei',30)->nullable()
				"kana_mei" => "nullable", //string('kana_mei',30)->nullable()
				"email" => "nullable", //string('email',100)->nullable()
				"password" => "nullable", //string('password',30)->nullable()
				"phone" => "nullable", //string('phone',20)->nullable()
				"address" => "nullable", //string('address',20)->nullable()
				"birthday" => "nullable|date", //date('birthday')->nullable()
				"language" => "nullable", //string('language',50)->nullable()
				"licence" => "nullable", //string('licence')->nullable()
				"school" => "nullable", //string('school',50)->nullable()
				"school_dept" => "nullable", //string('school_dept',50)->nullable()
				"school_subject" => "nullable", //string('school_subject',50)->nullable()
				"gender" => "nullable", //string('gender',5)->nullable()
				"salary" => "nullable|integer", //integer('salary')->nullable()
				"image_url" => "nullable", //string('image_url',300)->nullable()
				"back_image_url" => "nullable", //string('back_image_url',300)->nullable()
				"remember_token" => "nullable", //string('remember_token',100)->nullable()
				"user_role_id" => "nullable|integer", //integer('user_role_id')->nullable()

            ]);
            $requestData = $request->all();
            
            $Users = User::findOrFail($id);
            $Users->update($requestData);
    
            return redirect("Users")->with("flash_message", "Users updated!");
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
            User::destroy($id);
    
            return redirect("Users")->with("flash_message", "Users deleted!");
        }
    }
    //=======================================================================
    
    