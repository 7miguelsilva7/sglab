<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disciplina;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class DisciplinaController.
 *
 * @author  The scaffold-interface created at 2017-06-13 07:05:59pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - disciplina';
        $disciplinas = Disciplina::paginate(6);
        return view('disciplina.index',compact('disciplinas','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - disciplina';
        
        return view('disciplina.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $disciplina = new Disciplina();

        
        $disciplina->nome = $request->nome;

        
        
        $disciplina->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new disciplina has been created !!']);

        return redirect('disciplina');
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
        $title = 'Show - disciplina';

        if($request->ajax())
        {
            return URL::to('disciplina/'.$id);
        }

        $disciplina = Disciplina::findOrfail($id);
        return view('disciplina.show',compact('title','disciplina'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - disciplina';
        if($request->ajax())
        {
            return URL::to('disciplina/'. $id . '/edit');
        }

        
        $disciplina = Disciplina::findOrfail($id);
        return view('disciplina.edit',compact('title','disciplina'  ));
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
        $disciplina = Disciplina::findOrfail($id);
    	
        $disciplina->nome = $request->nome;
        
        
        $disciplina->save();

        return redirect('disciplina');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/disciplina/'. $id . '/delete');

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
     	$disciplina = Disciplina::findOrfail($id);
     	$disciplina->delete();
        return URL::to('disciplina');
    }
}
