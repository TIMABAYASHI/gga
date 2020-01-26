<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateMessagesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("messages", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('room_id')->nullable()->unsigned();
						$table->string('massage',1000)->nullable();
						$table->timestamps();
						$table->softDeletes();
						// $table->foreign("room_id")->references("id")->on("message_rooms");



						// ----------------------------------------------------
						// -- SELECT [messages]--
						// ----------------------------------------------------
						// $query = DB::table("messages")
						// ->leftJoin("message_rooms","message_rooms.id", "=", "messages.room_id")
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
                    Schema::dropIfExists("messages");
                }
            }
        