<?php 
    //Thong so ket noi CSDL
    include('Models/product.php');
    $product = loadModel('Product');
    $result = $product->get_category_all();
    if($result -> num_rows > 0){
        while($rowCtg = $result->fetch_assoc()){  ?>
        <div id="category">
                                        
            <?php
                // session_start();
                $_SESSION['rowDM'] = $rowCtg;
                $_SESSION['idDM'] = $rowCtg['idDanhmuc'];
                $_SESSION['product'] = $product;
                loadModule('listbook'); 
            ?>                          
        </div>
            
    <?php   }
    }
?>
