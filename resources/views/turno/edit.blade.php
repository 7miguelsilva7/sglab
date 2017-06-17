@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit turno
    </h1>
    <form method = 'get' action = '{!!url("turno")!!}'>
        <button class = 'btn btn-danger'>turno Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("turno")!!}/{!!$turno->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nome">nome</label>
            <input id="nome" name = "nome" type="text" class="form-control" value="{!!$turno->
            nome!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection