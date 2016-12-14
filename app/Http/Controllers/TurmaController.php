<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Turma;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Siem;


/**
 * Class TurmaController.
 *
 * @author  The scaffold-interface created at 2016-12-14 07:23:46pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - turma';
        $turmas = Turma::paginate(6);
        return view('turma.index',compact('turmas','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - turma';
        
        $siems = Siem::all()->pluck('nome','id');
        
        return view('turma.create',compact('title','siems'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turma = new Turma();

        
        $turma->vinculo = $request->vinculo;

        
        $turma->nivel = $request->nivel;

        
        $turma->serie = $request->serie;

        
        $turma->turma = $request->turma;

        
        $turma->seg1 = $request->seg1;

        
        $turma->ter1 = $request->ter1;

        
        $turma->qua1 = $request->qua1;

        
        $turma->qui1 = $request->qui1;

        
        $turma->sex1 = $request->sex1;

        
        $turma->sab1 = $request->sab1;

        
        $turma->seg2 = $request->seg2;

        
        $turma->ter2 = $request->ter2;

        
        $turma->qua2 = $request->qua2;

        
        $turma->qui2 = $request->qui2;

        
        $turma->sex2 = $request->sex2;

        
        $turma->sab2 = $request->sab2;

        
        $turma->seg3 = $request->seg3;

        
        $turma->ter3 = $request->ter3;

        
        $turma->qua3 = $request->qua3;

        
        $turma->qui3 = $request->qui3;

        
        $turma->sex3 = $request->sex3;

        
        $turma->sab3 = $request->sab3;

        
        $turma->seg4 = $request->seg4;

        
        $turma->ter4 = $request->ter4;

        
        $turma->qua4 = $request->qua4;

        
        $turma->qui4 = $request->qui4;

        
        $turma->sex4 = $request->sex4;

        
        $turma->sab4 = $request->sab4;

        
        $turma->seg5 = $request->seg5;

        
        $turma->ter5 = $request->ter5;

        
        $turma->qua5 = $request->qua5;

        
        $turma->qui5 = $request->qui5;

        
        $turma->sex5 = $request->sex5;

        
        $turma->sab5 = $request->sab5;

        
        $turma->seg6 = $request->seg6;

        
        $turma->ter6 = $request->ter6;

        
        $turma->qua6 = $request->qua6;

        
        $turma->qui6 = $request->qui6;

        
        $turma->sex6 = $request->sex6;

        
        $turma->sab6 = $request->sab6;

        
        $turma->adicionado_por = $request->adicionado_por;

        
        
        $turma->siem_id = $request->siem_id;

        
        $turma->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new turma has been created !!']);

        return redirect('turma');
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
        $title = 'Show - turma';

        if($request->ajax())
        {
            return URL::to('turma/'.$id);
        }

        $turma = Turma::findOrfail($id);
        return view('turma.show',compact('title','turma'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - turma';
        if($request->ajax())
        {
            return URL::to('turma/'. $id . '/edit');
        }

        
        $siems = Siem::all()->pluck('nome','id');

        
        $turma = Turma::findOrfail($id);
        return view('turma.edit',compact('title','turma' ,'siems' ) );
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
        $turma = Turma::findOrfail($id);
    	
        $turma->vinculo = $request->vinculo;
        
        $turma->nivel = $request->nivel;
        
        $turma->serie = $request->serie;
        
        $turma->turma = $request->turma;
        
        $turma->seg1 = $request->seg1;
        
        $turma->ter1 = $request->ter1;
        
        $turma->qua1 = $request->qua1;
        
        $turma->qui1 = $request->qui1;
        
        $turma->sex1 = $request->sex1;
        
        $turma->sab1 = $request->sab1;
        
        $turma->seg2 = $request->seg2;
        
        $turma->ter2 = $request->ter2;
        
        $turma->qua2 = $request->qua2;
        
        $turma->qui2 = $request->qui2;
        
        $turma->sex2 = $request->sex2;
        
        $turma->sab2 = $request->sab2;
        
        $turma->seg3 = $request->seg3;
        
        $turma->ter3 = $request->ter3;
        
        $turma->qua3 = $request->qua3;
        
        $turma->qui3 = $request->qui3;
        
        $turma->sex3 = $request->sex3;
        
        $turma->sab3 = $request->sab3;
        
        $turma->seg4 = $request->seg4;
        
        $turma->ter4 = $request->ter4;
        
        $turma->qua4 = $request->qua4;
        
        $turma->qui4 = $request->qui4;
        
        $turma->sex4 = $request->sex4;
        
        $turma->sab4 = $request->sab4;
        
        $turma->seg5 = $request->seg5;
        
        $turma->ter5 = $request->ter5;
        
        $turma->qua5 = $request->qua5;
        
        $turma->qui5 = $request->qui5;
        
        $turma->sex5 = $request->sex5;
        
        $turma->sab5 = $request->sab5;
        
        $turma->seg6 = $request->seg6;
        
        $turma->ter6 = $request->ter6;
        
        $turma->qua6 = $request->qua6;
        
        $turma->qui6 = $request->qui6;
        
        $turma->sex6 = $request->sex6;
        
        $turma->sab6 = $request->sab6;
        
        $turma->adicionado_por = $request->adicionado_por;
        
        
        $turma->siem_id = $request->siem_id;

        
        $turma->save();

        return redirect('turma');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/turma/'. $id . '/delete');

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
     	$turma = Turma::findOrfail($id);
     	$turma->delete();
        return URL::to('turma');
    }
}
