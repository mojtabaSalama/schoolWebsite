@extends('layouts.adminlayout')
@section('content')

<div class="container">
<div class="row">

<div class="col-md-6 col-lg-3 bg-light">



      <div class="card " style="width:180px">
        <img class="card-img-top img-fluid" width="100%" src="/storage/home/1.jpg" alt="Card image">
        <div class="card-block">
        <div class="card-body">
          <h3 class="card-title ">Students</h3>
          <p class="card-text">applications : {{ $students->count() }}</p>
          <a href="/admin/student" class="btn btn-primary">See All</a>
        </div>
        </div>
      </div>
</div>


<div class="col-md-6 col-lg-3">



    <div class="card " style="width:180px">
      <img class="card-img-top img-fluid" width="100%" src="/storage/home/1.jpg" alt="Card image">
      <div class="card-block">
      <div class="card-body">
        <h3 class="card-title">Teachers</h3>
        <p class="card-text">staff : {{ $teachers->count() }}</p>
        <a href="admin/teacher" class="btn btn-primary">See All</a>
      </div>
      </div>
    </div>
</div>


<div class="col-md-6 col-lg-3">



    <div class="card " style="width:180px">
      <img class="card-img-top img-fluid" width="100%" src="/storage/home/1.jpg" alt="Card image">
      <div class="card-block">
      <div class="card-body">
        <h3 class="card-title">Admins </h3>
        <p class="card-text">Admins : {{ $admins->count() }} </p>
        <a href="admin/admins" class="btn btn-primary">See All</a>
      </div>
      </div>
    </div>
</div>



</div>
</div>

@endsection