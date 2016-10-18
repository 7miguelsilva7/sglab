@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Siem</title>
    </head>
    <body>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Siem</div>

                <div class="panel-body">            
                <h1>{{$siem->siem}} - Escola Municipal {{$siem->escola_nome}}</h1>
            <br>
            <form method = 'get' action = '{{url("siem")}}'>
                <button class = 'btn btn-primary'>Voltar</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>siem : </i></b>
                        </td>
                        <td>{{$siem->siem}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>escola_nome : </i></b>
                        </td>
                        <td>{{$siem->escola_nome}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>escola_tipo : </i></b>
                        </td>
                        <td>{{$siem->escola_tipo}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>cod_ext : </i></b>
                        </td>
                        <td>{{$siem->cod_ext}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
 </div>
            </div>
        </div>
    </div>
</div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection
