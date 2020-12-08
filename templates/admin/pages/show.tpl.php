<h3 class="mb-3 mt-3">Ver</h3>

<div class="row">
    <div class="col-3">
        <dl class="row">
            <dt class="col-sm-6">Título</dt>
            <dd class="col-sm-6">
                <?php echo $variables["page"]["title"] ?? "" ?>
            </dd>

            <dt class="col-sm-6">URL</dt>
            <dd class="col-sm-6">/ -
                <a href=<?php echo $variables["page"]["url"] ?? "" ?> target="_blank">Abrir</a>
            </dd>

            <dt class="col-sm-6">Criado em</dt>
            <dd class="col-sm-6"><?php echo $variables["page"]["created_at"] ?? "" ?></dd>

            <dt class="col-sm-6">Atualizado em</dt>
            <dd class="col-sm-6"><?php echo $variables["page"]["updated_at"] ?? "" ?></dd>
        </dl>
    </div>
    <div class="col bg-light">
        <div><?php echo $variables["page"]["body"] ?? "" ?></div>
    </div>
</div>

<p>
    <a href="admin/pages/<?php echo $variables["page"]["id"] ?>/edit" class="btn btn-primary">
        Editar
    </a>
    <a href="admin/pages/<?php echo $variables["page"]["id"] ?>/delete" class="btn btn-danger">
        Deletar
    </a>
</p>

<hr>

<a href="admin/pages" class="btn btn-secondary">Voltar</a>