<?php 
include("cabecalho.php");
include("conectaBanco.php");
include("banco-categoria.php");
include("banco-produto.php");
$array_categorias = listaCategorias($conexao);

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
?>
    <table class="table" >
        <form action="produto_edita.php" method="post">
            
           <tr>
              <td>ID:</td>
               <td> <input type="text" disabled="true" name="id" value="<?=$produto['id'] ?> "></td>
               
            </tr>
               <tr>
               
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"><br/></td>
            </tr>
               <tr>
               <td>Preço:</td>
                   <td><input class="form-control" type="text" name="preco" value="<?=$produto['preco']?>"></td>
            </tr>
            
            <tr>
            <td></td>
            <td> <input type="checkbox" name="usado" value="<?=$produto['usado']?>">Usado</td>
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
                <td><textarea  class="form-control" name="descricao" value="<?=$produto['descricao']?>"></textarea><br/></td>
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