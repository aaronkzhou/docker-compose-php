@extends('layouts.app')

@section('content1')
    @foreach($product as $product)
        {{$product->productid}}
        {{$product->productname}}
        <br>
    @endforeach
@endsection