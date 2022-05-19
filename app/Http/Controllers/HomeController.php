<?php 
    namespace App\Http\Controllers;
    use App\Models\Category;
    use App\Models\Product;
 
    class HomeController extends Controller {
        public function index() {
            $category = Category::paginate(10);
            $product_sale = Product::sale();
            $product_new = Product::new(10);
            return view('site.index', compact('category','product_sale','product_new'));
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
        public function wishlist() {
            return view('site.wishlist');
        }
        public function single_product(Product $product) {
            $products_cat = $product->cat->products()->limit(12)->get();
           return view('site.single-product',compact('product','products_cat'));
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
        public function category(Category $category) {
            //dd($category);
            $products = $category->products()->paginate(12);
            return view('site.category', compact('products'));
        }
    }
?>