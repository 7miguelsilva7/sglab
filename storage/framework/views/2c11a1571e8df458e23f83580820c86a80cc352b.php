<?php $__env->startSection('content'); ?>
<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h3>Create new Permission</h3>
		</div>
		<div class="box-body">
			<form action="<?php echo e(url('permissions/store')); ?>" method = "post">
				<?php echo csrf_field(); ?>

				<div class="form-group">
				<label for="">Permission</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Name">
				</div>
				<div class="box-footer">
					<button class = 'btn btn-primary' type = "submit">Create</button>
				</div>
			</form>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('scaffold-interface.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>