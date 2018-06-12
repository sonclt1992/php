<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>

</style>
<body>
    <div class="container">
        <form action="result.php" id="loginform" method="post">
            <div class="row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div>
                    <input type="submit" value="Submit" class="btn btn-primary" id="btnsubmit">
                </div>
            </div>
        </form>
    </div>
    <!--<div class="container">
        <form action="result.php" id="loginForm" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="file">Filename:</label>
                <input type="file" class="form-control" id="file" name="file">
            </div>

            <div>
                <input type="submit" id="submit" value="Submit">
            </div>
        </form>
    </div>-->
</body>
</html>