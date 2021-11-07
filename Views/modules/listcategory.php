<?php 
    //Thong so ket noi CSDL
    $severname ="localhost"; 
    $username ="root";
    $password =""; 
    $db_name ="web_team2";

    //Tao ket noi CSDL
    $conn = mysqli_connect($severname,$username,$password,$db_name);
    
    $sqlCtg = "select * from tblDanhmuc";
    $result = mysqli_query($conn,$sqlCtg);
    if($result -> num_rows > 0){
        while($rowCtg = $result->fetch_assoc()){  ?>
        <div id="category">
            <h2 style="background-color: rgb(190, 225, 253); line-height: 50px; color: #000000; padding-left:1%;"><?php echo $rowCtg['Tendanhmuc']; ?></h3>                            
            <?php
                // session_start();
                $_SESSION['idDM'] = $rowCtg['idDanhmuc'];
                $_SESSION['conn'] = $conn;
                loadModule('listbook'); 
            ?>                          
        </div>
            
    <?php   }
    }
?>
