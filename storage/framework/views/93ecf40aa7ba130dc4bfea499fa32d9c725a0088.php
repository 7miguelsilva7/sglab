<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Create <?php echo e($names->tableName()); ?></title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Create <?php echo e($names->tableName()); ?></h1>
            <form method = 'get' action = '<?php echo e($names->open()); ?>url("<?php echo e($names->standardApi()); ?>")<?php echo e($names->close()); ?>'>
                <button class = 'btn btn-danger'><?php echo e($names->tableName()); ?> Index</button>
            </form>
            <br>
            <form method = 'POST' action = '<?php echo e($names->open()); ?>url("<?php echo e($names->standardApi()); ?>")<?php echo e($names->close()); ?>'>
                <input type = 'hidden' name = '_token' value = '<?php echo e($names->open()); ?>Session::token()<?php echo e($names->close()); ?>'>
                <?php $__currentLoopData = $dataSystem->dataScaffold('v'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                <div class="form-group">
                    <label for="<?php echo e($value); ?>"><?php echo e($value); ?></label>
                    <input id="<?php echo e($value); ?>" name = "<?php echo e($value); ?>" type="text" class="form-control">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                <?php $__currentLoopData = $dataSystem->getForeignKeys(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                <div class="form-group">
                    <label><?php echo e($key); ?> Select</label>
                    <select name = '<?php echo e(lcfirst(str_singular($key))); ?>_id' class = 'form-control'>
                        <?php echo e($names->blade()); ?>foreach($<?php echo e(str_plural($key)); ?> as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        <?php echo e($names->blade()); ?>endforeach
                    </select>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
