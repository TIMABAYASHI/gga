<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateJobsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("jobs", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('client_id')->nullable()->unsigned();
						$table->string('job_title',40)->nullable();
						$table->string('job_occupation',15)->nullable();
						$table->string('job_position',15)->nullable();
						$table->string('job_type',15)->nullable();
						$table->string('job_message',100)->nullable();
						$table->string('image_url',200)->nullable();
						$table->integer('job_status')->nullable();
						$table->timestamps();
						$table->softDeletes();
						// $table->foreign("client_id")->references("id")->on("clients");



						// ----------------------------------------------------
						// -- SELECT [jobs]--
						// ----------------------------------------------------
						// $query = DB::table("jobs")
						// ->leftJoin("clients","clients.id", "=", "jobs.client_id")
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
                    Schema::dropIfExists("jobs");
                }
            }
        