<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Moodle_simulado;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Excel;

/**
 * Class Moodle_simuladoController.
 *
 * @author  The scaffold-interface created at 2016-12-20 04:11:13pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Moodle_simuladoController extends Controller
{
    public function importExport()
    {
        return view('importExport');
    }

    public function downloadExcel(Request $request, $type)
    {
        $data = Moodle_simulado::get()->toArray();
        return Excel::create('moodle_simulados', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel(Request $request)
    {

        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();

            $data = Excel::load($path, function($reader) {})->get();

            if(!empty($data) && $data->count()){

                foreach ($data->toArray() as $key => $value) {
                    if(!empty($value)){
                        foreach ($value as $v) {
                            $insert[] = [
                                'siem_cod' => $v['siem_cod'],
                                'aluno' => $v['aluno'],
                                'escola' => $v['escola'],
                                'serie' => $v['serie'],
                                'simulado' => $v['simulado'],
                                'cadastro' => $v['cadastro'],
                                'nota1' => $v['nota1'],
                                'nota2' => $v['nota2'],
                                'nota3' => $v['nota3'],
                                'nota4' => $v['nota4'],
                                'nota5' => $v['nota5'],
                                'nota6' => $v['nota6'],
                                'nota7' => $v['nota7'],
                                'nota8' => $v['nota8'],
                                'nota9' => $v['nota9'],
                                'nota10' => $v['nota10'],
                                'nota11' => $v['nota11'],
                                'nota12' => $v['nota12'],
                                'nota13' => $v['nota13'],
                                'nota14' => $v['nota14'],
                                'nota15' => $v['nota15'],
                                'nota16' => $v['nota16'],
                                'nota17' => $v['nota17'],
                                'nota18' => $v['nota18'],
                                'nota19' => $v['nota19'],
                                'nota20' => $v['nota20'],
                                'situacao' => $v['situacao']
                            ];
                        }
                    }
                }

                if(!empty($insert)){
                    Moodle_simulado::insert($insert);
                    return back()->with('success','Insert Record successfully.');
                }

            }

        }

        return back()->with('error','Please Check your file, Something is wrong there.');
    }

    public function index()
    {
        $title = 'Index - moodle_simulado';
        $moodle_simulados = Moodle_simulado::paginate(6);
        return view('moodle_simulado.index',compact('moodle_simulados','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - moodle_simulado';
        
        return view('moodle_simulado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $moodle_simulado = new Moodle_simulado();

        
        $moodle_simulado->siem_cod = $request->siem_cod;

        
        $moodle_simulado->aluno = $request->aluno;

        
        $moodle_simulado->escola = $request->escola;

        
        $moodle_simulado->serie = $request->serie;

        
        $moodle_simulado->simulado = $request->simulado;

        
        $moodle_simulado->cadastro = $request->cadastro;

        
        $moodle_simulado->nota1 = $request->nota1;

        
        $moodle_simulado->nota2 = $request->nota2;

        
        $moodle_simulado->nota3 = $request->nota3;

        
        $moodle_simulado->nota4 = $request->nota4;

        
        $moodle_simulado->nota5 = $request->nota5;

        
        $moodle_simulado->nota6 = $request->nota6;

        
        $moodle_simulado->nota7 = $request->nota7;

        
        $moodle_simulado->nota8 = $request->nota8;

        
        $moodle_simulado->nota9 = $request->nota9;

        
        $moodle_simulado->nota10 = $request->nota10;

        
        $moodle_simulado->nota11 = $request->nota11;

        
        $moodle_simulado->nota12 = $request->nota12;

        
        $moodle_simulado->nota13 = $request->nota13;

        
        $moodle_simulado->nota14 = $request->nota14;

        
        $moodle_simulado->nota15 = $request->nota15;

        
        $moodle_simulado->nota16 = $request->nota16;

        
        $moodle_simulado->nota17 = $request->nota17;

        
        $moodle_simulado->nota18 = $request->nota18;

        
        $moodle_simulado->nota19 = $request->nota19;

        
        $moodle_simulado->nota20 = $request->nota20;

        
        $moodle_simulado->situacao = $request->situacao;

        
        
        $moodle_simulado->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new moodle_simulado has been created !!']);

        return redirect('moodle_simulado');
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
        $title = 'Show - moodle_simulado';

        if($request->ajax())
        {
            return URL::to('moodle_simulado/'.$id);
        }

        $moodle_simulado = Moodle_simulado::findOrfail($id);
        return view('moodle_simulado.show',compact('title','moodle_simulado'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - moodle_simulado';
        if($request->ajax())
        {
            return URL::to('moodle_simulado/'. $id . '/edit');
        }

        
        $moodle_simulado = Moodle_simulado::findOrfail($id);
        return view('moodle_simulado.edit',compact('title','moodle_simulado'  ));
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
        $moodle_simulado = Moodle_simulado::findOrfail($id);
    	
        $moodle_simulado->siem_cod = $request->siem_cod;
        
        $moodle_simulado->aluno = $request->aluno;
        
        $moodle_simulado->escola = $request->escola;
        
        $moodle_simulado->serie = $request->serie;
        
        $moodle_simulado->simulado = $request->simulado;
        
        $moodle_simulado->cadastro = $request->cadastro;
        
        $moodle_simulado->nota1 = $request->nota1;
        
        $moodle_simulado->nota2 = $request->nota2;
        
        $moodle_simulado->nota3 = $request->nota3;
        
        $moodle_simulado->nota4 = $request->nota4;
        
        $moodle_simulado->nota5 = $request->nota5;
        
        $moodle_simulado->nota6 = $request->nota6;
        
        $moodle_simulado->nota7 = $request->nota7;
        
        $moodle_simulado->nota8 = $request->nota8;
        
        $moodle_simulado->nota9 = $request->nota9;
        
        $moodle_simulado->nota10 = $request->nota10;
        
        $moodle_simulado->nota11 = $request->nota11;
        
        $moodle_simulado->nota12 = $request->nota12;
        
        $moodle_simulado->nota13 = $request->nota13;
        
        $moodle_simulado->nota14 = $request->nota14;
        
        $moodle_simulado->nota15 = $request->nota15;
        
        $moodle_simulado->nota16 = $request->nota16;
        
        $moodle_simulado->nota17 = $request->nota17;
        
        $moodle_simulado->nota18 = $request->nota18;
        
        $moodle_simulado->nota19 = $request->nota19;
        
        $moodle_simulado->nota20 = $request->nota20;
        
        $moodle_simulado->situacao = $request->situacao;
        
        
        $moodle_simulado->save();

        return redirect('moodle_simulado');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/moodle_simulado/'. $id . '/delete');

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
     	$moodle_simulado = Moodle_simulado::findOrfail($id);
     	$moodle_simulado->delete();
        return URL::to('moodle_simulado');
    }
}
