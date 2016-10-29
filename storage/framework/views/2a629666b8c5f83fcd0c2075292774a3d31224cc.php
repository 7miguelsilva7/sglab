<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Siem-Escolas</title>
    </head>
    <body>
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Siem-Escolas</div>

                <div class="panel-body">
            <h2><i class="fa glyphicon glyphicon-th-list"></i> Siem-Escolas</h2>

                        <?php
                        $usuario_logado = Auth::user()->name;
                        if ($usuario_logado == "Admin") { ?>

            <form class = 'col s3' method = 'get' action = '<?php echo e(url("siem")); ?>/create'>
                <button class = 'btn btn-primary' type = 'submit'><i class="fa glyphicon glyphicon-plus"></i> Novo </button>
            </form>
                        <?php } ?>


            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>Siem</th>
                    
                    <th>Nome da Escola</th>
                    
                    <th>Tipo</th>
                              
                              

               <!--     <th>cod_ext</th>  -->
                    
                    
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $siems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Siem): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tr>
                        
                        <td><?php echo e($Siem->siem); ?></td>
                        
                        <td><?php echo e($Siem->nome); ?></td>
                        
                        <td><?php echo e($Siem->tipo_escola); ?></td>
                        
                <!--        <td><?php echo e($Siem->cod_ext); ?></td> -->
                        
                        
                        <td>
                              
                        <?php
                        
                        $usuario_logado = Auth::user()->name;
                        if ($usuario_logado == "Admin") { ?>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/siem/<?php echo e($Siem->id); ?>/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <?php } ?>
       
                                <a href = '#' data-target="#myModal" class = 'viewEdit btn btn-primary btn-xs' data-link = '/siem/<?php echo e($Siem->id); ?>/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/siem/<?php echo e($Siem->id); ?>'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
            </table>
                        <?php echo $siems->render(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script> var baseURL = "<?php echo e(URL::to('/')); ?>"</script>
<script src = "<?php echo e(URL::asset('js/AjaxisBootstrap.js')); ?>"></script>
<script src = "<?php echo e(URL::asset('js/scaffold-interface-js/customA.js')); ?>"></script>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>