<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ensinofundamental;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class EnsinofundamentalController.
 *
 * @author  The scaffold-interface created at 2017-06-20 02:08:13pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class EnsinofundamentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - ensinofundamental';
        $ensinofundamentals = Ensinofundamental::paginate(6);
        return view('ensinofundamental.index',compact('ensinofundamentals','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - ensinofundamental';
        
        return view('ensinofundamental.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ensinofundamental = new Ensinofundamental();

        
        $ensinofundamental->nome = $request->nome;

        
        
        $ensinofundamental->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new ensinofundamental has been created !!']);

        return redirect('ensinofundamental');
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
        $title = 'Show - ensinofundamental';

        if($request->ajax())
        {
            return URL::to('ensinofundamental/'.$id);
        }

        $ensinofundamental = Ensinofundamental::findOrfail($id);
        return view('ensinofundamental.show',compact('title','ensinofundamental'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - ensinofundamental';
        if($request->ajax())
        {
            return URL::to('ensinofundamental/'. $id . '/edit');
        }

        
        $ensinofundamental = Ensinofundamental::findOrfail($id);
        return view('ensinofundamental.edit',compact('title','ensinofundamental'  ));
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
        $ensinofundamental = Ensinofundamental::findOrfail($id);
    	
        $ensinofundamental->nome = $request->nome;
        
        
        $ensinofundamental->save();

        return redirect('ensinofundamental');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/ensinofundamental/'. $id . '/delete');

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
     	$ensinofundamental = Ensinofundamental::findOrfail($id);
     	$ensinofundamental->delete();
        return URL::to('ensinofundamental');
    }
}
