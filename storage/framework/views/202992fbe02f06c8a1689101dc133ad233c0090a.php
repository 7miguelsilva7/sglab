<?php $__env->startSection('content'); ?>
<section class="content">
<div class="box box-primary">
<div class="box-header">
	<h3>All Users</h3>
</div>
	<div class="box-body">
		<a href="<?php echo e(url('/users/create')); ?>" class = "btn btn-success"><i class="fa fa-plus fa-md" aria-hidden="true"></i> New</a>
		<table class = "table table-hover">
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Roles</th>
			<th>Permissions</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><?php echo e($user->name); ?></td>
				<td><?php echo e($user->email); ?></td>
				<td>
				<?php if(!empty($user->roles)): ?>
					<?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<small class = 'label bg-blue'><?php echo e($role->name); ?></small>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<?php else: ?>
					<small class = 'label bg-red'>No Roles</small>
				<?php endif; ?>
				</td>
				<td>
				<?php if(!empty($user->permissions)): ?>
					<?php $__currentLoopData = $user->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<small class = 'label bg-orange'><?php echo e($permission->name); ?></small>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
				<?php else: ?>
					<small class = 'label bg-red'>No Permissions</small>
				<?php endif; ?>
				</td>
				<td>
					<a href="<?php echo e(url('/users/edit')); ?>/<?php echo e($user->id); ?>" class = 'btn btn-primary btn-sm'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					<a href="<?php echo e(url('users/delete')); ?>/<?php echo e($user->id); ?>" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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