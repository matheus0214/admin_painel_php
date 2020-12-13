<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header id="header">
        <h1>Bem vindo a SON</h1>
    </header>

    <div>
        <ul>
            <?php foreach ($content["pages"] as $url): ?>
            <a href="pages/<?php echo $url["url"] ?>"><?php echo $url["url"] ?></a><br />
            <?php endforeach?>
        </ul>
    </div>

    <main id="content">
        <?php echo $content["content_page"] ?? "" ?>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script>
const links = [];
$("a").each(function() {
    if ($(this).attr("href").replace(/\.\//, "") !== "") {
        links.push($(this).attr("href").replace(/\.|\/|(pages\/?)/, ""));
    }
});

$("a").click(function() {
    const url = $(location).attr('href');
    const origin = window.location.origin;
    const pathname = window.location.pathname;
    const link = $(this).attr("href").replace(/\.|\/|(pages\/?)/, "");

    const find = pathname.split("/").find(item => links.includes(item));
    console.log(find, pathname, links, pathname.split("/"))

    if (find) {
        const regexp = new RegExp(`${find}.*`);
        $(this).prop("href", origin + pathname.replace(regexp, "") + link);
    }
});
</script>

</html>