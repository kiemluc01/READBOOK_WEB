<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web đọc sách online</title>
    <link rel="stylesheet" href="Public/css/main.css">
    <link rel="stylesheet" href="Public/css/menu.css">
    <link rel="stylesheet" href="Public/css/footer.css">

    <link rel="stylesheet" href="Public/css/content.css">    
    <link rel="stylesheet" href="Public/css/animateLeft.css">
    <link rel="stylesheet" href="Public/css/animateRight.css">
    <link rel="stylesheet" href="Public/css/book.css">
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
    <?php loadModule('menu_layout'); ?>
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
   <div id="bannerMain" style="display:flex;" >
        <?php  loadModule('bannerLeft'); ?>
        <?php  loadModule('bannerRight'); ?>
    </div>
    <div id="content">
        <!-- load danh mục/Category  -->
        <?php loadModule('listcategory'); ?>
    </div>
    
    <?php loadModule('footer'); ?>
</body>
</html>