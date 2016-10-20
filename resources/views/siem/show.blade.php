@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Siem</div>
                <div class="panel-body">
                
                        <h3>{{$siem->siem}} - Escola Municipal {{$siem->escola_nome}}</h3>
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
