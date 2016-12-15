@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">
                Escola Municipal {!!$turma->siem->nome!!} </br> {!!$turma->nivel!!} </br> {!!$turma->serie!!} Ano {!!$turma->turma!!} </br>
                </div>
                <div class="panel-body">
   
            <form method = 'get' action = '{{url("turma")}}'>
                <button class = 'btn btn-primary'><i class="fa glyphicon glyphicon-arrow-left"></i> Voltar</button>
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
                    <b><i>seg1 : </i></b>
                </td>
                <td>{!!$turma->seg1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>ter1 : </i></b>
                </td>
                <td>{!!$turma->ter1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qua1 : </i></b>
                </td>
                <td>{!!$turma->qua1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qui1 : </i></b>
                </td>
                <td>{!!$turma->qui1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sex1 : </i></b>
                </td>
                <td>{!!$turma->sex1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sab1 : </i></b>
                </td>
                <td>{!!$turma->sab1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>seg2 : </i></b>
                </td>
                <td>{!!$turma->seg2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>ter2 : </i></b>
                </td>
                <td>{!!$turma->ter2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qua2 : </i></b>
                </td>
                <td>{!!$turma->qua2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qui2 : </i></b>
                </td>
                <td>{!!$turma->qui2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sex2 : </i></b>
                </td>
                <td>{!!$turma->sex2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sab2 : </i></b>
                </td>
                <td>{!!$turma->sab2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>seg3 : </i></b>
                </td>
                <td>{!!$turma->seg3!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>ter3 : </i></b>
                </td>
                <td>{!!$turma->ter3!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qua3 : </i></b>
                </td>
                <td>{!!$turma->qua3!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qui3 : </i></b>
                </td>
                <td>{!!$turma->qui3!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sex3 : </i></b>
                </td>
                <td>{!!$turma->sex3!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sab3 : </i></b>
                </td>
                <td>{!!$turma->sab3!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>seg4 : </i></b>
                </td>
                <td>{!!$turma->seg4!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>ter4 : </i></b>
                </td>
                <td>{!!$turma->ter4!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qua4 : </i></b>
                </td>
                <td>{!!$turma->qua4!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qui4 : </i></b>
                </td>
                <td>{!!$turma->qui4!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sex4 : </i></b>
                </td>
                <td>{!!$turma->sex4!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sab4 : </i></b>
                </td>
                <td>{!!$turma->sab4!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>seg5 : </i></b>
                </td>
                <td>{!!$turma->seg5!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>ter5 : </i></b>
                </td>
                <td>{!!$turma->ter5!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qua5 : </i></b>
                </td>
                <td>{!!$turma->qua5!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qui5 : </i></b>
                </td>
                <td>{!!$turma->qui5!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sex5 : </i></b>
                </td>
                <td>{!!$turma->sex5!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sab5 : </i></b>
                </td>
                <td>{!!$turma->sab5!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>seg6 : </i></b>
                </td>
                <td>{!!$turma->seg6!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>ter6 : </i></b>
                </td>
                <td>{!!$turma->ter6!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qua6 : </i></b>
                </td>
                <td>{!!$turma->qua6!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qui6 : </i></b>
                </td>
                <td>{!!$turma->qui6!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sex6 : </i></b>
                </td>
                <td>{!!$turma->sex6!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sab6 : </i></b>
                </td>
                <td>{!!$turma->sab6!!}</td>
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