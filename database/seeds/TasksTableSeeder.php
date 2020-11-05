<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('tasks')->insert([
                'status' => 'test',
                'content' => 'test content' . $i,
                'user_id' => ($i % App\User::count()) + 1,
            ]);    
        }
    }
}
