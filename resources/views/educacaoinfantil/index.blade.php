@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Educacaoinfantil Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("educacaoinfantil")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New educacaoinfantil</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>nome</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($educacaoinfantils as $educacaoinfantil) 
            <tr>
                <td>{!!$educacaoinfantil->nome!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/educacaoinfantil/{!!$educacaoinfantil->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/educacaoinfantil/{!!$educacaoinfantil->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/educacaoinfantil/{!!$educacaoinfantil->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $educacaoinfantils->render() !!}

</section>
@endsection