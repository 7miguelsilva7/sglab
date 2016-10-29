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
 
        <title>Pessoa</title>
    </head>
    <body>
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Pessoa</div>

                <div class="panel-body">
            <h2><i class="fa glyphicon glyphicon-th-list"></i> Pessoa </h2>
            <form class = 'col s3' method = 'get' action = '<?php echo e(url("pessoa")); ?>/create'>
                <button class = 'btn btn-primary' type = 'submit'><i class="fa glyphicon glyphicon-plus"></i> Novo </button>
            </form>
            <br>

            <table class = "table table-striped table-bordered">
                <thead>
                    
 
                    <th>Nome</th>

                    
                    <th>Contato</th>
                    
                    
                    <th>E-mail</th>

                    
<!--
                    
                    <th>cep</th>
                    
                    
                    <th>bairro</th>
                    
                    <th>logradouro</th>
                    
                    <th>numero</th>
                    
                    <th>complemento</th>
                    
                                      <th>Distrito</th>
                    <th>Cel 2</th>

                                        <th>Telefone</th>


                    <th>cpf</th>
                    
                    <th>rg</th>
                    
                    <th>expedicao_rg</th>
                    
                    <th>naturalidade</th>
                    
                    <th>nascionalidade</th>
                    
                    <th>escolaridade</th>
                    
                    <th>data_nascimento</th>
                    
                    <th>nome_mae</th>
                    
                    <th>nome_pai</th>
                    
                    -->
                    
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $pessoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Pessoa): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tr>
                        
                        <td><?php echo e($Pessoa->nome); ?></td>

                        
                        <td><?php echo e($Pessoa->cel1); ?></td>
                        
                        
                        <td><?php echo e($Pessoa->email); ?></td>



<!--
                        
                        <td><?php echo e($Pessoa->cep); ?></td>
                        
                        <td><?php echo e($Pessoa->distrito); ?></td>
                        
                        <td><?php echo e($Pessoa->bairro); ?></td>
                        
                        <td><?php echo e($Pessoa->logradouro); ?></td>
                        
                        <td><?php echo e($Pessoa->numero); ?></td>
                        
                        <td><?php echo e($Pessoa->complemento); ?></td>
                        
                                               <td><?php echo e($Pessoa->distrito); ?></td>
                                        
                                        
                                         <td><?php echo e($Pessoa->fone); ?></td>


                                                <td><?php echo e($Pessoa->cel2); ?></td>

                        <td><?php echo e($Pessoa->cpf); ?></td>
                        
                        <td><?php echo e($Pessoa->rg); ?></td>
                        
                        <td><?php echo e($Pessoa->expedicao_rg); ?></td>
                        
                        <td><?php echo e($Pessoa->naturalidade); ?></td>
                        
                        <td><?php echo e($Pessoa->nascionalidade); ?></td>
                        
                        <td><?php echo e($Pessoa->escolaridade); ?></td>
                        
                        <td><?php echo e($Pessoa->data_nascimento); ?></td>
                        
                        <td><?php echo e($Pessoa->nome_mae); ?></td>
                        
                        <td><?php echo e($Pessoa->nome_pai); ?></td>
                        
                        -->

                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/pessoa/<?php echo e($Pessoa->id); ?>/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/pessoa/<?php echo e($Pessoa->id); ?>/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/pessoa/<?php echo e($Pessoa->id); ?>'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
            </table>
           <?php echo $pessoas->render(); ?>


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