@extends('layout')
@section('title','Thêm mới sản phẩm')
@section('name', 'Thêm mới sản phẩm')
@section('content')
    <div class="container">
        <form action="{{route('book.store')}}" method="POST">
            @csrf
            <label for="" class="form-lable mt-2">Title</label>
            <input class="form-control" type="text" name="title" id="">
            <label for="" class="form-lable mt-2">Thumbnail</label>
            <input class="form-control" type="text" name="thumbnail" id="">
            <label for="" class="form-lable mt-2">Author</label>
            <input class="form-control" type="text" name="author" id="">
            <label for="" class="form-lable mt-2">Publisher</label>
            <input class="form-control" type="text" name="publisher" id="">
            <label for="" class="form-lable mt-2">Publication</label>
            <input class="form-control" type="date" name="publication" id="">
            <label for="" class="form-lable mt-2">Price</label>
            <input class="form-control" type="number" step="0.1" name="price" id="">
            <label for="" class="form-lable mt-2">Quantity</label>
            <input class="form-control" type="number" name="quantity" id="">
            <label for="" class="form-lable mt-2">Catrgory name</label>
            <select class="form-control" type="text" name="category_id" id="">
                @foreach ($categories as $cate)
                <option value="{{$cate->id}}">{{$cate->name}}</option>

                @endforeach    
            </select>

            <button type="submit" class="btn btn-success my-3">Thêm mới</button>
        </form>
    </div>
@endsection
