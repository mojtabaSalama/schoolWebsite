@extends('admin.students')
@section('all')


@if ($students->count()==0  )
<p>There is no accepted students yet . </p>
@else

<div class="container">

<div class="card justify-content-center  " style="width: 32rem;" >            
    <div class="card-body">
        @foreach ($students as $student)
            
       
            
        

      <ul class="list-group list-group-flush">
    <li class="list-group-item d-flex justify-content-between align-items-center text-dark">
      <a href="/admin/student/{{$student->id}} "><h4>{{ $student->name }}</h4></a>
      
    </li>

    
    @endforeach
   
  </ul>


</div>
</div>
    </div>
    
    @endif
@endsection