<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Pessoa</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Pessoa</h1>
            <br>
            <form method = 'get' action = '{{url("pessoa")}}'>
                <button class = 'btn btn-primary'>Pessoa Index</button>
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
                        <td>{{$pessoa->nome}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>cep : </i></b>
                        </td>
                        <td>{{$pessoa->cep}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>distrito : </i></b>
                        </td>
                        <td>{{$pessoa->distrito}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>bairro : </i></b>
                        </td>
                        <td>{{$pessoa->bairro}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>logradouro : </i></b>
                        </td>
                        <td>{{$pessoa->logradouro}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>numero : </i></b>
                        </td>
                        <td>{{$pessoa->numero}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>complemento : </i></b>
                        </td>
                        <td>{{$pessoa->complemento}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fone : </i></b>
                        </td>
                        <td>{{$pessoa->fone}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>cel1 : </i></b>
                        </td>
                        <td>{{$pessoa->cel1}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>cel2 : </i></b>
                        </td>
                        <td>{{$pessoa->cel2}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>email : </i></b>
                        </td>
                        <td>{{$pessoa->email}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>cpf : </i></b>
                        </td>
                        <td>{{$pessoa->cpf}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>rg : </i></b>
                        </td>
                        <td>{{$pessoa->rg}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>expedicao_rg : </i></b>
                        </td>
                        <td>{{$pessoa->expedicao_rg}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>naturalidade : </i></b>
                        </td>
                        <td>{{$pessoa->naturalidade}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>nascionalidade : </i></b>
                        </td>
                        <td>{{$pessoa->nascionalidade}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>escolaridade : </i></b>
                        </td>
                        <td>{{$pessoa->escolaridade}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>data_nascimento : </i></b>
                        </td>
                        <td>{{$pessoa->data_nascimento}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>nome_mae : </i></b>
                        </td>
                        <td>{{$pessoa->nome_mae}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>nome_pai : </i></b>
                        </td>
                        <td>{{$pessoa->nome_pai}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
