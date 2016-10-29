<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Início</div>

                <div class="panel-body">
<section class="content">
	<div class="row">
		
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<p>Siem</p>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="<?php echo e(url('siem')); ?>" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<p>Escola</p>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="<?php echo e(url('escola')); ?>" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
			</div>
            
		</div>

         
        <div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<p>Funcionários</p>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="<?php echo e(url('funcionario')); ?>" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>

        <div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<p>Ocupação</p>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="<?php echo e(url('ocupacao')); ?>" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
			</div>
            
		</div>
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<p>Pessoa</p>
				</div>
				<div class="icon">
					<i class="fa fa-book"></i>
				</div>
				<a href="<?php echo e(url('pessoa')); ?>" class="small-box-footer">Visualizar <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
       
	</div>
</section>                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>