@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Esditar Funcionáro</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("funcionario")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("funcionario")}}/{{$funcionario->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
             
                <div class="form-group">
  
                    <input type = 'hidden' id="usuario" name = "usuario" type="text" class="form-control" value="{{$funcionario->usuario}}">
                </div>
               
             
                
<div class="form-group">
    <label>Selecione uma Escola</label>
    <select name = 'siem_id' class = "form-control">
        <option value="{{$funcionario->siem_id}}">{{$funcionario->siem->nome}}</option>
        @foreach($siems->except($funcionario->siem_id) as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

               
<div class="form-group">
    <label>Selecione uma Ocupação</label>
    <select name = 'ocupacao_id' class = "form-control">
        <option value="{{$funcionario->ocupacao_id}}">{{$funcionario->ocupacao->nome}}</option>
        @foreach($ocupacaos->except($funcionario->ocupacao_id) as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Selecione uma Ocupação</label>
    <select name = 'pessoa_id' class = "form-control">
        <option value="{{$funcionario->pessoa_id}}">{{$funcionario->pessoa->nome}}</option>
        @foreach($pessoas->except($funcionario->pessoa_id) as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>


</div>

                
    <div class="form-group">
    <label>Vínculo</label>
    <select name = 'vinculo' class = "form-control">
        <option value="{{$funcionario->vinculo}}">{{$funcionario->vinculo}}</option>
        <option value="CONTRATO">CONTRATO</option>
        <option value="EFETIVO">EFETIVO</option>
    </select>
    </div>
                
                <div class="form-group">
                    <label for="status_funcionario">status_funcionario</label>

                <div class="form-group">
                    <input value= "{{$funcionario->status_funcionario}}" id="status_funcionario" name = "status_funcionario" type="text" class="form-control">
                </div>
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Atualizar</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
@endsection