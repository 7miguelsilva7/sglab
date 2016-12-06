@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit horario_funcionario
    </h1>
    <form method = 'get' action = '{!!url("horario_funcionario")!!}'>
        <button class = 'btn btn-danger'>horario_funcionario Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("horario_funcionario")!!}/{!!$horario_funcionario->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="seg_m">seg_m</label>
            <input id="seg_m" name = "seg_m" type="text" class="form-control" value="{!!$horario_funcionario->
            seg_m!!}"> 
        </div>
        <div class="form-group">
            <label for="ter_m">ter_m</label>
            <input id="ter_m" name = "ter_m" type="text" class="form-control" value="{!!$horario_funcionario->
            ter_m!!}"> 
        </div>
        <div class="form-group">
            <label for="qua_m">qua_m</label>
            <input id="qua_m" name = "qua_m" type="text" class="form-control" value="{!!$horario_funcionario->
            qua_m!!}"> 
        </div>
        <div class="form-group">
            <label for="qui_m">qui_m</label>
            <input id="qui_m" name = "qui_m" type="text" class="form-control" value="{!!$horario_funcionario->
            qui_m!!}"> 
        </div>
        <div class="form-group">
            <label for="sex_m">sex_m</label>
            <input id="sex_m" name = "sex_m" type="text" class="form-control" value="{!!$horario_funcionario->
            sex_m!!}"> 
        </div>
        <div class="form-group">
            <label for="sab_m">sab_m</label>
            <input id="sab_m" name = "sab_m" type="text" class="form-control" value="{!!$horario_funcionario->
            sab_m!!}"> 
        </div>
        <div class="form-group">
            <label for="dom_m">dom_m</label>
            <input id="dom_m" name = "dom_m" type="text" class="form-control" value="{!!$horario_funcionario->
            dom_m!!}"> 
        </div>
        <div class="form-group">
            <label for="seg_t">seg_t</label>
            <input id="seg_t" name = "seg_t" type="text" class="form-control" value="{!!$horario_funcionario->
            seg_t!!}"> 
        </div>
        <div class="form-group">
            <label for="ter_t">ter_t</label>
            <input id="ter_t" name = "ter_t" type="text" class="form-control" value="{!!$horario_funcionario->
            ter_t!!}"> 
        </div>
        <div class="form-group">
            <label for="qua_t">qua_t</label>
            <input id="qua_t" name = "qua_t" type="text" class="form-control" value="{!!$horario_funcionario->
            qua_t!!}"> 
        </div>
        <div class="form-group">
            <label for="qui_t">qui_t</label>
            <input id="qui_t" name = "qui_t" type="text" class="form-control" value="{!!$horario_funcionario->
            qui_t!!}"> 
        </div>
        <div class="form-group">
            <label for="sex_t">sex_t</label>
            <input id="sex_t" name = "sex_t" type="text" class="form-control" value="{!!$horario_funcionario->
            sex_t!!}"> 
        </div>
        <div class="form-group">
            <label for="sab_t">sab_t</label>
            <input id="sab_t" name = "sab_t" type="text" class="form-control" value="{!!$horario_funcionario->
            sab_t!!}"> 
        </div>
        <div class="form-group">
            <label for="dom_t">dom_t</label>
            <input id="dom_t" name = "dom_t" type="text" class="form-control" value="{!!$horario_funcionario->
            dom_t!!}"> 
        </div>
        <div class="form-group">
            <label for="seg_n">seg_n</label>
            <input id="seg_n" name = "seg_n" type="text" class="form-control" value="{!!$horario_funcionario->
            seg_n!!}"> 
        </div>
        <div class="form-group">
            <label for="ter_n">ter_n</label>
            <input id="ter_n" name = "ter_n" type="text" class="form-control" value="{!!$horario_funcionario->
            ter_n!!}"> 
        </div>
        <div class="form-group">
            <label for="qua_n">qua_n</label>
            <input id="qua_n" name = "qua_n" type="text" class="form-control" value="{!!$horario_funcionario->
            qua_n!!}"> 
        </div>
        <div class="form-group">
            <label for="qui_n">qui_n</label>
            <input id="qui_n" name = "qui_n" type="text" class="form-control" value="{!!$horario_funcionario->
            qui_n!!}"> 
        </div>
        <div class="form-group">
            <label for="sex_n">sex_n</label>
            <input id="sex_n" name = "sex_n" type="text" class="form-control" value="{!!$horario_funcionario->
            sex_n!!}"> 
        </div>
        <div class="form-group">
            <label for="sab_n">sab_n</label>
            <input id="sab_n" name = "sab_n" type="text" class="form-control" value="{!!$horario_funcionario->
            sab_n!!}"> 
        </div>
        <div class="form-group">
            <label for="dom_n">dom_n</label>
            <input id="dom_n" name = "dom_n" type="text" class="form-control" value="{!!$horario_funcionario->
            dom_n!!}"> 
        </div>
        <div class="form-group">
            <label for="seg_c">seg_c</label>
            <input id="seg_c" name = "seg_c" type="text" class="form-control" value="{!!$horario_funcionario->
            seg_c!!}"> 
        </div>
        <div class="form-group">
            <label for="ter_c">ter_c</label>
            <input id="ter_c" name = "ter_c" type="text" class="form-control" value="{!!$horario_funcionario->
            ter_c!!}"> 
        </div>
        <div class="form-group">
            <label for="qua_c">qua_c</label>
            <input id="qua_c" name = "qua_c" type="text" class="form-control" value="{!!$horario_funcionario->
            qua_c!!}"> 
        </div>
        <div class="form-group">
            <label for="qui_c">qui_c</label>
            <input id="qui_c" name = "qui_c" type="text" class="form-control" value="{!!$horario_funcionario->
            qui_c!!}"> 
        </div>
        <div class="form-group">
            <label for="sex_c">sex_c</label>
            <input id="sex_c" name = "sex_c" type="text" class="form-control" value="{!!$horario_funcionario->
            sex_c!!}"> 
        </div>
        <div class="form-group">
            <label for="sab_c">sab_c</label>
            <input id="sab_c" name = "sab_c" type="text" class="form-control" value="{!!$horario_funcionario->
            sab_c!!}"> 
        </div>
        <div class="form-group">
            <label for="dom_c">dom_c</label>
            <input id="dom_c" name = "dom_c" type="text" class="form-control" value="{!!$horario_funcionario->
            dom_c!!}"> 
        </div>
        <div class="form-group">
            <label>siems Select</label>
            <select name = 'siem_id' class = "form-control">
                @foreach($siems as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label>pessoas Select</label>
            <select name = 'pessoa_id' class = "form-control">
                @foreach($pessoas as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection