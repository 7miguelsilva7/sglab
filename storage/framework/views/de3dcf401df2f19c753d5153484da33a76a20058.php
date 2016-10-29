<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show <?php echo e($names->tableName()); ?></title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show <?php echo e($names->tableName()); ?></h1>
            <br>
            <form method = 'get' action = '<?php echo e($names->open()); ?>url("<?php echo e($names->standardApi()); ?>")<?php echo e($names->close()); ?>'>
                <button class = 'btn btn-primary'><?php echo e($names->tableName()); ?> Index</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $dataSystem->dataScaffold('v'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    <tr>
                        <td>
                            <b><i><?php echo e($value); ?> : </i></b>
                        </td>
                        <td><?php echo e($names->open()); ?>$<?php echo e($names->tableNameSingle()); ?>-><?php echo e($value); ?><?php echo e($names->close()); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


                        <?php if($dataSystem->getRelationAttributes() != null): ?>
                        <?php $__currentLoopData = $dataSystem->getRelationAttributes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                        <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $value1): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                        <tr>
                        <td>
                            <b><i><?php echo e($value1); ?> : </i><b>
                        </td>
                        <td><?php echo e($names->open()); ?>$<?php echo e($names->tableNameSingle()); ?>-><?php echo e(str_singular($key)); ?>-><?php echo e($value1); ?><?php echo e($names->close()); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                        <?php endif; ?>

                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
