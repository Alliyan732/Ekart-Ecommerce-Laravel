<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request){
        // write inside input the data we have passed 'product_id' in Jquerty script ajax function
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');


        $prod_check = Product::where('id', $product_id)->first();
            if($prod_check){
                if(Cart::where('product_id', $product_id)->first()){
                    return response()->json(['status' => $prod_check->name.", Already added to cart!"]);
                }
                else{
                    $cartItem = new Cart();
                    $cartItem->product_id = $product_id;
                    $cartItem->product_qty = $product_qty;
                    $cartItem->save();
                    return response()->json(['status' => $prod_check->name.", Added to cart Successfully!"]);
                }
            }
    }

    public function cart(Request $request){
        $cartItems['cartItems'] = Cart::all();
        return view('Ekart.cartnew', $cartItems);
    }

    public function destroy($id){
   
        $cartItem = Cart::find($id)->delete($id);
        $cartItem->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    //checkout view
    public function checkout(){
        return view ('Ekart.checkout');
    }
    

}
  