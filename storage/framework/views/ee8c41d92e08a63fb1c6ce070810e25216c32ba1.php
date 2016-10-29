<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Index <?php echo e($names->tableName()); ?></title>
    </head>
    <body>
        <div class = 'container'>
            <h1><?php echo e($names->tableName()); ?> Index</h1>
            <form class = 'col s3' method = 'get' action = '<?php echo e($names->open()); ?>url("<?php echo e($names->standardApi()); ?>")<?php echo e($names->close()); ?>/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New <?php echo e($names->tableName()); ?></button>
            </form>
            <br>
            <?php if($dataSystem->getRelationAttributes() != null): ?>

            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Associate
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <?php $__currentLoopData = $dataSystem->getRelationAttributes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <li><a href="<?php echo e(URL::to('/')); ?>/<?php echo e(lcfirst(str_singular($key))); ?>"><?php echo e(ucfirst(str_singular($key))); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                </ul>
            </div>
            <?php endif; ?>

            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    <?php $__currentLoopData = $dataSystem->dataScaffold('v'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <th><?php echo e($value); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                    <?php if($dataSystem->getRelationAttributes() != null): ?>

                    <?php $__currentLoopData = $dataSystem->getRelationAttributes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $value1): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <th><?php echo e($value1); ?></th>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                    <?php endif; ?>

                    <th>actions</th>
                </thead>
                <tbody>
                    <?php echo e($names->foreachh()); ?>

                    <tr>
                        <?php $__currentLoopData = $dataSystem->dataScaffold('v'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                        <td><?php echo e($names->open()); ?>$<?php echo e($names->tableName()); ?>-><?php echo e($value); ?><?php echo e($names->close()); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                        <?php if($dataSystem->getRelationAttributes() != null): ?>

                        <?php $__currentLoopData = $dataSystem->getRelationAttributes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $value1): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <td><?php echo e($names->open()); ?>$<?php echo e($names->tableName()); ?>-><?php echo e(str_singular($key)); ?>-><?php echo e($value1); ?><?php echo e($names->close()); ?></td>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                        <?php endif; ?>

                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/<?php echo e($names->tableNameSingle()); ?>/<?php echo e($names->open()); ?>$<?php echo e($names->tableName()); ?>->id<?php echo e($names->close()); ?>/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/<?php echo e($names->tableNameSingle()); ?>/<?php echo e($names->open()); ?>$<?php echo e($names->tableName()); ?>->id<?php echo e($names->close()); ?>/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/<?php echo e($names->tableNameSingle()); ?>/<?php echo e($names->open()); ?>$<?php echo e($names->tableName()); ?>->id<?php echo e($names->close()); ?>'><i class = 'material-icons'>info</i></a>
                        </td>
                    </tr>
                    <?php echo e($names->endforeachh()); ?>

                </tbody>
            </table>
            {!! $<?php echo e($names->tableNames()); ?>->render() !!}
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script> var baseURL = "<?php echo e($names->open()); ?>URL::to('/')<?php echo e($names->close()); ?>"</script>
<script src = "<?php echo e($names->open()); ?> URL::asset('js/AjaxisBootstrap.js')<?php echo e($names->close()); ?>"></script>
<script src = "<?php echo e($names->open()); ?> URL::asset('js/scaffold-interface-js/customA.js')<?php echo e($names->close()); ?>"></script>
</html>
