@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit educacaoinfantil
    </h1>
    <form method = 'get' action = '{!!url("educacaoinfantil")!!}'>
        <button class = 'btn btn-danger'>educacaoinfantil Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("educacaoinfantil")!!}/{!!$educacaoinfantil->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nome">nome</label>
            <input id="nome" name = "nome" type="text" class="form-control" value="{!!$educacaoinfantil->
            nome!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection