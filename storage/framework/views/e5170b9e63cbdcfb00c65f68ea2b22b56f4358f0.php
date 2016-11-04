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
                <div class="panel-heading">Escolas</div>

                <div class="panel-body">
            <h2><i class="fa glyphicon glyphicon-th-list"></i> Escola </h2>
            


<?php echo Form::open(['method'=>'GET','url'=>'escola','class'=>'navbar-form navbar-right','role'=>'search']); ?>


<?php
                        $usuario_logado = Auth::user()->name;
                        if ($usuario_logado == "Admin") { ?>
<a href="<?php echo e(url('escola/create')); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Novo</a>
<?php } ?>

<div class="input-group custom-search-form">

                                <select class="form-control" name="search" id="select1">
                                
                                <option value="">Mostrar Todas Escolas Cadastras</option>
                                <?php $__currentLoopData = $siems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($value->id); ?>"><?php echo e($value->nome); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    
                                </select>    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"><!--<span class="hiddenGrammarError" pre="" data-mce-bogus="1"--></i>
        </button>
    </span>
</div>
<?php echo Form::close(); ?>


                              
           
            <table class = "table table-striped table-bordered">
                <thead>
             

                                            <th>siem</th>
                                            <th>inep</th>
                                            <th>escola_nome</th>
                                            <th>distrito</th>

                   
                  <!--   
                     <th>fone</th>

                    <th>usuario</th>
                                       
                    <th>cep</th>
                    
                     <th>bairro</th>

                    
                    <th>logradouro</th>
                    
                    <th>numero</th>
                    
                    <th>complemento</th>
                    
                    
                    <th>email</th>
                    
                    <th>cel1</th>
                    
                    <th>cel2</th>
                    
                    <th>sigla</th>
                    
                    <th>possui_internet_escola</th>
                    
                    <th>tipo_internet_escola</th>
                    
                    <th>status_escola</th>
                    
                    <th>possui_lab</th>
                    
                    <th>possui_analista</th>
                    
                    <th>pessoa_id_analista</th>
                    
                    <th>tipo_sala</th>
                    
                    <th>pregao1</th>
                    
                    <th>pregao2</th>
                    
                    <th>pregao3</th>
                    
                    <th>pregao4</th>
                    
                    <th>possui_internet_lab</th>
                    
                    <th>tipo_internet_lab</th>
                    
                    <th>lab_montado</th>
                    
                    <th>qt_computadores_lab</th>
                    
                    <th>qt_monitorelab</th>
                    
                    <th>status_lab</th>
                    
                    <th>ar_condicionado_lab</th>
                    
                    <th>impressora_lab</th>
                    
                    <th>qt_notebook_lab</th>
                    
                    <th>roteador_lab</th>
                    
                    <th>switch_lab</th>
                    
                    <th>qt_cadeiras_lab</th>
                    
                    
                    
                    
                   
                    
                    <th>escola_tipo</th>
                    
                    <th>cod_ext</th>
                    
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
                    <?php $__currentLoopData = $escolas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Escola): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tr>

                                                <td><?php echo e($Escola->siem->siem); ?></td>
                                                <td><?php echo e($Escola->inep); ?></td>

                                                <td><?php echo e($Escola->siem->nome); ?></td>
                                                <td><?php echo e($Escola->distrito); ?></td>


<!--
                        <td><?php echo e($Escola->fone); ?></td>

                        
                        <td><?php echo e($Escola->usuario); ?></td>
                        
                        
                        <td><?php echo e($Escola->cep); ?></td>
                        
                        <td><?php echo e($Escola->bairro); ?></td>

                        
                        <td><?php echo e($Escola->logradouro); ?></td>
                        
                        <td><?php echo e($Escola->numero); ?></td>
                        
                        <td><?php echo e($Escola->complemento); ?></td>
                        
                        
                        <td><?php echo e($Escola->email); ?></td>
                        
                        <td><?php echo e($Escola->cel1); ?></td>
                        
                        <td><?php echo e($Escola->cel2); ?></td>
                        
                        <td><?php echo e($Escola->sigla); ?></td>
                        
                        <td><?php echo e($Escola->possui_internet_escola); ?></td>
                        
                        <td><?php echo e($Escola->tipo_internet_escola); ?></td>
                        
                        <td><?php echo e($Escola->status_escola); ?></td>
                        
                        <td><?php echo e($Escola->possui_lab); ?></td>
                        
                        <td><?php echo e($Escola->possui_analista); ?></td>
                        
                        <td><?php echo e($Escola->pessoa_id_analista); ?></td>
                        
                        <td><?php echo e($Escola->tipo_sala); ?></td>
                        
                        <td><?php echo e($Escola->pregao1); ?></td>
                        
                        <td><?php echo e($Escola->pregao2); ?></td>
                        
                        <td><?php echo e($Escola->pregao3); ?></td>
                        
                        <td><?php echo e($Escola->pregao4); ?></td>
                        
                        <td><?php echo e($Escola->possui_internet_lab); ?></td>
                        
                        <td><?php echo e($Escola->tipo_internet_lab); ?></td>
                        
                        <td><?php echo e($Escola->lab_montado); ?></td>
                        
                        <td><?php echo e($Escola->qt_computadores_lab); ?></td>
                        
                        <td><?php echo e($Escola->qt_monitorelab); ?></td>
                        
                        <td><?php echo e($Escola->status_lab); ?></td>
                        
                        <td><?php echo e($Escola->ar_condicionado_lab); ?></td>
                        
                        <td><?php echo e($Escola->impressora_lab); ?></td>
                        
                        <td><?php echo e($Escola->qt_notebook_lab); ?></td>
                        
                        <td><?php echo e($Escola->roteador_lab); ?></td>
                        
                        <td><?php echo e($Escola->switch_lab); ?></td>
                        
                        <td><?php echo e($Escola->qt_cadeiras_lab); ?></td>
                        
                        
                        


                                                <td><?php echo e($Escola->siem->escola_tipo); ?></td>

                                                <td><?php echo e($Escola->siem->cod_ext); ?></td>

                                                <td><?php echo e($Escola->siem->created_at); ?></td>

                                                <td><?php echo e($Escola->siem->updated_at); ?></td>

                        
                        
                                                <td><?php echo e($Escola->pessoa->nome); ?></td>

                                                <td><?php echo e($Escola->pessoa->cep); ?></td>

                                                <td><?php echo e($Escola->pessoa->distrito); ?></td>

                                                <td><?php echo e($Escola->pessoa->bairro); ?></td>

                                                <td><?php echo e($Escola->pessoa->logradouro); ?></td>

                                                <td><?php echo e($Escola->pessoa->numero); ?></td>

                                                <td><?php echo e($Escola->pessoa->complemento); ?></td>

                                                <td><?php echo e($Escola->pessoa->fone); ?></td>

                                                <td><?php echo e($Escola->pessoa->cel1); ?></td>

                                                <td><?php echo e($Escola->pessoa->cel2); ?></td>

                                                <td><?php echo e($Escola->pessoa->email); ?></td>

                                                <td><?php echo e($Escola->pessoa->cpf); ?></td>

                                                <td><?php echo e($Escola->pessoa->rg); ?></td>

                                                <td><?php echo e($Escola->pessoa->expedicao_rg); ?></td>

                                                <td><?php echo e($Escola->pessoa->data_nascimento); ?></td>

                                                <td><?php echo e($Escola->pessoa->nome_mae); ?></td>

                                                <td><?php echo e($Escola->pessoa->nome_pai); ?></td>

                                                <td><?php echo e($Escola->pessoa->created_at); ?></td>

                                                <td><?php echo e($Escola->pessoa->updated_at); ?></td>

                        -->
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/escola/<?php echo e($Escola->id); ?>/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/escola/<?php echo e($Escola->id); ?>/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/escola/<?php echo e($Escola->id); ?>'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
            </table>
                        <?php echo $escolas->render(); ?>

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