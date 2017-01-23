<?php 
include("cabecalho.php");
include("conectaBanco.php");
include("banco-categoria.php");
include("logica_usuario.php");

$array_categorias = listaCategorias($conexao);
verificaUsuario();
    
    


?>
    <table class="table" >
        <form action="produto_sucesso.php" method="post">
            
           <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome"><br/></td>
            </tr>
               <tr>
               <td>Preço:</td>
                   <td><input class="form-control" type="text" name="preco"><br/></td>
            </tr>
            
            <tr>
            <td></td>
            <td> <input type="checkbox" name="usado" value="true">Usado</td>
            </tr>
            
            <tr>
                <td>Categorias:</td>
                <td>
                <select name="categoria_id" class="form-control">
            <?php foreach($array_categorias as $array): 
            ?>
                
            <option     name="categoria_id" value="<?= $array['id'] ?>"> <?= $array['categoria'] ?>
                    
            <?php 
            endforeach
            ?>
              </select><br/>
            </td>
            </tr>
            <tr>
            <td>Descrição:</td> 
                <td><textarea  class="form-control" name="descricao"></textarea><br/></td>
            </tr>
              <tr>
                  <td>
                  <input type="submit" value="Cadastrar">
                </td>
                </tr>
            
      
        </form>
          </table>
<?php 
     
include("rodape.php");
?>