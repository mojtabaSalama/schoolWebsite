@extends('teachers.adminteachers.mainteachers')
@section('all')

@if ($admins->count()==0)
<p>Ther is no admin yet </p>
@else


<div class="container">

<div class="card justify-content-center  " style="width: 32rem;" >            
    <div class="card-body">
        @foreach ($admins as $admin)
            
        

      <ul class="list-group list-group-flush">
    <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
      <a href="/admin/admins/{{$admin->id}} "><h4>{{ $admin->name}}</h4></a>
      <span >
        <a href="/admin/admins/{{$admin->id}}" class="btn btn-primary">see details </a>
      </span>
    </li>
    
    @endforeach
   
  </ul>


</div>
</div>
    </div>
    
    @endif
@endsection