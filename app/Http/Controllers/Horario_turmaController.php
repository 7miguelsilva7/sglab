<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Horario_turma;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Siem;

use DB;

use App\Turma;

use Auth;


/**
 * Class Horario_turmaController.
 *
 * @author  The scaffold-interface created at 2016-12-19 11:45:25am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Horario_turmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - horario_turma';
        $horario_turmas = Horario_turma::paginate(6);
        return view('horario_turma.index',compact('horario_turmas','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - horario_turma';
        
        $siems = Siem::all()->pluck('nome','id');
        
        // $turmas = Turma::all()->pluck("CONCAT(serie,' ',turma) AS full_turma",'id');

        // $turmas = Turma::all()->pluck('full_turma','id');

        // $turmas = Turma::select(DB::raw("CONCAT('serie','nivel') AS full_turma"))->pluck('nivel', 'id');

if (Auth::user()->name == "Admin")
{

    $turmas = Turma::select(DB::raw("CONCAT(serie,' ANO ',turma) AS full_turma"),'id')->pluck('full_turma', 'id');

}else

{
    $turmas = Turma::select(DB::raw("CONCAT(serie,' ANO ',turma) AS full_turma"),'id')->where('vinculo', Auth::user()->name)->pluck('full_turma', 'id');
}
        

        return view('horario_turma.create',compact('title','siems' , 'turmas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horario_turma = new Horario_turma();

        
        $horario_turma->vinculo = $request->vinculo;

        
        $horario_turma->seg1 = $request->seg1;

        
        $horario_turma->ter1 = $request->ter1;

        
        $horario_turma->qua1 = $request->qua1;

        
        $horario_turma->qui1 = $request->qui1;

        
        $horario_turma->sex1 = $request->sex1;

        
        $horario_turma->sab1 = $request->sab1;

        
        $horario_turma->seg2 = $request->seg2;

        
        $horario_turma->ter2 = $request->ter2;

        
        $horario_turma->qua2 = $request->qua2;

        
        $horario_turma->qui2 = $request->qui2;

        
        $horario_turma->sex2 = $request->sex2;

        
        $horario_turma->sab2 = $request->sab2;

        
        $horario_turma->seg3 = $request->seg3;

        
        $horario_turma->ter3 = $request->ter3;

        
        $horario_turma->qua3 = $request->qua3;

        
        $horario_turma->qui3 = $request->qui3;

        
        $horario_turma->sex3 = $request->sex3;

        
        $horario_turma->sab3 = $request->sab3;

        
        $horario_turma->seg4 = $request->seg4;

        
        $horario_turma->ter4 = $request->ter4;

        
        $horario_turma->qua4 = $request->qua4;

        
        $horario_turma->qui4 = $request->qui4;

        
        $horario_turma->sex4 = $request->sex4;

        
        $horario_turma->sab4 = $request->sab4;

        
        $horario_turma->seg5 = $request->seg5;

        
        $horario_turma->ter5 = $request->ter5;

        
        $horario_turma->qua5 = $request->qua5;

        
        $horario_turma->qui5 = $request->qui5;

        
        $horario_turma->sex5 = $request->sex5;

        
        $horario_turma->sab5 = $request->sab5;

        
        $horario_turma->seg6 = $request->seg6;

        
        $horario_turma->ter6 = $request->ter6;

        
        $horario_turma->qua6 = $request->qua6;

        
        $horario_turma->qui6 = $request->qui6;

        
        $horario_turma->sex6 = $request->sex6;

        
        $horario_turma->sab6 = $request->sab6;

        
        $horario_turma->adicionado_por = $request->adicionado_por;

        
        
        $horario_turma->siem_id = $request->siem_id;

        
        $horario_turma->turma_id = $request->turma_id;

        
        $horario_turma->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new horario_turma has been created !!']);

        return redirect('horario_turma');
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
        $title = 'Show - horario_turma';

        if($request->ajax())
        {
            return URL::to('horario_turma/'.$id);
        }

        $horario_turma = Horario_turma::findOrfail($id);
        return view('horario_turma.show',compact('title','horario_turma'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - horario_turma';
        if($request->ajax())
        {
            return URL::to('horario_turma/'. $id . '/edit');
        }

        
        $siems = Siem::all()->pluck('nome','id');

        
        $turmas = Turma::all()->pluck('nivel','id');

        
        $horario_turma = Horario_turma::findOrfail($id);
        return view('horario_turma.edit',compact('title','horario_turma' ,'siems', 'turmas' ) );
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
        $horario_turma = Horario_turma::findOrfail($id);
    	
        $horario_turma->vinculo = $request->vinculo;
        
        $horario_turma->seg1 = $request->seg1;
        
        $horario_turma->ter1 = $request->ter1;
        
        $horario_turma->qua1 = $request->qua1;
        
        $horario_turma->qui1 = $request->qui1;
        
        $horario_turma->sex1 = $request->sex1;
        
        $horario_turma->sab1 = $request->sab1;
        
        $horario_turma->seg2 = $request->seg2;
        
        $horario_turma->ter2 = $request->ter2;
        
        $horario_turma->qua2 = $request->qua2;
        
        $horario_turma->qui2 = $request->qui2;
        
        $horario_turma->sex2 = $request->sex2;
        
        $horario_turma->sab2 = $request->sab2;
        
        $horario_turma->seg3 = $request->seg3;
        
        $horario_turma->ter3 = $request->ter3;
        
        $horario_turma->qua3 = $request->qua3;
        
        $horario_turma->qui3 = $request->qui3;
        
        $horario_turma->sex3 = $request->sex3;
        
        $horario_turma->sab3 = $request->sab3;
        
        $horario_turma->seg4 = $request->seg4;
        
        $horario_turma->ter4 = $request->ter4;
        
        $horario_turma->qua4 = $request->qua4;
        
        $horario_turma->qui4 = $request->qui4;
        
        $horario_turma->sex4 = $request->sex4;
        
        $horario_turma->sab4 = $request->sab4;
        
        $horario_turma->seg5 = $request->seg5;
        
        $horario_turma->ter5 = $request->ter5;
        
        $horario_turma->qua5 = $request->qua5;
        
        $horario_turma->qui5 = $request->qui5;
        
        $horario_turma->sex5 = $request->sex5;
        
        $horario_turma->sab5 = $request->sab5;
        
        $horario_turma->seg6 = $request->seg6;
        
        $horario_turma->ter6 = $request->ter6;
        
        $horario_turma->qua6 = $request->qua6;
        
        $horario_turma->qui6 = $request->qui6;
        
        $horario_turma->sex6 = $request->sex6;
        
        $horario_turma->sab6 = $request->sab6;
        
        $horario_turma->adicionado_por = $request->adicionado_por;
        
        
        $horario_turma->siem_id = $request->siem_id;

        
        $horario_turma->turma_id = $request->turma_id;

        
        $horario_turma->save();

        return redirect('horario_turma');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/horario_turma/'. $id . '/delete');

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
     	$horario_turma = Horario_turma::findOrfail($id);
     	$horario_turma->delete();
        return URL::to('horario_turma');
    }
}
