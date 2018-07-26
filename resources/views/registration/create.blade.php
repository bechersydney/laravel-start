@extends('layouts.app')
@section('content')
   <div class="container">
      <div class="row">
         <div class="col-md-4 mt-5 ">
            {!! Form::open(['action' => 'RegistrationController@store', 'method'=>'POST']) !!}
               <div class="form-group">
                  {!!Form::label('email', 'email')!!}
                  {!!Form::email('email', '',['class'=>'form-control', 'placeholder'=>'Email'])!!}
               </div>
               <div class="form-group">
                  {!!Form::label('firstname', 'First Name')!!}
                  {!!Form::text('fname', '',['class'=>'form-control', 'placeholder'=>'First Name'])!!}
               </div>
               <div class="form-group">
                  {!!Form::label('lastname', 'Last Name')!!}
                  {!!Form::text('lname', '',['class'=>'form-control', 'placeholder'=>'Last Name'])!!}
               </div>
               <div class="form-group">
                  {!!Form::label('phonenumber', 'Phone Number')!!}
                  {!!Form::text('pnumber', '',['class'=>'form-control', 'placeholder'=>'Phone Number'])!!}
               </div>
               <div class="form-group">
                  {!!Form::submit('Submit',['class'=>'btn btn-primary'])!!}
               </div>

               
            {!! Form::close() !!}
            
         </div>
      </div>
   </div>
@endsection