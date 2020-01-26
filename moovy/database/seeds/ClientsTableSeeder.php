<?php
use Illuminate\Database\Seeder;

    class ClientsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="ClientsTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Client::create([
				"lid" => $faker->word(),
				"password" => $faker->password(),
				"client_name" => $faker->name(),
				"founded_in" => $faker->date()." ".$faker->time(),
				"location" => $faker->word(),
				"company_url" => $faker->company(),
				"client_url" => $faker->uuid(),
				"client_industry" => $faker->word(),
				"client_business" => $faker->word(),
				"client_employees_num" => $faker->word(),
				"client_image_url" => $faker->uuid(),
				"client_job_sum" => $faker->randomDigit(),
				"client_role_id" => $faker->randomDigit(),
				"created_at" => $faker->dateTime("now"),
				"updated_at" => $faker->dateTime("now")

                ]);
            }
        }
    }