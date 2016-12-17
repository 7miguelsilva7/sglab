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


  @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>

  @endif


        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
       
        <div class="form-group">
        <!--<label for="adicionado_por">adicionado_por</label>-->
            <input type = 'hidden' id="adicionado_por" name = "adicionado_por" value="{{Auth::user()->name}}" type="text" class="form-control">
        </div>

        <!--block de vínculo-->
@if (Auth::user()->name == "Admin")
        <div align="center" class="form-group">
            <label>Vincular a:</label>
            <select name = 'vinculo' class = 'form-control' id ="select1" >
                <option value="">Escolha uma Escola para Vícular Registro</option>

                @foreach($siems as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div> </p>
        

        <div align="center" class="form-group">
            <label>Escola</label>
            <select name = 'siem_id' class = 'form-control' id = "select2" >
                <option value="">Escolha uma Escola para Cadastrar Turma</option>
                @foreach($siems as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div> </p> </br>
@else

        <div class="form-group">
            <!--<label for="siem_id">siem_id</label>-->
            <input type = 'hidden' id="vinculo" name = "vinculo" value="{{Auth::user()->name}}" type="text" class="form-control">
        </div>

         <div class="form-group">
            <!--<label for="siem_id">siem_id</label>-->
            <input type = 'hidden' id="siem_id" name = "siem_id" value="{{Auth::user()->id}}" type="text" class="form-control">
        </div>

@endif

        <!--FIM block de vínculo-->

         <div class="form-group">
        <div class="col-md-3">

            <label for="turno">Turno</label>
            {!! Form::select('turno',  Config::get('enums.turno')) !!}
        </div>

        <div class="form-group">
                    <div class="col-md-3">

            <label for="nivel">Nivel</label>
            {!! Form::select('nivel',  Config::get('enums.nivel')) !!}
        </div>

        <div class="form-group">
                    <div class="col-md-3">

            <label for="serie">Série</label>
            {!! Form::select('serie',  Config::get('enums.serie')) !!}
        </div>

        <div class="form-group">
                    <div class="col-md-3">

            <label for="turma">Turma</label>
            {!! Form::select('turma',  Config::get('enums.turma')) !!}
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        <button class = 'btn btn-primary' type ='submit'>Adicionar</button>
    </form>

@endsection

