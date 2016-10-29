<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Escola</div>
                <div class="panel-body">
            <form method = 'get' action = '<?php echo e(url("funcionario")); ?>'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
            <form method = 'POST' action = '<?php echo e(url("funcionario")); ?>'>
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
                    <label>Selecione uma Escola</label>
                    <select required name = 'siem_id' class = 'form-control'>
                        <option value=""></option>
          
                        <?php $__currentLoopData = $siems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Ocupacão</label>
                    <select required name = 'ocupacao_id' class = 'form-control'>
                        <option value=""></option>
                        <?php $__currentLoopData = $ocupacaos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Funcionário</label>
                    <select required name = 'pessoa_id' class = 'form-control'>
                        <option value=""></option>
                        <?php $__currentLoopData = $pessoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="vinculo">Vínculo</label>
                    <select name = 'vinculo' class = 'form-control' required>
                        <option value=""></option>
                        <option value="CONTRATADO">CONTRATADO</option>
                        <option value="EFETIVO">EFETIVO</option>
                        <option value="ESTAGIÁRIO">ESTAGIÁRIO</option>
                        <option value="CONCURSADO">CONCURSADO</option>
                        <option value="TEMPORÁRIO">TEMPORÁRIO</option>
                    </select>
                </div>
           
                <div class="form-group">
                    <label for="status_funcionario">status_funcionario</label>
                    <select name = 'status_funcionario' class = 'form-control' required>
                        <option value="ATIVO">ATIVO</option>
                        <option value="INATIVO">INATIVO</option>
                    </select>
                    </div>
                

                
                <button class = 'btn btn-primary' type ='submit'>Salvar</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>