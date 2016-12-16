
<?php

#chama o arquivo de configuração com o banco
require_once '/home/aetji649/sglab/connect.php';
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Turma</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("turma")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
  
    <form method = 'POST' action = '{!!url("turma")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
       
        <div class="form-group">
            <!--<label for="adicionado_por">adicionado_por</label>-->
            <input type = 'hidden' id="adicionado_por" name = "adicionado_por" value="{{Auth::user()->name}}" type="text" class="form-control">
        </div>

        <!--block de vínculo-->

@if (Auth::user()->name == "Admin")
        <div class="form-group">
            <label>Vincular a:</label>
            <select name = 'vinculo' class = 'form-control' id ="select1">
                @foreach($siems as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        

        <div class="form-group">
            <label>Escola</label>
            <select name = 'siem_id' class = 'form-control' id = "select2">
                @foreach($siems as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
   

@else

        <div class="form-group">
            <!--<label for="siem_id">siem_id</label>-->
            <input type = 'hidden' id="vinculo" name = "vinculo" value="{{Auth::user()->name}}" type="text" class="form-control">
        </div>

         <div class="form-group">
            <!--<label for="siem_id">siem_id</label>-->
            <input type = 'hidden' id="siem_id" name = "siem_id" value="{{Auth::user()->name}}" type="text" class="form-control">
        </div>

@endif

        <!--FIM block de vínculo-->


         <div class="form-group">
            <label for="turno">turno</label></br>
            {!! Form::select('nivel',  Config::get('enums.turno')) !!}
        </div>

        <div class="form-group">
            <label for="nivel">nivel</label>
            <input id="nivel" name = "nivel" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="serie">serie</label>
            <input id="serie" name = "serie" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="turma">turma</label>
            <input id="turma" name = "turma" type="text" class="form-control">
        </div>
       
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection