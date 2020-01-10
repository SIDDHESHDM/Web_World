<html>
    <body>
        <?php
            $conn  = new mysqli("localhost","root","tiger","PH1");
           $var1 = $_POST["IDD"];
           $var2 = $_POST["NN"];
           $var3 = $_POST["NID"];
           echo "OLD ID IS &nbsp;&nbsp;&nbsp;".$var1."&nbsp;NEW ID IS&nbsp;&nbsp;&nbsp;".$var3." NEW NAME IS ".$var2."<br>";
            if($conn->connect_error)
            {
                die("connection error".$conn->connect_error);
            }
            
            else
            {
                echo "Connected<br>";
                $sql = "UPDATE T1 SET NAME = '$var2',ID = '$var3' WHERE ID =$var1 ;";
                echo "query is ".$sql."<br>";
                if($conn->query($sql))
                {
                    echo "Updated!!<br>"; 
                }
                
                else
                    echo "didn;t update<br>";
                
                $result =$conn->query("SELECT *FROM T1;"); 
                echo "NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID<br>";
        
                while($res = mysqli_fetch_array($result))
                {
                    echo $res['NAME']." ".$res['ID']."<br>";
                }
            }
            
            
            
        ?>
        <p>ENTER ID FOR DELETING-</p>
        <form action="DELETE.php" method="POST">
            ID: <input type="text" name="DID">
            <br>:<input type="submit" value="submit">
        </form>
    </body>
</html>
