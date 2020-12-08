<h3 class="mb-5 mt-3">Administração de páginas</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Título</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($variables["pages"] as $page): ?>
        <tr>
            <td><?php echo $page["id"] ?? "" ?></td>
            <td>
                <a href="admin/pages/1"><?php echo $page["title"] ?? "" ?></a>
            </td>
            <td class="text-right">
                <a href="admin/pages/<?php echo $page['id'] ?>" class="brn btn-primary btn-sm">
                    Ver
                </a>
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>

<a href="admin/pages/create" class="btn btn-secondary">Novo</a>