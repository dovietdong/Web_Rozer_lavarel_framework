<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CartController extends Controller
{
    public function view(Product $product){
        //kiểm tra nếu có tồn tại sản phẩm trong giỏ hàng từ trước, thì lưu lại vào $carts
        if(session('cart')){
            $carts = session('cart') ? session('cart'):[];
            return view('site.cart',compact('carts'));
        }else
            return view('site.cart-blank');
    }


    public function add(Product $product){
        //kiểm tra nếu có tồn tại sản phẩm trong giỏ hàng từ trước, thì lưu lại vào $carts
        $carts = session('cart') ? session('cart'):[];
        //request sốb lượng từ trang single-product, mặc định là 1
        $quantity = request('quantity',1);
        if(isset($carts[$product->id])){
            $carts[$product->id]->quantity +=$quantity;
        }
        else{
            $item = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->sale_price ? $product->sale_price : $product->price,
                'image' => $product->image,
                'quantity' => $quantity
            ];
            $item = (object)$item;
            $carts[$product->id] =$item; 
        }
        
        //lưu các sản phẩm vừa thêm vào session
        session(['cart' => $carts]);
        return redirect()->route('cart')->with('ok','thêm sản phẩm vào giỏ hàng thành công');
    }

    public function remove(Product $product){
        //kiểm tra sản phẩm có trong giỏ hàng
        $carts = session('cart') ? session('cart'):[];
        //xóa sản phẩm dùng hàm unset
        unset( $carts[$product->id]); 
        //cập nhật lại giỏ hàng
        session(['cart' => $carts]);
        return redirect()->route('cart')->with('ok','xóa thành công');
    }

    public function update(Product $product, Request $req){
        $carts = session('cart') ? session('cart'):[];
        $arr = array();
        $arr = $req->query($product->id);
       dd($product);   
    }

    public function clear(){
        session(['cart' => null]);
        return redirect()->route('cart')->with('ok','xóa hết sản phẩm thành công');
    }
}
