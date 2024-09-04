<?php
$idCategoria = $_GET["idCategoria"];
$sql = "SELECT * FROM tbCategorias WHERE idCategoria = '{$idCategoria}'";
$rs = mysqli_query($conexao, $sql) or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<div class="container">
    <h2>Editar categoria</h2>

    <form action="index.php?menu=atualizar-categorias" method="post">
    <div class="mb-3 col-12 col-sm-2">
            <label class="form-label" for="idCategoria">ID</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-key"></i>
                </div>
                <input class="form-control" type="text" name="idCategoria" id="idCategoria" value="<?= $dados['idCategoria'] ?>"
                    readonly required>
            </div>
        </div>
        <div class="mb-3 col-12 col-sm-6">
            <label class="form-label" for="nomeCategoria">Nome da categoria</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-bookmark-plus"></i>
                </div>
                <input class="form-control" type="text" name="nomeCategoria" id="nomeCategoria"
                    value="<?= $dados['nomeCategoria'] ?>" required>
            </div>
        </div>
    
        <div class="mb-3">
            <button class="btn btn-success bi bi-floppy-fill" type="submit"> Salvar</button>
        </div>
    </form>
</div>