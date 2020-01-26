<?php
use Illuminate\Database\Seeder;

    class UserMoviesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="UserMoviesTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\UserMovie::create([
				"user_id" => $faker->randomDigit(),
				"movie_title" => $faker->word(),
				"deleted_at" => $faker->date()." ".$faker->time(),
				"created_at" => $faker->dateTime("now"),
				"updated_at" => $faker->dateTime("now")

                ]);
            }
        }
    }