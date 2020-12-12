<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
    <?php include __DIR__ . "/../public/css/style.css";
    include __DIR__ . "/../public/css/notify.css";
    ?>
    </style>
</head>

<body class="d-flex flex-column">
    <div class="header">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <span>
                <a class="navbar-brand" href="home">Painel Admin</a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin">Admin</a>
                    </li>
                </ul>
            </span>
            <a href="admin/auth/logout" class="btn btn-danger">Sair</a>
        </nav>
    </div>

    <div id="main">
        <div class="row">
            <div class="col">
                <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                    <li class="nav-item">
                        <span class="nav-link text-white-50">
                            MENU
                        </span>
                    </li>
                    <li class="nav-item">
                        <a href="admin/pages"
                            class="nav-link <?php echo resolve_path("/admin/pages/?.*") ? 'active' : '' ?>">
                            <i class="far fa-file-alt"></i>&nbsp;Páginas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admin/users"
                            class="nav-link <?php echo resolve_path("/admin/users/?.*") ? 'active' : '' ?>">
                            <i class="far fa-user"></i>&nbsp;Usuários
                        </a>
                    </li>
                </ul>
            </div>
            <div class=" col-10" id="content">
                <?php include $content?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/jquery.tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    $('textarea#tiny').tinymce({});
    const links = [];
    $("a").each(function() {
        if ($(this).attr("href").replace(/\.\//, "") !== "") {
            links.push($(this).attr("href").replace(/\.\//, ""));
        }
    });

    $("a").click(function() {
        const url = $(location).attr('href');
        const origin = window.location.origin;
        const pathname = window.location.pathname;
        const link = $(this).attr("href").replace(/\.\//, "");

        const find = pathname.split("/").find(item => links.includes(item));

        if (find) {
            const regexp = new RegExp(`${find}.*`);
            console.log(origin + pathname.replace(regexp, "") + link);
            $(this).prop("href", origin + pathname.replace(regexp, "") + link);
        }
    });
    </script>
</body>

</html>