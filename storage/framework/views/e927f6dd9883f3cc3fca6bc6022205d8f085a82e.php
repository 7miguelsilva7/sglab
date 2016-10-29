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
 
        <title>Funcionários</title>
    </head>
    <body>
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Funcionários</div>

                <div class="panel-body">
            <h2><i class="fa glyphicon glyphicon-th-list"></i> Funcionários </h2>
            <form class = 'col s3' method = 'get' action = '<?php echo e(url("funcionario")); ?>/create'>
                <button class = 'btn btn-primary' type = 'submit'><i class="fa glyphicon glyphicon-plus"></i> Novo </button>
            </form>
            <br>

            
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Associar
                <span class="caret"></span>
 
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    
                    <li><a href="http://localhost:8000/siem">Siem</a></li>
                    
                    <li><a href="http://localhost:8000/ocupacao">Ocupacao</a></li>
                    
                    <li><a href="http://localhost:8000/pessoa">Pessoa</a></li>
                    
                </ul>
            </div>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    

                    <th>Funcionário</th>
                    <th>Ocupação</th>
                    <th>Escola</th>


<!--

                    <th>usuario</th>
                    
                    <th>vinculo</th>
                    
                    <th>status_funcionario</th>
                    
                    
                    
                    
                    <th>siem</th>
                    
                    
                    <th>escola_tipo</th>
                    
                    <th>cod_ext</th>
                    
                    <th>created_at</th>
                    
                    <th>updated_at</th>
                    
                    
                    
                    
                    <th>created_at</th>
                    
                    <th>updated_at</th>
                    
                    
                    
                    <th>nome</th>
                    
                    <th>cep</th>
                    
                    <th>distrito</th>
                    
                    <th>bairro</th>
                    
                    <th>logradouro</th>
                    
                    <th>numero</th>
                    
                    <th>complemento</th>
                    
                    <th>fone</th>
                    
                    <th>cel1</th>
                    
                    <th>cel2</th>
                    
                    <th>email</th>
                    
                    <th>cpf</th>
                    
                    <th>rg</th>
                    
                    <th>expedicao_rg</th>
                    
                    <th>data_nascimento</th>
                    
                    <th>nome_mae</th>
                    
                    <th>nome_pai</th>
                    
                    <th>created_at</th>
                    
                    <th>updated_at</th>
                    

-->                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $funcionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Funcionario): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tr>

                    <td><?php echo e($Funcionario->pessoa->nome); ?></td>
                    <td><?php echo e($Funcionario->ocupacao->nome); ?></td>
                    <td><?php echo e($Funcionario->siem->nome); ?></td>

<!--

                        
                                                <td><?php echo e($Funcionario->usuario); ?></td>
                                                
                                                <td><?php echo e($Funcionario->vinculo); ?></td>
                                                
                                                <td><?php echo e($Funcionario->status_funcionario); ?></td>
                        
                        
                        
                                                <td><?php echo e($Funcionario->siem->siem); ?></td>


                                                <td><?php echo e($Funcionario->siem->escola_tipo); ?></td>

                                                <td><?php echo e($Funcionario->siem->cod_ext); ?></td>

                                                <td><?php echo e($Funcionario->siem->created_at); ?></td>

                                                <td><?php echo e($Funcionario->siem->updated_at); ?></td>

                        
                        

                                                <td><?php echo e($Funcionario->ocupacao->created_at); ?></td>

                                                <td><?php echo e($Funcionario->ocupacao->updated_at); ?></td>

                        
                        

                                                <td><?php echo e($Funcionario->pessoa->cep); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->distrito); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->bairro); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->logradouro); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->numero); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->complemento); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->fone); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->cel1); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->cel2); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->email); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->cpf); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->rg); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->expedicao_rg); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->data_nascimento); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->nome_mae); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->nome_pai); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->created_at); ?></td>

                                                <td><?php echo e($Funcionario->pessoa->updated_at); ?></td>

                        -->
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/funcionario/<?php echo e($Funcionario->id); ?>/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/funcionario/<?php echo e($Funcionario->id); ?>/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/funcionario/<?php echo e($Funcionario->id); ?>'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
            </table>
                        <?php echo $funcionarios->render(); ?>

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