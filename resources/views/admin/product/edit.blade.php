@extends('layout.admin')
@section('title', 'Chỉnh sửa sản phẩm')

@section('main')
<form action="{{route('product.update', $product->id)}}" method="post" role="form" enctype="multipart/form-data" class="mt-4">
    @csrf @method('PUT')
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <select name="category_id" id="input" class="form-control">
            <option value="{{$product->cat->id}}">{{$product->cat->name}}</option>
            @foreach ($cats as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
        <p>@error ('category_id') {{$message}} @enderror</p>
    </div>

    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name" placeholder="Input field" value="
        {{$product->name}}">
    </div>
    <p>@error ('name') {{$message}} @enderror</p>

    <div class="form-group">
        <label for="">Giá sản phẩm</label>
        <input type="text" class="form-control" name="price" placeholder="Input field" value="
        {{$product->price}}">
    </div>
    <p>@error ('price') {{$message}} @enderror</p>

    <div class="form-group">
        <label for="">Giá khuyến mãi</label>
        <input type="text" class="form-control" name="sale_price" placeholder="Input field" value="
        {{$product->sale_price}}">
    </div>
    <p>@error ('sale_price') {{$message}} @enderror</p>

    <div class="form-group">
        <label for="">Mô tả sản phẩm</label>
        <input type="text" class="form-control" name="descriptions" placeholder="Input field" value="
        {{$product->descriptions}}">
    </div>
    <p>@error ('descriptions') {{$message}} @enderror</p>

    <div class="form-group">
        <label for="">Ảnh</label>
        <img src="{{ url('uploads') }}/{{$product->image}}" alt="{{$product->image}}" name="image">
        <input type="file" class="form-control" name="upload" placeholder="">
        <p>@error ('upload') {{$message}} @enderror</p>
    </div>

    <div class="radio">
        <label>
            <input type="radio" name="status" id="input" value="1" {{$product->status== 1 ? 'checked' : ''}}>
            Hiển thị
            <input type="radio" name="status" id="input" value="0" {{$product->status==0 ? 'checked' : ''}}>
            Ẩn
        </label>
    </div>
    <p>@error ('name') {{$message}} @enderror</p>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop()