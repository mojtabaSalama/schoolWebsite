@extends('layouts.adminlayout')
@section('content')
    
  <nav class="navbar navbar-expand-sm ">

    <div class="container">
      <!-- Links -->
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active btn btn-primary text-light" href="/admin/student">all students </a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary text-light" href="/admin/student/accepted"> accepted students </a>
        </li>
        
      </ul>
    </div>
  
  </nav>
    
</div>
<br>
<div class="container">

@yield('all')
   

    </div>
    </div>
</div>





@endsection