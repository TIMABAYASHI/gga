<?php
use Illuminate\Database\Seeder;

    class ReportsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="ReportsTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Report::create([
				"user_id" => $faker->randomDigit(),
				"client_id" => $faker->randomDigit(),
				"job_id" => $faker->randomDigit(),
				"created_at" => $faker->dateTime("now"),
				"updated_at" => $faker->dateTime("now")

                ]);
            }
        }
    }