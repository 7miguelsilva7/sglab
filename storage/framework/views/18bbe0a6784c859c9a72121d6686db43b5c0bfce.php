<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">Escola Municipal <?php echo e($siem->escola_nome); ?>  </br>
  Última Edição: <?php echo e($siem->updated_at); ?></div>
                <div class="panel-body">

    
                <form method = 'get' action = '<?php echo e(url("siem")); ?>'>
                <button class = 'btn btn-primary'><i class="fa glyphicon glyphicon-arrow-left"></i> Voltar</button>
                </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Campo</th>
                    <th>Nome</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>Siem : </i></b>
                        </td>
                        <td><?php echo e($siem->siem); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Escola : </i></b>
                        </td>
                        <td><?php echo e($siem->nome); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Tipo : </i></b>
                        </td>
                        <td><?php echo e($siem->tipo_escola); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Cod. Extensão : </i></b>
                        </td>
                        <td><?php echo e($siem->cod_ext); ?></td>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>