@extends('layout.admin')
@section('title', 'Danh sách danh mục')

@section('category')

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
            <td>{{$model->status}}</td>
            <form action="{{route('category.destroy',$model->id)}}" method="post">
                @csrf @method('DELETE')
                <th>
                    <button class="btn btnsm btn-primary" onclick="return confirm('Bạn có muốn xóa ko?')">Xóa</button>
                </th>
                <th><a href="" class="btn btnsm btn-danger">Sửa</a></th>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
{{$data->links()}}

@stop();