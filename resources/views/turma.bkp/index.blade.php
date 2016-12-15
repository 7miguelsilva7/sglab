@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
        <title>Turma</title>
    </head>
    <body>
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Turma</div>

                <div class="panel-body">
            <h2><i class="fa glyphicon glyphicon-th-list"></i> Turma </h2>
            

{!! Form::open(['method'=>'GET','url'=>'turma','class'=>'navbar-form navbar-right','role'=>'search'])  !!}


<a href="{{ url('turma/create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Novo</a>

<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Busca...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"--> </i>
        </button>
    </span>
</div>
{!! Form::close() !!}

    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
        <!--    <th>vinculo</th> -->
            <th>nivel</th>
            <th>serie</th>
            <th>turma</th>
     <!--       <th>seg1</th>
            <th>ter1</th>
            <th>qua1</th>
            <th>qui1</th>
            <th>sex1</th>
            <th>sab1</th>
            <th>seg2</th>
            <th>ter2</th>
            <th>qua2</th>
            <th>qui2</th>
            <th>sex2</th>
            <th>sab2</th>
            <th>seg3</th>
            <th>ter3</th>
            <th>qua3</th>
            <th>qui3</th>
            <th>sex3</th>
            <th>sab3</th>
            <th>seg4</th>
            <th>ter4</th>
            <th>qua4</th>
            <th>qui4</th>
            <th>sex4</th>
            <th>sab4</th>
            <th>seg5</th>
            <th>ter5</th>
            <th>qua5</th>
            <th>qui5</th>
            <th>sex5</th>
            <th>sab5</th>
            <th>seg6</th>
            <th>ter6</th>
            <th>qua6</th>
            <th>qui6</th>
            <th>sex6</th>
            <th>sab6</th>
            <th>adicionado_por</th>
            <th>usuario</th> 
            <th>siem</th>-->
            <th>escola</th>
        <!--    <th>tipo_escola</th>
            <th>cod_ext</th>
            <th>created_at</th>
            <th>updated_at</th>-->
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($turmas as $turma) 
            <tr>
          <!--      <td>{!!$turma->vinculo!!}</td>   -->
                <td>{!!$turma->nivel!!}</td>
                <td>{!!$turma->serie!!}</td>
                <td>{!!$turma->turma!!}</td>
        <!--        <td>{!!$turma->seg1!!}</td>
                <td>{!!$turma->ter1!!}</td>
                <td>{!!$turma->qua1!!}</td>
                <td>{!!$turma->qui1!!}</td>
                <td>{!!$turma->sex1!!}</td>
                <td>{!!$turma->sab1!!}</td>
                <td>{!!$turma->seg2!!}</td>
                <td>{!!$turma->ter2!!}</td>
                <td>{!!$turma->qua2!!}</td>
                <td>{!!$turma->qui2!!}</td>
                <td>{!!$turma->sex2!!}</td>
                <td>{!!$turma->sab2!!}</td>
                <td>{!!$turma->seg3!!}</td>
                <td>{!!$turma->ter3!!}</td>
                <td>{!!$turma->qua3!!}</td>
                <td>{!!$turma->qui3!!}</td>
                <td>{!!$turma->sex3!!}</td>
                <td>{!!$turma->sab3!!}</td>
                <td>{!!$turma->seg4!!}</td>
                <td>{!!$turma->ter4!!}</td>
                <td>{!!$turma->qua4!!}</td>
                <td>{!!$turma->qui4!!}</td>
                <td>{!!$turma->sex4!!}</td>
                <td>{!!$turma->sab4!!}</td>
                <td>{!!$turma->seg5!!}</td>
                <td>{!!$turma->ter5!!}</td>
                <td>{!!$turma->qua5!!}</td>
                <td>{!!$turma->qui5!!}</td>
                <td>{!!$turma->sex5!!}</td>
                <td>{!!$turma->sab5!!}</td>
                <td>{!!$turma->seg6!!}</td>
                <td>{!!$turma->ter6!!}</td>
                <td>{!!$turma->qua6!!}</td>
                <td>{!!$turma->qui6!!}</td>
                <td>{!!$turma->sex6!!}</td>
                <td>{!!$turma->sab6!!}</td>
                <td>{!!$turma->adicionado_por!!}</td>
                <td>{!!$turma->siem->usuario!!}</td>
                <td>{!!$turma->siem->siem!!}</td>  -->
                <td>{!!$turma->siem->nome!!}</td>
       <!--         <td>{!!$turma->siem->tipo_escola!!}</td>
                <td>{!!$turma->siem->cod_ext!!}</td>
                <td>{!!$turma->siem->created_at!!}</td>
                <td>{!!$turma->siem->updated_at!!}</td>  -->
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/turma/{!!$turma->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/turma/{!!$turma->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/turma/{!!$turma->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $turmas->render() !!}

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>

@endsection