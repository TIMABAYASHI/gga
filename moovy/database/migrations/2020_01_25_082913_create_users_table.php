<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateUsersTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("users", function (Blueprint $table) {
						$table->increments('id');
						$table->string('name',30)->nullable();
						$table->string('name_mei',30)->nullable();
						$table->string('kana_sei',30)->nullable();
						$table->string('kana_mei',30)->nullable();
						$table->string('email',100);
						$table->string('password',30)->nullable();
						$table->string('phone',20)->nullable();
						$table->string('address',50)->nullable();
						$table->date('birthday')->nullable();
						$table->string('language',50)->nullable();
						$table->string('licence')->nullable();
						$table->string('school',50)->nullable();
						$table->string('school_dept',50)->nullable();
						$table->string('school_subject',50)->nullable();
						$table->string('gender',16)->nullable();
						$table->integer('salary')->nullable();
						$table->string('image_url',300)->nullable();
						$table->string('back_image_url',300)->nullable();
						$table->string('remember_token',100)->nullable();
						$table->integer('user_role_id')->nullable()->unsigned();
						$table->timestamps();
						$table->softDeletes();
						// $table->foreign("user_role_id")->references("id")->on("user_roles");



						// ----------------------------------------------------
						// -- SELECT [users]--
						// ----------------------------------------------------
						// $query = DB::table("users")
						// ->leftJoin("user_roles","user_roles.id", "=", "users.user_role_id")
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
                    Schema::dropIfExists("users");
                }
            }
        