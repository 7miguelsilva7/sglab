@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Escola</div>
                <div class="panel-body">
                
            <form method = 'get' action = '{{url("escola")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("escola")}}'>
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
                    <label>siems Select</label>
                    <select name = 'siem_id' class = 'form-control'>
                        <option value=""></option>
                        @foreach($siems as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="inep">inep</label>
                    <input id="inep" name = "inep" type="text" class="form-control">
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
                    <label for="email">email</label>
                    <input id="email" name = "email" type="text" class="form-control">
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
                    <label for="sigla">sigla</label>
                    <input id="sigla" name = "sigla" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="possui_internet_escola">possui_internet_escola</label>
                    <input id="possui_internet_escola" name = "possui_internet_escola" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="tipo_internet_escola">tipo_internet_escola</label>
                    <input id="tipo_internet_escola" name = "tipo_internet_escola" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="status_escola">status_escola</label>
                    <input id="status_escola" name = "status_escola" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="possui_lab">possui_lab</label>
                    <input id="possui_lab" name = "possui_lab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="possui_analista">possui_analista</label>
                    <input id="possui_analista" name = "possui_analista" type="text" class="form-control">
                </div>
                
                
                <div class="form-group">
                    <label>pessoas Select</label>
                    <select name = 'pessoa_id' style="no" class = 'form-control'>
                        <option value="2">NÃO POSSUI</option>
                        @foreach($pessoas as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>

                <!--Campo desnecessário-->
                <div class="form-group">
                    <input id="pessoa_id_analista" name = "pessoa_id_analista" type="hidden" value="0" class="form-control">
                </div>
                <!--FIM Campo desnecessário-->

                <div class="form-group">
                    <label for="tipo_sala">tipo_sala</label>
                    <input id="tipo_sala" name = "tipo_sala" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="pregao1">pregao1</label>
                    <input id="pregao1" name = "pregao1" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="pregao2">pregao2</label>
                    <input id="pregao2" name = "pregao2" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="pregao3">pregao3</label>
                    <input id="pregao3" name = "pregao3" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="pregao4">pregao4</label>
                    <input id="pregao4" name = "pregao4" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="possui_internet_lab">possui_internet_lab</label>
                    <input id="possui_internet_lab" name = "possui_internet_lab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="tipo_internet_lab">tipo_internet_lab</label>
                    <input id="tipo_internet_lab" name = "tipo_internet_lab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="lab_montado">lab_montado</label>
                    <input id="lab_montado" name = "lab_montado" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="qt_computadores_lab">qt_computadores_lab</label>
                    <input id="qt_computadores_lab" name = "qt_computadores_lab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="qt_monitorelab">qt_monitorelab</label>
                    <input id="qt_monitorelab" name = "qt_monitorelab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="status_lab">status_lab</label>
                    <input id="status_lab" name = "status_lab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="ar_condicionado_lab">ar_condicionado_lab</label>
                    <input id="ar_condicionado_lab" name = "ar_condicionado_lab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="impressora_lab">impressora_lab</label>
                    <input id="impressora_lab" name = "impressora_lab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="qt_notebook_lab">qt_notebook_lab</label>
                    <input id="qt_notebook_lab" name = "qt_notebook_lab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="roteador_lab">roteador_lab</label>
                    <input id="roteador_lab" name = "roteador_lab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="switch_lab">switch_lab</label>
                    <input id="switch_lab" name = "switch_lab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="qt_cadeiras_lab">qt_cadeiras_lab</label>
                    <input id="qt_cadeiras_lab" name = "qt_cadeiras_lab" type="text" class="form-control">
                </div>
              
                <button class = 'btn btn-primary' type ='submit'>Adicionar</button>
            </form>
        </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection
