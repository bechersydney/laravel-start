@extends('layouts.app')
@section('content')
   <div class="container">
      <div class="row">
         <div class="col-md-4 mt-5 ">
            {!! Form::open(['action' => ['RegistrationController@update',$user->id], 'method'=>'POST']) !!}
               <div class="form-group">
                  {!!Form::label('email', 'email')!!}
                  {!!Form::email('email', $user->email,['class'=>'form-control', 'placeholder'=>'Email'])!!}
               </div>
               <div class="form-group">
                  {!!Form::label('firstname', 'First Name')!!}
                  {!!Form::text('fname', $user->first_name,['class'=>'form-control', 'placeholder'=>'First Name'])!!}
               </div>
               <div class="form-group">
                  {!!Form::label('lastname', 'Last Name')!!}
                  {!!Form::text('lname', $user->last_name,['class'=>'form-control', 'placeholder'=>'Last Name'])!!}
               </div>
               <div class="form-group">
                  {!!Form::label('phonenumber', 'Phone Number')!!}
                  {!!Form::text('pnumber', $user->phone_number,['class'=>'form-control', 'placeholder'=>'Phone Number'])!!}
               </div>
               <div class="form-group">
                  {!!Form::hidden('_method','PUT')!!};
                  {!!Form::submit('Update',['class'=>'btn btn-primary'])!!}
               </div>

               
            {!! Form::close() !!}
         </div>
      </div>
   </div>
@endsection