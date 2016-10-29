use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class <?php echo e(ucfirst($names->tableNames())); ?>.
 *
 * @author  The scaffold-interface created at <?php echo e(date("Y-m-d h:i:sa")); ?>

 * @link  https://github.com/amranidev/scaffold-interface
 */
class <?php echo e(studly_case(ucfirst($names->tableNames()))); ?> extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('<?php echo e($names->tableNames()); ?>',function (Blueprint $table){

        $table->increments('id');<?php $i = 0;?>

        <?php $__currentLoopData = $dataSystem->dataScaffold('v'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        $table-><?php echo e($dataSystem->dataScaffold('migration')[$i]); ?>('<?php echo e($attr); ?>');<?php $i = $i + 1;?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        /**
         * Foreignkeys section
         */
        <?php $__currentLoopData = $dataSystem->getForeignKeys(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        $table->integer('<?php echo e(lcfirst(str_singular($key))); ?>_id')->unsigned()->nullable();
        $table->foreign('<?php echo e(lcfirst(str_singular($key))); ?>_id')->references('id')->on('<?php echo e($key); ?>')->onDelete('cascade');
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        <?php if($dataSystem->isTimestamps()): ?>

        $table->timestamps();
        <?php endif; ?>

        <?php if($dataSystem->isSoftdeletes()): ?>

        $table->softDeletes();
        <?php endif; ?>

        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('<?php echo e($names->tableNames()); ?>');
    }
}
