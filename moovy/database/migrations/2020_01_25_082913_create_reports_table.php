<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateReportsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("reports", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('user_id')->nullable()->unsigned();
						$table->integer('client_id')->nullable()->unsigned();
						$table->integer('job_id')->nullable()->unsigned();
						$table->timestamps();
						$table->softDeletes();
						// $table->foreign("user_id")->references("id")->on("users");
						// $table->foreign("client_id")->references("id")->on("clients");
						// $table->foreign("job_id")->references("id")->on("jobs");



						// ----------------------------------------------------
						// -- SELECT [reports]--
						// ----------------------------------------------------
						// $query = DB::table("reports")
						// ->leftJoin("users","users.id", "=", "reports.user_id")
						// ->leftJoin("clients","clients.id", "=", "reports.clients_id")
						// ->leftJoin("jobs","jobs.id", "=", "reports.job_id")
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
                    Schema::dropIfExists("reports");
                }
            }
        