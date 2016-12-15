
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
                <div class="panel-heading">Adicionar Horário Turma</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("turma")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
  
    <form method = 'POST' action = '{!!url("turma")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <!--<label for="vinculo">vinculo</label>-->
            <input type = 'hidden' id="vinculo" name = "vinculo" type="text" class="form-control">
        </div>




        <div class="form-group">
            <!--<label for="adicionado_por">adicionado_por</label>-->
            <input type = 'hidden' id="adicionado_por" name = "adicionado_por" value="{{Auth::user()->name}}" type="text" class="form-control">
        </div>

@if (Auth::user()->name == "Admin")
        <div class="form-group">
            <label>siems Select</label>
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
        <div align = "center" class="form-group">
            <label for="nivel">nivel</label></br>
            {!! Form::select('nivel',  Config::get('enums.nivel')) !!}
        </div>
        <div align = "center" class="form-group">
            <label for="serie">serie</label></br>
            {!! Form::select('serie',  Config::get('enums.serie')) !!}
        </div>
        <div align = "center" class="form-group">
            <label for="turma">turma</label></br>
            {!! Form::select('turma',  Config::get('enums.turma')) !!}
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

        <!--Primeiro Horátio-->

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

                <!--Segundo Horátio-->

                <tr>

                    <td>
                    2º Horário
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

        </tbody>


</table>

       
        <div class="form-group">
            <label for="ter1">ter1</label>
            <input id="ter1" name = "ter1" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="qua1">qua1</label>
            <input id="qua1" name = "qua1" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="qui1">qui1</label>
            <input id="qui1" name = "qui1" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sex1">sex1</label>
            <input id="sex1" name = "sex1" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sab1">sab1</label>
            <input id="sab1" name = "sab1" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="seg2">seg2</label>
            <input id="seg2" name = "seg2" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ter2">ter2</label>
            <input id="ter2" name = "ter2" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="qua2">qua2</label>
            <input id="qua2" name = "qua2" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="qui2">qui2</label>
            <input id="qui2" name = "qui2" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sex2">sex2</label>
            <input id="sex2" name = "sex2" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sab2">sab2</label>
            <input id="sab2" name = "sab2" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="seg3">seg3</label>
            <input id="seg3" name = "seg3" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ter3">ter3</label>
            <input id="ter3" name = "ter3" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="qua3">qua3</label>
            <input id="qua3" name = "qua3" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="qui3">qui3</label>
            <input id="qui3" name = "qui3" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sex3">sex3</label>
            <input id="sex3" name = "sex3" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sab3">sab3</label>
            <input id="sab3" name = "sab3" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="seg4">seg4</label>
            <input id="seg4" name = "seg4" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ter4">ter4</label>
            <input id="ter4" name = "ter4" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="qua4">qua4</label>
            <input id="qua4" name = "qua4" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="qui4">qui4</label>
            <input id="qui4" name = "qui4" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sex4">sex4</label>
            <input id="sex4" name = "sex4" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sab4">sab4</label>
            <input id="sab4" name = "sab4" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="seg5">seg5</label>
            <input id="seg5" name = "seg5" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ter5">ter5</label>
            <input id="ter5" name = "ter5" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="qua5">qua5</label>
            <input id="qua5" name = "qua5" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="qui5">qui5</label>
            <input id="qui5" name = "qui5" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sex5">sex5</label>
            <input id="sex5" name = "sex5" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sab5">sab5</label>
            <input id="sab5" name = "sab5" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="seg6">seg6</label>
            <input id="seg6" name = "seg6" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="ter6">ter6</label>
            <input id="ter6" name = "ter6" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="qua6">qua6</label>
            <input id="qua6" name = "qua6" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="qui6">qui6</label>
            <input id="qui6" name = "qui6" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sex6">sex6</label>
            <input id="sex6" name = "sex6" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sab6">sab6</label>
            <input id="sab6" name = "sab6" type="text" class="form-control">
        </div>
        
        <button class = 'btn btn-primary' type ='submit'>Adicionar</button>
    </form>
</section>
@endsection