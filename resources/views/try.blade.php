<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'fullname' => 'required|max:100|unique:customers,fullname'
            ]
            );

        return redirect()->route('customers.index')->with('success',  'Da tao khach hang thanh cong');
    }

    public function create(){
        return view('customers.create');
    }

    public function index(){
        $customers = Customer::all();
        return view('customers.index',compact('customers'));
    }

    public function show($id){
        $customer = Customer::findOrFail($id);
        return view('customers.show',compact('customer'));
    }

    public function edit($id){
        $customer = Customer::findOrFail($id);
        return view('customers.edit',compact('customer'));
    }
}