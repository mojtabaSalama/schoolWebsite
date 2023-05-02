@extends('layouts.layout')
@section('content')
<div class="container">
<form method="post" action="{{  route('signsubmit') }}" enctype="multipart/form-data">


  @csrf


  <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" id="firstname"  name ="firstname" class="form-control @error('firstname') is-invalid @enderror" />
          <label class="form-label" for="firstname">Child's first name</label>
          @error('firstname')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" id="lastname" name="lastname" class="form-control @error('lastname') is-invalid @enderror" />
          <label class="form-label" for="lastname">Child's Last name</label>

          @error('lastname')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
        </div>
      </div>
    </div>
  
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="text" id="address"  name="address" class="form-control @error('address') is-invalid @enderror" />
      <label class="form-label" for="address">Address</label>
    
      @error('address')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
    </div>
  
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email " id="email"  name="email" class="form-control @error('email') is-invalid @enderror" />
      <label class="form-label" for="email">Email</label>
    
      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
    </div>
  
    <!-- Number input -->
    <div class="form-outline mb-4">
      <input type="number" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" />
      <label class="form-label" for="phone">Phone</label>

      @error('phone')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
    </div>
  
    <!-- Message input -->
    <div class="form-outline mb-4">
      <textarea class="form-control " id="additional" name="additional" rows="4"></textarea>
      <label class="form-label" for="additional">Additional information</label>
    

    </div>
  
     <!-- file input -->
     <div class="form-outline mb-4">
      <input type="file" id="ID_card" name="ID_card"  class="form-control @error('ID_card') is-invalid @enderror" /> <br>
      <label class="form-label" for="ID">ID</label>
      
      
      @error('ID_card')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
    </div>


    
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Apply now </button>
  </form>
</div>
@endsection