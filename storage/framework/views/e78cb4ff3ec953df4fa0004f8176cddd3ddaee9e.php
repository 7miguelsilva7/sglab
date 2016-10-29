namespace <?php echo e(config('amranidev.config.controllerNameSpace')); ?>;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use <?php echo e(config('amranidev.config.modelNameSpace')); ?>\<?php echo e($names->tableName()); ?>;
use Amranidev\Ajaxis\Ajaxis;
use URL;
<?php $__currentLoopData = $dataSystem->getForeignKeys(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

use <?php echo e(config('amranidev.config.modelNameSpace')); ?>\<?php echo e(ucfirst(str_singular($key))); ?>;

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

/**
 * Class <?php echo e($names->tableName()); ?>Controller.
 *
 * @author  The scaffold-interface created at <?php echo e(date("Y-m-d h:i:sa")); ?>

 * @link  https://github.com/amranidev/scaffold-interface
 */
class <?php echo e($names->tableName()); ?>Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $<?php echo e($names->tableNames()); ?> = <?php echo e($names->tableName()); ?>::paginate(6);
        return view('<?php if(config('amranidev.config.loadViews')): ?><?php echo e(config('amranidev.config.loadViews')); ?>::<?php endif; ?><?php echo e($names->TableNameSingle()); ?>.index',compact('<?php echo e($names->TableNames()); ?>'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        <?php $__currentLoopData = $dataSystem->getForeignKeys(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        $<?php echo e(str_plural($value)); ?> = <?php echo e(ucfirst(str_singular($value))); ?>::all()->pluck('<?php echo e($dataSystem->getOnData()[$key]); ?>','id');
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        return view('<?php if(config('amranidev.config.loadViews')): ?><?php echo e(config('amranidev.config.loadViews')); ?>::<?php endif; ?><?php echo e($names->TableNameSingle()); ?>.create'<?php if($dataSystem->getForeignKeys() != null): ?>,compact(<?php $__currentLoopData = $dataSystem->getForeignKeys(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>'<?php echo e(str_plural($value)); ?>' <?php if($value != last($dataSystem->getForeignKeys())): ?>,<?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>)<?php endif; ?>);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $<?php echo e($names->tableNameSingle()); ?> = new <?php echo e($names->tableName()); ?>();

        <?php $__currentLoopData = $dataSystem->dataScaffold('v'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        $<?php echo e($names->tableNameSingle()); ?>-><?php echo e($value); ?> = $request-><?php echo e($value); ?>;

        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        <?php $__currentLoopData = $dataSystem->getForeignKeys(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        $<?php echo e($names->tableNameSingle()); ?>-><?php echo e(lcfirst(str_singular($key))); ?>_id = $request-><?php echo e(lcfirst(str_singular($key))); ?>_id;

        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        $<?php echo e($names->tableNameSingle()); ?>->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new <?php echo e($names->tableNameSingle()); ?> has been created !!']);

        return redirect('<?php echo e($names->tableNameSingle()); ?>');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('<?php echo e($names->tableNameSingle()); ?>/'.$id);
        }

        $<?php echo e($names->tableNameSingle()); ?> = <?php echo e($names->tableName()); ?>::findOrfail($id);
        return view('<?php if(config('amranidev.config.loadViews')): ?><?php echo e(config('amranidev.config.loadViews')); ?>::<?php endif; ?><?php echo e($names->TableNameSingle()); ?>.show',compact('<?php echo e($names->TableNameSingle()); ?>'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('<?php echo e($names->tableNameSingle()); ?>/'. $id . '/edit');
        }

        <?php $__currentLoopData = $dataSystem->getForeignKeys(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        $<?php echo e(str_plural($value)); ?> = <?php echo e(ucfirst(str_singular($value))); ?>::all()->pluck('<?php echo e($dataSystem->getOnData()[$key]); ?>','id');

        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        $<?php echo e($names->tableNameSingle()); ?> = <?php echo e($names->tableName()); ?>::findOrfail($id);
        return view('<?php if(config('amranidev.config.loadViews')): ?><?php echo e(config('amranidev.config.loadViews')); ?>::<?php endif; ?><?php echo e($names->TableNameSingle()); ?>.edit',compact('<?php echo e($names->TableNameSingle()); ?>' <?php if($dataSystem->getForeignKeys() != null): ?>,<?php $__currentLoopData = $dataSystem->getForeignKeys(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>'<?php echo e(str_plural($value)); ?>'<?php if($value != last($dataSystem->getForeignKeys())): ?>,<?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>) <?php else: ?> )<?php endif; ?>);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $<?php echo e($names->tableNameSingle()); ?> = <?php echo e($names->tableName()); ?>::findOrfail($id);
    	<?php $__currentLoopData = $dataSystem->dataScaffold('v'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        $<?php echo e($names->tableNameSingle()); ?>-><?php echo e($value); ?> = $request-><?php echo e($value); ?>;
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        <?php $__currentLoopData = $dataSystem->getForeignKeys(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        $<?php echo e($names->tableNameSingle()); ?>-><?php echo e(lcfirst(str_singular($key))); ?>_id = $request-><?php echo e(lcfirst(str_singular($key))); ?>_id;

        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        $<?php echo e($names->tableNameSingle()); ?>->save();

        return redirect('<?php echo e($names->tableNameSingle()); ?>');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::<?php echo e($names->getParse()); ?>Deleting('Warning!!','Would you like to remove This?','/<?php echo e($names->TableNameSingle()); ?>/'. $id . '/delete/');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$<?php echo e($names->tableNameSingle()); ?> = <?php echo e($names->tableName()); ?>::findOrfail($id);
     	$<?php echo e($names->tableNameSingle()); ?>->delete();
        return URL::to('<?php echo e($names->tableNameSingle()); ?>');
    }
}
