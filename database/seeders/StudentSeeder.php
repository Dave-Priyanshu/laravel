<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        Student::factory(5)->create();
        // ! 1st Method to seed data
        $json = File::get(path:'database/json/students.json'); //load json file
        $students = collect(json_decode($json)); //converterd it into array

        $students->each(function($student){  //used laravel inbuilt loop
            student::create([ 
                'name'  => $student->name, 
                'email' => $student->email,
                'city'  => $student->city
            ]);
        });


        // !how to add fake data using seeder into DB
        // *by using the loop we can add multiple fake data using the seeder
        // for($i =0; $i<=10; $i++){
        //     student::create([   
        //         'name'  => fake()->name(),
        //         'email' => fake()->unique()->email(),
        //         'city'  => fake()->unique()->city()
        //     ]); 

        // }

        // ! 2nd Method to seed data
        // $students = collect(
        //     [
        //         [
        //         'name' => 'Kamlesh Tank',
        //         'email' => 'kammo123@gmail.com',
        //         'city' => 'Mumbai',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //         ],

        //         [
        //         'name' => 'Dave Priyanshu',
        //         'email' => 'pd123@gmail.com',
        //         'city' => 'Delhi',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //         ],

        //         [
        //         'name' => 'Yash Gohil',
        //         'email' => 'yash321@gmail.com',
        //         'city' => 'Bangalore',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //         ]

        //     ]
        // );

        // $students ->each(function($student){
        //     student::insert($student);
        // });
        
        // ! 3rd Method to seed data
        // DB::table('students')->insert([
        //     'name' => 'Yash Gohel',
        //     'email' => 'yash213@gmail.com',
        //     'city' => 'Bangalore',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
    }


}
