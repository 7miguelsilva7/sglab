@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Horario_funcionario Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("horario_funcionario")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New horario_funcionario</button>
    </form>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Associate <span class="caret"></span> </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="http://localhost:8000/siem">Siem</a></li>
            <li><a href="http://localhost:8000/pessoa">Pessoa</a></li>
        </ul>
    </div>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>dias</th>
            <th>turno</th>
            <th>horario_m</th>
            <th>horario_t</th>
            <th>horario_n</th>
            <th>horario_c</th>
            <th>usuario</th>
            <th>siem</th>
            <th>nome</th>
            <th>tipo_escola</th>
            <th>cod_ext</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>vinculo</th>
            <th>nome</th>
            <th>cep</th>
            <th>distrito</th>
            <th>bairro</th>
            <th>logradouro</th>
            <th>numero</th>
            <th>complemento</th>
            <th>fone</th>
            <th>cel1</th>
            <th>cel2</th>
            <th>email</th>
            <th>cpf</th>
            <th>rg</th>
            <th>expedicao_rg</th>
            <th>nis</th>
            <th>data_nascimento</th>
            <th>nome_mae</th>
            <th>nome_pai</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($horario_funcionarios as $horario_funcionario) 
            <tr>
                <td>{!!$horario_funcionario->dias!!}</td>
                <td>{!!$horario_funcionario->turno!!}</td>
                <td>{!!$horario_funcionario->horario_m!!}</td>
                <td>{!!$horario_funcionario->horario_t!!}</td>
                <td>{!!$horario_funcionario->horario_n!!}</td>
                <td>{!!$horario_funcionario->horario_c!!}</td>
                <td>{!!$horario_funcionario->siem->usuario!!}</td>
                <td>{!!$horario_funcionario->siem->siem!!}</td>
                <td>{!!$horario_funcionario->siem->nome!!}</td>
                <td>{!!$horario_funcionario->siem->tipo_escola!!}</td>
                <td>{!!$horario_funcionario->siem->cod_ext!!}</td>
                <td>{!!$horario_funcionario->siem->created_at!!}</td>
                <td>{!!$horario_funcionario->siem->updated_at!!}</td>
                <td>{!!$horario_funcionario->pessoa->vinculo!!}</td>
                <td>{!!$horario_funcionario->pessoa->nome!!}</td>
                <td>{!!$horario_funcionario->pessoa->cep!!}</td>
                <td>{!!$horario_funcionario->pessoa->distrito!!}</td>
                <td>{!!$horario_funcionario->pessoa->bairro!!}</td>
                <td>{!!$horario_funcionario->pessoa->logradouro!!}</td>
                <td>{!!$horario_funcionario->pessoa->numero!!}</td>
                <td>{!!$horario_funcionario->pessoa->complemento!!}</td>
                <td>{!!$horario_funcionario->pessoa->fone!!}</td>
                <td>{!!$horario_funcionario->pessoa->cel1!!}</td>
                <td>{!!$horario_funcionario->pessoa->cel2!!}</td>
                <td>{!!$horario_funcionario->pessoa->email!!}</td>
                <td>{!!$horario_funcionario->pessoa->cpf!!}</td>
                <td>{!!$horario_funcionario->pessoa->rg!!}</td>
                <td>{!!$horario_funcionario->pessoa->expedicao_rg!!}</td>
                <td>{!!$horario_funcionario->pessoa->nis!!}</td>
                <td>{!!$horario_funcionario->pessoa->data_nascimento!!}</td>
                <td>{!!$horario_funcionario->pessoa->nome_mae!!}</td>
                <td>{!!$horario_funcionario->pessoa->nome_pai!!}</td>
                <td>{!!$horario_funcionario->pessoa->created_at!!}</td>
                <td>{!!$horario_funcionario->pessoa->updated_at!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/horario_funcionario/{!!$horario_funcionario->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/horario_funcionario/{!!$horario_funcionario->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/horario_funcionario/{!!$horario_funcionario->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $horario_funcionarios->render() !!}

</section>
@endsection