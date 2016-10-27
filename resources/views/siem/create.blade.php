@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Siem</div>
                <div class="panel-body">
                

            <form method = 'get' action = '{{url("siem")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
           <form  role="form" method="POST" action="{{ url('/siem') }}">
                        {{ csrf_field() }}
                        
                       <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                            <label for="escola_tipo">Número Siem</label>

                                <input type="number" id="siem" type="number_format" class="form-control" name="siem"  unique>
                            </div> 
                           
                        </div><!--/row-->
                        </div>

                
                        <div class="form-group">
                            <label for="escola_tipo">Nome da Escola</label>

                                <input id="escola_nome" class="form-control" name="escola_nome" required>

                        </div>

                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                            <label for="escola_tipo">Tipo de Escola</label>
                                <select class="form-control" name="escola_tipo" id="select2" required>
                                <option value="ESCOLA">ESCOLA</option>
                                <option value="EMEI">EMEI</option>
                                <option value="EXTENSÃO">EXTENSÃO</option>
                               
                                </select>
                            </div> 
                           
                        </div><!--/row-->
                      
                        </div>

                        <div class="form-group">
                        <div class="row">
                       
                        <div class="col-md-5">
                        
                        <label for="escola_tipo">Cod. da Matriz </br> <i>(Preencher apenas se extensão)</i></label>

                               <input type="number" id="cod_ext" type="number_format" class="form-control"  name="cod_ext">
                        </div>  
                        </div>  
                        </div>  

                 </p>
                

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    Adicionar
                                </button>
                            </div>
                        </div>

            </form>

                   
 </div>
            </div>
        </div>
    </div>
</div>    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection
