<h3 class="mb-3 mt-3">Criação de usuários</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="usersName">Nome</label>
        <input type="text" required class="form-control" name="name" id="usersName">
    </div>

    <div class="form-group">
        <label for="usersEmail">Email</label>
        <input type="text" required class="form-control" name="email" id="usersEmail">
    </div>

    <div class="form-group">
        <label for="usersPassword">Senha</label>
        <input required name="password" class="form-control" id="usersPassword" />
    </div>

    <button type="submit" class="btn btn-primary">
        Salvar
    </button>
</form>

<hr>

<a href="/admin/pages" class="btn btn-secondary">Voltar</a>