@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 
        <title>Pessoa</title>
    </head>
    <body>
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Pessoa</div>

                <div class="panel-body">
            <h2>Pessoa </h2>
            <form class = 'col s3' method = 'get' action = '{{url("pessoa")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Novo <b>+</b></button>
            </form>
            <br>

            <table class = "table table-striped table-bordered">
                <thead>
                    
 
                    <th>Nome</th>

                    
                    <th>Contato</th>
                    
                    
                    <th>E-mail</th>

                    
<!--
                    
                    <th>cep</th>
                    
                    
                    <th>bairro</th>
                    
                    <th>logradouro</th>
                    
                    <th>numero</th>
                    
                    <th>complemento</th>
                    
                                      <th>Distrito</th>
                    <th>Cel 2</th>

                                        <th>Telefone</th>


                    <th>cpf</th>
                    
                    <th>rg</th>
                    
                    <th>expedicao_rg</th>
                    
                    <th>naturalidade</th>
                    
                    <th>nascionalidade</th>
                    
                    <th>escolaridade</th>
                    
                    <th>data_nascimento</th>
                    
                    <th>nome_mae</th>
                    
                    <th>nome_pai</th>
                    
                    -->
                    
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($pessoas as $Pessoa)
                    <tr>
                        
                        <td>{{$Pessoa->nome}}</td>

                        
                        <td>{{$Pessoa->cel1}}</td>
                        
                        
                        <td>{{$Pessoa->email}}</td>



<!--
                        
                        <td>{{$Pessoa->cep}}</td>
                        
                        <td>{{$Pessoa->distrito}}</td>
                        
                        <td>{{$Pessoa->bairro}}</td>
                        
                        <td>{{$Pessoa->logradouro}}</td>
                        
                        <td>{{$Pessoa->numero}}</td>
                        
                        <td>{{$Pessoa->complemento}}</td>
                        
                                               <td>{{$Pessoa->distrito}}</td>
                                        
                                        
                                         <td>{{$Pessoa->fone}}</td>


                                                <td>{{$Pessoa->cel2}}</td>

                        <td>{{$Pessoa->cpf}}</td>
                        
                        <td>{{$Pessoa->rg}}</td>
                        
                        <td>{{$Pessoa->expedicao_rg}}</td>
                        
                        <td>{{$Pessoa->naturalidade}}</td>
                        
                        <td>{{$Pessoa->nascionalidade}}</td>
                        
                        <td>{{$Pessoa->escolaridade}}</td>
                        
                        <td>{{$Pessoa->data_nascimento}}</td>
                        
                        <td>{{$Pessoa->nome_mae}}</td>
                        
                        <td>{{$Pessoa->nome_pai}}</td>
                        
                        -->

                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/pessoa/{{$Pessoa->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/pessoa/{{$Pessoa->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/pessoa/{{$Pessoa->id}}'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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