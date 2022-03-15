@extends('layout.admin')
@section('title', 'Thêm mới danh mục')

@section('category')

<form action="{{route('category.store')}}" method="post" role="form">
    @csrf
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" class="form-control" name="name"  placeholder="Input field">
    </div>
    
    <div class="radio">
        <label>
            <input type="radio" name="status" id="input" value="1" checked="checked">
            Hiển thị
            <input type="radio" name="status" id="input" value="0" >
            Ẩn
        </label>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop()