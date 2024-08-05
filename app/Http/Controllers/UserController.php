<?php
// *dd($variable_name) in Laravel is a powerful debugging tool that stands for "Dump and Die".
/* Unlike dd(), which stops the script execution after dumping, dump()
   allows the script to continue running after displaying the variable's value.*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class UserController extends Controller
{
    //
    public function showUsers(){
        $users = DB::table('students')->get(); //!All Records
        // $users = DB::table('students')->where('id',2)->get(); //!single record
        // $users = DB::table('students')->find(4); //!single record but this returns in json

        return view('allusers',['data' => $users]);
        
        // foreach($users as $user){
        //     echo $user->name ."<br>";
        // }

        //! json format
        // return $users;
        // dd($users); //? *Dump and Die*
        // Dump($users); //?| 
        // echo "hello";
    }

    public function singleUser(string  $id){
        $user = DB::table('students')->where('id', $id)->get();
        return view('singleRecordUser',['data' => $user]);
    }

    public function addUser(){
        $user = DB::table('students')
                        ->insertGetId([
                            'name'  => 'Tony Kumar',
                            'age'   => 56,
                            'email' => 'TonyTony@gmail.com',
                            'city' => 'Tony City',
                        ]);
                    return $user;
        // if($user){
        //     echo "<h1> Data Added.</h1>";
        // }
        // else{
            
        //     echo "<h1>Error While Adding the Data.</h1>";
        // }
    }

    public function updateUser(){
        $updateUser = DB::table('students')
                        ->where('id',3)
                        ->update([
                            'city' => 'mumbai',
                            'age' => 55
                        ]);
        if($updateUser){
            echo "<h1> User Updated.</h1>";
        }
        else{
            
            echo "<h1>Error While Updateing the User.</h1>";
        }
    }

    public function deleteUser(string $id){
        $deleteUser = DB::table('students')
                            ->where('id', $id)
                            ->delete();
        if($deleteUser){
            return redirect()->route('home');
        }
    }
    
}
