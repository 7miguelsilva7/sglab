@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Horário</div>
                <div class="panel-body">
    <form method = 'get' action = '{!!url("horario_funcionario")!!}'>
        <button class = 'btn btn-danger'>Voltar</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("horario_funcionario")!!}/{!!$horario_funcionario->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="dias">dias</label>
            <input id="dias" name = "dias" type="text" class="form-control" value="{!!$horario_funcionario->
            dias!!}"> 
        </div>


        <div class="form-group">
            <label for="turno">turno</label>
      {!! Form::select ('turno', Config::get('enums.turno'), $horario_funcionario->turno) !!}
        </div>


        <div class="form-group">
            <label for="horario_m">horario_m</label>
            <input id="horario_m" name = "horario_m" type="text" class="form-control" value="{!!$horario_funcionario->
            horario_m!!}"> 
        </div>
        <div class="form-group">
            <label for="horario_t">horario_t</label>
            <input id="horario_t" name = "horario_t" type="text" class="form-control" value="{!!$horario_funcionario->
            horario_t!!}"> 
        </div>
        <div class="form-group">
            <label for="horario_n">horario_n</label>
            <input id="horario_n" name = "horario_n" type="text" class="form-control" value="{!!$horario_funcionario->
            horario_n!!}"> 
        </div>
        <div class="form-group">
            <label for="horario_c">horario_c</label>
            <input id="horario_c" name = "horario_c" type="text" class="form-control" value="{!!$horario_funcionario->
            horario_c!!}"> 
        </div>
        <div class="form-group">
            <label>siems Select</label>
            <select name = 'siem_id' class = "form-control">
                @foreach($siems as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label>pessoas Select</label>
            <select name = 'pessoa_id' class = "form-control">
                @foreach($pessoas as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection