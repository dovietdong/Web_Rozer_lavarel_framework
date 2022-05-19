<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use App\Http\Requests\ProductCreateRequest;
//lớp để chỉnh sửa tên file
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$count = Category::where('category_id')->count();
        $cats = Category::orderBy('name','ASC')->get();
        $data = Product::search()->paginate(20);
        return view('admin.product.index',compact('data','cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //lấy các tên danh mục hiển thị lên view
        $cats = Category::orderBy('name','ASC')->get();
        return view('admin.product.create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $req)
    {
        $data = $req->all('name','price','sale_price','descriptions','category_id','status');
        //lấy tên file từ upload
        $check_file_name = $req->upload->getClientOriginalName();
        //định dạng tên file
        //lấy các thành phần của tên file
        $path_file_name = pathinfo($check_file_name);
        $ext = $path_file_name['extension'];
        $name = $path_file_name['filename'];
        $file_name = Str::slug($name);
        $final_name = $file_name.'-'.time().'.'.$ext;
        //lưu ảnh lên server, lưu đường dẫn file
        $check_upload = $req->upload->move(public_path('uploads'),$final_name);
        //thêm trường image vào $data
        $data['image'] = $final_name;
        //lưu tên ảnh vào database
        if(Product::create($data)){
            //return redirect()->route('product.index')->with('yes','Thêm mới sản phẩm thành công');
            return redirect()->back()->with('yes','them moi sản phẩm thành công');
        }
        return redirect()->back()->with('no','Có lỗi xảy ra');
        //dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //dd($product);
        $cats = Category::orderBy('name','ASC')->get();
        return view('admin.product.edit',compact('product','cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(ProductEditRequest $req, Product $product)
    {
        $data = $req->all('category_id','name','price','sale_price','descriptions','status');
        if($req->has('upload')){
            //lấy tên file từ upload
            $check_name = $req->upload->getClientOriginalName();
            //định dạng tên file
            //lấy các thành phần của tên file
            $path_file_name = pathinfo($check_name);
            $ext = $path_file_name['extension'];
            $name = $path_file_name['filename'];
            $file_name = Str::slug($name);
            $final_name = $file_name.'-'.time().'.'.$ext;
            //lưu ảnh lên server, lưu đường dẫn file
            $check_upload = $req->upload->move(public_path('uploads'),$final_name);
            //thêm trường image vào $data
            $data['image'] = $final_name;
            //lưu tên ảnh vào database
        }
        if($product->update($data)){
            return redirect()->route('product.index')->with('yes','Cập nhật sản phẩm thành công');
        }
        return redirect()->back()->with('no','Có lỗi xảy ra');
        //dd($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('yes','Xóa sản phẩm thành công');
    }
}