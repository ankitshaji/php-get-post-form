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
            <button type="reset">Reset</button>
        </div>

    </form>
</body>

</html>