<div class="modal fade" id="horario_funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <i class="icon-th-list"></i> Listar Horário</h4>
      </div>
      <div class="modal-body">

<form name="funcionario" method="post" action='{{url("funcionario/horariofuncionario")}}'>
      <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

<table align="center" width="500px" border="0" style="border-collapse:collapse" cellpadding="5">
<tr>

<?php

#Seleciona dados da Tabela siem
 try{
    $sql1 ='SELECT * FROM siems;';
    $stmt1 = $conn->prepare($sql1);
    $stmt1 ->execute();
    $data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e1){
    echo 'ERROR: ' . $e1->getMessage();
}
# FIm Seleciona dados da Tabela siem

?>
<td align="center">
                <label >Selecione uma Escola:</label></p>
                <select name="escola" id="select4"> 
                    <option value="siem_id">Horários de Todas as Escolas Cadastradas</option>

                <?php foreach($data1 as $row1) : ?> 
                    <option value="<?php echo $row1['id']; ?>"><?php echo $row1['nome']; ?></option> 
                <?php endforeach ?> 
                </select>
                </p>

<?php

#Seleciona dados da Tabela pessoa
 try{
    $sql2 ='SELECT * FROM pessoas;';
    $stmt2 = $conn->prepare($sql2);
    $stmt2 ->execute();
    $data2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
}catch(PDOException $e2){
    echo 'ERROR: ' . $e2->getMessage();
}
# Fim Seleciona dados da Tabela pessoa

?>                
                <label >Selecione um Funcionário:</label></p>
                <select name="escola" id="select5"> 
                    <option value="pessoa_id">Horários de Todos Funcionários Cadastrados</option>

                <?php foreach($data2 as $row2) : ?> 
                    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['nome']; ?></option> 
                <?php endforeach ?> 
                </select>
  </td>
 
 </tr>

</table>
<div class="modal-footer">
			<button class="btn" data-dismiss="modal" >Cancelar</button>
			<button type="submit" class="btn btn-primary">Gerar Horário</button>
		 </div>
                        </div>
                </form>

                        </div>
    </div>
  </div>
</div>
