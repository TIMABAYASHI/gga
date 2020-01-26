<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\UserMovie;
    
    //=======================================================================
    class UserMoviesController extends Controller
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
                $UserMovies = UserMovie::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("movie_title", "LIKE", "%$keyword%")->orWhere("delated_at", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $UserMovies = UserMovie::paginate($perPage);
                
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [user_movies]--
				// ----------------------------------------------------
				// $UserMovies = DB::table("user_movies")
				// ->leftJoin("users","users.id", "=", "user_movies.user_id")
				// ->paginate($perPage);
				// dd($UserMovies); //For checking

            }          
            return view("UserMovies.index", compact("UserMovies"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("UserMovies.create");
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
				"movie_title" => "nullable", //string('movie_title',50)->nullable()
				"delated_at" => "nullable|date", //timestamp('delated_at')->nullable()

            ]);
            $requestData = $request->all();
            
            UserMovie::create($requestData);
    
            return redirect("UserMovies")->with("flash_message", "UserMovies added!");
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
            $UserMovies = UserMovie::findOrFail($id);
    
            return view("UserMovies.show", compact("UserMovies"));
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
            $UserMovies = UserMovie::findOrFail($id);
    
            return view("UserMovies.edit", compact("UserMovies"));
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
				"movie_title" => "nullable", //string('movie_title',50)->nullable()
				"delated_at" => "nullable|date", //timestamp('delated_at')->nullable()

            ]);
            $requestData = $request->all();
            
            $UserMovies = UserMovie::findOrFail($id);
            $UserMovies->update($requestData);
    
            return redirect("UserMovies")->with("flash_message", "UserMovies updated!");
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
            UserMovie::destroy($id);
    
            return redirect("UserMovies")->with("flash_message", "UserMovies deleted!");
        }
    }
    //=======================================================================
    
    