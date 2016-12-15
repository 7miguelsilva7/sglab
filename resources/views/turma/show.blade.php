@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show turma
    </h1>
    <br>
    <form method = 'get' action = '{!!url("turma")!!}'>
        <button class = 'btn btn-primary'>turma Index</button>
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
                    <b><i>vinculo : </i></b>
                </td>
                <td>{!!$turma->vinculo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>turno : </i></b>
                </td>
                <td>{!!$turma->turno!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nivel : </i></b>
                </td>
                <td>{!!$turma->nivel!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>serie : </i></b>
                </td>
                <td>{!!$turma->serie!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>turma : </i></b>
                </td>
                <td>{!!$turma->turma!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>adicionado_por : </i></b>
                </td>
                <td>{!!$turma->adicionado_por!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>usuario : </i></b>
                </td>
                <td>{!!$turma->siem->usuario!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>siem : </i></b>
                </td>
                <td>{!!$turma->siem->siem!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nome : </i></b>
                </td>
                <td>{!!$turma->siem->nome!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>tipo_escola : </i></b>
                </td>
                <td>{!!$turma->siem->tipo_escola!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cod_ext : </i></b>
                </td>
                <td>{!!$turma->siem->cod_ext!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$turma->siem->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$turma->siem->updated_at!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection