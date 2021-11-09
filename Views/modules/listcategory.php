<?php 
    //Thong so ket noi CSDL
    $book = loadModel('Book');
    $result = $book->get_category_all();
    if($result -> num_rows > 0){
        while($rowCtg = $result->fetch_assoc()){  ?>
        <div id="category">
                                        
            <?php
                // session_start();
                $_SESSION['rowDM'] = $rowCtg;
                $_SESSION['idDM'] = $rowCtg['idDanhmuc'];
                $_SESSION['book'] = $book;
                loadModule('listbook'); 
            ?>                          
        </div>
            
    <?php   }
    }
?>
