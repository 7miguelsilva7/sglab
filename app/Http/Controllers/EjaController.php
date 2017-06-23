<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Eja;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class EjaController.
 *
 * @author  The scaffold-interface created at 2017-06-20 02:09:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class EjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - eja';
        $ejas = Eja::paginate(6);
        return view('eja.index',compact('ejas','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - eja';
        
        return view('eja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eja = new Eja();

        
        $eja->nome = $request->nome;

        
        
        $eja->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new eja has been created !!']);

        return redirect('eja');
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
        $title = 'Show - eja';

        if($request->ajax())
        {
            return URL::to('eja/'.$id);
        }

        $eja = Eja::findOrfail($id);
        return view('eja.show',compact('title','eja'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - eja';
        if($request->ajax())
        {
            return URL::to('eja/'. $id . '/edit');
        }

        
        $eja = Eja::findOrfail($id);
        return view('eja.edit',compact('title','eja'  ));
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
        $eja = Eja::findOrfail($id);
    	
        $eja->nome = $request->nome;
        
        
        $eja->save();

        return redirect('eja');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/eja/'. $id . '/delete');

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
     	$eja = Eja::findOrfail($id);
     	$eja->delete();
        return URL::to('eja');
    }
}
