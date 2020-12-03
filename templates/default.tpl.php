<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    * {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    nav {
        width: 100%;
        background-color: #4a7188;

        display: flex;
        list-style: none;
    }

    li {
        padding: 6px 12px;
    }

    a {
        color: #fff;
        text-decoration: none;
        font-size: 17px;
    }

    .content {
        padding: 20px;
    }
    </style>
</head>

<body>
    <nav>
        <li>
            <a href="index.php/home">Home</a>
        </li>
        <li>
            <a href="index.php/admin">Admin</a>
        </li>
    </nav>
    <div class="content">
        <?php include $content?>
    </div>
</body>

</html>