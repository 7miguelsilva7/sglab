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
                
             
              <!-- campo verifica usuário logado, identificando quem está inserindo registro -->
<?php
                        $usuario_logado = Auth::user()->name;
                        { ?>       

                <div class="form-group">
                    <input type = 'hidden' value= "{{$usuario_logado}}" id="usuario" name = "usuario" type="text" class="form-control">
                </div>

<?php } ?>
<!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->
               
             
                
<div class="form-group">
    <label>Selecione uma Escola</label>
    <select name = 'siem_id' class = "form-control" id="select1" >
        <option value="{{$funcionario->siem_id}}">{{$funcionario->siem->nome}}</option>
        @foreach($siems->except($funcionario->siem_id) as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

               
<div class="form-group">
    <label>Selecione uma Ocupação</label>
    <select name = 'ocupacao_id' class = "form-control" id="select2">
        <option value="{{$funcionario->ocupacao_id}}">{{$funcionario->ocupacao->nome}}</option>
        @foreach($ocupacaos->except($funcionario->ocupacao_id) as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Selecione uma Ocupação</label>
    <select name = 'pessoa_id' class = "form-control" id="select3">
        <option value="{{$funcionario->pessoa_id}}">{{$funcionario->pessoa->nome}}</option>
        @foreach($pessoas->except($funcionario->pessoa_id) as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>


</div>

                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                            <label for="vinculo">Vínculo</label>
                    <select name = 'vinculo' class = 'form-control' required>
                        <option value="{{$funcionario->vinculo}}">{{$funcionario->vinculo}}</option>
                        <option value="CONTRATADO">CONTRATADO</option>
                        <option value="EFETIVO">EFETIVO</option>
                        <option value="ESTAGIÁRIO">ESTAGIÁRIO</option>
                        <option value="CONCURSADO">CONCURSADO</option>
                        <option value="TEMPORÁRIO">TEMPORÁRIO</option>
                    </select>
                </div>
           
                <div class="form-group">
                <div class="col-md-6"> 
                
                    <label for="status_funcionario">status_funcionario</label>
                    <select name = 'status_funcionario' class = 'form-control' required>
                        <option value="{{$funcionario->status_funcionario}}">{{$funcionario->status_funcionario}}</option>
                        <option value="ATIVO">ATIVO</option>
                        <option value="INATIVO">INATIVO</option>
                    </select>
                    </div>
                    </div>
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