<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Escola</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Escola</h1>
            <br>
            <form method = 'get' action = '{{url("escola")}}'>
                <button class = 'btn btn-primary'>Escola Index</button>
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
                            <b><i>usuario : </i></b>
                        </td>
                        <td>{{$escola->usuario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>inep : </i></b>
                        </td>
                        <td>{{$escola->inep}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>cep : </i></b>
                        </td>
                        <td>{{$escola->cep}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>distrito : </i></b>
                        </td>
                        <td>{{$escola->distrito}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>bairro : </i></b>
                        </td>
                        <td>{{$escola->bairro}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>logradouro : </i></b>
                        </td>
                        <td>{{$escola->logradouro}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>numero : </i></b>
                        </td>
                        <td>{{$escola->numero}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>complemento : </i></b>
                        </td>
                        <td>{{$escola->complemento}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fone : </i></b>
                        </td>
                        <td>{{$escola->fone}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>email : </i></b>
                        </td>
                        <td>{{$escola->email}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>cel1 : </i></b>
                        </td>
                        <td>{{$escola->cel1}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>cel2 : </i></b>
                        </td>
                        <td>{{$escola->cel2}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>sigla : </i></b>
                        </td>
                        <td>{{$escola->sigla}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>possui_internet_escola : </i></b>
                        </td>
                        <td>{{$escola->possui_internet_escola}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>tipo_internet_escola : </i></b>
                        </td>
                        <td>{{$escola->tipo_internet_escola}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>status_escola : </i></b>
                        </td>
                        <td>{{$escola->status_escola}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>possui_lab : </i></b>
                        </td>
                        <td>{{$escola->possui_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>possui_analista : </i></b>
                        </td>
                        <td>{{$escola->possui_analista}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>pessoa_id_analista : </i></b>
                        </td>
                        <td>{{$escola->pessoa_id_analista}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>tipo_sala : </i></b>
                        </td>
                        <td>{{$escola->tipo_sala}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>pregao1 : </i></b>
                        </td>
                        <td>{{$escola->pregao1}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>pregao2 : </i></b>
                        </td>
                        <td>{{$escola->pregao2}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>pregao3 : </i></b>
                        </td>
                        <td>{{$escola->pregao3}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>pregao4 : </i></b>
                        </td>
                        <td>{{$escola->pregao4}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>possui_internet_lab : </i></b>
                        </td>
                        <td>{{$escola->possui_internet_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>tipo_internet_lab : </i></b>
                        </td>
                        <td>{{$escola->tipo_internet_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>lab_montado : </i></b>
                        </td>
                        <td>{{$escola->lab_montado}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>qt_computadores_lab : </i></b>
                        </td>
                        <td>{{$escola->qt_computadores_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>qt_monitorelab : </i></b>
                        </td>
                        <td>{{$escola->qt_monitorelab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>status_lab : </i></b>
                        </td>
                        <td>{{$escola->status_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>ar_condicionado_lab : </i></b>
                        </td>
                        <td>{{$escola->ar_condicionado_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>impressora_lab : </i></b>
                        </td>
                        <td>{{$escola->impressora_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>qt_notebook_lab : </i></b>
                        </td>
                        <td>{{$escola->qt_notebook_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>roteador_lab : </i></b>
                        </td>
                        <td>{{$escola->roteador_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>switch_lab : </i></b>
                        </td>
                        <td>{{$escola->switch_lab}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>qt_cadeiras_lab : </i></b>
                        </td>
                        <td>{{$escola->qt_cadeiras_lab}}</td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>siem : </i><b>
                        </td>
                        <td>{{$escola->siem->siem}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>escola_nome : </i><b>
                        </td>
                        <td>{{$escola->siem->escola_nome}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>escola_tipo : </i><b>
                        </td>
                        <td>{{$escola->siem->escola_tipo}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cod_ext : </i><b>
                        </td>
                        <td>{{$escola->siem->cod_ext}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>created_at : </i><b>
                        </td>
                        <td>{{$escola->siem->created_at}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>updated_at : </i><b>
                        </td>
                        <td>{{$escola->siem->updated_at}}</td>
                        </tr>
                        
                        
                        
                        <tr>
                        <td>
                            <b><i>nome : </i><b>
                        </td>
                        <td>{{$escola->pessoa->nome}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cep : </i><b>
                        </td>
                        <td>{{$escola->pessoa->cep}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>distrito : </i><b>
                        </td>
                        <td>{{$escola->pessoa->distrito}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>bairro : </i><b>
                        </td>
                        <td>{{$escola->pessoa->bairro}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>logradouro : </i><b>
                        </td>
                        <td>{{$escola->pessoa->logradouro}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>numero : </i><b>
                        </td>
                        <td>{{$escola->pessoa->numero}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>complemento : </i><b>
                        </td>
                        <td>{{$escola->pessoa->complemento}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>fone : </i><b>
                        </td>
                        <td>{{$escola->pessoa->fone}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cel1 : </i><b>
                        </td>
                        <td>{{$escola->pessoa->cel1}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cel2 : </i><b>
                        </td>
                        <td>{{$escola->pessoa->cel2}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>email : </i><b>
                        </td>
                        <td>{{$escola->pessoa->email}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cpf : </i><b>
                        </td>
                        <td>{{$escola->pessoa->cpf}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>rg : </i><b>
                        </td>
                        <td>{{$escola->pessoa->rg}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>expedicao_rg : </i><b>
                        </td>
                        <td>{{$escola->pessoa->expedicao_rg}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>data_nascimento : </i><b>
                        </td>
                        <td>{{$escola->pessoa->data_nascimento}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>nome_mae : </i><b>
                        </td>
                        <td>{{$escola->pessoa->nome_mae}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>nome_pai : </i><b>
                        </td>
                        <td>{{$escola->pessoa->nome_pai}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>created_at : </i><b>
                        </td>
                        <td>{{$escola->pessoa->created_at}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>updated_at : </i><b>
                        </td>
                        <td>{{$escola->pessoa->updated_at}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
