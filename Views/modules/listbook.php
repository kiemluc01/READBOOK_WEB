
<?php
    $product = loadModel('Product');
    $resultBook =  $product->Book_category($_SESSION['idDM']);
    if($resultBook -> num_rows > 0){//_n mysqlum_rows
        $d =0;?> 
        <table id="listbook">
            <tr>
            <h2 style="background-color: rgb(190, 225, 253); line-height: 50px; color: #000000; padding-left:1%;"><?php echo $_SESSION['rowDM']['Tendanhmuc']; ?></h2>
            <?php
            while($rowBook = $resultBook->fetch_assoc()){ 
                $d++;
                $idSach = $rowBook['idSach']; ?>
                <td>
                    <div style="padding:10px;" method="get">
                        <table>
                            <tr ><td id="book_container"><center><a href="" class="listbook" ><img id="book" src="<?php echo 'Public/images/'.$rowBook['imgSach']; ?>" alt="image" ></a></center></td></tr>
                            <tr><th id="bookname" > <center><?php echo $rowBook["Tensach"]; ?></center></th></tr>
                            <tr><td id="writer"><center><?php echo $rowBook["Tacgia"]; ?></center></td></tr>
                            <tr>
                                <td>
                                    <center>
                                        <div id="details_container">
                                            <div  class="details_container">
                                                <img src="Public/images/icon_view.jpg" alt="" class="details_container">
                                                <figcaption><?php echo $rowBook["Luotxem"]; ?></figcaption>
                                            </div>
                                            <div  class="details_container">
                                                <img src="Public/images/icon_cmt.png" alt=""  class="details_container">                               
                                                <figcaption><?php echo $rowBook["Feedback"]; ?></figcaption>
                                            </div>
                                            <div class="details_container">
                                                <?php if((int)$rowBook["Favorite"] == 1){ $idset = true; ?>
                                                    <img src="Public/images/icon_favorite_true.png" onclick="reclick_fvr()" alt="" class="details_container" id="favorite" >
                                                <?php } else{ $idset = false;?>
                                                    <img src="Public/images/icon_favorite_false.jpg" onclick="click_fvr()" alt="" class="details_container" id="favorite" >
                                                <?php } ?>
                                                <figcaption><?php echo $rowBook["Favorite"]; ?></figcaption>
                                            </div>
                                        </div>
                                    </center>
                                </td>
                            </tr>
                        </table> 
                    </div>
                </td>
            <?php if($d % 7 == 0) 
            echo '</tr>';?>
            
            <?php  }
            if($d % 7 != 0)
             echo '</tr>'; ?>
            
        </table>
        <?php }?>
