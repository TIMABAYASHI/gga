<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateApplicantsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("applicants", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('user_id')->nullable()->unsigned();
						$table->integer('job_id')->nullable()->unsigned();
						$table->timestamps();
						$table->softDeletes();
						// $table->foreign("user_id")->references("id")->on("users");
						// $table->foreign("job_id")->references("id")->on("jobs");



						// ----------------------------------------------------
						// -- SELECT [applicants]--
						// ----------------------------------------------------
						// $query = DB::table("applicants")
						// ->leftJoin("users","users.id", "=", "applicants.user_id")
						// ->leftJoin("jobs","jobs.id", "=", "applicants.job_id")
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
                    Schema::dropIfExists("applicants");
                }
            }
        