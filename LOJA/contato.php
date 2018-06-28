<?php require_once ("cabecalho.php"); ?>
 
 <form action ="enviar-contato.php" method="POST">
   <table>
      <tr>
        <td> Nome: </td>
        <td> <input class="form-control" type="text" name="nome" value="nome" /> </td>
      </tr> 
      <tr>
        <td> Sobrenome: </td>
        <td><input class="form-control" type="text" name="sobrenome" value="sobrenome" /> </td>
      </tr>
      <tr>
          <td>E-mail:</td>
          <td><input class="form-control" type="text" name="email" value="E-mail" /></td>
      </tr>
      <tr>
          <td>Descrição:</td>
          <td><textarea class="form-control" name="descricao"</td></textarea>
      </tr>  
     <tr>
      <td><button type="submit" class="btn btn-primary"> Enviar</button></td>
     </tr>
   </table>
</form>

<?php require_once("rodape.php"); ?>