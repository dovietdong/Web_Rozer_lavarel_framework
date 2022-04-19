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
        //return redirect()->route('cart')->with('ok','thêm sản phẩm vào giỏ hàng thành công');
        return redirect()->back();

    }

    public function remove(Product $product){
        //kiểm tra sản phẩm có trong giỏ hàng
        $carts = session('cart') ? session('cart'):[];
        //xóa sản phẩm dùng hàm unset
        unset( $carts[$product->id]); 
        //cập nhật lại giỏ hàng
        session(['cart' => $carts]);
        //return redirect()->route('cart')->with('ok','xóa thành công');
        return redirect()->back();
    }

    public function update(Product $product, Request $req){
        $carts = session('cart') ? session('cart'):[];
       //khai báo mảng lưu các request trên url kết quả là một mảng kết hợp có key là product_id, value là giá trị update nhận từ form gửi lên (xem lại form cart hoặc dd($req))
        $arr = $req->query($product->id);
        // mảng để lưu các giá trị của key trong mảng trên
        $array_key = array_keys($arr);
       
       foreach($carts as $cart){
           foreach($array_key as $ak){
               if($cart->id == $ak ){
                   $cart->quantity = (int)$arr[$ak];
               }
           }
       }
       //lưu các sản phẩm vừa thêm vào session
       session(['cart' => $carts]);
       //return redirect()->route('cart')->with('ok','thêm sản phẩm vào giỏ hàng thành công');
       return redirect()->back();
    }

    public function clear(){
        session(['cart' => null]);
        return redirect()->route('cart')->with('ok','xóa hết sản phẩm thành công');
    }
}
