@extends('layout')
@section('content')
<div class="alert alert-success" role="alert">
  Thank you for placing your order. <br>
  You will soon receive an email with your personalized Birthcard.<br>
  We list your order below:
</div>
<a href="{{route('home')}}"><button class="rounded-md">< Homepage</button></a>
<div class="container m-auto grid grid-cols-12 gap-8">
    <div class= "col-start-5 col-end-10 shadow-lg" id= "Order">
        <h1> Frontside of Card:</h1>
    <b> First Name:</b> <i>{{$order->frontFirstName}}</i> <br> 
    @if(isset ($order->frontMiddleName))
    <b> Middle Name:</b><i>{{$order->frontMiddleName}}</i> <br>
    @endif
    @if (isset($order->frontLastName))
    <b> Last Name:</b><i>{{$order->frontLastName}}</i> <br>
    @endif
    @if (isset($order->frontDateOfBirth))
    <b> Date of Birth:</b><i>{{$order->frontDateOfBirth}}</i> <br>
    @endif
    @if(isset($order->Initials))
    <b> Initials:</b><i>{{$order->frontInitials}}</i> <br>
    @endif
    <h1> Backside of Card:</h1>
    <b> First Name:</b><i>{{$order->backFirstName}}</i> <br>
    <b> Middle Name:</b><i>{{$order->backMiddleName}}</i> <br>
    <b> Last Name:</b><i>{{$order->backLastName}}</i> <br>
    <b> Date of Birth:</b><i>{{$order->backDateOfBirth}}</i> <br>
    <b> Weight:</b><i>{{$order->backWeight}}</i> <br>
    <b>Height:</b><i>{{$order->backHeight}}</i> <br>
    <b> Time of birth:</b><i>{{$order->backTimeOfBirth}}</i> <br>
    <div>
        <b> Parents</b>
        @if($order->backParents === '1')
            <i>{{ $order->backParents = 'Mom and dad' }}</i>
            @elseif ($order->backParents === '2')
            <i> {{ $order->backParents = 'Mom and mom' }}</i>
            @elseif ($order->backParents === '3')
            <i> {{ $order->backParents = 'Dad en dad' }}</i>
            @elseif ($order->backParents === '4')
            <i>{{$order->backOther  }}</i>
        @endif
        <b> Name of the Parents::</b><i>{{$order->backParentsName}}</i><br>
    </div>
    @if(isset($order->backAddress))
    <b> Address:</b><i>{{$order->backAddress}}</i><br>
    @endif
    <b> Additional wishes:</b><i>{{$order->backAdditionalWishes}}</i><br>
</div>
</div>
@endsection