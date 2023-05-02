@extends('layouts.layout')
@section('content')

<div class="container">

    <ul class="list-group ">
<h3 class="pr-5">{{ $content->cardmain }}</h3>
    
    <li class="list-group-item">{{ $content->card1 }}  </li>
    <li class="list-group-item">{{ $content->card2 }} </li>
    <li class="list-group-item">{{ $content->card3 }}</li>
    </ul>

</div>


@endsection