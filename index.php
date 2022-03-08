<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select</title>

    <style>
        body {
            background-color: #eee;
        }
        select {
            margin: 10px;
        }

        option {
            font-size: 24px;
            color: blue;
        }

        p {
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">SELECTED SUBJECTS</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="text-align: center;">
        <select name="subjects[]" id="subjects" multiple>
            <option value="english">ENGLISH</option>
            <option value="math">MATH</option>
            <option value="computer">COMPUTER</option>
            <option value="physiscs">PHYSICS</option>
            <option value="chemisty">CHEMISTRY</option>
        </select>
        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_POST["subjects"])) {
        echo "<p>";
        foreach ($_POST["subjects"] as $subject) {
            echo "You selected $subject" . "<br>";
        }
        echo "</p>";
    }
    ?>
</body>

</html>