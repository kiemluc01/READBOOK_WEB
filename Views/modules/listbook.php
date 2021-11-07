
<?php
    $sqlBook = "select a.*,b.IMGsach,c.luotxem ,d.luotDG
    from tblSach as a, tblchitietsach as b,(select idSach, count(idMember) as luotxem from tblsachdadoc group by idSach) as c, (select idSach, count(idMember) as luotDG from tbldanhgia group by idSach) as d  
    where idDanhmuc = '".$_SESSION['idDM']."' and a.idSach = b.idSach and a.idSach = c.idSach and a.idSach = d.idSach";
    $resultBook = mysqli_query($_SESSION['conn'],$sqlBook);
    if($resultBook -> num_rows > 0){
        $d =0;?> 
        <table id="listbook">
            <tr>
            <?php
            while($rowBook = $resultBook->fetch_assoc()){ 
                $d++ ?>
                <td>
                    <div style="padding:10px;">
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
                                                <figcaption><?php echo $rowBook["luotxem"]; ?></figcaption>
                                            </div>
                                            <div style="display:flex; line-height:30px;">
                                                <img src="Public/images/icon_cmt.png" alt="" style="height: 30px;width: 30px;">                               
                                                <figcaption><?php echo $rowBook["luotDG"]; ?></figcaption>
                                            </div>
                                            <a href="" id="container_fvr">
                                                <img src="Public/images/icon_favorite_false.jpg" alt="" id="favorite" style="height: 30px;width: 30px;">
                                            </a>
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
