<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Siem</div>
                <div class="panel-body">
                

            <form method = 'get' action = '<?php echo e(url("siem")); ?>'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
           <form  role="form" method="POST" action="<?php echo e(url('/siem')); ?>">
                        <?php echo e(csrf_field()); ?>


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
                            <div class="col-md-6">
                            <label for="siem">Número Siem</label>

                                <input type="number" id="siem" type="number_format" class="form-control" name="siem"  required>
                            </div> 
                           
                            <div class="form-group">
                            <div class="col-md-6">
                            <label for="tipo_escola">Tipo de Escola</label>
                                <select class="form-control" name="tipo_escola" required>
                                <option value="ESCOLA">ESCOLA</option>
                                <option value="EMEI">EMEI</option>
                                <option value="EXTENSÃO">EXTENSÃO</option>
                               
                                </select>
                            </div> 
                        </div>   
                        </div><!--/row-->
                      
                        </div>
                
                        <div class="form-group">
                            <label for="nome">Nome da Escola</label>

                                <input id="nome" class="form-control" name="nome" required>

                        </div>

                       

                        <div class="form-group">
                        <div class="row">
                       
                        <div class="col-md-6">
                        
                        <label for="cod_ext">Cod. da Matriz </br> <i>(Preencher apenas se extensão)</i></label>

                               <input type="number" id="cod_ext" type="number_format" class="form-control"  name="cod_ext">
                        </div>  
                        </div>  
                        </div>  

                 </p>
                

                        <div class="form-group">
                            <div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>