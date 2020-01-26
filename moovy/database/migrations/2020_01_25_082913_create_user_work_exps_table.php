<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateUserWorkExpsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("user_work_exps", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('user_id')->nullable()->unsigned();
						$table->string('user_quit_job',20)->nullable();
						$table->string('exp_company',100)->nullable();
						$table->string('exp_industry',50)->nullable();
						$table->string('exp_occupation',50)->nullable();
						$table->string('exp_job',500)->nullable();
						$table->date('exp_start')->nullable();
						$table->date('exp_end')->nullable();
						$table->string('previous_company',100)->nullable();
						$table->string('previous_industry',50)->nullable();
						$table->string('previous_occupation',50)->nullable();
						$table->string('previous_job',500)->nullable();
						$table->date('previous_start')->nullable();
						$table->date('previous_end')->nullable();
						$table->string('second_last_company',100)->nullable();
						$table->string('second_last_industry',50)->nullable();
						$table->string('second_last_occupation',50)->nullable();
						$table->string('second_last_job',500)->nullable();
						$table->date('second_last_start')->nullable();
						$table->date('second_last_end')->nullable();
						$table->string('third_last_company',100)->nullable();
						$table->string('third_last_industry',50)->nullable();
						$table->string('third_last_occupation',50)->nullable();
						$table->string('third_last_job',500)->nullable();
						$table->date('third_last_start')->nullable();
						$table->date('third_last_end')->nullable();
						$table->timestamps();
						$table->softDeletes();
						// $table->foreign("user_id")->references("id")->on("users");



						// ----------------------------------------------------
						// -- SELECT [user_work_exps]--
						// ----------------------------------------------------
						// $query = DB::table("user_work_exps")
						// ->leftJoin("users","users.id", "=", "user_work_exps.user_id")
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
                    Schema::dropIfExists("user_work_exps");
                }
            }
        