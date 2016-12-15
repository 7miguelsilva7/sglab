@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Turma Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("turma")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New turma</button>
    </form>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="http://localhost:8000/siem">Siem</a></li>
        </ul>
    </div>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>vinculo</th>
            <th>turno</th>
            <th>nivel</th>
            <th>serie</th>
            <th>turma</th>
            <th>adicionado_por</th>
            <th>usuario</th>
            <th>siem</th>
            <th>nome</th>
            <th>tipo_escola</th>
            <th>cod_ext</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($turmas as $turma) 
            <tr>
                <td>{!!$turma->vinculo!!}</td>
                <td>{!!$turma->turno!!}</td>
                <td>{!!$turma->nivel!!}</td>
                <td>{!!$turma->serie!!}</td>
                <td>{!!$turma->turma!!}</td>
                <td>{!!$turma->adicionado_por!!}</td>
                <td>{!!$turma->siem->usuario!!}</td>
                <td>{!!$turma->siem->siem!!}</td>
                <td>{!!$turma->siem->nome!!}</td>
                <td>{!!$turma->siem->tipo_escola!!}</td>
                <td>{!!$turma->siem->cod_ext!!}</td>
                <td>{!!$turma->siem->created_at!!}</td>
                <td>{!!$turma->siem->updated_at!!}</td>
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

</section>
@endsection