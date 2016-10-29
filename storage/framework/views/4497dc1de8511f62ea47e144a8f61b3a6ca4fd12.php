<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading"><?php echo e($funcionario->pessoa->nome); ?>  </br>
  Última Edição: <?php echo e($funcionario->pessoa->updated_at); ?></div>
                <div class="panel-body">

    
            <form method = 'get' action = '<?php echo e(url("funcionario")); ?>'>
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
                            <b><i>Adicionado por : </i></b>
                        </td>
                        <td><?php echo e($funcionario->usuario); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>vinculo : </i></b>
                        </td>
                        <td><?php echo e($funcionario->vinculo); ?></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>status_funcionario : </i></b>
                        </td>
                        <td><?php echo e($funcionario->status_funcionario); ?></td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>siem : </i><b>
                        </td>
                        <td><?php echo e($funcionario->siem->siem); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>escola_nome : </i><b>
                        </td>
                        <td><?php echo e($funcionario->siem->nome); ?></td>
                        </tr>
                        
                                        
                        
                        <tr>
                        <td>
                            <b><i>Cargo/Função : </i><b>
                        </td>
                        <td><?php echo e($funcionario->ocupacao->nome); ?></td>
                        </tr>
                        
                    
                        
                        
                        
                        <tr>
                        <td>
                            <b><i>nome : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->nome); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cep : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->cep); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>distrito : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->distrito); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>bairro : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->bairro); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>logradouro : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->logradouro); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>numero : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->numero); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>complemento : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->complemento); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>fone : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->fone); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cel1 : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->cel1); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cel2 : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->cel2); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>email : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->email); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>cpf : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->cpf); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>rg : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->rg); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>expedicao_rg : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->expedicao_rg); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>data_nascimento : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->data_nascimento); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>nome_mae : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->nome_mae); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>nome_pai : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->nome_pai); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>created_at : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->created_at); ?></td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>updated_at : </i><b>
                        </td>
                        <td><?php echo e($funcionario->pessoa->updated_at); ?></td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>