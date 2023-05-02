@extends('teachers.adminteachers.mainteachers')
@section('all')
    <div class="container">

<div class="card justify-content-center  " style="width: 32rem;" >            
    <div class="card-body">
      <ul class="list-group ">
    <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
      <h4>name :</h4>
      <span>
        <h4>{{ $admin->name}} </h4>
      </span>
    </li>
     
  
  
    <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
     
      <h4><a href="/admin/admins/{{$admin->id}}/edit"> edit profile</a></h4>

@if ($admin->id==auth()->user()->id)   
      <h4><a href="{{ route('register') }}"> Add new admin </a></h4>
      @endif


    </li>
  
        
    
    
@if ($admin->id==auth()->user()->id)
    

    <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
      <a class="btn btn-danger" href="{{ route('logout') }}" 
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
       {{ __('Logout') }}
   </a>

   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
       @csrf
   </form>
      </li>
      @endif   
  </ul>


</div>
</div>
    </div>
    

@endsection