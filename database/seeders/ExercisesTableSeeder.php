<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exercise;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'test1',
            'email' => 'test1@example.com',
            'profile' =>'test1data'
        ];
        $rest = new Exercise;
        $rest->fill($param)->save();
        $param = [
            'name' => 'test2',
            'email' => 'test2@example.com',
            'profile' =>'test2data'
        ];
        $rest = new Exercise;
        $rest->fill($param)->save();
        $param = [
            'name' => 'test3',
            'email' => 'test3@example.com',
            'profile' =>'test3data'
        ];
        $rest = new Exercise;
        $rest->fill($param)->save();
    }
}
