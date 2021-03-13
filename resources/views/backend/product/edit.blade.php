@extends('layouts.backend')
@section('dashboard')

    <form style="width: 50%; margin: 50px auto" action="{{route('product.edit',$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <h3 align="center">Edit Product</h3>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Product Name</label>
            <input class="form-control @error('name') is-invalid @enderror"type="name" name="product_name" id="exampleFormControlInput1" required value="{{$product->name}}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Price </label>
            <input class="form-control @error('price') is-invalid @enderror" type="number" name="price" id="exampleFormControlSelect1" required value="{{$product->price}}">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br><br>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Description</label>
            <textarea multiple class="form-control @error('description') is-invalid @enderror"  type="text" name="description" id="exampleFormControlSelect2" required >
                {{$product->description}}
            </textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br><br>

        <div class="form-group">
            <label for="exampleFormControlFile1">Upload photo</label>
            <input type="file" class="form-control-file @error('photo') is-invalid @enderror" name="photo" id="exampleFormControlFile1">
            <img src="{{asset('uploads/'.$product->photo)}}" alt="" width="150px;">
            @error('photo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br><br><br>

        <div style="float: right">
            <input class="form-control btn-success" type="submit" value="Upload" >
        </div>

    </form>


@stop()
