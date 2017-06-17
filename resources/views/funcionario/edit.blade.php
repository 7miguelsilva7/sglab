@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Esditar Funcionáro</div>
                <div class="panel-body">
            <form method = 'get' action = '{{url("funcionario")}}'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("funcionario")}}/{{$funcionario->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
             
        
<!-- campo verifica usuário logado, identificando quem está inserindo registro -->
<?php
                        $usuario_logado = Auth::user()->id;
                        $adicionado_por = Auth::user()->name;
                        { ?>       

                <div class="form-group">
                    <input type = 'hidden' value= "{{$usuario_logado}}" id="user_id" name = "user_id" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <input type = 'hidden' value= "{{$adicionado_por}}" id="adicionado_por" name = "adicionado_por" type="text" class="form-control">
                </div>
                

<?php } ?>
<!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->
     

 <?php
 if (Auth::user()->name == "Admin") { ?>
                
                <div class="form-group">
                    <label>Escola</label>
                    <select required name = 'siem_id' class = 'form-control' id="select1">
                        <option value=""></option>
          
                        @foreach($siems as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
<?php }  else { ?>

                <div class="form-group">
                    <input type = 'hidden' value= "{{ Auth::user()->id }}" id="siem_id" name = "siem_id" type="text" class="form-control">
                </div>
                
<?php } ?>
               
<div class="form-group">
    <label>Selecione uma Ocupação</label>
    <select name = 'ocupacao_id' class = "form-control" id="select2">
        <option value="{{$funcionario->ocupacao_id}}">{{$funcionario->ocupacao->nome}}</option>
        @foreach($ocupacaos->except($funcionario->ocupacao_id) as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Selecione um funcionário</label>
    <select name = 'pessoa_id' class = "form-control" id="select3">
        <option value="{{$funcionario->pessoa_id}}">{{$funcionario->pessoa->nome}}</option>
        @foreach($pessoas->except($funcionario->pessoa_id) as $key => $value)
        <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>


</div>

                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                            <label for="vinculo">Vínculo</label>
                    <select name = 'vinculo' class = 'form-control' required>
                        <option value="{{$funcionario->vinculo}}">{{$funcionario->vinculo}}</option>
                        <option value="CONTRATADO">CONTRATADO</option>
                        <option value="EFETIVO">EFETIVO</option>
                        <option value="ESTAGIÁRIO">ESTAGIÁRIO</option>
                        <option value="CONCURSADO">CONCURSADO</option>
                        <option value="TEMPORÁRIO">TEMPORÁRIO</option>
                    </select>
                </div>
           
                <div class="form-group">
                <div class="col-md-6"> 
                
                    <label for="status_funcionario">status_funcionario</label>
                    <select name = 'status_funcionario' class = 'form-control' required>
                        <option value="{{$funcionario->status_funcionario}}">{{$funcionario->status_funcionario}}</option>
                        <option value="ATIVO">ATIVO</option>
                        <option value="INATIVO">INATIVO</option>
                    </select>
                    </div>
                    </div>
                    </div>
                    </div>



<!--editando-->
       <div class="row">
        <div class="form-group">
        <div class="col-md-6">
    
            <label for="cargaHoraria">Carga Horária</label></br>
            {!! Form::select('cargaHoraria',  Config::get('enums.carga-horaria')) !!}
        </div>

        <div class="form-group">
        <div class="col-md-6">
        <label for="checkbox">Turno</label></br>
            <label class="checkbox-inline">
            <input type="checkbox" style="display: none;" name="turno[]" checked value=" ">
            </label>
            <label class="checkbox-inline">
            <input type="checkbox" name="turno[]" value="Manhã">Manhã
            </label>
            <label class="checkbox-inline">
            <input type="checkbox" name="turno[]" value="Tarde">Tarde
            </label>
            <label class="checkbox-inline">
            <input type="checkbox" name="turno[]" value="Noite">Noite
            </label>
        </div>
        </div>
        </div>
        </div>

 </br>
  <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 align="center" class="panel-title">
        <a  data-toggle="collapse" href="#collapse-disciplina">Disciplinas do Professor</a>
      </h4>
    </div>
    <div id="collapse-disciplina" class="panel-collapse collapse">

            <div class="checkbox">
            <input type="checkbox" style="display: none;" name="disciplina[]" checked value=" ">
            </div>
            <div class="checkbox">
            <label><input type="checkbox" name="disciplina[]" value="POR"> Português</label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" name="disciplina[]" value="MAT"> Matemática</label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" name="disciplina[]" value="CIE"> Ciências</label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" name="disciplina[]" value="HIS"> História</label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" name="disciplina[]" value="GEO"> Geografia</label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" name="disciplina[]" value="ART"> Artes</label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" name="disciplina[]" value="EMP"> Empreededorismo</label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" name="disciplina[]" value="ED. FIS"> Educação Física</label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" name="disciplina[]" value="ING"> Inglês</label>
            </div>
            <div class="checkbox">
            <label><input type="checkbox" name="disciplina[]" value="REL"> Ensino Religioso</label>
            </div>
                   
      <div class="panel-footer"></div>
    </div>
  </div>
</div> 
<!--editando-->


                
                
                <button class = 'btn btn-primary' type ='submit'>Atualizar</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>
@endsection

