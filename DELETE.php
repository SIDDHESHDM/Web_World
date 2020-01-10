<html>
    <body>
        <?php
             $conn = new mysqli("localhost","root","tiger","PH1");
             if($conn->error)
             {
                 die("Error".$conn->error);
             }
             
             else
             {
                 $var = $_POST["DID"];
                 echo "DELETED ID IS ".$var."<br>";
                 echo "<br>Connected<br>";
                 $sql = "DELETE FROM T1 WHERE ID = $var;";
                 $conn->query($sql);
                 echo "query is ".$sql."<br>";
                 $result = $conn->query("SELECT *FROM T1;");
                  echo "NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID<br>";
        
                while($res = mysqli_fetch_array($result))
                {
                    echo $res['NAME']." ".$res['ID']."<br>";
                }
             }
        ?>
    </body>
</html>

