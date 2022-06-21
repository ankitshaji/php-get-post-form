<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Get Post</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <h1>Web Form Processor</h1>
    <!-- $_SERVERp[PHP_SELF] path to itself-->
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="first">First Name :</label>
        <input type="text" id="first" name="first" autocomplete="off">
        <label for="second">Second Name :</label>
        <input type="text" id="last" name="last" autocomplete="off">
        <div class="buttons">
            <button type="submit">Submit</button>
            <button type="submit" formmethod="post">Submit with POST</button>
        </div>

    </form>
    <br>
    <?php
    //print_r POST and GET arrays
    print_r($_GET);
    print_r($_POST);

    //GET - parameters visible in url
    //ALT
    // $firstname = filter_input(INPUT_GET, "first", FILTER_SANITIZE_STRING);
    // $lastname =  filter_input(INPUT_GET, "last", FILTER_SANITIZE_STRING);
    if (isset($_GET["first"]) && isset($_GET["last"])) {
        $firstname = $_GET["first"];
        $lastname = $_GET["last"];
        if (!empty($firstname) && !empty($lastname)) {
            echo htmlspecialchars($firstname);
            echo "<br>";
            echo htmlspecialchars($lastname);
        } else {
            echo "<br>GET:empty error : Missing data";
        }
    } else {
        echo "<br>GET:isset error: Not set";
    }

    //POST - parameters hidden in URL
    if (isset($_POST["first"]) && isset($_POST["last"])) {
        $firstname = $_POST["first"];
        $lastname = $_POST["last"];
        if (!empty($firstname) && !empty($lastname)) {
            echo htmlspecialchars($firstname);
            echo htmlspecialchars($lastname);
        } else {
            echo "<br>POST:empty error : Missing data";
        }
    } else {
        echo "<br>POST:isset error: Not set";
    }
    ?>
</body>

</html>