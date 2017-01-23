<?php  include("cabecalho.php"); 
include("conectaBanco.php"); 
include("banco-produto.php");
?>


<table class="table table-striped table-bordered">
<thead>
    <td>Nome</td>
    <td>Preço</td>
    <td>Categoria</td>
    <td>Descrição</td>
    <td>Ações</td>
    </thead>
    <tbody>
    <?php
$produto = listaProduto($conexao);
foreach($produto as $produtoArray):
?>

    <tr>
    <td><?=$produtoArray['nome']?></td>
    <td>R$ <?=$produtoArray['preco']?></td>
    <td><?= $produtoArray['categoria_nome']?></td>
    <td><?= $produtoArray['descricao']?></td>
    <td> 
        <a href="edita_produto.php?id=<?=$produtoArray['id']?>" class="btn btn-primary">Editar</a>
        <td><form action="deleta_produto.php" method="post">
            <input type="hidden" name="id" value="<?=$produtoArray['id']?>">
            <button class="btn btn-danger">Remover</button>
        </form>
     </td>
     </tr>

<?php
endforeach
 ?>
        </tbody>
</table>

<?php  include("rodape.php"); ?>