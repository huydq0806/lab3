@extends('layout')
@section('title', 'Danh sách')
@section('name', 'Danh sách sản phẩm')
@section('content')
<div class="container">
  <a href="{{route('book.create')}}" class="btn btn-success float-end mb-4">Thêm mới</a>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Thumbnail</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Publication</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Category name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $b)
            <tr>
                <td>{{$b->id}}</td>
                <td>{{$b->title}}</td>
                <td>
                    <img src="{{$b->thumbnail}}" height="80" width="80" alt="">
                </td>
                <td>{{$b->author}}</td>
                <td>{{$b->publisher}}</td>
                <td>{{$b->publication}}</td>
                <td>{{$b->price}}</td>
                <td>{{$b->quantity}}</td>
                <td>{{$b->name}}</td>
                <td class="btn-group-sm">
                    <a href="{{route('book.edit', $b->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{route('book.destroy', $b->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Bạn có chắc muốn xóa không?')" class="btn btn-danger btn-sm" >Delete</button>
                    </form>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>

      
</div>
@endsection