@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show moodle_simulado
    </h1>
    <br>
    <form method = 'get' action = '{!!url("moodle_simulado")!!}'>
        <button class = 'btn btn-primary'>moodle_simulado Index</button>
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
                    <b><i>siem_cod : </i></b>
                </td>
                <td>{!!$moodle_simulado->siem_cod!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>aluno : </i></b>
                </td>
                <td>{!!$moodle_simulado->aluno!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>escola : </i></b>
                </td>
                <td>{!!$moodle_simulado->escola!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>serie : </i></b>
                </td>
                <td>{!!$moodle_simulado->serie!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>simulado : </i></b>
                </td>
                <td>{!!$moodle_simulado->simulado!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cadastro : </i></b>
                </td>
                <td>{!!$moodle_simulado->cadastro!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota1 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota2 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota3 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota3!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota4 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota4!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota5 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota5!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota6 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota6!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota7 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota7!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota8 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota8!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota9 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota9!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota10 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota10!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota11 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota11!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota12 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota12!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota13 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota13!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota14 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota14!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota15 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota15!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota16 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota16!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota17 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota17!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota18 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota18!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota19 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota19!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nota20 : </i></b>
                </td>
                <td>{!!$moodle_simulado->nota20!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>situacao : </i></b>
                </td>
                <td>{!!$moodle_simulado->situacao!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection