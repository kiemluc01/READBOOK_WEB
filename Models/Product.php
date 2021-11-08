<?php
class Product extends Database{
    function product_all(){
        $sql = "select * from tblsach as a,tblchitietsach order by b.ngaydang desc";
    }
}