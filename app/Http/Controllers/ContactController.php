<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
     public function index(){
         $contact = Contact::with('user')->get();

         return view('contact.contact_list',compact('contact'));

     }

     public function contact_form(){
         $user= User::all();
         return view('contact.contact_form',compact('user'));
     }

     public function store(Request $request){
//         return $request->all();


         $id = $request->input('id');

         if ($id){
             $contact = Contact::find($id);
         }else{
             $request->validate([

                 'email' => 'required|unique:contacts',
                 'phone' => 'required|unique:contacts',
                 'user_id' => 'required',

             ]);
             $contact = new Contact();
         }


         $contact->email = $request->input('email');
         $contact->phone = $request->input('phone');
         $contact->address = $request->input('address');
         $contact->user_id = $request->input('user_id');
         $contact->save();

         return redirect('contact')->with('success', 'Data Insert Successfully!');

     }

     public function destroy($id){

         Contact::Where('id',$id)->delete();
         return redirect('contact')->with('success', 'Data Delete Successfully!');
     }

     public function edit($id){
         $user= User::all();
//         $user = User::find($id);
        $contact = Contact::find($id);
        return view ('contact.contact_edit',compact('contact','user'));
     }



}
