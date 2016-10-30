<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Pessoa</div>
                <div class="panel-body">
            <form method = 'get' action = '<?php echo e(url("pessoa")); ?>'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
     
            <form method = 'POST' action = '<?php echo e(url("pessoa")); ?>/<?php echo e($pessoa->id); ?>/update'>
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
               
                    <label for="nome">Nome</label>
                    <input required id="nome" name = "nome" type="text" value= "<?php echo e($pessoa->nome); ?>" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="row">
                <div class="col-md-6">
                    <label for="cep">Cep</label>
                    <input id="cep" name = "cep" type="number" value= "<?php echo e($pessoa->cep); ?>" class="form-control">
                
                </div> 
                          
               
                            <div class="form-group">
                            <div class="col-md-6">
                            <label for="distrito">Distrito</label>
                                <select class="form-control" name="distrito" id="select2" required>
                                <option value="<?php echo e($pessoa->distrito); ?>"><?php echo e($pessoa->distrito); ?></option>
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
                            </div> 
                            </div><!--/row-->
                            </div> 
                           
                <div class="form-group">
                <div class="row">
                <div class="col-md-6">              
                <label for="bairro">Bairro</label>
                    <input required id="bairro" name = "bairro" type="text" value= "<?php echo e($pessoa->bairro); ?>" class="form-control">
                </div>
               
                
                            <div class="form-group">
                            <div class="col-md-6">                    
                            <label for="logradouro">Logradouro</label>
                    <input id="logradouro" name = "logradouro" type="text" value= "<?php echo e($pessoa->logradouro); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                <div class="form-group">
                <div class="row">
                <div class="col-md-6">    
                                    <label for="numero">Numero</label>
                    <input id="numero" name = "numero" type="text" value= "<?php echo e($pessoa->numero); ?>" class="form-control">
                </div>
               
                 
                <div class="form-group">
                <div class="col-md-6">    
                <label for="complemento">Complemento</label>
                    <input id="complemento" name = "complemento" type="text" value= "<?php echo e($pessoa->complemento); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">    

                    <label for="fone">Fone</label>
                    <input id="fone" name = "fone" type="text" value= "<?php echo e($pessoa->fone); ?>" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">                
                    <label for="email">Email</label>
                    <input id="email" name = "email" type="email" value= "<?php echo e($pessoa->email); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>
                

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6">    
                            <label for="cel1">Cel1</label>
                    <input id="cel1" name = "cel1" type="text" value= "<?php echo e($pessoa->cel1); ?>" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6">    
                <label for="cel2">Cel2</label>
                    <input id="cel2" name = "cel2" type="text" value= "<?php echo e($pessoa->cel2); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                
                    <label for="cpf">cpf</label>
                    <input id="cpf" name = "cpf" type="text" value= "<?php echo e($pessoa->cpf); ?>" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6"> 
                <label for="rg">rg</label>
                    <input id="rg" name = "rg" type="text" value= "<?php echo e($pessoa->rg); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>

                  
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                                                <label for="nis">nis</label>
                    <input id="nis" name = "nis" type="text" value= "<?php echo e($pessoa->nis); ?>" class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6"> 
                
                    <label for="expedicao_rg">expedicao_rg</label>
                    <input id="expedicao_rg" name = "expedicao_rg" type="text" value= "<?php echo e($pessoa->expedicao_rg); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>
                

                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                                                <label for="naturalidade">naturalidade</label>
                    <input id="naturalidade" name = "naturalidade" type="text"  value= "<?php echo e($pessoa->naturalidade); ?>"  class="form-control">
                </div>
                
                <div class="form-group">
                <div class="col-md-6"> 

                    <label for="nascionalidade">nascionalidade</label>
                    <input id="nascionalidade" name = "nascionalidade" type="text" value= "<?php echo e($pessoa->nascionalidade); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                            <div class="form-group">
                            <div class="row">
                            <div class="col-md-6"> 
                                                <label for="escolaridade">escolaridade</label>
                                <select class="form-control" name="escolaridade" id="select2" required>
                                <option value="<?php echo e($pessoa->escolaridade); ?>"><?php echo e($pessoa->escolaridade); ?></option>
                                <option value="DOUTORADO">DOUTORADO</option>
                                <option value="MESTRADO">MESTRADO</option>
                                <option value="SUPERIOR">SUPERIOR</option>
                                <option value="MÉDIO">MÉDIO</option>
                                <option value="FUNDAMENTAL">FUNDAMENTAL</option>
                                                              
                                </select>                      
                                </div>
                            
                <div class="form-group">
                <div class="col-md-6"> 
                
                    <label for="data_nascimento">data_nascimento</label>
                    <input id="data_nascimento" name = "data_nascimento" type="text" value= "<?php echo e($pessoa->data_nascimento); ?>" class="form-control">
                </div>
                </div>
                </div>
                </div>
                
                <div class="form-group">
                    <label for="nome_mae">nome_mae</label>
                    <input id="nome_mae" name = "nome_mae" type="text"  value= "<?php echo e($pessoa->nome_mae); ?>"  class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="nome_pai">nome_pai</label>
                    <input id="nome_pai" name = "nome_pai" type="text" value= "<?php echo e($pessoa->nome_pai); ?>" class="form-control">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>