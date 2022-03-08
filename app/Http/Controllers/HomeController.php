<?php 
    namespace App\Http\Controllers;
    use App\Models\Category;
    class HomeController extends Controller {
        public function index() {
            $category = Category::all();
           $category = Category::paginate(10);
            //dd($category);
            return view('site.index', compact('category'));
        }
        public function shop() {
            return view('site.shop');
        }
        public function about() {
            return view('site.about');
        }
        public function blog() {
            return view('site.blog');
        }
        public function contact() {
            return view('site.contact');
        }
        public function cart() {
            return view('site.cart');
        }
        public function checkout() {
            return view('site.checkout');
        }
        public function login() {
            return view('site.login');
        }
        public function account() {
            return view('site.account');
        }
        public function wishlist() {
            return view('site.wishlist');
        }
        public function single_product() {
            return view('site.single-product');
        }
        public function thankyou() {
            return view('site.thankyou');
        }
        public function compare() {
            return view('site.compare');
        }
        public function admin() {
            return view('layout.admin');
        }
    }
?>
