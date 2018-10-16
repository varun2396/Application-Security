<html>
    <head>
        <title>PHP File Resize</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
<body>
 
    <form action="index.php" enctype="multipart/form-data" method="post">
        Select image :
        <input type="file" name="file"><br/>
        <input type="submit" value="Upload" name="Submit1"> <br/>
    </form>
    <?php
        if(!isset($_COOKIE['jid'])) {
            setcookie("jid", "300");
            
        }
        if(isset($_POST['Submit1']))
        { 
            $filepath = "images/" . $_FILES["file"]["name"];
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
            {
                echo "<img src=".$filepath." height=".$_COOKIE['jid']." width=".$_COOKIE['jid']." /><br/><br/>";
                echo '<select id="select">
                        <option value="Select">Select</option>
                        <option value="300">300x300 </option>
                        <option value="400">400x400</option>
                        <option value="500">500x500</option>
                      </select>';
            } 
            else 
            {
                echo "Error !!";
            }
        } 
    ?>
    <script src="index.js"></script>
</body>
</html>