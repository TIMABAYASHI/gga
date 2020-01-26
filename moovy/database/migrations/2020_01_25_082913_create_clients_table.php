<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateClientsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("clients", function (Blueprint $table) {
						$table->increments('id');
						$table->string('lid',50)->nullable();
						$table->string('password',50)->nullable();
						$table->string('client_name',100)->nullable();
						$table->date('founded_in')->nullable();
						$table->string('location',20)->nullable();
						$table->string('company_url',200)->nullable();
						$table->string('client_url',200)->nullable();
						$table->string('client_industry')->nullable();
						$table->string('client_business',500)->nullable();
						$table->string('client_employees_num',20)->nullable();
						$table->string('client_image_url',500)->nullable();
						$table->integer('client_job_sum')->nullable();
						$table->integer('client_role_id')->nullable()->unsigned();
						$table->timestamps();
						$table->softDeletes();
						// $table->foreign("client_role_id")->references("id")->on("client_roles");



						// ----------------------------------------------------
						// -- SELECT [clients]--
						// ----------------------------------------------------
						// $query = DB::table("clients")
						// ->leftJoin("client_roles","client_roles.id", "=", "clients.client_role_id")
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
                    Schema::dropIfExists("clients");
                }
            }
        