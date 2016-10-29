<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Esditar Funcionáro</div>
                <div class="panel-body">
            <form method = 'get' action = '<?php echo e(url("funcionario")); ?>'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
            <form method = 'POST' action = '<?php echo e(url("funcionario")); ?>/<?php echo e($funcionario->id); ?>/update'>
                <input type = 'hidden' name = '_token' value = '<?php echo e(Session::token()); ?>'>
                
             
                <div class="form-group">
  
                    <input type = 'hidden' id="usuario" name = "usuario" type="text" class="form-control" value="<?php echo e($funcionario->usuario); ?>">
                </div>
               
             
                
<div class="form-group">
    <label>Selecione uma Escola</label>
    <select name = 'siem_id' class = "form-control">
        <option value="<?php echo e($funcionario->siem_id); ?>"><?php echo e($funcionario->siem->nome); ?></option>
        <?php $__currentLoopData = $siems->except($funcionario->siem_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

               
<div class="form-group">
    <label>Selecione uma Ocupação</label>
    <select name = 'ocupacao_id' class = "form-control">
        <option value="<?php echo e($funcionario->ocupacao_id); ?>"><?php echo e($funcionario->ocupacao->nome); ?></option>
        <?php $__currentLoopData = $ocupacaos->except($funcionario->ocupacao_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>
</div>

<div class="form-group">
    <label>Selecione uma Ocupação</label>
    <select name = 'pessoa_id' class = "form-control">
        <option value="<?php echo e($funcionario->pessoa_id); ?>"><?php echo e($funcionario->pessoa->nome); ?></option>
        <?php $__currentLoopData = $pessoas->except($funcionario->pessoa_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </select>


</div>

                
    <div class="form-group">
    <label>Vínculo</label>
    <select name = 'vinculo' class = "form-control">
        <option value="<?php echo e($funcionario->vinculo); ?>"><?php echo e($funcionario->vinculo); ?></option>
        <option value="CONTRATO">CONTRATO</option>
        <option value="EFETIVO">EFETIVO</option>
    </select>
    </div>
                
                <div class="form-group">
                    <label for="status_funcionario">status_funcionario</label>

                <div class="form-group">
                    <input value= "<?php echo e($funcionario->status_funcionario); ?>" id="status_funcionario" name = "status_funcionario" type="text" class="form-control">
                </div>
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Atualizar</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>