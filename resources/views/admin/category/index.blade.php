@extends('layout.admin')
@section('title', 'Danh sách danh mục')

@section('category')
<div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" name="Search" >
        <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
    </div>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Ngày tạo</th>
            <th>Trang thái</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $model)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$model->name}}</td>
            <td>{{$model->created_at}}</td>
            <td>
                @if( $model->status == 1)
                <label class="badge badge-success">Hiện</label>
                @else
                <label class="badge badge-danger">Ẩn</label>
                @endif
            </td>
            <form action="{{route('category.destroy',$model->id)}}" method="post">
                @csrf @method('DELETE')
                <th>
                    <button class="btn btnsm btn-danger" onclick="return confirm('Bạn có muốn xóa ko?')">Xóa</button>
                </th>
                <th><a href="{{route('category.edit', $model->id)}}" class="btn btnsm btn-primary">Sửa</a></th>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
{{$data->links()}}

@stop()