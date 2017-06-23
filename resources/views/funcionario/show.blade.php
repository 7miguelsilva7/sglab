@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">{{$funcionario->pessoa->nome}}  </br>
                Última Edição: {{$funcionario->updated_at}}</div>
                <div class="panel-body">

    
            <form method = 'get' action = '{{url("funcionario")}}'>
                <button class = 'btn btn-primary'><i class="fa glyphicon glyphicon-arrow-left"></i> Voltar</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Campo</th>
                    <th>Descrição</th>
                </thead>
          
                <tbody>
                <tr>

                <!--ADIÇÃO DE DISCIPLINAS-->
                <td>
            <form method = 'post' action = '{{url("assignDisciplina")}}'>
            @if (count($errors) > 0)
             <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
             </div>
            @endif      
                            <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

            <b><i>Disciplinas : </i></p>
            <input  type="hidden" name="funcionario_id" value="{{$funcionario->id}}"></p>
            
            <select name="disciplina_id" required >
            <option  value="">Escolha a Disciplina</option>
            @foreach($disciplinas as $key => $value)

            <<option name="disciplina_id" value="{{$value->id}}">{{$value->nome}}</option>
            @endforeach    

            </select>
            <button class = 'btn btn-primary btn-xs' type ='submit'><i class="glyphicon glyphicon-plus"></i></button>  
                </form>                                         
                </td>
                <!--FIM ADIÇÃO DE DISCIPLINAS-->


                   <!--Remover disciplina-->
                        <td>
                        <form action = '{{url("removeDisciplina")}}'>
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                        @foreach($funcionario->disciplinas as $disciplina)
                        {{$disciplina->nome}}
                        <input  type="hidden" name="funcionario_id" value="{{$funcionario->id}}">
                        <input  type="hidden" name="disciplina_id" value="{{$disciplina->id}}">

                        <button type="submit" class = "btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </p>

                        @endforeach        
                        </form>                
                        </td>
                        </tr>
                    <!--fim Remover disciplina-->


                        <tr>
                         <!--ADIÇÃO DE TURNO-->
                <td>
            <form method = 'post' id="turno" action = '{{url("assignTurno")}}'>
                            <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

            @if (count($errors) > 0)
             <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
             </div>
            @endif      

            <b><i>Turno: </i></p>
            <input  type="hidden" name="funcionario_id" value="{{$funcionario->id}}"></p>
            
            <select name="turno_id" required >
            <option  value="">Escolha o Turno</option>
            @foreach($turnos as $key => $value)
            <option value="{{$value->id}}">{{$value->nome}}</option>
            @endforeach    
            </select>
            
            <button id="turno" class = 'btn btn-primary btn-xs' type ='submit'><i class="glyphicon glyphicon-plus"></i></button>  
                </form>                                         
                </td>
                <!--FIM ADIÇÃO DE TURNO-->


                        <!--REMOVER TURNO-->
                        <td>
                        <form action = '{{url("removeTurno")}}'>
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                        @foreach($funcionario->turnos as $turno)
                        {{$turno->nome}}
                        <input  type="hidden" name="funcionario_id" value="{{$funcionario->id}}">
                        <input  type="hidden" name="turno_id" value="{{$turno->id}}">

                        <button type="submit" class = "btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </p>
                        @endforeach
                        </form>
                        </td>
                        </tr>
                        <!--REMOVER TURNO-->


                        <tr>
                        <td>
                            <b><i>Adicionado por : </i></b>
                        </td>
                        <td>{{$funcionario->adicionado_por}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Vinculo : </i></b>
                        </td>
                        <td>{{$funcionario->vinculo}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Status Funcionario : </i></b>
                        </td>
                        <td>{{$funcionario->status_funcionario}}</td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>Siem : </i><b>
                        </td>
                        <td>{{$funcionario->siem->siem}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Escola: </i><b>
                        </td>
                        <td>{{$funcionario->siem->nome}}</td>
                        </tr>
                        
                                        
                        
                        <tr>
                        <td>
                            <b><i>Cargo/Função : </i><b>
                        </td>
                        <td>{{$funcionario->ocupacao->nome}}</td>
                        </tr>

                        <tr>
                        <td>
                            <b><i>Carga Horária : </i><b>
                        </td>
                        <td>{{$funcionario->cargaHoraria}}</td>
                        </tr>

                        <tr>
                        <td>
                            <b><i>Turno de Trabalho : </i><b>
                        </td>
                        <td>{{$funcionario->turno}}</td>
                        </tr>

                                         
                        
                    
<!--                        
                        
                        
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
                        </tr>-->
                        
                        <tr>
                        <td>
                            <b><i>Adicionado em : </i><b>
                        </td>
                        <td>{{$funcionario->created_at}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Atualizado em : </i><b>
                        </td>
                        <td>{{$funcionario->updated_at}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection


