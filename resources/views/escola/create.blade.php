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
                        <div class="row">
                            <div class="col-md-12">
                            <label for="escola_tipo">Selecione a Escola</label>
                                <select class="form-control" name="escola_tipo" id="select1" required>
                                <option value=""></option>
                                @foreach($siems as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                                    
                                </select>
                            </div> 
                           
                        </div><!--/row-->
                      
                        </div>
<hr>
                        <h3>Dados da Escola</h3>
<hr>                
                <div class="form-group">

                <div class="row">
                <div class="col-md-6">

                    <label for="inep">Inep</label>
                    <input required id="inep" name = "inep" type="number" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">

                    <label for="cep">Cep</label>
                    <input id="cep" name = "cep" type="number" class="form-control">
                
                </div> 
                </div> 
                           
                        </div><!--/row-->
                      
                        </div>                
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                            <label for="distrito">Distrito</label>
                                <select class="form-control" name="distrito" id="select2" required>
                                <option value=""></option>
                                <option value="ABÓBORA">ABÓBORA</option>
                                <option value="ITAMOTINGA">ITAMOTINGA</option>
                                <option value="JUNCO">JUNCO</option>
                                <option value="JUREMAL">JUREMAL</option>
                                <option value="MANDACARU">MANDACARU</option>
                                <option value="MANIÇOBA">MANIÇOBA</option>
                                <option value="MASSAROCA">MASSAROCA</option>
                                <option value="PINHÕES">PINHÕES</option>
                                <option value="SEDE">SEDE</option>

                               
                                </select>
                            </div> 
                           
                <div class="form-group">
                <div class="col-md-6">                   
                <label for="bairro">Bairro</label>
                    <input required id="bairro" name = "bairro" type="text" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">                    
                            <label for="logradouro">Logradouro</label>
                    <input id="logradouro" name = "logradouro" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">    
                                    <label for="numero">Numero</label>
                    <input id="numero" name = "numero" type="number" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input id="complemento" name = "complemento" type="text" class="form-control">
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">    

                    <label for="fone">Fone</label>
                    <input id="fone" name = "fone" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">                
                    <label for="email">Email</label>
                    <input id="email" name = "email" type="email" class="form-control">
                </div>
                </div>
                </div>
                </div>
                

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">    
                            <label for="cel1">Cel1</label>
                    <input id="cel1" name = "cel1" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">    
                <label for="cel2">Cel2</label>
                    <input id="cel2" name = "cel2" type="text" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">                 
                    <label for="sigla">Sigla</label>
                    <input id="sigla" name = "sigla" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">                 
                
                    <label for="possui_internet_escola">Possui internet na Escola</label>
                    <select class="form-control" name="possui_internet_escola" id="select2" required>
                                <option value=""></option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select>
                    </div>
                    </div>
                    </div>
                    </div>
                

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">   
                            <label for="tipo_internet_escola">Tipo Internet da Escola</label>
<select class="form-control" name="possui_internet_escola" id="select2" required>
                                <option value=""></option>
                                <option value="NENHUMA">NENHUMA</option>
                                <option value="CLARO">CLARO</option>
                                <option value="PROJETO BANDA LARGA NAS ESCOLAS">PROJETO BANDA LARGA NAS ESCOLAS</option>
                                <option value="GSAT">GSAT</option>
                                <option value="OUTRO">OUTRO</option>
                                <option value="RÁDIO">RÁDIO</option>
                                <option value="TIM">TIM</option>
                                <option value="VELOX">VELOX</option>
                                <option value="VIVO">VIVO</option>
                                                  
                    </select>                
                    </div>
                
                <div class="form-group">
                <div class="col-md-6">   

                    <label for="status_escola">Status Escola</label>
<select class="form-control" name="possui_internet_escola" id="select2" required>
                                <option value="ATIVO">ATIVO</option>
                                <option value="INATIVO">INATIVO</option>
                               

                               
                    </select>                
                    </div>
                    </div>
                    </div>
                    </div>
                

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                                                <label for="possui_lab">Possui Lab</label>
                    <select class="form-control" name="possui_internet_escola" id="select2" required>
                                <option value=""></option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select> 
                                   </div>
                
                            <div class="form-group">
                            <div class="col-md-6"> 
                
                    <label for="possui_analista">Possui Analista</label>
                             <label for="possui_lab">Possui Lab</label>
                    <select class="form-control" name="possui_internet_escola" id="select2" required>
                                <option value=""></option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select> 
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                
                
                <div class="form-group">
                    <label>Analista em Educação</label>
                    <select name = 'pessoa_id' style="no" class = 'form-control' id="select3" required>
                        <option value="2">NÃO POSSUI</option>
                        @foreach($pessoas->except($pessoas->id=2) as $key => $value)
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
                    <label for="tipo_sala">Tipo Sala</label>
                    </br>{!! Form::select('tipo_sala', Config::get('enums.tipo_sala')) !!}
                </div>
                
                <div class="form-group">
                    <label for="pregao1">Pregao1</label>
                    </br>{!! Form::select('pregao1', Config::get('enums.pregao')) !!}
                </div>
                
                <div class="form-group">
                    <label for="pregao2">Pregao2</label>
                    </br>{!! Form::select('pregao2', Config::get('enums.pregao')) !!}
                </div>
                
                <div class="form-group">
                    <label for="pregao3">Pregao3</label>
                    </br>{!! Form::select('pregao3', Config::get('enums.pregao')) !!}
                </div>
                
                <div class="form-group">
                    <label for="pregao4">Pregao4</label>
                    </br>{!! Form::select('pregao4', Config::get('enums.pregao')) !!}
                </div>
                
                <div class="form-group">
                    <label for="possui_internet_lab">Possui Internet no lab</label>
                    </br>{!! Form::select('possui_internet_lab', Config::get('enums.sim_nao')) !!}
                </div>
                
                <div class="form-group">
                    <label for="tipo_internet_lab">Tipo Internet Lab</label>
                    </br>{!! Form::select('tipo_internet_lab', Config::get('enums.tipo_internet')) !!}
                </div>
                
                <div class="form-group">
                    <label for="lab_montado">Lab Montado</label>
                    </br>{!! Form::select('lab_montado', Config::get('enums.sim_nao')) !!}
                </div>
                
                <div class="form-group">
                    <label for="qt_computadores_lab">Qt. computadores Lab</label>
                    <input id="qt_computadores_lab" name = "qt_computadores_lab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="qt_monitorelab">Qt. Monitores Lab</label>
                    <input id="qt_monitorelab" name = "qt_monitorelab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="status_lab">Status Lab</label>
                    </br>{!! Form::select('status_lab', Config::get('enums.status_vazio')) !!}
                </div>
                
                <div class="form-group">
                    <label for="ar_condicionado_lab">Ar Condicionado Lab</label>
                    </br>{!! Form::select('ar_condicionado_lab', Config::get('enums.sim_nao')) !!}
                </div>
                
                <div class="form-group">
                    <label for="impressora_lab">Impressora Lab</label>
                    </br>{!! Form::select('impressora_lab', Config::get('enums.sim_nao')) !!}
                </div>
                
                <div class="form-group">
                    <label for="qt_notebook_lab">Qt. Notebook Lab</label>
                    <input id="qt_notebook_lab" name = "qt_notebook_lab" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="roteador_lab">Roteador Lab</label>
                    </br>{!! Form::select('roteador_lab', Config::get('enums.sim_nao')) !!}
                </div>
                
                <div class="form-group">
                    <label for="switch_lab">Switch Lab</label>
                    </br>{!! Form::select('switch_lab', Config::get('enums.switch')) !!}
                </div>
                
                <div class="form-group">
                    <label for="qt_cadeiras_lab">Qt. Cadeiras Lab</label>
                    <input id="qt_cadeiras_lab" name = "qt_cadeiras_lab" type="text" class="form-control">
                </div>
              
                <button class = 'btn btn-primary' type ='submit'>Salvar</button>
            </form>
        </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@endsection
