namespace <?php echo e(config('amranidev.config.modelNameSpace')); ?>;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class <?php echo e($names->tableName()); ?>.
 *
 * @author  The scaffold-interface created at <?php echo e(date("Y-m-d h:i:sa")); ?>

 * @link  https://github.com/amranidev/scaffold-interface
 */
class <?php echo e($names->tableName()); ?> extends Model
{
	<?php if($dataSystem->isSoftdeletes()): ?>

	use SoftDeletes;

	protected $dates = ['deleted_at'];
    <?php endif; ?>

	<?php if(!$dataSystem->isTimestamps()): ?>

    public $timestamps = false;
    <?php endif; ?>

    protected $table = '<?php echo e($names->tableNames()); ?>';

	<?php $__currentLoopData = $dataSystem->getForeignKeys(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

	public function <?php echo e(lcfirst(str_singular($key))); ?>()
	{
		return $this->belongsTo('<?php echo e(config('amranidev.config.modelNameSpace')); ?>\<?php echo e(ucfirst(str_singular($key))); ?>','<?php echo e(lcfirst(str_singular($key))); ?>_id');
	}

	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

}
