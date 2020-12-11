<h3 class="mb-3 mt-3">Visualizar de usuário</h3>

<dl class="row">
    <dt class="col-sm-3">Email</dt>
    <dd class="col-sm-9">
        <?php echo $variables["user"]["email"] ?>
    </dd>

    <dt class="col-sm-3">Criado em</dt>
    <dd class="col-sm-9">
        <?php echo $variables["user"]["created_at"] ?>
    </dd>

    <dt class="col-sm-3">Atualziado em</dt>
    <dd class="col-sm-9">
        <?php echo $variables["user"]["updated_at"] ?>
    </dd>
</dl>

<p>
    <a href="admin/users/<?php echo $variables["user"]["id"] ?>/edit" class="btn btn-primary">
        Editar
    </a>
    <a href="admin/users/<?php echo $variables["user"]["id"] ?>/delete" class="btn btn-danger">
        Deletar
    </a>
</p>

<hr>

<a href="/admin/users" class="btn btn-secondary">Voltar</a>