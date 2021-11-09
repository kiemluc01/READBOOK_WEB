<?php
class Product extends Database{
    
    function product_all(){
        $sql = "select a.*,Sotrang,Luotxem,Feedback,Favorite 
        from tblsach as a,chitietsach as b 
        where  a.idSach = b.idSach 
        order by b.ngaydang desc";
        $result = mysqli_query($this->conn , $sql);
        return $result;
    }
    function find($string){
        $sql = "select a.*,Sotrang,Luotxem,Feedback,Favorite 
        from tblsach as a,chitietsach as b,tbldanhmuc as c 
        where a.idSach like N'%".$string."%'and Tensach like N'%".$string."%'and a.idDanhmuc like N'%".$string."%' and Tendanhmuc like N'%".$string."%' and a.idSach = b.idSach and a.idDanhmuc = c.idDanhmuc order by NgayDang desc";
        $result = mysqli_query($this->conn , $sql);
        return $result;
    }
    function get_category_all(){
        $sql = "select * from tbldanhmuc";
        $result = mysqli_query($this->conn , $sql);
        return $result;
    }
    function Book_category($category){
        $sql = "select a.*,Sotrang,Luotxem,Feedback,Favorite 
        from tblsach as a,chitietsach as b 
        where idDanhmuc = ".$category." and a.idSach = b.idSach" ;
        $result = mysqli_query($this->conn , $sql);
        return $result;
    }

}
