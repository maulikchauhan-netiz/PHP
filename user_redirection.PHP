<html>
    <form action="">
        Select Website:<select name = "loc">
            <option value="http://www.google.com">Google</option>
            <option value="http://www.gtu.ac.in">GTU</option>
            <option value="http://www.atmiyauni.ac.in">Atmiya University</option>
            <option value="http://localhost/maulik/p1.php">Localhost</option>
        </select>
        <input type="submit" name="sb" value="open website">
    </form>
    <?php
        if(isset($_GET['sb'])){
            $a = $_GET['loc'];
            header("Location: $a");
        }
    ?>
</html>