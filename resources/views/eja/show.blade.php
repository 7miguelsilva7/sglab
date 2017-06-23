@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show eja
    </h1>
    <br>
    <form method = 'get' action = '{!!url("eja")!!}'>
        <button class = 'btn btn-primary'>eja Index</button>
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
                <td>{!!$eja->nome!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection