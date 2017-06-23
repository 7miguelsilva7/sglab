@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create ensinofundamental
    </h1>
    <form method = 'get' action = '{!!url("ensinofundamental")!!}'>
        <button class = 'btn btn-danger'>ensinofundamental Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("ensinofundamental")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="nome">nome</label>
            <input id="nome" name = "nome" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection