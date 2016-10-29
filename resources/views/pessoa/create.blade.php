@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Pessoa</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("pessoa")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
  
            <form method = 'POST' action = '{{url("pessoa")}}'>
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
      
                    <label for="nome">nome</label>
                    <input id="nome" name = "nome" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="cep">cep</label>
                    <input id="cep" name = "cep" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="distrito">distrito</label>
                    <input id="distrito" name = "distrito" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="bairro">bairro</label>
                    <input id="bairro" name = "bairro" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="logradouro">logradouro</label>
                    <input id="logradouro" name = "logradouro" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="numero">numero</label>
                    <input id="numero" name = "numero" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="complemento">complemento</label>
                    <input id="complemento" name = "complemento" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="fone">fone</label>
                    <input id="fone" name = "fone" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="cel1">cel1</label>
                    <input id="cel1" name = "cel1" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="cel2">cel2</label>
                    <input id="cel2" name = "cel2" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="email">email</label>
                    <input id="email" name = "email" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="cpf">cpf</label>
                    <input id="cpf" name = "cpf" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="rg">rg</label>
                    <input id="rg" name = "rg" type="text" class="form-control">
                </div>

                  
                <div class="form-group">
                    <label for="nis">nis</label>
                    <input id="nis" name = "nis" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="expedicao_rg">expedicao_rg</label>
                    <input id="expedicao_rg" name = "expedicao_rg" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="naturalidade">naturalidade</label>
                    <input id="naturalidade" name = "naturalidade" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="nascionalidade">nascionalidade</label>
                    <input id="nascionalidade" name = "nascionalidade" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="escolaridade">escolaridade</label>
                    <input id="escolaridade" name = "escolaridade" type="text" class="form-control">
                </div>
                
            
                <div class="form-group">
                    <label for="data_nascimento">data_nascimento</label>
                    <input id="data_nascimento" name = "data_nascimento" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="nome_mae">nome_mae</label>
                    <input id="nome_mae" name = "nome_mae" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="nome_pai">nome_pai</label>
                    <input id="nome_pai" name = "nome_pai" type="text" class="form-control">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection