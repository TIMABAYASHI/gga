<?php
use Illuminate\Database\Seeder;

    class JobsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="JobsTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Job::create([
				"client_id" => $faker->randomDigit(),
				"job_title" => $faker->word(),
				"job_occupation" => $faker->word(),
				"job_position" => $faker->word(),
				"job_type" => $faker->word(),
				"job_message" => $faker->word(),
				"image_url" => $faker->word(),
				"job_status" => $faker->randomDigit(),
				"created_at" => $faker->dateTime("now"),
                "updated_at" => $faker->dateTime("now"),
                "deleted_at" => $faker->dateTime("now")
                ]);
            }
        }
    }