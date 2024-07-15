@extends('layout')
@section('title','Chỉnh sửa')
@section('name', 'Chỉnh sửa sản phẩm')
@section('content')
    <div class="container">
        <form action="{{route('book.update', $book->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="" value="{{$book->id}}">
            <label for="" class="form-lable mt-2">Title</label>
            <input class="form-control" type="text" name="title" value="{{$book->title}}" id="">
            <label for="" class="form-lable mt-2">Thumbnail</label>
            <input class="form-control" type="text" name="thumbnail" id=""  value="{{$book->thumbnail}}">
            <label for="" class="form-lable mt-2">Author</label>
            <input class="form-control" type="text" name="author" id=""  value="{{$book->author}}">
            <label for="" class="form-lable mt-2">Publisher</label>
            <input class="form-control" type="text" name="publisher" id=""  value="{{$book->publisher}}">
            <label for="" class="form-lable mt-2">Publication</label>
            <input class="form-control" type="date" name="publication" id=""  value="{{$book->publication}}">
            <label for="" class="form-lable mt-2">Price</label>
            <input class="form-control" type="number" step="0.1" name="price" id=""  value="{{$book->price}}">
            <label for="" class="form-lable mt-2">Quantity</label>
            <input class="form-control" type="number" name="quantity" id=""  value="{{$book->quantity}}">
            <label for="" class="form-lable mt-2">Catrgory name</label>
            <select class="form-control" type="text" name="category_id" id=""  value="{{$book->category_id}}">
                @foreach ($categories as $cate)
                <option value="{{$cate->id}}"  @if ($cate->id === $book->category_id)
                        selected
                    @endif>
                   
                    {{$cate->name}}
                </option>

                @endforeach    
            </select>

            <button type="submit" class="btn btn-success my-3">Update</button>
        </form>
    </div>
@endsection
