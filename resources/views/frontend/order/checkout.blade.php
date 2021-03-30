@extends('layouts.frontend')

@section('home')

    <table class="table" style="width: 70%; margin: auto;">
        <thead>
        <tr>
            <th scope="col">Product name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total price</th>
        </tr>
        </thead>
        @php
        $totalPrice = 0;
        $totalQty = 0;

        @endphp
        <tbody>
        @foreach($cart as $carts)

        <tr>
            <td>{{$carts['title']}}</td>
            <td>{{$carts['price']}}</td>
            <td>{{$carts['quantity']}}</td>
            <td>{{$carts['price']*$carts['quantity']}}</td>
        </tr>
            @php
                $totalPrice += $carts['quantity']*$carts['price'];
                $totalQty += $carts['quantity'];
            @endphp
        @endforeach

        <tr>
            <th scope="col"></th>
            <th scope="col"><b>Total</b></th>

            <th scope="col">{{$totalQty}}</th>
            <th scope="col">{{$totalPrice}}</th>
        </tr>
        </tbody>
    </table>
    <div style="width: 70%; margin: 50px auto;">
        @if($totalQty>0)
            <a href="{{route('placeOrder')}}" class="btn btn-success btn-block">Place order</a>
        @else
            <a href="{{route('')}}" class="btn btn-danger btn-block">Please Add to cart products</a>
        @endif
    </div>




@stop
