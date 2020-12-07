<h3 class="mb-3 mt-3">Editar</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input type="text" required class="form-control" name="title" id="pagesTitle">
    </div>

    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input type="text" required class="form-control" name="url" id="pagesUrl">
        </div>
    </div>

    <div class="form-group">
        <textarea id="tiny" required name="body"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        Salvar
    </button>
</form>

<hr>

<a href="/admin/pages" class="btn btn-secondary">Voltar</a>