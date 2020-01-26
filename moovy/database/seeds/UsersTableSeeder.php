<?php
use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="UsersTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\User::create([
				"name" => $faker->name(),
				"name_mei" => $faker->name(),
				"kana_sei" => $faker->word(),
				"kana_mei" => $faker->word(),
				"email" => $faker->safeEmail(),
				"password" => $faker->password(),
				"phone" => $faker->word(),
				"address" => $faker->address(),
				"birthday" => $faker->date()." ".$faker->time(),
				"language" => $faker->languageCode(),
				"licence" => $faker->word(),
				"school" => $faker->word(),
				"school_dept" => $faker->word(),
				"school_subject" => $faker->word(),
				"gender" => $faker->word(),
				"salary" => $faker->randomDigit(),
				"image_url" => $faker->uuid(),
				"back_image_url" => $faker->uuid(),
				"remember_token" => $faker->sha1(),
				"user_role_id" => $faker->randomDigit(),
				"created_at" => $faker->dateTime("now"),
				"updated_at" => $faker->dateTime("now")

                ]);
            }
        }
    }