<h3 class="mb-3 mt-3">Edição de usuários</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="usersEmail">Email</label>
        <input type="text" 
        value="<?php echo $variables["user"]["email"] ?>" required class="form-control" name="email" id="usersEmail">
    </div>

    <div class="form-group">
        <label for="usersPassword">Senha</label>
        <input type="password" name="password" class="form-control" id="usersPassword" />
    </div>

    <button type="submit" class="btn btn-primary">
        Salvar
    </button>
</form>

<hr>

<a href="/admin/users" class="btn btn-secondary">Voltar</a>