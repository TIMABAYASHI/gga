<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateUserMoviesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("user_movies", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('user_id')->nullable()->unsigned();
						$table->string('movie_title',50)->nullable();
						$table->timestamps();
						$table->softDeletes();
						// $table->foreign("user_id")->references("id")->on("users");



						// ----------------------------------------------------
						// -- SELECT [user_movies]--
						// ----------------------------------------------------
						// $query = DB::table("user_movies")
						// ->leftJoin("users","users.id", "=", "user_movies.user_id")
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
                    Schema::dropIfExists("user_movies");
                }
            }
        