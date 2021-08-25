<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;



use Session;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class ProductController extends Controller
{
    //
    function index()
    {
        $data= Product::all();

       return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data =Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
        $data= Product::
        where('name', 'like', '%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $id = $req -> product_id;
            $quan = $req -> quantity;
            

            $product = Product::find($id);
            $price = $product->price;
            $total = $price * $quan;
            $user_id = $req->session()->get('user')['id'];

            Cart:: create([
                'product_id' => $id,
                'user_id' => $user_id,
                'quantity' => $quan,
                'gross_price' => $total

            ]);
            // return $total;'

           
        //    $cart= new Cart;
        //    $cart->user_id=$req->session()->get('user')['id'];
        //    $cart->product_id=$req->product_id;
        //    $cart->quantity=$req->quantity;
        
        //    //$cart->gross_price=$req->$gp;

        //    $cart->save();
           return redirect('/');

        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
     $userId=Session::get('user')['id'];// shashila ,session
     return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {
        $userId=Session::get('user')['id'];//shashila
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];//shashila
        $total= $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');
 
         return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];//shashila
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/');
    }
    function myOrders()
    {
        $userId=Session::get('user')['id'];// shashila
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('myorders',['orders'=>$orders]);
    }
    function add(Request $req)
    {
    
       $product=new Product();
            $image= $req->img;
            $imagename=time().'.'.$image->getClientOriginalExtension();
                //$req->image->move('product_image',$imagename);
                $image->move('product_image',$imagename);
       
        $product->gallery=$imagename;             
       
        $product->user_id=$req->session()->get('user')['id'];
        $product->name=$req->name;
        $product->price=$req->price; 
        $product->quantity=$req->quantity;
        $product->category=$req->select_cat;
        $product->description=$req->desc;
        $product->MFD=$req->MFD;
        $product->EXP=$req->EXP;
        $product->save();   
        return redirect('/');
                        
       
    }
    function my_product()
    {
        $userId=Session::get('user')['id'];
        //$allProduct= Product::where('user_id',$userId)->get();
        return Product::where('user_id',$userId)->count();

    }
    function removeProduct($id)
    {
        Product::destroy($id);
        return redirect('my_product');
    }


    
}
