@extends('layouts.app')
@section('content')
   <div class="container">
      <ul class="list-group">
         <li class="list-item">{{$users->email}}</li>
         <li class="list-item">{{$users->first_name}}</li>
         <li class="list-item">{{$users->last_name}}</li>
         <li class="list-item">{{$users->phone_number}}</li>
      </ul>
         <a href="/user/{{$users->id}}/edit" class="btn btn-warning">Edit</a>

         {!!Form::open(['action'=>['RegistrationController@destroy',$users->id, 'method'=>'POST']])!!}
            {!!Form::submit('Delete',['class'=>'btn btn-danger ml-auto'])!!}
            {!!Form::hidden('_method', 'DELETE')!!}
         {!!Form::close()!!}
   </div>
@endsection