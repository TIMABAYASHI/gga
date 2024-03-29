<?php
use Illuminate\Database\Seeder;

    class MessageRoomsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="MessageRoomsTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\MessageRoom::create([
				"user_id" => $faker->randomDigit(),
				"client_id" => $faker->randomDigit(),
				"created_at" => $faker->dateTime("now"),
				"updated_at" => $faker->dateTime("now")

                ]);
            }
        }
    }