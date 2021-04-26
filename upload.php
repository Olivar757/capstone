<?php
    require("connectdb.php");
    require("db.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'navbar.php'?>
    
    <main class="afterNav">
        <div class="container" style='text-align:center;'>
            <h2>Upload your Academic Requirements Report</h2>
            <div class="container">
                <div class="help-tip">
                    <p>This is the inline help tip! It can contain all kinds of HTML. Style it as you please.</p>
                </div>
                <p>Download the most recent version of your Academic Requirements Report and upload it for processing.</p>
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" onclick='location.href="success.php"'>Upload</button>
                </div>
            </div>

            <script>
                $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                });
            </script> 
        </div>
    </main>
</body>
</html>