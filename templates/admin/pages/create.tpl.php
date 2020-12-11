<h3 class="mb-5 mt-3">Criação</h3>

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
        <label for="pageImage">Imagem</label>
        <input type="file" name="pageImage" id="pageImage" onchange="handleFiles(this.files)">
    </div>

    <div class="form-group">
        <label for="pagesBody"></label>
        <textarea required name="body" class="form-control" id="pagesBody"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        Salvar
    </button>
</form>

<hr>

<a href="/admin/pages" class="btn btn-secondary">Voltar</a>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script>
function handleFiles(files) {
    const form = new FormData();
    form.append("file", files[0]);

    $.ajax({
        url: "./admin/upload/image",
        method: "POST",
        data: form,
        contentType: false,
        processData: false
    }).done(function() {
        console.log("deu certo!");
    }).fail(function() {
        console.log("deu errado");
    });
}
</script>