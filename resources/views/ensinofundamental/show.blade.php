@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show ensinofundamental
    </h1>
    <br>
    <form method = 'get' action = '{!!url("ensinofundamental")!!}'>
        <button class = 'btn btn-primary'>ensinofundamental Index</button>
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
                <td>{!!$ensinofundamental->nome!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection