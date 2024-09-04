<div class="container">
    <h2 class="bi bi-bookmark-plus"><i class="bi bi-plus"></i>Cadastro de nova categoria</h2>

    <form action="index.php?menu=inserir-categorias" method="post">
        <div class="mb-3 col-6">
            <label class="form-label" for="nomeCategoria">Título do Vídeo</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-bookmark-plus"></i>
                </div>
                <input class="form-control" type="text" name="nomeCategoria" id="nomeCategoria" required>
            </div>
        </div>

        <div class="mb-3">
            <div class="mb-3">
                <button class="btn btn-success bi bi-floppy-fill" type="submit"> Salvar</button>
            </div>
        </div>
    </form>
</div>