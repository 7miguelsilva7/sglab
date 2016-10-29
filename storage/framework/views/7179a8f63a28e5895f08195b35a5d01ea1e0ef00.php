<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Ocupação</div>
                <div class="panel-body">
            <form method = 'get' action = '<?php echo e(url("ocupacao")); ?>'>
                <button class = 'btn btn-danger'>Voltar</button>
            </form>
            <br>
     
            <form method = 'POST' action = '<?php echo e(url("ocupacao")); ?>/<?php echo e($ocupacao->id); ?>/update'>
                <input type = 'hidden' name = '_token' value = '<?php echo e(Session::token()); ?>'>
   
               
                <div class="form-group">
  
                    <input type = 'hidden' id="usuario" name = "usuario" type="text" class="form-control" value="<?php echo e($ocupacao->usuario); ?>">
                </div>
                
                <div class="form-group">
                    <label for="nome">nome</label>
                    <input id="nome" name = "nome" type="text" class="form-control" value="<?php echo e($ocupacao->nome); ?>">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Salvar</button>
            </form>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>