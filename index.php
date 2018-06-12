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
<body>

    <!--<div class="container">
        <h2>Tutorials Point Absolute classes registration</h2>
        <form action="" id="loginform">
            <div class="col-sm-6">
                <div class="row form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="form-control">
                </div>
                <div class="row form-group">
                    <label for="emal">Email</label>
                    <input type="text" id="email" class="form-control">
                </div>
                <div class="row form-group">
                    <label for="specificTime">Specific Time</label>
                    <input type="text" id="specificTime" class="form-control">
                </div>
                <div class="row form-group">
                    <label for="classDetail">Class Details</label>
                    <textarea name="classDetail" id="classDetail" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="row">
                    <label for="">Gender</label>
                    <input type="radio" id="male" name="gender">Male
                    <input type="radio" id="female" name="gender">Female
                </div>
                <div class="row">
                    <button type="submit" id="btnsubmit">Submit</button>
                </div>
            </div>
        </form>
    </div>-->

    <?php
        $name = $email = $gender = $website = $comment = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = test_input($_POST['name']);
            $email = test_input($_POST['email']);
            $gender = test_input($_POST['gender']);
            $website = test_input($_POST['website']);
            $comment = test_input($_POST['comment']);
        }
        function test_input($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    ?>
    <form action="index.php" method="post" id="formlogin">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" id="name" name="name"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
                <td>Specific time: </td>
                <td><input type="text" id="website" name="website"></td>
            </tr>
            <tr>
                <td>Class details: </td>
                <td><textarea name="comment" id="comment" cols="40" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td>
                    <input type="radio" id="male" name="gender"> Male
                    <input type="radio" id="female" name="gender"> Female
                </td>
            </tr>
            <tr>
                <td><input type="button" id="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <?php
        echo "<h2>Your given details are as: </h2>";
        echo $name;
        echo "<br>";

        echo $email;
        echo "<br>";

        echo $gender;
        echo "<br>";

        echo $website;
        echo "<br>";

        echo $comment;
        echo "<br>";
    ?>


<script src="js/bootstrap.min.js"></script>
</body>
</html>