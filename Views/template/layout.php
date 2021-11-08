<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web đọc sách online</title>
    <link rel="stylesheet" href="Public/css/main.css">
    <link rel="stylesheet" href="Public/css/menu.css">
    <link rel="stylesheet" href="Public/css/content.css">
    <link rel="stylesheet" href="Public/css/footer.css">
    <link rel="stylesheet" href="Public/css/animateLeft.css">
    <link rel="stylesheet" href="Public/css/animateRight.css">
    <script language="javascript" src="Public/js/stickyMenu.js"></script>

</head>
<body >
    <?php 
        //Thong so ket noi CSDL
        $severname ="localhost"; 
        $username ="root";
        $password =""; 
        $db_name ="web_team2";

        //Tao ket noi CSDL
        $conn = mysqli_connect($severname,$username,$password,$db_name);

    ?>
    
    <!-- load banner in layout -->
    <?php loadModule('bannerMain'); ?>
    <!-- load menu -->
    <?php loadModule('menu'); ?>
   <script>
       window.onscroll = function() {
            myFunction()
        };
        var menu = document.getElementById("menu");
        var sticky = menu.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                menu.classList.add("sticky")
            } else {
                menu.classList.remove("sticky")
            }
        }
   </script>
   
    <!-- load danh mục/Category  -->
    <?php loadModule('listcategory'); ?>
    <!-- <script>
        
        function click_fvr(){
            document.getElementById("favorite").src="Public/images/icon_favorite_true.png";
            document.getElementById("favorite").onclick = "reclick_fvr()";
        }
        function reclick_fvr(){
            document.getElementById("favorite").src="Public/images/icon_favorite_false.jpg";
            document.getElementById("favorite").onclick = "click_fvr()";
        }
    </script> -->
    <script language="javascript">  
            // Lấy đối tượng
            var a_list = document.getElementsByClassName("fvr");
             
            // Lặp và gán sự kiện
            for (var i = 0; i < a_list.length; i++){
                a_list[i].onclick = function()
                {
                    a_list[i].src = "Public/images/icon_favorite_true.png";
                    a_list[i].onclick = function()
                    {
                        a_list[i].src = "Public/images/icon_favorite_false.jpg";
                        
                        // return false để khỏi reload trang
                        return false
                    };
                    // return false để khỏi reload trang
                    return false
                };
            }
        </script>
    <?php loadModule('footer'); ?>
</body>
</html>