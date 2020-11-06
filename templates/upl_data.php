<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<form enctype="multipart/form-data" action="upl.php" method="POST">
    <p><input type="hidden" name="MAX_FILE_SIZE" value="3000000" /></p>
    <p><input name="userfile" type="file" /></p>
    <p><input type="submit" value="Отправить файл" /></p>
</form>
<?php if (!empty($f)) : ?>
    <?php if ($f) : ?>
        <?php echo "File uploaded succesfully..."; ?>
    <?php else : ?>
        <?php echo "File upload error..."; ?>
    <?php endif; ?>
<?php else : ?>
    <?php echo "File upload error..."; ?>
<?php endif; ?>

<input id="result" type="label">

</div>
<script>
    function reqListener() {
        element = document.getElementById("result");
        element.value= f;
    }

    var oReq = new XMLHttpRequest(); // New request object
    oReq.onload = function() {
        // This is where you handle what to do with the response.
        // The actual data is found on this.responseText
        
        var f=this.responseText; // Will alert: 42
    };
    oReq.open("get", "upl_data.php", true);
    oReq.send();
</script>


<!-- <script>
    if (typeof(EventSource) !== "undefined") {
        var source = new EventSource("upl.php");
        source.onmessage = function(event) {
            document.getElementById("result").Value = event.data;
        };
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
    }
</script> -->