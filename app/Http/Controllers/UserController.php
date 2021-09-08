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
//       $user->profile_image = $request->input('profile_image');
        $user->profile_image = $request->input('profile_image');

        $image=$request->image;
        if ($image) {
            $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
            Image::make($image)->resize(500,310)->save('public/postimages/'.$image_one);    //   public/postimages/123123.jpg
            $data['image']='public/postimages/'.$image_one;   //   public/postimages/123123.jpg
            DB::table('posts') ->insert($data);
            $notification=array(
                'messege'=>'Successfully Post Inserted ',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            return Redirect()->back();
        }

       $user->save();

       return redirect('user')->with('success', 'Data Insert Successfully!');

    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect('users')->with('success', 'Data Delete Successfully!');
    }

    public function edit($id){
      $user = User::find($id);
      return view('user_edit',compact('user'));

    }




}
