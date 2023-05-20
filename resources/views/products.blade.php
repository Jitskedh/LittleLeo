@extends('layout')
@section('content')
<div class= 'pageHeader'>
    <img class="headerImg" src="{{asset("./images/bg.jpg")}}" alt="">
    <h1 class=titlePage>
        BirthCards
    </h1>
</div>

<div class="container grid sm: grid-cols-1 grid-cols-2 gap-4 md:grid-cols-3 gap-20 lg:grid-cols-4 gap-20">
        @foreach ($products as $product)
        <div class="card" style="width: 15rem;">
        <img class="card-img-top" src={{$product->image}} alt="Card image cap">
        <div class="card-body">
        <a href="/{{$product->slug}}"class="card-link" >{{$product->productName}}</a>
        </div>
        </div>
        @endforeach 
</div>
@endsection