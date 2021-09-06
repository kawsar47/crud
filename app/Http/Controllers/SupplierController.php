<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $suppliers = Supplier::all();
        return view ('supplier.supplier_list',compact('suppliers'));
    }

    public function supplier_form(){
        return view('supplier.supplier_form');
    }

    public function store(Request $request){

        $id = $request->input('id');

        if ($id){
            $supplier = Supplier::find($id);
        }else{
            $request->validate([
                'email' => 'required|unique:suppliers',
                'phone' => 'required|unique:suppliers',
            ]);
            $supplier = new Supplier();
        }

        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->phone = $request->input('phone');
        $supplier->organization = $request->input('organization');
        $supplier->address = $request->input('address');
        $supplier->save();

        return redirect('suppliers')->with('success', 'Data Insert Successfully!');


    }

    public function edit($id){
        $supplier = Supplier::find($id);

        return view('supplier.supplier_form', compact('supplier'));
    }

    public function destroy($id){
        Supplier::find($id)->delete();
        return redirect('suppliers')->with('success', 'Data delete successfully!');
    }



}
