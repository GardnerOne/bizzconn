 <?php
if(isset($_POST['submit'])){
            
            include("../Connections/conn.php");
            
            $bcuser = $_POST["user"];
            
            $bcpword = $_POST["pass"];
            
            echo $bcuser . $bcpword;
            
           // $checkbcuser = "SELECT * FROM bc_logins WHERE username='$bcuser' AND password='$bcpword'";
            
            $result = mysqli_query($conn, $checkbcuser);
            
            if(!$result){
                echo $conn->error;
            }
            
            $num = $result->num_rows;
                if($num > 0 ){
                    
                    while ($row = $result->fetch_assoc()){
                        $userid = $row['id'];
                        
                        $_SESSION['bizzconn'] = $userid;
                        
                    }
                    
                   // header("Location: home.php");
                    echo "success";
                
                    } else { 
                        echo $conn->error;
                       // header("Location: login.php");
                        echo "fail";
                    }
                    }
                    
            
        
        ?>