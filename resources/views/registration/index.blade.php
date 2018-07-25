@extends('layouts.app')
@section('content')
   <div class="container">
      <table class="table table-striped mt-5">
         @if(count($users)>0)
				@foreach($users as $user)
            	<tr>
						<td><a href="/user/{{$user->id}}">{{$user->email}}</a> </td>
						<td>{{$user->id}}</td>
						<td>{{$user->last_name}}</td>
						<td>{{$user->phone_number}}</td>
					</tr>
					@endforeach
         @endif
      </table>
   </div>
@endsection