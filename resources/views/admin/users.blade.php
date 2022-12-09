@extends('layouts.admin_dashboard')

@section('content')

<div class="container mt-2">
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Laravel 9 CRUD Example Tutorial</h2>
			</div>
		</div>
	</div>
	
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Lastname</th>
				<th>Firstname</th>
				<th>Username</th>
				<th width="280px">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->lastname }}</td>
					<td>{{ $user->firstname }}</td>
					<td>{{ $user->username }}</td>
					<td>
						<form action="{{ route('users.destroy',$user->id) }}" method="Post">
							<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@endsection('content')

