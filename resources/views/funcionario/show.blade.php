<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Funcionario</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Funcionario</h1>
            <br>
            <form method = 'get' action = '{{url("funcionario")}}'>
                <button class = 'btn btn-primary'>Funcionario Index</button>
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
                        <td>{{$funcionario->usuario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>vinculo : </i></b>
                        </td>
                        <td>{{$funcionario->vinculo}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>status_funcionario : </i></b>
                        </td>
                        <td>{{$funcionario->status_funcionario}}</td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>siem : </i><b>
                        </td>
                        <td>{{$funcionario->siem->siem}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>escola_nome : </i><b>
                        </td>
                        <td>{{$funcionario->siem->escola_nome}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>escola_tipo : </i><b>
                        </td>
                        <td>{{$funcionario->siem->escola_tipo}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cod_ext : </i><b>
                        </td>
                        <td>{{$funcionario->siem->cod_ext}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>created_at : </i><b>
                        </td>
                        <td>{{$funcionario->siem->created_at}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>updated_at : </i><b>
                        </td>
                        <td>{{$funcionario->siem->updated_at}}</td>
                        </tr>
                        
                        
                        
                        <tr>
                        <td>
                            <b><i>nome : </i><b>
                        </td>
                        <td>{{$funcionario->ocupacao->nome}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>created_at : </i><b>
                        </td>
                        <td>{{$funcionario->ocupacao->created_at}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>updated_at : </i><b>
                        </td>
                        <td>{{$funcionario->ocupacao->updated_at}}</td>
                        </tr>
                        
                        
                        
                        <tr>
                        <td>
                            <b><i>nome : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->nome}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cep : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->cep}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>distrito : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->distrito}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>bairro : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->bairro}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>logradouro : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->logradouro}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>numero : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->numero}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>complemento : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->complemento}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>fone : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->fone}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cel1 : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->cel1}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cel2 : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->cel2}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>email : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->email}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cpf : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->cpf}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>rg : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->rg}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>expedicao_rg : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->expedicao_rg}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>data_nascimento : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->data_nascimento}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>nome_mae : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->nome_mae}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>nome_pai : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->nome_pai}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>created_at : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->created_at}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>updated_at : </i><b>
                        </td>
                        <td>{{$funcionario->pessoa->updated_at}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
