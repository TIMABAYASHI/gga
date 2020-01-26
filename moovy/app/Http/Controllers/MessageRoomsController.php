<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use DB;
use App\MessageRoom;
    
    //=======================================================================
    class MessageRoomsController extends Controller
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
                $MessageRooms = MessageRoom::where("id", "LIKE", "%$keyword%")->orWhere("id", "LIKE", "%$keyword%")->orWhere("user_id", "LIKE", "%$keyword%")->orWhere("client_id", "LIKE", "%$keyword%")->paginate($perPage);
            } else {
                $MessageRooms = MessageRoom::paginate($perPage);
                
				// ----------------------------------------------------
				// -- QueryBuilder: SELECT [message_rooms]--
				// ----------------------------------------------------
				// $MessageRooms = DB::table("message_rooms")
				// ->leftJoin("users","users.id", "=", "message_rooms.user_id")
				// ->leftJoin("clients","clients.id", "=", "message_rooms.client_id")
				// ->paginate($perPage);
				// dd($MessageRooms); //For checking

            }          
            return view("MessageRooms.index", compact("MessageRooms"));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\View\View
         */
        public function create()
        {
            return view("MessageRooms.create");
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
				"client_id" => "nullable|integer", //integer('client_id')->nullable()

            ]);
            $requestData = $request->all();
            
            MessageRoom::create($requestData);
    
            return redirect("MessageRooms")->with("flash_message", "MessageRooms added!");
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
            $MessageRooms = MessageRoom::findOrFail($id);
    
            return view("MessageRooms.show", compact("MessageRooms"));
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
            $MessageRooms = MessageRoom::findOrFail($id);
    
            return view("MessageRooms.edit", compact("MessageRooms"));
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
				"client_id" => "nullable|integer", //integer('client_id')->nullable()

            ]);
            $requestData = $request->all();
            
            $MessageRooms = MessageRoom::findOrFail($id);
            $MessageRooms->update($requestData);
    
            return redirect("MessageRooms")->with("flash_message", "MessageRooms updated!");
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
            MessageRoom::destroy($id);
    
            return redirect("MessageRooms")->with("flash_message", "MessageRooms deleted!");
        }
    }
    //=======================================================================
    
    