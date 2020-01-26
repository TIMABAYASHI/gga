<?php
use Illuminate\Database\Seeder;

    class UserRolesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {

        DB::table('user_roles')->insert([
            ['role_name' => '一般会員'],
            ['role_name' => '予備１'],
            ['role_name' => '予備２'],
            ['role_name' => '予備３'],
            ['role_name' => 'プレミア会員'],
            ['role_name' => '予備４'],
            ['role_name' => '予備５'],
            ['role_name' => '予備６'],
            ['role_name' => '退会希望者'],
            ['role_name' => '予備７'],
            ['role_name' => '予備８'],
            ['role_name' => '退会済み'],
            ['role_name' => '予備９'],
            ['role_name' => '予備１０']

        ]);
    }
}