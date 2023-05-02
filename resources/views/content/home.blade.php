@extends('layouts.layout')
@section('content')

<header>
    <div class="flexbox-container">
    <div class="flexbox_item flexbox_item_left">
    <h1 class=" body_container_left first-line"> Let your son study well!! </h1>
    <h3 class="body_container_left second-line">Sign him in the best school in sudan </h3>
    
    <div class="row mb-0">
        <div class=" offset-md-4">
            <a class="btn btn-secondary" href="{{ route('sign') }}" role="button">sign him </a>
        </div>
    </div>

  
    
    
    </div>
    <div class="flexbox_item flexbox_item_right">
    <img class=" rounded" src="/storage/home/{{ $content->mainpic }}"
    alt="Logos ro take you to multiple pages">
    </div>
    </div>
    </div>
    <br>
    <hr>
  
    <div class="middle-container">
    <div class="middle_item middle_item_left">
    <img class="middle_item_1  pr-5    " 
    src="/storage/home/2.jpg" alt="">
    </div>
    <div class="middle_item middle_item_right bg-info">
    <h3 class="header_right">Kebida international school</h3>
    <p class="para_right">Kebida international school was found on 2010 to be the best school in sudan for your children .
    <ul class="list_right">
    <li>The best school enviroment for children  </li>
    <li>excellent teachers with great exprience </li>
    <li>good play grounds for your children to have a good time with their mates</li>
    </ul>
    <a style="cursor: pointer;" href="{{ route('about') }}">
    <button class="button_right">Learn More &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></button>
    </a>
    </div>
    </div>
    @include('teachers.teachers')
    </header>
    
@endsection