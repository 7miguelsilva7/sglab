<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Turno;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class TurnoController.
 *
 * @author  The scaffold-interface created at 2017-06-17 02:06:50pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - turno';
        $turnos = Turno::paginate(6);
        return view('turno.index',compact('turnos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - turno';
        
        return view('turno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turno = new Turno();

        
        $turno->nome = $request->nome;

        
        
        $turno->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new turno has been created !!']);

        return redirect('turno');
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
        $title = 'Show - turno';

        if($request->ajax())
        {
            return URL::to('turno/'.$id);
        }

        $turno = Turno::findOrfail($id);
        return view('turno.show',compact('title','turno'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - turno';
        if($request->ajax())
        {
            return URL::to('turno/'. $id . '/edit');
        }

        
        $turno = Turno::findOrfail($id);
        return view('turno.edit',compact('title','turno'  ));
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
        $turno = Turno::findOrfail($id);
    	
        $turno->nome = $request->nome;
        
        
        $turno->save();

        return redirect('turno');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/turno/'. $id . '/delete');

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
     	$turno = Turno::findOrfail($id);
     	$turno->delete();
        return URL::to('turno');
    }
}
