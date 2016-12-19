@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Horario_turma Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("horario_turma")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New horario_turma</button>
    </form>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="http://localhost:8000/siem">Siem</a></li>
            <li><a href="http://localhost:8000/turma">Turma</a></li>
        </ul>
    </div>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>vinculo</th>
            <th>seg1</th>
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
            <th>siem</th>
            <th>nome</th>
            <th>tipo_escola</th>
            <th>cod_ext</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>vinculo</th>
            <th>turno</th>
            <th>nivel</th>
            <th>serie</th>
            <th>turma</th>
            <th>adicionado_por</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($horario_turmas as $horario_turma) 
            <tr>
                <td>{!!$horario_turma->vinculo!!}</td>
                <td>{!!$horario_turma->seg1!!}</td>
                <td>{!!$horario_turma->ter1!!}</td>
                <td>{!!$horario_turma->qua1!!}</td>
                <td>{!!$horario_turma->qui1!!}</td>
                <td>{!!$horario_turma->sex1!!}</td>
                <td>{!!$horario_turma->sab1!!}</td>
                <td>{!!$horario_turma->seg2!!}</td>
                <td>{!!$horario_turma->ter2!!}</td>
                <td>{!!$horario_turma->qua2!!}</td>
                <td>{!!$horario_turma->qui2!!}</td>
                <td>{!!$horario_turma->sex2!!}</td>
                <td>{!!$horario_turma->sab2!!}</td>
                <td>{!!$horario_turma->seg3!!}</td>
                <td>{!!$horario_turma->ter3!!}</td>
                <td>{!!$horario_turma->qua3!!}</td>
                <td>{!!$horario_turma->qui3!!}</td>
                <td>{!!$horario_turma->sex3!!}</td>
                <td>{!!$horario_turma->sab3!!}</td>
                <td>{!!$horario_turma->seg4!!}</td>
                <td>{!!$horario_turma->ter4!!}</td>
                <td>{!!$horario_turma->qua4!!}</td>
                <td>{!!$horario_turma->qui4!!}</td>
                <td>{!!$horario_turma->sex4!!}</td>
                <td>{!!$horario_turma->sab4!!}</td>
                <td>{!!$horario_turma->seg5!!}</td>
                <td>{!!$horario_turma->ter5!!}</td>
                <td>{!!$horario_turma->qua5!!}</td>
                <td>{!!$horario_turma->qui5!!}</td>
                <td>{!!$horario_turma->sex5!!}</td>
                <td>{!!$horario_turma->sab5!!}</td>
                <td>{!!$horario_turma->seg6!!}</td>
                <td>{!!$horario_turma->ter6!!}</td>
                <td>{!!$horario_turma->qua6!!}</td>
                <td>{!!$horario_turma->qui6!!}</td>
                <td>{!!$horario_turma->sex6!!}</td>
                <td>{!!$horario_turma->sab6!!}</td>
                <td>{!!$horario_turma->adicionado_por!!}</td>
                <td>{!!$horario_turma->siem->usuario!!}</td>
                <td>{!!$horario_turma->siem->siem!!}</td>
                <td>{!!$horario_turma->siem->nome!!}</td>
                <td>{!!$horario_turma->siem->tipo_escola!!}</td>
                <td>{!!$horario_turma->siem->cod_ext!!}</td>
                <td>{!!$horario_turma->siem->created_at!!}</td>
                <td>{!!$horario_turma->siem->updated_at!!}</td>
                <td>{!!$horario_turma->turma->vinculo!!}</td>
                <td>{!!$horario_turma->turma->turno!!}</td>
                <td>{!!$horario_turma->turma->nivel!!}</td>
                <td>{!!$horario_turma->turma->serie!!}</td>
                <td>{!!$horario_turma->turma->turma!!}</td>
                <td>{!!$horario_turma->turma->adicionado_por!!}</td>
                <td>{!!$horario_turma->turma->created_at!!}</td>
                <td>{!!$horario_turma->turma->updated_at!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/horario_turma/{!!$horario_turma->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/horario_turma/{!!$horario_turma->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/horario_turma/{!!$horario_turma->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $horario_turmas->render() !!}

</section>
@endsection