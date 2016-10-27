@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Escola</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("funcionario")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("funcionario")}}'>
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
                    <select required name = 'siem_id' class = 'form-control'>
                        <option value=""></option>
          
                        @foreach($siems as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Ocupacão</label>
                    <select required name = 'ocupacao_id' class = 'form-control'>
                        <option value=""></option>
                        @foreach($ocupacaos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Funcionário</label>
                    <select required name = 'pessoa_id' class = 'form-control'>
                        <option value=""></option>
                        @foreach($pessoas as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="vinculo">Vínculo</label>
                     </br>{!! Form::select('vinculo', Config::get('enums.vinculo')) !!}
                </div>
                
                <div class="form-group">
                    <label for="status_funcionario">status_funcionario</label>
                     </br>{!! Form::select('status_funcionario', Config::get('enums.status_ativo')) !!}
                </div>
                

                
                <button class = 'btn btn-primary' type ='submit'>Salvar</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection