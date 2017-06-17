@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show turno
    </h1>
    <br>
    <form method = 'get' action = '{!!url("turno")!!}'>
        <button class = 'btn btn-primary'>turno Index</button>
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
                <td>{!!$turno->nome!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection