<form action = "" method="post">
    <p><input type = "text" name = "name" id="name" placeholder = "enter your name"></p>
    <p><input type = "text" name = "matrix" id="matrix" placeholder = "enter your matrix number"></p>
        <p>
            <input type = "submit" value = "Submit" name="submit">
            <input type = "submit" value = "Reset" name="reset">
        </p>
        </form>
    
    <?php
    if (isset($_POST["submit"])){
        //retrieve
        $name = $_POST["name"];
        $matrik = $_POST["matrix"];
        ?>
        Welcome to my page : <?php echo $name;  ?>
        Your matrix number : <?php echo $matrix; ?>
    
    <?php
    }
    ?>