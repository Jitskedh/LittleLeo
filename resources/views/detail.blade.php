@extends('layout')
@section('content')
<a href="{{route('products')}}"><button class="rounded-md">< Go back</button></a>
<form action="{{route('orderSent', $product->slug)}}"method="post">
    @csrf
<div class="container m-auto grid grid-cols-12 gap-8">
    <div class='row-start- row-end- col-start-1 col-end-7'>
        <img src={{$product->image}} alt="">
    </div>
    <div class='row-start- row-end- col-start-7 col-end-13'>
       @include('formFront')
    </div>
    <div class='row-start- row-end- col-start-1 col-end-7'>
        <img src={{$product->image2}} alt="">
    </div>
    <div class='row-start- row-end- col-start-7 col-end-13'>
        @include('formBack')
        <button class="rounded-md row-start- row-end- col-start-8 col-end-13" type="submit" method="post">Save my info</button>
        </form>
    </div>
</div>
@endsection