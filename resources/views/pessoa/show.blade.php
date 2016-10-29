@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">{{$pessoa->nome}}  </br> Última Edição: {{$pessoa->updated_at}}
                </div>
                <div class="panel-body">
   
            <form method = 'get' action = '{{url("pessoa")}}'>
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
                            <b><i>nis : </i></b>
                        </td>
                        <td>{{$pessoa->nis}}</td>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection