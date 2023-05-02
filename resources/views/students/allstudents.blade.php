@extends('admin.students')
@section('all')


@if ($students->count()==0  )
<p>There is no applications yet . </p>
@else

<div class="container">

<div class="card justify-content-center  " style="width: 32rem;" >            
    <div class="card-body">
        @foreach ($students as $student)
            
     
            
        

      <ul class="list-group list-group-flush">
    <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
      <a href="/admin/student/{{$student->id}} "><h4>{{ $student->name }}</h4></a>
      <span class="badge bg-success rounded-pill">
       <a href="/admin/student/accept/{{ $student->id }}">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
          </svg>
        </a>
      </span>
      <span class="badge bg-danger rounded-pill">
        <a href="/admin/student/delete/{{ $student->id }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
      </svg>
    </a>
      </span>
    </li>

    
    @endforeach
   
  </ul>


</div>
</div>
    </div>
    
    @endif
@endsection