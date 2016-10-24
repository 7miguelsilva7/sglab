@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Usuários</title>
    </head>
    <body>
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Usuários</div>

                <div class="panel-body">
            <h2><i class="fa glyphicon glyphicon-th-list"></i> Usuários</h2>

                        <?php
                        $usuario_logado = Auth::user()->name;
                        if ($usuario_logado == "Admin") { ?>

            <form class = 'col s3' method = 'get'                             
			<li><a href="{{ url('users/create') }}"><i class="fa glyphicon glyphicon-plus"></i> Novo</a></li>

            </form>
			</br>
                        <?php } ?>


		<table class = "table table-hover">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Roles</th>
			<th>Permissions</th>
			<th>Actions</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>
				@if(!empty($user->roles))
					@foreach($user->roles as $role)
					<small class = 'label bg-blue'>{{$role->name}}</small>
					@endforeach
				@else
					<small class = 'label bg-red'>No Roles</small>
				@endif
				</td>
				<td>
				@if(!empty($user->permissions))
					@foreach($user->permissions as $permission)
					<small class = 'label bg-orange'>{{$permission->name}}</small>
					@endforeach
				@else
					<small class = 'label bg-red'>No Permissions</small>
				@endif
				</td>
				<td>
					<a href="{{url('/users/edit')}}/{{$user->id}}" class = 'btn btn-primary btn-sm'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					<a href="{{url('users/delete')}}/{{$user->id}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
</section>
@endsection
