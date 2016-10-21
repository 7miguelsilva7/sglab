@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">{{$ocupacao->nome}}  </br>
                </div>
                <div class="panel-body">
   
            <form method = 'get' action = '{{url("funcionario")}}'>
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
                            <b><i>nome : </i></b>
                        </td>
                        <td>{{$ocupacao->nome}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection