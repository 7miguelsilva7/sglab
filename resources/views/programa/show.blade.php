@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show programa
    </h1>
    <br>
    <form method = 'get' action = '{!!url("programa")!!}'>
        <button class = 'btn btn-primary'>programa Index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>nome : </i></b>
                </td>
                <td>{!!$programa->nome!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection