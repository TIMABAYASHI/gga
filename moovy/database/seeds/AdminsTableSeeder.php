<?php
use Illuminate\Database\Seeder;

    class AdminsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="AdminsTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Admin::create([
				"lid" => $faker->word(),
				"password" => $faker->password(),
				"email" => $faker->safeEmail(),
				"created_at" => $faker->dateTime("now"),
				"updated_at" => $faker->dateTime("now")

                ]);
            }
        }
    }