<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateLikesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("likes", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('user_id')->nullable()->unsigned();
						$table->integer('job_id')->nullable()->unsigned();
						$table->timestamps();
						$table->softDeletes();
						// $table->foreign("user_id")->references("id")->on("users");
						// $table->foreign("job_id")->references("id")->on("jobs");



						// ----------------------------------------------------
						// -- SELECT [likes]--
						// ----------------------------------------------------
						// $query = DB::table("likes")
						// ->leftJoin("users","users.id", "=", "likes.user_id")
						// ->leftJoin("jobs","jobs.id", "=", "likes.job_id")
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
                    Schema::dropIfExists("likes");
                }
            }
        