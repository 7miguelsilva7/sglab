<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Funcionario</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Funcionario</h1>
            <form method = 'get' action = '{{url("funcionario")}}'>
                <button class = 'btn btn-danger'>Funcionario Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("funcionario")}}/{{$funcionario->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="usuario">usuario</label>
                    <input id="usuario" name = "usuario" type="text" class="form-control" value="{{$funcionario->usuario}}">
                </div>
                
                <div class="form-group">
                    <label for="vinculo">vinculo</label>
                    <input id="vinculo" name = "vinculo" type="text" class="form-control" value="{{$funcionario->vinculo}}">
                </div>
                
                <div class="form-group">
                    <label for="status_funcionario">status_funcionario</label>
                    <input id="status_funcionario" name = "status_funcionario" type="text" class="form-control" value="{{$funcionario->status_funcionario}}">
                </div>
                
                
                <div class="form-group">
                    <label>siems Select</label>
                    <select name = 'siem_id' class = "form-control">
                        @foreach($siems as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>ocupacaos Select</label>
                    <select name = 'ocupacao_id' class = "form-control">
                        @foreach($ocupacaos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>pessoas Select</label>
                    <select name = 'pessoa_id' class = "form-control">
                        @foreach($pessoas as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
