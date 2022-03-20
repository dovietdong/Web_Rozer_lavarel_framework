@extends('layout.admin')
@section('title', 'Thêm mới sản phẩm')

@section('main')

<form action="{{route('product.store')}}" method="post" role="form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <select name="category_id" id="input" class="form-control" required="required">
            <option value="">Chọn danh mục</option>
            @foreach ($cats as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
        <p>@error ('category_id') {{$message}} @enderror</p>
    </div>
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name" placeholder="Input field">
        <p>@error ('name') {{$message}} @enderror</p>
    </div>
    <div class="form-group">
        <label for="">Giá sản phẩm</label>
        <input type="text" class="form-control" name="price" placeholder="Input field">
        <p>@error ('price') {{$message}} @enderror</p>
    </div>
    <div class="form-group">
        <label for="">Giá khuyến mãi</label>
        <input type="text" class="form-control" name="sale_price" placeholder="Input field">
        <p>@error ('sale_price') {{$message}} @enderror</p>
    </div>
    <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file" class="form-control" name="upload" placeholder="Input field">
        <p>@error ('upload') {{$message}} @enderror</p>
    </div>
    <div class="form-group">
        <label for="">Mô tả sản phẩm</label>
        <input type="text" class="form-control" name="descriptions" placeholder="Input field">
        <p>@error ('description') {{$message}} @enderror</p>
    </div>
    <label for="">Trạng thái</label>
    <div class="radio">
        <label>
            <input type="radio" name="status" id="input" value="1" checked="checked">
            Hiển thị
            <input type="radio" name="status" id="input" value="0">
            Ẩn
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop()