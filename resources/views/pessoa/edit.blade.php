<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Pessoa</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Pessoa</h1>
            <form method = 'get' action = '{{url("pessoa")}}'>
                <button class = 'btn btn-danger'>Pessoa Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("pessoa")}}/{{$pessoa->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nome">nome</label>
                    <input id="nome" name = "nome" type="text" class="form-control" value="{{$pessoa->nome}}">
                </div>
                
                <div class="form-group">
                    <label for="cep">cep</label>
                    <input id="cep" name = "cep" type="text" class="form-control" value="{{$pessoa->cep}}">
                </div>
                
                <div class="form-group">
                    <label for="distrito">distrito</label>
                    <input id="distrito" name = "distrito" type="text" class="form-control" value="{{$pessoa->distrito}}">
                </div>
                
                <div class="form-group">
                    <label for="bairro">bairro</label>
                    <input id="bairro" name = "bairro" type="text" class="form-control" value="{{$pessoa->bairro}}">
                </div>
                
                <div class="form-group">
                    <label for="logradouro">logradouro</label>
                    <input id="logradouro" name = "logradouro" type="text" class="form-control" value="{{$pessoa->logradouro}}">
                </div>
                
                <div class="form-group">
                    <label for="numero">numero</label>
                    <input id="numero" name = "numero" type="text" class="form-control" value="{{$pessoa->numero}}">
                </div>
                
                <div class="form-group">
                    <label for="complemento">complemento</label>
                    <input id="complemento" name = "complemento" type="text" class="form-control" value="{{$pessoa->complemento}}">
                </div>
                
                <div class="form-group">
                    <label for="fone">fone</label>
                    <input id="fone" name = "fone" type="text" class="form-control" value="{{$pessoa->fone}}">
                </div>
                
                <div class="form-group">
                    <label for="cel1">cel1</label>
                    <input id="cel1" name = "cel1" type="text" class="form-control" value="{{$pessoa->cel1}}">
                </div>
                
                <div class="form-group">
                    <label for="cel2">cel2</label>
                    <input id="cel2" name = "cel2" type="text" class="form-control" value="{{$pessoa->cel2}}">
                </div>
                
                <div class="form-group">
                    <label for="email">email</label>
                    <input id="email" name = "email" type="text" class="form-control" value="{{$pessoa->email}}">
                </div>
                
                <div class="form-group">
                    <label for="cpf">cpf</label>
                    <input id="cpf" name = "cpf" type="text" class="form-control" value="{{$pessoa->cpf}}">
                </div>
                
                <div class="form-group">
                    <label for="rg">rg</label>
                    <input id="rg" name = "rg" type="text" class="form-control" value="{{$pessoa->rg}}">
                </div>
                
                <div class="form-group">
                    <label for="expedicao_rg">expedicao_rg</label>
                    <input id="expedicao_rg" name = "expedicao_rg" type="text" class="form-control" value="{{$pessoa->expedicao_rg}}">
                </div>
                
                <div class="form-group">
                    <label for="naturalidade">naturalidade</label>
                    <input id="naturalidade" name = "naturalidade" type="text" class="form-control" value="{{$pessoa->naturalidade}}">
                </div>
                
                <div class="form-group">
                    <label for="nascionalidade">nascionalidade</label>
                    <input id="nascionalidade" name = "nascionalidade" type="text" class="form-control" value="{{$pessoa->nascionalidade}}">
                </div>
                
                <div class="form-group">
                    <label for="escolaridade">escolaridade</label>
                    <input id="escolaridade" name = "escolaridade" type="text" class="form-control" value="{{$pessoa->escolaridade}}">
                </div>
                
                <div class="form-group">
                    <label for="data_nascimento">data_nascimento</label>
                    <input id="data_nascimento" name = "data_nascimento" type="text" class="form-control" value="{{$pessoa->data_nascimento}}">
                </div>
                
                <div class="form-group">
                    <label for="nome_mae">nome_mae</label>
                    <input id="nome_mae" name = "nome_mae" type="text" class="form-control" value="{{$pessoa->nome_mae}}">
                </div>
                
                <div class="form-group">
                    <label for="nome_pai">nome_pai</label>
                    <input id="nome_pai" name = "nome_pai" type="text" class="form-control" value="{{$pessoa->nome_pai}}">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
