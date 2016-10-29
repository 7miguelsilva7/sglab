<?php $__env->startSection('content'); ?>
<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h3>All Roles</h3>
		</div>
		<div class="box-body">
			<a href="<?php echo e(url('roles/create')); ?>" class = "btn btn-success"><i class="fa fa-plus fa-md" aria-hidden="true"></i> New</a>
			<table class="table table-striped">
				<head>
					<th>Role</th>
					<th>Actions</th>
				</head>
				<tbody>
					<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td><?php echo e($role->name); ?></td>
						<td>
							<a href="<?php echo e(url('/roles/edit')); ?>/<?php echo e($role->id); ?>" class = "btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							<a href="<?php echo e(url('/roles/delete')); ?>/<?php echo e($role->id); ?>" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				</tbody>
			</table>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('scaffold-interface.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>