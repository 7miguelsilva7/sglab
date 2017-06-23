<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Programa;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ProgramaController.
 *
 * @author  The scaffold-interface created at 2017-06-20 02:07:33pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - programa';
        $programas = Programa::paginate(6);
        return view('programa.index',compact('programas','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - programa';
        
        return view('programa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programa = new Programa();

        
        $programa->nome = $request->nome;

        
        
        $programa->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new programa has been created !!']);

        return redirect('programa');
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
        $title = 'Show - programa';

        if($request->ajax())
        {
            return URL::to('programa/'.$id);
        }

        $programa = Programa::findOrfail($id);
        return view('programa.show',compact('title','programa'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - programa';
        if($request->ajax())
        {
            return URL::to('programa/'. $id . '/edit');
        }

        
        $programa = Programa::findOrfail($id);
        return view('programa.edit',compact('title','programa'  ));
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
        $programa = Programa::findOrfail($id);
    	
        $programa->nome = $request->nome;
        
        
        $programa->save();

        return redirect('programa');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/programa/'. $id . '/delete');

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
     	$programa = Programa::findOrfail($id);
     	$programa->delete();
        return URL::to('programa');
    }
}
