
@extends('layouts.master')
@section('title')
  Welcome !
@endsection

@section('content')

  <div class="row" >
    <div class ="col-md-4 col-md-offset-4 "> 
      <ul>
         @foreach($errors->all() as $error)
        
         <li>{{$error}}</li>
         @endforeach
      </ul>
    </div>
  </div>

    <div class="row" style="background-color: #7a9ad3;">
        <div class="col-md-6" style="background:rgba(1,1,1,0.3);margin:10px;">
            <h3>Sign Up Here</h3><br/>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email"> E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                    <label for="first_name"> Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ Request::old('name') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password"> Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-danger btn-lg btn-block" style="margin-bottom:10px;">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">

            </form>
        </div>
    </div>


@endsection


