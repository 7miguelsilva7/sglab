@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Siem</div>
                <div class="panel-body">
                
                                            <h1>Editar Siem</h1>

            <form method = 'get' action = '{{url("siem")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("siem")}}/{{$siem->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>


                <div class="form-group">
  
                    <input type = 'hidden' id="usuario" name = "usuario" type="text" class="form-control" value="{{$siem->usuario}}">
                </div>
               
                
                <div class="form-group">
                    <label for="siem">siem</label>
                    <input id="siem" name = "siem" type="number" class="form-control" value="{{$siem->siem}}" required>
                </div>
                
                <div class="form-group">
                    <label for="nome">nome</label>
                    <input id="nome" name = "nome" type="text" class="form-control" value="{{$siem->nome}}">
                </div>
                
                <div class="form-group">
                    <label for="tipo_escola">Tipo de Escola</label>
                    <input id="tipo_escola" name = "tipo_escola" type="text" class="form-control" value="{{$siem->tipo_escola}}">
                </div>
                
                <div class="form-group">
                    <label for="cod_ext">cod_ext</label>
                    
                    <input id="cod_ext" name = "cod_ext" type="text" class="form-control" value="{{$siem->cod_ext}}">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Atualizar</button>
            </form>
</div>
            </div>
        </div>
    </div>
</div>    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection
