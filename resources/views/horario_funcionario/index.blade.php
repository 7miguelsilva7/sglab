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
            <th>seg_m</th>
            <th>ter_m</th>
            <th>qua_m</th>
            <th>qui_m</th>
            <th>sex_m</th>
            <th>sab_m</th>
            <th>dom_m</th>
            <th>seg_t</th>
            <th>ter_t</th>
            <th>qua_t</th>
            <th>qui_t</th>
            <th>sex_t</th>
            <th>sab_t</th>
            <th>dom_t</th>
            <th>seg_n</th>
            <th>ter_n</th>
            <th>qua_n</th>
            <th>qui_n</th>
            <th>sex_n</th>
            <th>sab_n</th>
            <th>dom_n</th>
            <th>seg_c</th>
            <th>ter_c</th>
            <th>qua_c</th>
            <th>qui_c</th>
            <th>sex_c</th>
            <th>sab_c</th>
            <th>dom_c</th>
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
                <td>{!!$horario_funcionario->seg_m!!}</td>
                <td>{!!$horario_funcionario->ter_m!!}</td>
                <td>{!!$horario_funcionario->qua_m!!}</td>
                <td>{!!$horario_funcionario->qui_m!!}</td>
                <td>{!!$horario_funcionario->sex_m!!}</td>
                <td>{!!$horario_funcionario->sab_m!!}</td>
                <td>{!!$horario_funcionario->dom_m!!}</td>
                <td>{!!$horario_funcionario->seg_t!!}</td>
                <td>{!!$horario_funcionario->ter_t!!}</td>
                <td>{!!$horario_funcionario->qua_t!!}</td>
                <td>{!!$horario_funcionario->qui_t!!}</td>
                <td>{!!$horario_funcionario->sex_t!!}</td>
                <td>{!!$horario_funcionario->sab_t!!}</td>
                <td>{!!$horario_funcionario->dom_t!!}</td>
                <td>{!!$horario_funcionario->seg_n!!}</td>
                <td>{!!$horario_funcionario->ter_n!!}</td>
                <td>{!!$horario_funcionario->qua_n!!}</td>
                <td>{!!$horario_funcionario->qui_n!!}</td>
                <td>{!!$horario_funcionario->sex_n!!}</td>
                <td>{!!$horario_funcionario->sab_n!!}</td>
                <td>{!!$horario_funcionario->dom_n!!}</td>
                <td>{!!$horario_funcionario->seg_c!!}</td>
                <td>{!!$horario_funcionario->ter_c!!}</td>
                <td>{!!$horario_funcionario->qua_c!!}</td>
                <td>{!!$horario_funcionario->qui_c!!}</td>
                <td>{!!$horario_funcionario->sex_c!!}</td>
                <td>{!!$horario_funcionario->sab_c!!}</td>
                <td>{!!$horario_funcionario->dom_c!!}</td>
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