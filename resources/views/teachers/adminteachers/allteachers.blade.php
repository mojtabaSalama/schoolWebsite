@extends('teachers.adminteachers.mainteachers')
@section('all')

@if ($teachers->count()==0)
<p>Ther is no teachers yet </p>
@else


<div class="container">

<div class="card justify-content-center  " style="width: 32rem;" >            
    <div class="card-body">
        @foreach ($teachers as $teacher)
            
        

      <ul class="list-group list-group-flush">
    <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
      <a href="/admin/teachers/{{$teacher->id}} "><h4>{{ $teacher->firstname}}  {{ $teacher->secondname }}</h4></a>
      <a href="/admin/teachers/{{$teacher->id}}" type="button" class="btn btn-primary">
        Show more
      </a>
      </span>
    </li>
    @endforeach
   
    <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
     
      <a href="/admin/teacher/add" type="button" class="btn btn-secondary">
        Add new teacher
      </a>
      </span>
    </li>
  </ul>


</div>
</div>
    </div>
    
    @endif
@endsection