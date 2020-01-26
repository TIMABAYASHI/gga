<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\UserWorkExp;
    
    //=======================================================================
    class UserWorkExpsController extends Controller
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
                $UserWorkExps = UserWorkExp::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("user_quit_job", "LIKE", "%$keyword%")->orWhere("exp_company", "LIKE", "%$keyword%")->orWhere("exp_industry", "LIKE", "%$keyword%")->orWhere("exp_occupation", "LIKE", "%$keyword%")->orWhere("exp_job", "LIKE", "%$keyword%")->orWhere("exp_start", "LIKE", "%$keyword%")->orWhere("exp_end", "LIKE", "%$keyword%")->orWhere("previous_company", "LIKE", "%$keyword%")->orWhere("previous_industry", "LIKE", "%$keyword%")->orWhere("previous_occupation", "LIKE", "%$keyword%")->orWhere("previous_job", "LIKE", "%$keyword%")->orWhere("previous_start", "LIKE", "%$keyword%")->orWhere("previous_end", "LIKE", "%$keyword%")->orWhere("second_last_company", "LIKE", "%$keyword%")->orWhere("second_last_industry", "LIKE", "%$keyword%")->orWhere("second_last_occupation", "LIKE", "%$keyword%")->orWhere("second_last_job", "LIKE", "%$keyword%")->orWhere("second_last_start", "LIKE", "%$keyword%")->orWhere("second_last_end", "LIKE", "%$keyword%")->orWhere("third_last_company", "LIKE", "%$keyword%")->orWhere("third_last_industry", "LIKE", "%$keyword%")->orWhere("third_last_occupation", "LIKE", "%$keyword%")->orWhere("third_last_job", "LIKE", "%$keyword%")->orWhere("third_last_start", "LIKE", "%$keyword%")->orWhere("third_last_end", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $UserWorkExps = UserWorkExp::paginate($perPage);
                
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [user_work_exps]--
				// ----------------------------------------------------
				// $UserWorkExps = DB::table("user_work_exps")
				// ->leftJoin("users","users.id", "=", "user_work_exps.user_id")
				// ->paginate($perPage);
				// dd($UserWorkExps); //For checking

            }          
            return view("UserWorkExps.index", compact("UserWorkExps"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("UserWorkExps.create");
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
				"user_quit_job" => "nullable", //string('user_quit_job',20)->nullable()
				"exp_company" => "nullable", //string('exp_company',100)->nullable()
				"exp_industry" => "nullable", //string('exp_industry',50)->nullable()
				"exp_occupation" => "nullable", //string('exp_occupation',50)->nullable()
				"exp_job" => "nullable", //string('exp_job',500)->nullable()
				"exp_start" => "nullable|date", //date('exp_start')->nullable()
				"exp_end" => "nullable|date", //date('exp_end')->nullable()
				"previous_company" => "nullable", //string('previous_company',100)->nullable()
				"previous_industry" => "nullable", //string('previous_industry',50)->nullable()
				"previous_occupation" => "nullable", //string('previous_occupation',50)->nullable()
				"previous_job" => "nullable", //string('previous_job',500)->nullable()
				"previous_start" => "nullable|date", //date('previous_start')->nullable()
				"previous_end" => "nullable|date", //date('previous_end')->nullable()
				"second_last_company" => "nullable", //string('second_last_company',100)->nullable()
				"second_last_industry" => "nullable", //string('second_last_industry',50)->nullable()
				"second_last_occupation" => "nullable", //string('second_last_occupation',50)->nullable()
				"second_last_job" => "nullable", //string('second_last_job',500)->nullable()
				"second_last_start" => "nullable|date", //date('second_last_start')->nullable()
				"second_last_end" => "nullable|date", //date('second_last_end')->nullable()
				"third_last_company" => "nullable", //string('third_last_company',100)->nullable()
				"third_last_industry" => "nullable", //string('third_last_industry',50)->nullable()
				"third_last_occupation" => "nullable", //string('third_last_occupation',50)->nullable()
				"third_last_job" => "nullable", //string('third_last_job',500)->nullable()
				"third_last_start" => "nullable|date", //date('third_last_start')->nullable()
				"third_last_end" => "nullable|date", //date('third_last_end')->nullable()

            ]);
            $requestData = $request->all();
            
            UserWorkExp::create($requestData);
    
            return redirect("UserWorkExps")->with("flash_message", "UserWorkExps added!");
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
            $UserWorkExps = UserWorkExp::findOrFail($id);
    
            return view("UserWorkExps.show", compact("UserWorkExps"));
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
            $UserWorkExps = UserWorkExp::findOrFail($id);
    
            return view("UserWorkExps.edit", compact("UserWorkExps"));
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
				"user_quit_job" => "nullable", //string('user_quit_job',20)->nullable()
				"exp_company" => "nullable", //string('exp_company',100)->nullable()
				"exp_industry" => "nullable", //string('exp_industry',50)->nullable()
				"exp_occupation" => "nullable", //string('exp_occupation',50)->nullable()
				"exp_job" => "nullable", //string('exp_job',500)->nullable()
				"exp_start" => "nullable|date", //date('exp_start')->nullable()
				"exp_end" => "nullable|date", //date('exp_end')->nullable()
				"previous_company" => "nullable", //string('previous_company',100)->nullable()
				"previous_industry" => "nullable", //string('previous_industry',50)->nullable()
				"previous_occupation" => "nullable", //string('previous_occupation',50)->nullable()
				"previous_job" => "nullable", //string('previous_job',500)->nullable()
				"previous_start" => "nullable|date", //date('previous_start')->nullable()
				"previous_end" => "nullable|date", //date('previous_end')->nullable()
				"second_last_company" => "nullable", //string('second_last_company',100)->nullable()
				"second_last_industry" => "nullable", //string('second_last_industry',50)->nullable()
				"second_last_occupation" => "nullable", //string('second_last_occupation',50)->nullable()
				"second_last_job" => "nullable", //string('second_last_job',500)->nullable()
				"second_last_start" => "nullable|date", //date('second_last_start')->nullable()
				"second_last_end" => "nullable|date", //date('second_last_end')->nullable()
				"third_last_company" => "nullable", //string('third_last_company',100)->nullable()
				"third_last_industry" => "nullable", //string('third_last_industry',50)->nullable()
				"third_last_occupation" => "nullable", //string('third_last_occupation',50)->nullable()
				"third_last_job" => "nullable", //string('third_last_job',500)->nullable()
				"third_last_start" => "nullable|date", //date('third_last_start')->nullable()
				"third_last_end" => "nullable|date", //date('third_last_end')->nullable()

            ]);
            $requestData = $request->all();
            
            $UserWorkExps = UserWorkExp::findOrFail($id);
            $UserWorkExps->update($requestData);
    
            return redirect("UserWorkExps")->with("flash_message", "UserWorkExps updated!");
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
            UserWorkExp::destroy($id);
    
            return redirect("UserWorkExps")->with("flash_message", "UserWorkExps deleted!");
        }
    }
    //=======================================================================
    
    