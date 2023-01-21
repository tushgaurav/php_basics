<!-- get and post -->
<?php
session_start();

if (isset($_GET["submit"]) or isset($_GET["name"])) {
    echo $_GET["name"] . " is " . $_GET["age"] . " years old. <br>";
    $_SESSION['username'] = $_GET['name'];
}

?>

<a href="<?php echo $_SERVER["PHP_SELF"] ?>">Reload</a>

<a href="<?php echo $_SERVER["PHP_SELF"] ?>?name=Tushar&age=34">Tushar</a>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age" id="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>