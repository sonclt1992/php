<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        /* Show information of file when upload*/
        /*if($_FILES["file"]["error"] > 0){
            echo "Error: ". $_FILES["file"]["error"]. "<br/>";
        }else{
            echo "Upload: ".$_FILES["file"]["name"]. "<br>";
            echo "Type: ".$_FILES["file"]["type"]."<br>";
            echo "Size: ".($_FILES["file"]["size"] / 1024)." Kb"."<br>";
            echo "Stored in: ".$_FILES["file"]["tmp_name"];
        }*/
        echo "Name: ".$_POST['name']."<br>";
        echo "Email: ".$_POST['email'];
    ?>

</body>
</html>