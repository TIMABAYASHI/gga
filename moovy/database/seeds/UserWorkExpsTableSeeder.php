<?php
use Illuminate\Database\Seeder;

    class UserWorkExpsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="UserWorkExpsTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\UserWorkExp::create([
				"user_id" => $faker->randomDigit(),
				"user_quit_job" => $faker->word(),
				"exp_company" => $faker->company(),
				"exp_industry" => $faker->word(),
				"exp_occupation" => $faker->word(),
				"exp_job" => $faker->word(),
				"exp_start" => $faker->date()." ".$faker->time(),
				"exp_end" => $faker->date()." ".$faker->time(),
				"previous_company" => $faker->company(),
				"previous_industry" => $faker->word(),
				"previous_occupation" => $faker->word(),
				"previous_job" => $faker->word(),
				"previous_start" => $faker->date()." ".$faker->time(),
				"previous_end" => $faker->date()." ".$faker->time(),
				"second_last_company" => $faker->company(),
				"second_last_industry" => $faker->word(),
				"second_last_occupation" => $faker->word(),
				"second_last_job" => $faker->word(),
				"second_last_start" => $faker->date()." ".$faker->time(),
				"second_last_end" => $faker->date()." ".$faker->time(),
				"third_last_company" => $faker->company(),
				"third_last_industry" => $faker->word(),
				"third_last_occupation" => $faker->word(),
				"third_last_job" => $faker->word(),
				"third_last_start" => $faker->date()." ".$faker->time(),
				"third_last_end" => $faker->date()." ".$faker->time(),
				"created_at" => $faker->dateTime("now"),
				"updated_at" => $faker->dateTime("now")

                ]);
            }
        }
    }