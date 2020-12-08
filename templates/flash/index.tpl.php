<style>
.container-flash {
    position: absolute;
    /* max-width: 400px; */

    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;

    padding: 30px 20px;
    border-radius: 5px;
    border: 1px solid #dfdfdf;
    background-color: #ededed;

    font-size: 21px;
}

.close {
    position: absolute;
    right: 5px;
    top: 0px;
}
</style>

<form class="container-flash" method="POST" action="flash.php">
    <div class="close">
        <button type="button" class="close" aria-label="Close" onClick={}>
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php echo $message ?? "" ?>
</form>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script>
$(".close").click(function() {
    <?php close_flash();?>
    $("form.container-flash").hide();
})
</script>