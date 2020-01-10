<html>
    <head>
        <title>INSERT.PHP</title>
    </head>
    <body>
        <?php
        $conn = new mysqli("localhost","root","tiger","PH1");
        $name = $_POST["FN"];
        $RN = $_POST["RN"];
        echo "NAME IS ".$name." ID IS ".$RN."<br>";
        if($conn->connect_error)
        {
            die("Connection error".$conn->connect_error);
        }
        
        else
        {
            echo "<br>Connected Successfully";
        }
        $sql1 = "INSERT INTO T1 VALUES('$name','$RN');";
        
        if($conn->query($sql1)==TRUE)
        {
            echo "<br>Inserted successfully<br>";
        }
        
        else
        {
            echo "Error".$conn->error."<br>";
        }
        
        echo "<h1>DISPLAYING DATABASE</h1>";
        $sql2 = "SELECT *FROM T1;";
        $result = $conn->query($sql2);
        echo "NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID<br>";
        while($res = mysqli_fetch_array($result))
        {
            echo $res['NAME']."&nbsp;&nbsp;&nbsp;&nbsp;".$res['ID'];
            echo "<br>";
        }
        ?>
        <p>Enter ID for updating-</p>
        <form action="UPDATE.php" method="POST">
        <input type="text" name="IDD">
        <br>NEW NAME:<input type="text" name="NN">
        <br>NEW ID:<input type="text" name="NID">
        <input type="submit" value="submit"> 
        </form>
        <p>FOR UPDATING-</p>
    </body>
</html>
