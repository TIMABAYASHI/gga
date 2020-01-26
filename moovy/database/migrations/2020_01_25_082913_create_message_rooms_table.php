<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMessageRoomsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("message_rooms", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('user_id')->nullable()->unsigned();
						$table->integer('client_id')->nullable()->unsigned();
						$table->timestamps();
						$table->softDeletes();
						// $table->foreign("user_id")->references("id")->on("users");
						// $table->foreign("client_id")->references("id")->on("clients");



						// ----------------------------------------------------
						// -- SELECT [message_rooms]--
						// ----------------------------------------------------
						// $query = DB::table("message_rooms")
						// ->leftJoin("users","users.id", "=", "message_rooms.user_id")
						// ->leftJoin("clients","clients.id", "=", "message_rooms.client_id")
						// ->get();
						// dd($query); //For checking



                    });
                }
    
                /**
                 * Reverse the migrations.
                 *
                 * @return void
                 */
                public function down()
                {
                    Schema::dropIfExists("message_rooms");
                }
            }
        