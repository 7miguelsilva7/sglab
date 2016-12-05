@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Horário</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("funcionario")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("horario_funcionario")!!}'>

    <!--{!! Form::open(['url' => 'foo/bar']) !!}-->

        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="dias">Segunda Feira</label>
            <input id="dias" name = "dias" type="text" value="Seg" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="turno">turno</label>
            {!! Form::select ('turno', Config::get('enums.turno')) !!}
        </div>

        <div class="form-group">
            <label for="horario_m">horario_m</label>
            <input id="horario_m" name = "horario_m" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="horario_t">horario_t</label>
            <input id="horario_t" name = "horario_t" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="horario_n">horario_n</label>
            <input id="horario_n" name = "horario_n" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="horario_c">horario_c</label>
            <input id="horario_c" name = "horario_c" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>siems Select</label>
            <select name = 'siem_id' class = 'form-control'>
                @foreach($siems as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label>pessoas Select</label>
            <select name = 'pessoa_id' class = 'form-control'>
                @foreach($pessoas as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>

<!--testando adicionar vários registros-->

 <div class="form-group">
            <label for="dias">Terça Feira</label>
            <input id="dias" name = "dias" type="text" value="Ter" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="turno">turno</label>
            {!! Form::select ('turno', Config::get('enums.turno')) !!}
        </div>

        <div class="form-group">
            <label for="horario_m">horario_m</label>
            <input id="horario_m" name = "horario_m" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="horario_t">horario_t</label>
            <input id="horario_t" name = "horario_t" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="horario_n">horario_n</label>
            <input id="horario_n" name = "horario_n" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="horario_c">horario_c</label>
            <input id="horario_c" name = "horario_c" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>siems Select</label>
            <select name = 'siem_id' class = 'form-control'>
                @foreach($siems as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label>pessoas Select</label>
            <select name = 'pessoa_id' class = 'form-control'>
                @foreach($pessoas as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>


<!--testando adicionar vários registros-->

        <button class = 'btn btn-primary' type ='submit'>Create</button>
        <!--{!! Form::close() !!}-->
    </form>
@endsection