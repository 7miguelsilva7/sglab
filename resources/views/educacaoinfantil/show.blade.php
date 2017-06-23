@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show educacaoinfantil
    </h1>
    <br>
    <form method = 'get' action = '{!!url("educacaoinfantil")!!}'>
        <button class = 'btn btn-primary'>educacaoinfantil Index</button>
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
                <td>{!!$educacaoinfantil->nome!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection