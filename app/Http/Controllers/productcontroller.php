<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use App\Models\cart;
use App\Models\order;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

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


    static function count(){

        if (session()->has('user')){

            $id = session('user')['id'];
    
            $count = DB::table('cart')->where('userid',$id)->count();
    
            return $count;
        }else{

            $count=0;

            return $count;
        }
        


    }

    function cartlist(){
       
        $id = Session::get('user')['id'];

        $data = DB::table('cart')->join('products','cart.productid','products.id')->select('products.*','cart.id as cart_id')->where('cart.userid',$id)->get();
       
        return view('cartlist',['list'=>$data]);


    }

    function removeitem($id){

        cart::destroy($id);

        return redirect('cartlist');
    }


    function odernow(){

        $id = Session::get('user')['id'];

        $data = DB::table('cart')->join('products','cart.productid','products.id')->select('products.*')->where('cart.userid',$id)->sum('price');
       
        return view('oderpage',['amt'=>$data]);


    }

    function orderplaced(Request $req){

        $id = Session::get('user')['id'];

        $cart = cart::where('userid',$id)->get();

        $date = date('Y-m-d H:i:s');


        foreach ($cart as $key) {

            $oder = new order;

            $oder->product_id=$key['productid'];
            $oder->user_id=$id;
            $oder->address=$req->address;
            $oder->status='Pending';
            $oder->payment_method=$req->method;
            $oder->payment_status='Pending';
            $oder->save();
        }

        cart::where('userid',$id)->delete();

        return redirect('/pro');
    }


    function orderlist(){

        $id = Session::get('user')['id'];

        $data = DB::table('order')->join('products', 'order.product_id', 'products.id')->where('order.user_id',$id)->get();


        return view('oderlist',['list'=>$data]) ;

    }



}
