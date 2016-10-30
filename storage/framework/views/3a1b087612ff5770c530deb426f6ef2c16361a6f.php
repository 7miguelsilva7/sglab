<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Escola</div>
                <div class="panel-body">
            <form method = 'get' action = '<?php echo e(url("escola")); ?>'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
            <form method = 'POST' action = '<?php echo e(url("escola")); ?>/<?php echo e($escola->id); ?>/update'>
                <input type = 'hidden' name = '_token' value = '<?php echo e(Session::token()); ?>'>
                
               <!-- campo verifica usuário logado, identificando quem está inserindo registro -->
<?php
                        $usuario_logado = Auth::user()->name;
                        { ?>       

                <div class="form-group">
                    <input type = 'hidden' value= "<?php echo e($usuario_logado); ?>" id="usuario" name = "usuario" type="text" class="form-control">
                </div>

<?php } ?>
<!-- FIM de campo verifica usuário logado, identificando quem está inserindo registro FIM -->


                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                            <label for="siem_id">Selecione a Escola</label>
                                <select name = 'siem_id' class = "form-control" id="select2">
                                    <option value="<?php echo e($escola->siem_id); ?>"><?php echo e($escola->siem->nome); ?></option>
                                    <?php $__currentLoopData = $siems->except($escola->siem_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div> 
                           
                        </div><!--/row-->
                      
                        </div>
                        <div align="center">
<hr>
                        <h3>Dados da Escola</h3>
<hr>                

                        </div>

                <div class="form-group">

                <div class="row">
                <div class="col-md-6">

                    <label for="inep">Inep</label>
                    <input required id="inep" name = "inep" type="number" value="<?php echo e($escola->inep); ?>" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">

                    <label for="cep">Cep</label>
                    <input id="cep" name = "cep" type="number" value="<?php echo e($escola->cep); ?>" class="form-control">
                
                </div> 
                </div> 
                           
                        </div><!--/row-->
                      
                        </div>                
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">
                            <label for="distrito">Distrito</label>
                                <select class="form-control" name="distrito" id="select3" required>
                                <option value="<?php echo e($escola->distrito); ?>"><?php echo e($escola->distrito); ?></option>
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
                    <input required id="bairro" name = "bairro" type="text" value="<?php echo e($escola->bairro); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">                    
                            <label for="logradouro">Logradouro</label>
                    <input id="logradouro" name = "logradouro" type="text" value="<?php echo e($escola->logradouro); ?>" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">    
                                    <label for="numero">Numero</label>
                    <input id="numero" name = "numero" type="text" value="<?php echo e($escola->numero); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input id="complemento" name = "complemento" type="text" value="<?php echo e($escola->complemento); ?>" class="form-control">
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">    

                    <label for="fone">Fone</label>
                    <input id="fone" name = "fone" type="text" value-"<?php echo e($escola->fone); ?>" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">                
                    <label for="email">Email</label>
                    <input id="email" name = "email" type="email" value="<?php echo e($escola->email); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>
                

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">    
                            <label for="cel1">Cel1</label>
                    <input id="cel1" name = "cel1" type="text" value="<?php echo e($escola->cel1); ?>" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">    
                <label for="cel2">Cel2</label>
                    <input id="cel2" name = "cel2" type="text" value="<?php echo e($escola->cel2); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">                 
                    <label for="sigla">Sigla</label>
                    <input id="sigla" name = "sigla" type="text" value="<?php echo e($escola->sigla); ?>" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">                 
                
                    <label for="possui_internet_escola">Possui internet na Escola</label>
                    <select class="form-control" name="possui_internet_escola" id="select2" required>
                                <option value="<?php echo e($escola->possui_internet_escola); ?>"><?php echo e($escola->possui_internet_escola); ?></option>
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
<select class="form-control" name="tipo_internet_escola" id="select11" required>
                                <option value="<?php echo e($escola->tipo_internet_escola); ?>"><?php echo e($escola->tipo_internet_escola); ?></option>
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
                    <select class="form-control" name="status_escola" id="select2" required>
                                <option value="<?php echo e($escola->status_escola); ?>"><?php echo e($escola->status_escola); ?></option>
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
                    <select class="form-control" name="possui_lab" id="select2" required>
                                <option value="<?php echo e($escola->possui_lab); ?>"><?php echo e($escola->possui_lab); ?></option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                    </select> 
                                   </div>


                            <div class="form-group">
                            <div class="col-md-6"> 
                
                    <label for="possui_analista">Possui Analista</label>
                    <select class="form-control" name="possui_analista" id="select2" required>
                                <option value="<?php echo e($escola->possui_analista); ?>"><?php echo e($escola->possui_analista); ?></option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select> 
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                
                
                   <div class="form-group">
    <label>Analista em Educação</label>
    <select name = 'pessoa_id' class = "form-control" id="select4">
        <option value="<?php echo e($escola->pessoa_id); ?>"><?php echo e($escola->pessoa->nome); ?></option>
        <option value="2">NÃO POSSUI</option>
       <?php $__currentLoopData = $pessoas->except($escola->pessoa_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>


                            <!--Informações do laboratório-->
                                        
<div align="center">
    
                                <hr>
                <h3>Informações do Laboratório de Informática </br> <h5>(<i>Preencher apenas se possuir Laboratório</i>)</h5></h3>
                                <hr>  
</div>             

                <div class="form-group">
                    <label for="tipo_sala">Tipo Sala</label>
                    <select name = 'tipo_sala' style="no" class = 'form-control' id="select5" >
                        <option value="<?php echo e($escola->tipo_sala); ?>"><?php echo e($escola->tipo_sala); ?></option>
                        <option value="NÃO POSSUI">NÃO POSSUI</option>
                        <option value="SALA PRÓPRIA">SALA PRÓPRIA</option>
                        <option value="SALA DE AULA COMPARTILHADA">SALA DE AULA COMPARTILHADA</option>
                    </select>


                </div>
                
                
                <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">                     
                            <label for="pregao1">Pregao 1</label>
                    <select name = 'pregao1' style="no" class = 'form-control' id="select6" >
                        <option value="<?php echo e($escola->pregao1); ?>"><?php echo e($escola->pregao1); ?></option>
                        <option value="NÃO POSSUI">NÃO POSSUI</option>
                        <option value="38.2006">38.2006</option>
                        <option value="25.2007">25.2007</option>
                        <option value="45.2007">45.2007</option>
                        <option value="83.2008">83.2008</option>
                        <option value="69.2008">69.2008</option>
                        <option value="68.2009">68.2009</option>
                        <option value="71.2010">71.2010</option>
                        <option value="OUTRO">OUTRO</option>
                        
                    </select>                
                </div>

           
                <div class="form-group">
                            <div class="col-md-6">                     

                    <label for="pregao2">Pregao 2</label>
                    <select name = 'pregao2' style="no" class = 'form-control' id="select7" >
                        <option value="<?php echo e($escola->pregao2); ?>"><?php echo e($escola->pregao2); ?></option>
                        <option value="NÃO POSSUI">NÃO POSSUI</option>
                        <option value="38.2006">38.2006</option>
                        <option value="25.2007">25.2007</option>
                        <option value="45.2007">45.2007</option>
                        <option value="83.2008">83.2008</option>
                        <option value="69.2008">69.2008</option>
                        <option value="68.2009">68.2009</option>
                        <option value="71.2010">71.2010</option>
                        <option value="OUTRO">OUTRO</option>
                        
                    </select>                    
                    </div>
                    </div>
                    </div>
                    </div>

                <div class="form-group">
                <div class="row">
                <div class="col-md-6">                     


                    <label for="pregao3">Pregao 3</label>
                    <select name = 'pregao3' style="no" class = 'form-control' id="select8" >
                        <option value="<?php echo e($escola->pregao3); ?>"><?php echo e($escola->pregao3); ?></option>
                        <option value="NÃO POSSUI">NÃO POSSUI</option>
                        <option value="38.2006">38.2006</option>
                        <option value="25.2007">25.2007</option>
                        <option value="45.2007">45.2007</option>
                        <option value="83.2008">83.2008</option>
                        <option value="69.2008">69.2008</option>
                        <option value="68.2009">68.2009</option>
                        <option value="71.2010">71.2010</option>
                        <option value="OUTRO">OUTRO</option>
                        
                    </select>                    
                    </div>
                
                <div class="form-group">
                <div class="col-md-6">                     

                    <label for="pregao4">Pregao 4</label>
                    <select name = 'pregao4' style="no" class = 'form-control' id="select9" >
                        <option value="<?php echo e($escola->pregao4); ?>"><?php echo e($escola->pregao4); ?></option>
                        <option value="NÃO POSSUI">NÃO POSSUI</option>
                        <option value="38.2006">38.2006</option>
                        <option value="25.2007">25.2007</option>
                        <option value="45.2007">45.2007</option>
                        <option value="83.2008">83.2008</option>
                        <option value="69.2008">69.2008</option>
                        <option value="68.2009">68.2009</option>
                        <option value="71.2010">71.2010</option>
                        <option value="OUTRO">OUTRO</option>
                        
                    </select>                    
                    </div>
                    </div>
                    </div>
                    </div>

                <div class="form-group">
                <div class="row">
                <div class="col-md-6"> 

                    <label for="possui_internet_lab">Possui Internet no lab</label>
                    <select class="form-control" name="possui_internet_lab" id="select2" >
                                <option value="<?php echo e($escola->possui_internet_lab); ?>"><?php echo e($escola->possui_internet_lab); ?></option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select>               
                    </div>
                
                <div class="form-group">
                <div class="col-md-6"> 

                    <label for="tipo_internet_lab">Tipo Internet Lab</label>
                    <select class="form-control" name="tipo_internet_lab" id="select10" >
                        <option value="<?php echo e($escola->tipo_internet_lab); ?>"><?php echo e($escola->tipo_internet_lab); ?></option>
                                <option value="NENHUMA">NENHUMA</option>
                                <option value="CLARO">CLARO</option>
                                <option value="PROJETO BANDA LARGA NAS ESCOLAS">PROJETO BANDA LARGA NAS ESCOLAS</option>
                                <option value="GSAT">GSAT</option>
                                <option value="OUTRO">OUTRO</option>
                                <option value="RÁDIO">RÁDIO</option>
                                <option value="TIM">TIM</option>
                                <option value="VELOX">VELOX</option>
                                <option value="VIVO">VIVO</option>
                                                  
                    </select>                        </div>
                </div>
                </div>
                </div>
                
                <div class="form-group">
                <div class="row">
                <div class="col-md-6">   
                    <label for="lab_montado">Lab Montado</label>
                    <select class="form-control" name="lab_montado" id="select2" >
                        <option value="<?php echo e($escola->lab_montado); ?>"><?php echo e($escola->lab_montado); ?></option>
                        <option value="SIM">SIM</option>
                        <option value="NÃO">NÃO</option>
                    </select>          
                                    </div>
                
                <div class="form-group">
                <div class="col-md-6">   

                    <label for="qt_computadores_lab">Qt. computadores Lab</label>
                    <input id="qt_computadores_lab" name = "qt_computadores_lab" type="number" value="<?php echo e($escola->qt_computadores_lab); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
 <div class="form-group">
                <div class="row">
                <div class="col-md-6">   
                    <label for="qt_monitores_lab">Qt. Monitores Lab</label>
                    <input id="qt_monitores_lab" name = "qt_monitores_lab" type="number" value="<?php echo e($escola->qt_monitores_lab); ?>" class="form-control">
                </div>
                
 <div class="form-group">
                <div class="col-md-6">   
                                    <label for="status_lab">Status Lab</label>
                <select class="form-control" name="status_lab" id="select2" >
                        <option value="<?php echo e($escola->status_lab); ?>"><?php echo e($escola->status_lab); ?></option>
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
                                    <label for="ar_condicionado_lab">Ar Condicionado Lab</label>
                    <select class="form-control" name="ar_condicionado_lab" id="select2" >
                                <option value="<?php echo e($escola->ar_condicionado_lab); ?>"><?php echo e($escola->ar_condicionado_lab); ?></option>
                                <option value="SIM">SIM</option>
                                <option value="NÃO">NÃO</option>
                               

                               
                    </select>          
                                    </div>
                
<div class="form-group">
                <div class="col-md-6">   
                                    <label for="impressora_lab">Impressora Lab</label>
                    <select class="form-control" name="impressora_lab" id="select2" >
                        <option value="<?php echo e($escola->impressora_lab); ?>"><?php echo e($escola->impressora_lab); ?></option>
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
                                    <label for="qt_notebook_lab">Qt. Notebook Lab</label>
                    <input id="qt_notebook_lab" name = "qt_notebook_lab" type="number" value="<?php echo e($escola->qt_notebook_lab); ?>" class="form-control">
                </div>
                
<div class="form-group">
                <div class="col-md-6">   
                                    <label for="roteador_lab">Roteador Lab</label>
                    <select class="form-control" name="roteador_lab" id="select2" value="<?php echo e($escola->roteador_lab); ?>" >
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
                                    <label for="switch_lab">Switch Lab</label>
                    <select class="form-control" name="switch_lab" id="select12" >
                                <option value="<?php echo e($escola->switch_lab); ?>"><?php echo e($escola->switch_lab); ?></option>
                                <option value="NÃO POSSUI">NÃO POSSUI</option>
                                <option value="8 PORTAS">8 PORTAS</option>
                                <option value="16 PORTAS">16 PORTAS</option>
                                <option value="24 PORTAS">24 PORTAS</option>
                                <option value="32 PORTAS">32 PORTAS</option>
                                <option value="48 PORTAS">48 PORTAS</option>
                                <option value="+48 PORTAS">+48 PORTAS</option>
                                
                                 
                    </select>          
                                    </div>
                
<div class="form-group">
                <div class="col-md-6">   
                                    <label for="qt_cadeiras_lab">Qt. Cadeiras Lab</label>
                    <input id="qt_cadeiras_lab" name = "qt_cadeiras_lab" type="number" class="form-control" value="<?php echo e($escola->qt_cadeiras_lab); ?>">
                </div>
                </div>
                </div>
                </div>  
                
                <button class = 'btn btn-primary' type ='submit'>Atualizar</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>