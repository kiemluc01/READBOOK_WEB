
<?php
    if(isset($_REQUEST['favorite'])){
        if($idset)
            $sqlupdate = "update tblchitietsach set luotfvr = 0 where idSach = '".$idSach."'";
        else
            $sqlupdate = "update tblchitietsach set luotfvr = 1 where idSach = '".$idSach."'";
            mysqli_query($_SESSION['conn'],$sqlupdate);
    }
    $sqlBook = "select a.*,b.IMGsach,b.Luotxem ,b.luotcmt, b.luotfvr
    from tblSach as a, tblchitietsach as b 
    where idDanhmuc = '".$_SESSION['idDM']."' and a.idSach = b.idSach ";
    $resultBook = mysqli_query($_SESSION['conn'],$sqlBook);
    if($resultBook -> num_rows > 0){
        $d =0;?> 
        <table id="listbook">
            <tr>
            <?php
            while($rowBook = $resultBook->fetch_assoc()){ 
                $d++;
                $idSach = $rowBook['idSach']; ?>
                <td>
                    <div style="padding:10px;" method="get">
                        <table>
                            <tr ><td style="border: 1px #000 solid;"><center><a href="" class="listbook" ><img id="book" src="<?php echo 'Public/images/'.$rowBook['IMGsach']; ?>" alt="image" style="height: 200px; width:180px;"></a></center></td></tr>
                            <tr><th style="font-size: 20px;"> <center><?php echo $rowBook["Tensach"]; ?></center></th></tr>
                            <tr><td style="font-size: 15px;"><center><?php echo $rowBook["Tentacgia"]; ?></center></td></tr>
                            <tr>
                                <td>
                                    <center>
                                        <div style="display:flex; justify-content: space-between; width: 200px;">
                                            <div style="display:flex; line-height:30px;">
                                                <img src="Public/images/icon_view.jpg" alt="" style="height: 30px;width: 30px;">
                                                <figcaption><?php echo $rowBook["Luotxem"]; ?></figcaption>
                                            </div>
                                            <div style="display:flex; line-height:30px;">
                                                <img src="Public/images/icon_cmt.png" alt="" style="height: 30px;width: 30px;">                               
                                                <figcaption><?php echo $rowBook["luotcmt"]; ?></figcaption>
                                            </div>
                                                <?php if((int)$rowBook["luotfvr"] == 1){ $idset = true; ?>
                                                    <img src="Public/images/icon_favorite_true.png" onclick="reclick_fvr()" alt="" class="fvr" id="favorite" style="height: 30px;width: 30px;">
                                                <?php } else{ $idset = false;?>
                                                    <img src="Public/images/icon_favorite_false.jpg" onclick="click_fvr()" alt="" class="fvr" id="favorite" style="height: 30px;width: 30px;">
                                                <?php } ?>
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
