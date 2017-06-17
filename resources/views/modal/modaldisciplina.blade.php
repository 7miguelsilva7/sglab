
<html lang="en">
    <head>

<script>
   $('#meuModal').on('shown.bs.modal', function () {
     $(this).removeData('bs.modal');
   });
</script>

    </head>
    <body>
<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><strong>Adicionar Disciplina ao Professor</strong></h4>
          </div>
    <br>
    <form method = 'POST' action = '{!!url("modal")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
       
<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding="5">


<tr>
<td align="center">
 
 
<label >Disciplinas: {{$funcionario->pessoa->nome}}</label><br>
          @foreach($disciplinas as $key => $value)
          <option value="{{$key}}">{{$value->nome}}</option>
          @endforeach 
</p>
</td>
</tr> 

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Relatório</button>
		</div>
		</div>
</form>

</div>

</body>
<script> var baseURL = "{{URL::to('/')}}"</script>
            <script src="http://7miguelsilva7.000webhostapp.com/sglab/js/select2.js"></script>

                   
                      
                        
     