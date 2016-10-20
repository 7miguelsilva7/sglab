@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Siem</div>
                <div class="panel-body">
                

            <form method = 'get' action = '{{url("siem")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
           <form class="form-horizontal" role="form" method="POST" action="{{ url('/siem') }}">
                        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('siem') ? ' has-error' : '' }}">
                            <label for="siem" class="col-md-4 control-label">Número siem</label>

                            <div class="col-md-6">
                                <input id="siem" type="number_format" class="form-control" name="siem" required>

                                @if ($errors->has('siem'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('siem') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                
                        <div class="form-group{{ $errors->has('escola_nome') ? ' has-error' : '' }}">
                            <label for="escola_nome" class="col-md-4 control-label">Nome da Escola</label>

                            <div class="col-md-6">
                                <input id="escola_nome" class="form-control" name="escola_nome" required>

                                @if ($errors->has('escola_nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('escola_nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


  
                        <div class="form-group{{ $errors->has('escola_tipo') ? ' has-error' : '' }}">
                            <label for="escola_tipo" class="col-md-4 control-label">Tipo</label>

                            <div class="col-md-6">
                                {!! Form::select('escola_tipo', Config::get('enums.escola_tipo')) !!}

                                @if ($errors->has('escola_tipo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('escola_tipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  


                        <div class="form-group{{ $errors->has('cod_ext') ? ' has-error' : '' }}">
                            <label for="cod_ext" class="col-md-4 control-label">Tipo</label>

                            <div class="col-md-6">
                                {!! Form::number('cod_ext', '0') !!}

                                @if ($errors->has('cod_ext'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cod_ext') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                 </p>
                

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Adicionar
                                </button>
                            </div>
                        </div>

            </form>

                   
 </div>
            </div>
        </div>
    </div>
</div>    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
@endsection
