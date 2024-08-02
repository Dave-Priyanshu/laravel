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
}
