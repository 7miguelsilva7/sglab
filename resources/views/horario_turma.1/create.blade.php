@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Horário de Turma</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("horario_turma")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
 
    <form method = 'POST' action = '{!!url("horario_turma")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        
        <div class="form-group">
            <!--<label for="adicionado_por">adicionado_por</label>-->
            <input type = 'hidden' id="adicionado_por" name = "adicionado_por" value="{{Auth::user()->name}}" type="text" class="form-control">
        </div>

@if (Auth::user()->name == "Admin")

        <div class="form-group">
            <label>Selecione Vinculo</label>
            <select name = 'siem_id' class = 'form-control'>
                @foreach($siems as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        
@else


        <div class="form-group">
            <!--<label for="siem_id">siem_id</label>-->
            <input type = 'hidden' id="siem_id" name = "siem_id" value="{{Auth::user()->id}}" type="text" class="form-control">
        </div>

@endif

        <div class="form-group">
            <label>Selecione a turma</label>
            <select name = 'turma_id' class = 'form-control'>
                @foreach($turmas as $key => $value) 
                <option value="{{$key}}">{{$value}} </option>
                @endforeach 
            </select>
        </div>

<table class = "table table-striped table-bordered">

    <thead>
               <th style="width:15%">Horário</th>
               <th style="width:15%">Segunda</th>
               <th style="width:15%">Terça</th>
               <th style="width:15%">Quarta</th>
               <th style="width:15%">Quinta</th>
               <th style="width:15%">Sexta</th>
               <th style="width:15%">Sábado</th>
    </thead>

        <tbody>

        <!--Primeiro Horário-->

                <tr>
                    <td>
                    1º Horário
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! Form::select('seg1',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('ter1',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qua1',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qui1',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sex1',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sab1',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                </tr>

                <!--Segundo Horário-->

                <tr>

                    <td>
                    2º Horário
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! Form::select('seg2',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('ter2',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qua2',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qui2',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sex2',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sab2',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                </tr>

                 <!--Terceiro Horário-->

                <tr>

                    <td>
                    3º Horário
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! Form::select('seg3',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('ter3',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qua3',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qui3',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sex3',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sab3',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                </tr>


 <!--Quarto Horário-->

                <tr>

                    <td>
                    4º Horário
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! Form::select('seg4',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('ter4',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qua4',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qui4',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sex4',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sab4',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                </tr>


 <!--Quinto Horário-->

                <tr>

                    <td>
                    5º Horário
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! Form::select('seg5',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('ter5',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qua5',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qui5',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sex5',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sab5',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                </tr>


 <!--Sexto Horário-->

                <tr>

                    <td>
                    6º Horário
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="seg1">seg1</label>-->
                    {!! Form::select('seg6',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('ter6',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qua6',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('qui6',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sex6',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                    <td>
                     <div class="form-group">
                    <!--<label for="ter1">ter1</label>-->
                    {!! Form::select('sab6',  Config::get('enums.disciplina')) !!}
                    </div>
                    </td>

                </tr>


        </tbody>


</table>
        
        <button class = 'btn btn-primary' type ='submit'>Adicionar</button>
    </form>
@endsection
