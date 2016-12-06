@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show horario_funcionario
    </h1>
    <br>
    <form method = 'get' action = '{!!url("horario_funcionario")!!}'>
        <button class = 'btn btn-primary'>horario_funcionario Index</button>
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
                    <b><i>seg_m : </i></b>
                </td>
                <td>{!!$horario_funcionario->seg_m!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>ter_m : </i></b>
                </td>
                <td>{!!$horario_funcionario->ter_m!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qua_m : </i></b>
                </td>
                <td>{!!$horario_funcionario->qua_m!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qui_m : </i></b>
                </td>
                <td>{!!$horario_funcionario->qui_m!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sex_m : </i></b>
                </td>
                <td>{!!$horario_funcionario->sex_m!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sab_m : </i></b>
                </td>
                <td>{!!$horario_funcionario->sab_m!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>dom_m : </i></b>
                </td>
                <td>{!!$horario_funcionario->dom_m!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>seg_t : </i></b>
                </td>
                <td>{!!$horario_funcionario->seg_t!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>ter_t : </i></b>
                </td>
                <td>{!!$horario_funcionario->ter_t!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qua_t : </i></b>
                </td>
                <td>{!!$horario_funcionario->qua_t!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qui_t : </i></b>
                </td>
                <td>{!!$horario_funcionario->qui_t!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sex_t : </i></b>
                </td>
                <td>{!!$horario_funcionario->sex_t!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sab_t : </i></b>
                </td>
                <td>{!!$horario_funcionario->sab_t!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>dom_t : </i></b>
                </td>
                <td>{!!$horario_funcionario->dom_t!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>seg_n : </i></b>
                </td>
                <td>{!!$horario_funcionario->seg_n!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>ter_n : </i></b>
                </td>
                <td>{!!$horario_funcionario->ter_n!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qua_n : </i></b>
                </td>
                <td>{!!$horario_funcionario->qua_n!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qui_n : </i></b>
                </td>
                <td>{!!$horario_funcionario->qui_n!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sex_n : </i></b>
                </td>
                <td>{!!$horario_funcionario->sex_n!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sab_n : </i></b>
                </td>
                <td>{!!$horario_funcionario->sab_n!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>dom_n : </i></b>
                </td>
                <td>{!!$horario_funcionario->dom_n!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>seg_c : </i></b>
                </td>
                <td>{!!$horario_funcionario->seg_c!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>ter_c : </i></b>
                </td>
                <td>{!!$horario_funcionario->ter_c!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qua_c : </i></b>
                </td>
                <td>{!!$horario_funcionario->qua_c!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>qui_c : </i></b>
                </td>
                <td>{!!$horario_funcionario->qui_c!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sex_c : </i></b>
                </td>
                <td>{!!$horario_funcionario->sex_c!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sab_c : </i></b>
                </td>
                <td>{!!$horario_funcionario->sab_c!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>dom_c : </i></b>
                </td>
                <td>{!!$horario_funcionario->dom_c!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>usuario : </i></b>
                </td>
                <td>{!!$horario_funcionario->siem->usuario!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>siem : </i></b>
                </td>
                <td>{!!$horario_funcionario->siem->siem!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nome : </i></b>
                </td>
                <td>{!!$horario_funcionario->siem->nome!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>tipo_escola : </i></b>
                </td>
                <td>{!!$horario_funcionario->siem->tipo_escola!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cod_ext : </i></b>
                </td>
                <td>{!!$horario_funcionario->siem->cod_ext!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$horario_funcionario->siem->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$horario_funcionario->siem->updated_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>vinculo : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->vinculo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nome : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->nome!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cep : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->cep!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>distrito : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->distrito!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>bairro : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->bairro!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>logradouro : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->logradouro!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>numero : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->numero!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>complemento : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->complemento!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>fone : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->fone!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cel1 : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->cel1!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cel2 : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->cel2!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cpf : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->cpf!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>rg : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->rg!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>expedicao_rg : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->expedicao_rg!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nis : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->nis!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>data_nascimento : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->data_nascimento!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nome_mae : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->nome_mae!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nome_pai : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->nome_pai!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>created_at : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->created_at!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>updated_at : </i></b>
                </td>
                <td>{!!$horario_funcionario->pessoa->updated_at!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection