<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">Escola Municipal <?php echo e($escola->siem->escola_nome); ?>  </br>
  Última Edição: <?php echo e($escola->updated_at); ?></div>
                <div class="panel-body">

    
                    
            <form method = 'get' action = '<?php echo e(url("escola")); ?>'>
                <button class = 'btn btn-primary'><i class="fa glyphicon glyphicon-arrow-left"></i> Voltar</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>Adicionado Por : </i></b>
                        </td>
                        <td><?php echo e($escola->usuario); ?></td>
                    </tr>
                    
 <tr>
                        <td>
                            <b><i>siem : </i><b>
                        </td>
                        <td><?php echo e($escola->siem->siem); ?></td>
                        </tr>


                    <tr>
                        <td>
                            <b><i>inep : </i></b>
                        </td>
                        <td><?php echo e($escola->inep); ?></td>
                    </tr>
                
                       
                        <tr>
                        <td>
                            <b><i>escola_nome : </i><b>
                        </td>
                        <td><?php echo e($escola->siem->nome); ?></td>
                        </tr>
                                            
                        <tr>
                        <td>
                            <b><i>Analista em Educação : </i><b>
                        </td>
                        <td><?php echo e($escola->pessoa->nome); ?></td>
                        </tr>
                        

 <tr>
                        <td>
                            <b><i>pregao1 : </i></b>
                        </td>
                        <td><?php echo e($escola->pregao1); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>pregao2 : </i></b>
                        </td>
                        <td><?php echo e($escola->pregao2); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>pregao3 : </i></b>
                        </td>
                        <td><?php echo e($escola->pregao3); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>pregao4 : </i></b>
                        </td>
                        <td><?php echo e($escola->pregao4); ?></td>
                    </tr>


                    <tr>
                        <td>
                            <b><i>cep : </i></b>
                        </td>
                        <td><?php echo e($escola->cep); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>distrito : </i></b>
                        </td>
                        <td><?php echo e($escola->distrito); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>bairro : </i></b>
                        </td>
                        <td><?php echo e($escola->bairro); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>logradouro : </i></b>
                        </td>
                        <td><?php echo e($escola->logradouro); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>numero : </i></b>
                        </td>
                        <td><?php echo e($escola->numero); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>complemento : </i></b>
                        </td>
                        <td><?php echo e($escola->complemento); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fone : </i></b>
                        </td>
                        <td><?php echo e($escola->fone); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>email : </i></b>
                        </td>
                        <td><?php echo e($escola->email); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>cel1 : </i></b>
                        </td>
                        <td><?php echo e($escola->cel1); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>cel2 : </i></b>
                        </td>
                        <td><?php echo e($escola->cel2); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>sigla : </i></b>
                        </td>
                        <td><?php echo e($escola->sigla); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>possui_internet_escola : </i></b>
                        </td>
                        <td><?php echo e($escola->possui_internet_escola); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>tipo_internet_escola : </i></b>
                        </td>
                        <td><?php echo e($escola->tipo_internet_escola); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>status_escola : </i></b>
                        </td>
                        <td><?php echo e($escola->status_escola); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>possui_lab : </i></b>
                        </td>
                        <td><?php echo e($escola->possui_lab); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>possui_analista : </i></b>
                        </td>
                        <td><?php echo e($escola->possui_analista); ?></td>
                    </tr>
                    
                    
                    <tr>
                        <td>
                            <b><i>tipo_sala : </i></b>
                        </td>
                        <td><?php echo e($escola->tipo_sala); ?></td>
                    </tr>
                    
                   
                    
                    <tr>
                        <td>
                            <b><i>possui_internet_lab : </i></b>
                        </td>
                        <td><?php echo e($escola->possui_internet_lab); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>tipo_internet_lab : </i></b>
                        </td>
                        <td><?php echo e($escola->tipo_internet_lab); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>lab_montado : </i></b>
                        </td>
                        <td><?php echo e($escola->lab_montado); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>qt_computadores_lab : </i></b>
                        </td>
                        <td><?php echo e($escola->qt_computadores_lab); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>qt_monitorelab : </i></b>
                        </td>
                        <td><?php echo e($escola->qt_monitorelab); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>status_lab : </i></b>
                        </td>
                        <td><?php echo e($escola->status_lab); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>ar_condicionado_lab : </i></b>
                        </td>
                        <td><?php echo e($escola->ar_condicionado_lab); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>impressora_lab : </i></b>
                        </td>
                        <td><?php echo e($escola->impressora_lab); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>qt_notebook_lab : </i></b>
                        </td>
                        <td><?php echo e($escola->qt_notebook_lab); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>roteador_lab : </i></b>
                        </td>
                        <td><?php echo e($escola->roteador_lab); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>switch_lab : </i></b>
                        </td>
                        <td><?php echo e($escola->switch_lab); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>qt_cadeiras_lab : </i></b>
                        </td>
                        <td><?php echo e($escola->qt_cadeiras_lab); ?></td>
                    </tr>
                    

                        
                        
                        <tr>
                        <td>
                            <b><i>escola_tipo : </i><b>
                        </td>
                        <td><?php echo e($escola->siem->escola_tipo); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cod_ext : </i><b>
                        </td>
                        <td><?php echo e($escola->siem->cod_ext); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>created_at : </i><b>
                        </td>
                        <td><?php echo e($escola->siem->created_at); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>updated_at : </i><b>
                        </td>
                        <td><?php echo e($escola->siem->updated_at); ?></td>
                        </tr>
                        
                        
                                                
                </tbody>
            </table>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>