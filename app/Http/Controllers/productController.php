<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Auth;

class productController extends Controller
{
    public function slipList(){
      $slips=Product::where('clase','=',0)->get();

      return view('slip',compact('slips'));
    }
    public function boxerList(){
      $boxers=Product::where('clase','=',1)->get();
      return view('boxer',compact('boxers'));
    }
    public function miniBoxerList(){
      $miniBoxers=Product::where('clase','=',2)->get();
      return view('miniboxer',compact('miniBoxers'));
    }
    public function list(){
      $products=Product::all();
      return view('products',compact('products'));
    }
    public function listById($id){

      $product = Product::find($id);

    	return view("product", compact("product"));
    }

    public function addToCart($id){
      $cart= new Cart();

      $product=Product::find($id);

      $cart->add($product);

      return redirect('/products');
    }

    public function checkout(){
      $cart= new Cart();

      if(!$cart->list()){
        return redirect('/products');
      }
      return view('checkout');
    }
    public function finishCheckout() {
      $cart = new Cart();

      $products = $cart->list();

      foreach ($products as $product) {
          $product->stock = $product->stock - 1;
          $product->save();

          $product->customers()->attach(Auth::id());
      }

      $cart->clear();

      return view("pago");
  }

  public function search(Request $req) {
      $search = $req["search"];

      $products = Product::where("name", "like", "%$search%")->get();

      return view("search", compact("products"));
  }
  public function index(){
    $products= Product::all();

    return view('agregarProducto', compact($products));
  }
  public function addProduct(Request $request){

        $this->validate($request,[
           'name'=>'required',
           'stock'=>'required',
           'price'=>'required'|'integer',
           'image'=>'image|mimes:png,jpg,jpeg|max:10000',
        ]);
    $product = new Product();

    $product->name= $request->input('name');
    $product->price =$request->input('precio');
    $product->stock = $request->input('stock');
    $product->image=$request->input('image');
    $product->clase=$request->input('clase');

    $product->save();
    return redirect('agregarProducto');


  }

}
