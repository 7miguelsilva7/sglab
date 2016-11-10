@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">Escola Municipal {{$escola->siem->nome}}  </br>
  Última Edição: {{$escola->updated_at}}</div>
                <div class="panel-body">

    
                    
            <form method = 'get' action = '{{url("escola")}}'>
                <button class = 'btn btn-primary'><i class="fa glyphicon glyphicon-arrow-left"></i> Voltar</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Campo</th>
                    <th>Nome</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>Adicionado Por : </i></b>
                        </td>
                        <td>{{$escola->usuario}}</td>
                    </tr>
                    
 <tr>
                        <td>
                            <b><i>Siem : </i><b>
                        </td>
                        <td>{{$escola->siem->siem}}</td>
                        </tr>


                    <tr>
                        <td>
                            <b><i>Inep : </i></b>
                        </td>
                        <td>{{$escola->inep}}</td>
                    </tr>
                
                       
                        <tr>
                        <td>
                            <b><i>Escola : </i><b>
                        </td>
                        <td>{{$escola->siem->nome}}</td>
                        </tr>
                                            
                        <tr>
                        <td>
                            <b><i>Analista em Educação : </i><b>
                        </td>
                        <td>{{$escola->pessoa_id}}</td>
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
                            <b><i>tipo_sala : </i></b>
                        </td>
                        <td>{{$escola->tipo_sala}}</td>
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
                        
                        
                                                
                </tbody>
            </table>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection
