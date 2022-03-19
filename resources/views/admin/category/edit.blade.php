@extends('layout.admin')
@section('title', 'Chỉnh sửa danh mục')

@section('main')
<form action="{{route('category.update', $category->id)}}" method="post" role="form">
    @csrf @method('PUT')
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" class="form-control" name="name" placeholder="Input field" value="
        {{$category->name}}">
    </div>

    <div class="radio">
        <label>
            <input type="radio" name="status" id="input" value="1" 
            {{$category ->status== 1 ? 'checked' : ''}}>
            Hiển thị
            <input type="radio" name="status" id="input" value="0"
             {{$category->status==0 ? 'checked' : ''}}>
            Ẩn
        </label>
    </div>
    <p>@error ('name') {{$message}} @enderror</p>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop()