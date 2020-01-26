<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //********************************************
        // Cmd:[ php artisan db:seed ]
        //********************************************
        // $this->call(UsersTableSeeder::class);
		$this->call(JobsTableSeeder::class);
		$this->call(ApplicantsTableSeeder::class);
		$this->call(AdminsTableSeeder::class);
		$this->call(ClientsTableSeeder::class);
		$this->call(LikesTableSeeder::class);
		$this->call(MessagesTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(UserRolesTableSeeder::class);
		$this->call(MessageRoomsTableSeeder::class);
		$this->call(UserMoviesTableSeeder::class);
		$this->call(ReportsTableSeeder::class);
		$this->call(ClientRolesTableSeeder::class);
		$this->call(UserWorkExpsTableSeeder::class);
   }
}