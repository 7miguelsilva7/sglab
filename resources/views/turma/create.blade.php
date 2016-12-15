@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create turma
    </h1>
    <form method = 'get' action = '{!!url("turma")!!}'>
        <button class = 'btn btn-danger'>turma Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("turma")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="vinculo">vinculo</label>
            <input id="vinculo" name = "vinculo" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="turno">turno</label>
            <input id="turno" name = "turno" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nivel">nivel</label>
            <input id="nivel" name = "nivel" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="serie">serie</label>
            <input id="serie" name = "serie" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="turma">turma</label>
            <input id="turma" name = "turma" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="adicionado_por">adicionado_por</label>
            <input id="adicionado_por" name = "adicionado_por" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>siems Select</label>
            <select name = 'siem_id' class = 'form-control'>
                @foreach($siems as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection