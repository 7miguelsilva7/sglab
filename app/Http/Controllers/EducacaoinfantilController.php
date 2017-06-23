<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Educacaoinfantil;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class EducacaoinfantilController.
 *
 * @author  The scaffold-interface created at 2017-06-20 02:07:12pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class EducacaoinfantilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - educacaoinfantil';
        $educacaoinfantils = Educacaoinfantil::paginate(6);
        return view('educacaoinfantil.index',compact('educacaoinfantils','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - educacaoinfantil';
        
        return view('educacaoinfantil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $educacaoinfantil = new Educacaoinfantil();

        
        $educacaoinfantil->nome = $request->nome;

        
        
        $educacaoinfantil->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new educacaoinfantil has been created !!']);

        return redirect('educacaoinfantil');
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
        $title = 'Show - educacaoinfantil';

        if($request->ajax())
        {
            return URL::to('educacaoinfantil/'.$id);
        }

        $educacaoinfantil = Educacaoinfantil::findOrfail($id);
        return view('educacaoinfantil.show',compact('title','educacaoinfantil'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - educacaoinfantil';
        if($request->ajax())
        {
            return URL::to('educacaoinfantil/'. $id . '/edit');
        }

        
        $educacaoinfantil = Educacaoinfantil::findOrfail($id);
        return view('educacaoinfantil.edit',compact('title','educacaoinfantil'  ));
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
        $educacaoinfantil = Educacaoinfantil::findOrfail($id);
    	
        $educacaoinfantil->nome = $request->nome;
        
        
        $educacaoinfantil->save();

        return redirect('educacaoinfantil');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/educacaoinfantil/'. $id . '/delete');

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
     	$educacaoinfantil = Educacaoinfantil::findOrfail($id);
     	$educacaoinfantil->delete();
        return URL::to('educacaoinfantil');
    }
}
