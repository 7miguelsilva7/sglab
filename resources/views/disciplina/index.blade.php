@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Disciplina Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("disciplina")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New disciplina</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>nome</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($disciplinas as $disciplina) 
            <tr>
                <td>{!!$disciplina->nome!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/disciplina/{!!$disciplina->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/disciplina/{!!$disciplina->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/disciplina/{!!$disciplina->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $disciplinas->render() !!}

</section>
@endsection