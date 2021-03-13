@extends('layouts.backend')
@section('dashboard')

    <div>
        <h3 align="center">Create Product</h3>
    </div>
    <!--error show-->
{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}
    <!--error show-->
    <form style="width: 50%; margin: 50px auto" action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Product Name</label>
            <input class="form-control @error('name') is-invalid @enderror"type="text" name="name" id="exampleFormControlInput1" value="{{old('name')}}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div><br><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Price </label>
            <input class="form-control @error('price')is-invalid @enderror" type="number" name="price" id="exampleFormControlSelect1" value="{{old('price')}}">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br><br>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Description</label>
            <textarea multiple class="form-control @error('description')is-invalid @enderror"  type="text" name="description" id="exampleFormControlSelect2" >
                {{old('description')}}
            </textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br><br>

        <div class="form-group">
            <label for="exampleFormControlFile1">Upload photo</label>
            <input type="file" class="form-control-file @error('photo')is-invalid @enderror" name="photo" id="exampleFormControlFile1" >
            @error('photo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div><br><br>

        <div style="float: right">
            <input class="form-control btn-success" type="submit" value="Upload">
        </div>

    </form>


@stop()
