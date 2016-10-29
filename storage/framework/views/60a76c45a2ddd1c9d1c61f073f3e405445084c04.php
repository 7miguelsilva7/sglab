<?php $__env->startSection('content'); ?>
<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h3>Edit User (<?php echo e($user->name); ?>)</h3>
		</div>
		<div class="box-body">
			<form action="<?php echo e(url('users/update')); ?>" method = "post">
				<?php echo csrf_field(); ?>

				<input type="hidden" name = "user_id" value = "<?php echo e($user->id); ?>">
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" name = "email" value = "<?php echo e($user->email); ?>" class = "form-control" required>
				</div>
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" name = "name" value = "<?php echo e($user->name); ?>" class = "form-control" required>
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" name = "password" class = "form-control" placeholder = "password" required>
				</div>
				<button class = "btn btn-primary" type="submit">Update</button>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
					<h3><?php echo e($user->name); ?> Roles</h3>
				</div>
				<div class="box-body">
					<form action="<?php echo e(url('users/addRole')); ?>" method = "post">
						<?php echo csrf_field(); ?>

						<input type="hidden" name = "user_id" value = "<?php echo e($user->id); ?>">
						<div class="form-group">
							<select name="role_name" id="" class = "form-control">
								<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<option value="<?php echo e($role); ?>"><?php echo e($role); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							</select>
						</div>
						<div class="form-group">
							<button class = 'btn btn-primary'>Add role</button>
						</div>
					</form>
					<table class = 'table'>
						<thead>
							<th>Role</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php $__currentLoopData = $userRoles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<tr>
								<td><?php echo e($role->name); ?></td>
								<td><a href="<?php echo e(url('users/removeRole')); ?>/<?php echo e(str_slug($role->name,'-')); ?>/<?php echo e($user->id); ?>" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
					<h3><?php echo e($user->name); ?> Permissions</h3>
				</div>
				<div class="box-body">
					<form action="<?php echo e(url('users/addPermission')); ?>" method = "post">
						<?php echo csrf_field(); ?>

						<input type="hidden" name = "user_id" value = "<?php echo e($user->id); ?>">
						<div class="form-group">
							<select name="permission_name" id="" class = "form-control">
								<?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<option value="<?php echo e($permission); ?>"><?php echo e($permission); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							</select>
						</div>
						<div class="form-group">
							<button class = 'btn btn-primary'>Add permission</button>
						</div>
					</form>
					<table class = 'table'>
						<thead>
							<th>Permission</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php $__currentLoopData = $userPermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<tr>
								<td><?php echo e($permission->name); ?></td>
								<td><a href="<?php echo e(url('users/removePermission')); ?>/<?php echo e(str_slug($permission->name,'-')); ?>/<?php echo e($user->id); ?>" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('scaffold-interface.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>