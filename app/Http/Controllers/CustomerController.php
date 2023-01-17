<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        $customer = Customer::get();
        $url = url('create');
        $title = "Customer Registration";
        $data = compact('url','title');                                             
        return view('customer')->with($data); 
    }

    public function store(Request $request)
    {
        
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->address = $request['address'];
        $customer->city = $request['city'];
        $customer->country = $request['country']; 
        $customer->password = md5 ($request['password']);
        $customer->save();

        return redirect('view');
   }

   public function view()
   {    
        $customers = Customer::all();
        $data = compact('customers');
        return view('view')->with($data);
   }


   public function destroy($customer_id)
   {
        $customer = Customer::where('customer_id',$customer_id)->delete();
        return redirect()->back();

   }

   public function edit($customer_id)
   {
        $customer = Customer::where('customer_id',$customer_id)->first(); 
        if(is_null($customer)){
            return redirect('view'); 
        }else{
            $title = "Update Customer Details";
          $url = url('update')."/".$customer_id;
            $data = compact('customer','url','title'); 
            return view('customer')->with($data);
        }
   }

   public function update($customer_id, Request $request)
   {
        $customer = Customer::where($customer_id)->first();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->address = $request['address'];
        $customer->city = $request['city'];
        $customer->country = $request['country'];
        $customer->save();
        return redirect('view');
   }


}
