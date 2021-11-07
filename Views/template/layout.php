<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web đọc sách online</title>
    <link rel="stylesheet" href="Public/css/main.css">
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
   <!-- load banner in layout -->
   <?php loadModule('bannerMain'); ?>
    <!-- load danh mục/Category  -->
    <?php loadModule('listcategory'); ?>


    <?php loadModule('footer'); ?>
</body>
</html>