@extends('layouts.app')

@section('content')

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Funcionários</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">CSV do MySQL</div>
                <div class="panel-body">

                    <h2><i class="fa glyphicon glyphicon-th-list"></i>CSV do MySQL</h2>
                    <br>
                    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
                        <thead>
                        <th><h4><i class="fa glyphicon glyphicon-th-list"></i>Importar CSV para o MySQL</h4></th>
                        <th>
                            <div class="flex-center position-ref full-height">
                                <form action="moodle_simulado/upload" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="file" name="csv" id="">
                                    <button class = 'btn btn-primary' type="submit">Enviar</button>
                                </form>
                            </div>
                        </th>
                        </thead>
                    </table>
                    <br>
                    <form class = 'col s3' method = 'get' action = '{!!url("moodle_simulado")!!}/create'>
                        <button class = 'btn btn-primary' type = 'submit'>Novo</button>
                    </form>
                    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>siem_cod</th>
            <th>aluno</th>
            <th>escola</th>
            <th>serie</th>
            <th>simulado</th>
            <th>cadastro</th>
            {{--<th>nota1</th>--}}
            {{--<th>nota2</th>--}}
            {{--<th>nota3</th>--}}
            {{--<th>nota4</th>--}}
            {{--<th>nota5</th>--}}
            {{--<th>nota6</th>--}}
            {{--<th>nota7</th>--}}
            {{--<th>nota8</th>--}}
            {{--<th>nota9</th>--}}
            {{--<th>nota10</th>--}}
            {{--<th>nota11</th>--}}
            {{--<th>nota12</th>--}}
            {{--<th>nota13</th>--}}
            {{--<th>nota14</th>--}}
            {{--<th>nota15</th>--}}
            {{--<th>nota16</th>--}}
            {{--<th>nota17</th>--}}
            {{--<th>nota18</th>--}}
            {{--<th>nota19</th>--}}
            {{--<th>nota20</th>--}}
            <th>situacao</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($moodle_simulados as $moodle_simulado) 
            <tr>
                <td>{!!$moodle_simulado->siem_cod!!}</td>
                <td>{!!$moodle_simulado->aluno!!}</td>
                <td>{!!$moodle_simulado->escola!!}</td>
                <td>{!!$moodle_simulado->serie!!}</td>
                <td>{!!$moodle_simulado->simulado!!}</td>
                <td>{!!$moodle_simulado->cadastro!!}</td>
                {{--<td>{!!$moodle_simulado->nota1!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota2!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota3!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota4!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota5!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota6!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota7!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota8!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota9!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota10!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota11!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota12!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota13!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota14!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota15!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota16!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota17!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota18!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota19!!}</td>--}}
                {{--<td>{!!$moodle_simulado->nota20!!}</td>--}}
                <td>{!!$moodle_simulado->situacao!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/moodle_simulado/{!!$moodle_simulado->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/moodle_simulado/{!!$moodle_simulado->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/moodle_simulado/{!!$moodle_simulado->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $moodle_simulados->render() !!}
                </div>
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class = 'AjaxisModal'>
                </div>
            </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script> var baseURL = "{{URL::to('/')}}"</script>
<script src = "{{ URL::asset('js/AjaxisBootstrap.js')}}"></script>
<script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
</html>
@endsection