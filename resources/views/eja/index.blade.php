@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Eja Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("eja")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New eja</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>nome</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($ejas as $eja) 
            <tr>
                <td>{!!$eja->nome!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/eja/{!!$eja->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/eja/{!!$eja->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/eja/{!!$eja->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $ejas->render() !!}

</section>
@endsection