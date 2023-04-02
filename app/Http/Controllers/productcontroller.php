<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use App\Models\cart;

use Illuminate\Support\Facades\DB;

class productcontroller extends Controller
{
    function index(){
       $data = product::all() ;

       
       if (session()->has('user')) {
           return view('product',['products'=>$data]);
       }else{
        return redirect('/login');
       }
       
    }

    function details($id){
        $data= product::find($id);
        return view('details', ['prodetail'=> $data] );
    }

    function search(Request $req){

        $data = product::where('name', 'like', '%'.$req->input('query').'%' )->get();

        return view('result',['result'=>$data] );

    }


    function addcart(Request $req){

        $data = $req->input();

        if ($req->session()->has('user')) {

            $cart = new cart;

            $cart->userid=session()->get('user')['id'];
            $cart->productid= $req->cart;

            $cart->save();

            return redirect('/pro');
        }else{
            return redirect('/login');
        }

    }


    function count(){

        $id = session('user')['id'];

        $count = DB::table('cart')->where('userid',$id)->count();

        return $count;

    }


}
