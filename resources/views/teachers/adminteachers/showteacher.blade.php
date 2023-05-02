@extends('teachers.adminteachers.mainteachers')
@section('all')
@if ($teacher!=null) 
<div class="container">

<div class="card justify-content-center  " style="width: 32rem;" >            
    <div class="card-body">
      <ul class="list-group ">
    <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
      <h4>name :</h4>
      <span>
        <h4>{{ $teacher->firstname}}  {{ $teacher->secondname }}</h4>
      </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
        <p>picture :</p>
        <img  src="/storage/home/teachers/{{ $teacher->pic }}">
        
      </li>
      
    <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
        <p>subject :</p>
        <p>{{ $teacher->subject }}</p>
      </li>

      <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
        <a href="/admin/teacher/{{ $teacher->id }}/edit"> Edit information </a>
        <span>
          <a href="/admin/teacher/delete/{{ $teacher->id }}"> delete teacher's information </a>
        </span>
      </li>
   
  </ul>


</div>
</div>
    </div>
    
@endif
@endsection