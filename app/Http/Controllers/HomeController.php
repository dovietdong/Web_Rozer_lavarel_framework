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

        public function post() {
            return view('demo.post_method_demo');
        }
    }
?>
