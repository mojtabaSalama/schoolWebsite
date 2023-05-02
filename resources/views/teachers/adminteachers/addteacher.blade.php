@extends('teachers.adminteachers.mainteachers')
@section('all')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Add new teacher  :') }}</div>

                <div class="card-body">
                    <form 
                     method="POST" action="{{  route('add new teacher')}}" enctype="multipart/form-data"
                    >
                         @csrf
                    
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('First name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname"  required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="secondname" class="col-md-4 col-form-label text-md-end">{{ __('Second name') }}</label>

                            <div class="col-md-6">
                                <input id="secondname" type="text" class="form-control @error('secondname') is-invalid @enderror" name="secondname"  required autocomplete="secondname" autofocus>

                                @error('secondname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="subject" class="col-md-4 col-form-label text-md-end">{{ __('Subject') }}</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"  required autocomplete="subject" autofocus>

                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="pic" class="col-md-4 col-form-label text-md-end">{{ __('teacher picture') }}</label>

                            <div class="col-md-6">
                                <input id="pic" type="file" class="form-control @error('pic') is-invalid @enderror" name="profilepic"  autofocus>

                                @error('pic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection