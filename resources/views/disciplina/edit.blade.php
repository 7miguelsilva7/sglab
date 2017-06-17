@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit disciplina
    </h1>
    <form method = 'get' action = '{!!url("disciplina")!!}'>
        <button class = 'btn btn-danger'>disciplina Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("disciplina")!!}/{!!$disciplina->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nome">nome</label>
            <input id="nome" name = "nome" type="text" class="form-control" value="{!!$disciplina->
            nome!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection