<div class="para_container">
    <h3 class="mr-5 paragraph_title_2">Our teachers </h3>
    <div class="container">  
        @foreach ($teachers as $teacher)  
        <div class="row ml-5">
          <div class="col-sm-4">
            <div class="panel ">
              
              <div class="panel-body"><img src="/storage/home/teachers/{{ $teacher->pic }}" class="img-responsive" style="width:100%" alt="Image"></div>
              <div class="panel-footer ml-5">{{ $teacher->subject }}</div>
            </div>
          </div>
        </div>
        @endforeach    
    </div>
