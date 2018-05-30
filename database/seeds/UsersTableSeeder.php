<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombres = [
            0 => "salasapi"
        ];
        $emails = [
            0 => "salasicesi@correo.icesi.edu.co"
        ];
        $cantidad = 1;
        $api_tokens = [
            0 => "tnrApcPohoar9padK6JTEY3Z8mm7OkzkyLYUXgzjnJbqOg3DT1tOIuhQKBfM"
        ];
        $passwords = [
            0 => "salasicesi"
        ];
        for ($i = 0; $i < $cantidad; $i++) {
            DB::table('users')->insert([
                'name' => $nombres[$i],
                'email' => $emails[$i],
                'api_token' => $api_tokens[$i],
                'password' => $passwords[$i],
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
