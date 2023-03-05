<!DOCTYPE html>

<?php include_once "../Includes/Operator.php"; ?>

<html>
    <head>
        <title>My Calculator</title>
        <link rel="stylesheet" href="../Public/Style.css">
    </head>
    <body>
        <form method="POST">
            <h2>My Calculator App</h2>
            <input name="first-num" placeholder="Enter a number">
            <select name="operator">
                <option></option>
                <option value="add" name="add">Add</option>
                <option value="sub" name="sub">Subtract</option>
                <option value="div" name="div">Divide</option>
                <option value="mult" name="mult">Multiply</option>
            </select>
            <input name="second-num" placeholder="Enter a number"><br><br>
            <button type="submit" name="calculate">Calculate</button>
        </form>
        <div class="calculation">
            <h1><?php echo $result ?? '' ?></h1>
        </div>
    </body>
</html>