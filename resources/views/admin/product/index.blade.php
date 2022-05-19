@extends('layout.admin')
@section('title', 'Danh sách sản phẩm')

@section('main')
<form class="form-inline" method="GET">
    <input class="form-control form-control-sidebar" type="search" placeholder="Tìm tên sản phẩm" name="search" value="{{$search_value}}">
    <div class="input-group-append">
        <select name="cat_id" id="input" class="form-control ml-2">
            <option value="">Tìm theo danh mục</option>
            @foreach($cats as $cat)
            <!-- <option value="{{$cat->$cat_id}}">{{$cat->name}}</option> -->
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
        </button>
    </div>
</form>



<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Giá khuyến mãi</th>
            <th>Danh mục</th>
            <th>Trang thái</th>
            <th>Ảnh</th>
            <th>Mô tả</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $model)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$model->name}}</td>
            <td>{{$model->price}}</td>
            <td>{{$model->sale_price}}</td>
            <td>{{$model->cat->name}}</td>
            <td>
                @if($model->status == 1)
                <label class="badge badge-success">Hiện</label>
                @else
                <label class="badge badge-danger">Ẩn</label>
                @endif
            </td>
            <td><img src="{{ url('uploads') }}/{{$model->image}}" alt="{{$model->image}}" width="60"></td>
            <td>{{$model->descriptions}}</td>
            <td><a href="{{route('product.edit',$model->id)}}" class="btn btn-sm btn-primary">Sửa</a></td>
            <td>
                <form action="{{route('product.destroy',$model->id)}}" method="POST">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Bạn có muốn xóa không')">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<!-- thêm các link trên URL vào các trang khác trên link -->
{{$data->appends(request()->all())->links()}}
@stop()