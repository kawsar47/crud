<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user=DB::table('users')->get();
        return view('user_list',compact('user'));
    }



    public function user_form(){
        return view('user_form');
    }

    public function store(Request $request){
       $request->validate([
           'name' => 'required',
           'gender' => 'required'
       ]);

       $id = $request->input('id');

       if ($id){
           $user = User::find($id);
       }else{
           $user = new User();
       }

       $user->name = $request->input('name');
       $user->gender = $request->input('gender');
       $user->age = $request->input('age');
       $user->save();

       return redirect('users')->with('success', 'Data Insert Successfully!');

    }

    public function destroy($id)
    {

        DB::table('users')->where('id',$id)->delete();
        return Redirect()->back();
    }

    public function edit($id){


    }

    public function update_store(Request $request,$id){

    }


}
