<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Funcionario;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Disciplina;

use App\Siem;

use App\Ocupacao;

use App\Disciplina_funcionario;

use App\Pessoa;

use Auth;

use App\Turno;

/**
 * Class FuncionarioController.
 *
 * @author  The scaffold-interface created at 2016-10-28 02:13:47am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
       //$funcionarios = Funcionario::paginate(6);


$usuario_logado = Auth::user()->name;


            $pessoas = Pessoa::all();

            $siems = Siem::all();


if($usuario_logado == "Admin") {

            $search = \Request::get('search'); //<-- we use global request to get the param of URI

            // $funcionarios = Funcionario::where('pessoa_id','like','%'.$search.'%')
            //     ->orderBy('pessoa_id')
            //     ->paginate(5);



            $funcionarios = Funcionario::whereHas('pessoa', function($query) use($search){
            $query->where('nome', 'like', '%'.$search.'%');
            })
            ->orwhereHas('siem', function($query) use($search){
            $query->where('nome', 'like', '%'.$search.'%')
                  ->orwhere('siem','like','%'.$search.'%');
            
            })
            ->orwhereHas('ocupacao', function($query) use($search){
            $query->where('nome', 'like', '%'.$search.'%');
            })
            // ->orWhere('distrito','LIKE','%'.$search.'%')
            // ->orwhere('bairro','like','%'.$search.'%')
            // ->orwhere('inep','like','%'.$search.'%')
                       
            ->paginate(200);

            return view('funcionario.index',compact('funcionarios','pessoas','escolas'));

} else {

           $search = \Request::get('search'); //<-- we use global request to get the param of URI

           if ($search == "") {

            $funcionarios = Funcionario::where('pessoa_id','like','%'.$search.'%')
                ->where('siem_id',Auth::user()->id)
                ->orderBy('pessoa_id')
                ->paginate(50);

            return view('funcionario.index',compact('funcionarios','pessoas','escolas'));

            // $funcionarios = Funcionario::where('pessoa_id','like','%'.$search.'%')
            //     ->where('user_id',Auth::user()->id)
            //     ->orderBy('pessoa_id')
            //     ->paginate(5);

             } else 

            {
            
            $funcionarios = Funcionario::whereHas('pessoa', function($query) use($search){
            $query
            ->where('siem_id',Auth::user()->id)
            ->where('nome', 'like', '%'.$search.'%')
                            ;
            })
            ->orwhereHas('siem', function($query) use($search){
            $query
            ->where('siem_id',Auth::user()->id)
            ->where('nome', 'like', '%'.$search.'%')
            ->orwhere('siem','like','%'.$search.'%');
            })
            ->orwhereHas('ocupacao', function($query) use($search){
            $query
            ->where('siem_id',Auth::user()->id)
            ->where('nome', 'like', '%'.$search.'%');
            })
                     
                      
            ->paginate(200);


        return view('funcionario.index',compact('funcionarios','pessoas','escolas'));
}
    }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */

        public function perfilfuncionario()
{

        return view('phpreport.PerfilFuncionarios');


}

        public function reportfuncionario()
{

        return view('phpreport.ReportFuncionarios');


}

        public function horariofuncionario()
{

        return view('phpreport.ReportHorarioFunc');


}

    public function create()
    {
        $disciplinas = Disciplina::all();

        $siems = Siem::all()->pluck('nome','id');
        
        $ocupacaos = Ocupacao::all()->pluck('nome','id');
        
        $pessoas = Pessoa::all()->pluck('nome','id');
        
        return view('funcionario.create',compact('siems' , 'ocupacaos' , 'pessoas', 'disciplinas'  ));
    }

    public function modaldisciplina()
    {
        $disciplinas = Disciplina::all();

        $siems = Siem::all()->pluck('nome','id');
        
        $ocupacaos = Ocupacao::all()->pluck('nome','id');
        
        $pessoas = Pessoa::all()->pluck('nome','id');
        
        return view('modal.modaldisciplina',compact('siems' , 'ocupacaos' , 'pessoas', 'disciplinas'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */

     public function assignDisciplina(Request $request)
    {


        $disciplinas = Disciplina::all();

        $funcionario = Funcionario::findOrfail($request->funcionario_id);

        $funcionario->disciplinas()->attach([$request->disciplina_id]);

        return redirect('funcionario/'.$request->funcionario_id);


        // return view('funcionario.edit',compact('funcionario', 'disciplinas'));
    }

    public function removeDisciplina(Request $request)

    {
       $funcionario = Funcionario::findOrfail($request->funcionario_id);
    
       $funcionario->disciplinas()->detach([$request->disciplina_id]);

       return redirect('funcionario/'.$request->funcionario_id);

    }

    public function store(Request $request)
    {
    
 // validação de campos do formulário
        //print_r($request->all());
        $this->validate($request,[
         'vinculo'=>'required|max:50',
         'siem_id'=>'required|unique_with:funcionarios,pessoa_id',
        ]);
// Fim validação de campos de formulário

        $disciplinas = Disciplina::all();


        $funcionario = new Funcionario();

        $funcionario->adicionado_por = $request->adicionado_por;


        $funcionario->user_id = $request->user_id;

        
        $funcionario->vinculo = $request->vinculo;

        
        $funcionario->status_funcionario = $request->status_funcionario;
                
        
        $funcionario->siem_id = $request->siem_id;

        
        $funcionario->ocupacao_id = $request->ocupacao_id;

        
        $funcionario->pessoa_id = $request->pessoa_id;

        $funcionario->cargaHoraria = $request->cargaHoraria;

        $funcionario->turno = implode(' - ', $request->turno);

        $funcionario->disciplina = implode(' - ', $request->disciplina);       

        
        $funcionario->save();
        

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new funcionario has been created !!']);

        return redirect('funcionario');
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
        $disciplinas = Disciplina::all();
        
        $turnos = Turno::all();

        if($request->ajax())
        {
            return URL::to('funcionario/'.$id);
        }

        $funcionario = Funcionario::findOrfail($id);
        return view('funcionario.show',compact('funcionario', 'disciplinas'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {

        $usuario_logado = Auth::user()->name;

        if($request->ajax())
        {
            return URL::to('funcionario/'. $id . '/edit');
        }

        
        $siems = Siem::all()->pluck('nome','id');

        
        $ocupacaos = Ocupacao::all()->pluck('nome','id');

        
        $pessoas = Pessoa::all()->pluck('nome','id');

        
        $funcionario = Funcionario::findOrfail($id);

if($usuario_logado == "Admin") 

        {

        return view('funcionario.edit',compact('funcionario' ,'siems', 'ocupacaos', 'pessoas' ) );

} else {


        if($funcionario->user_id == Auth::user()->id)

        {

        return view('funcionario.edit',compact('funcionario' ,'siems', 'ocupacaos', 'pessoas' ) );

        } else {

                    $this->authorize('vinculo_funcionario', $funcionario);

                    return view('funcionario.edit',compact('funcionario' ,'siems', 'ocupacaos', 'pessoas' ) );

            }

        }
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
        $funcionario = Funcionario::findOrfail($id);

        $funcionario->vinculo = $request->vinculo;
        
    	
        $funcionario->user_id = $request->user_id;
        
        $funcionario->vinculo = $request->vinculo;
        
        $funcionario->status_funcionario = $request->status_funcionario;
        
        
        $funcionario->siem_id = $request->siem_id;

        
        $funcionario->ocupacao_id = $request->ocupacao_id;

        
        $funcionario->pessoa_id = $request->pessoa_id;


        $funcionario->cargaHoraria = $request->cargaHoraria;

        $funcionario->turno = implode(' - ', $request->turno);

        $funcionario->disciplina = implode(' - ', $request->disciplina); 


        $funcionario->save();

        return redirect('funcionario');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/funcionario/'. $id . '/delete');

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
     	$funcionario = Funcionario::findOrfail($id);
     	$funcionario->delete();
        return URL::to('funcionario');
    }
}
