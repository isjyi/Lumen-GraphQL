<?php

use App\Models\Job;
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
        factory(Job::class)->create([
            'user_id' => 1,
            'name' => '前端开发工程师',
        ]);
        factory(Job::class)->create([
            'user_id' => 1,
            'name' => 'PHP开发工程师',
        ]);
    }
}
