<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'coi ra ko đã'; ?></title>
    <link rel="stylesheet" href="Public/css/main.css">
    <link rel="stylesheet" href="Public/css/menu.css">
    <link rel="stylesheet" href="Public/css/footer.css">
</head>
<body>
    <!-- Load menu/nav lên -->
    <?php loadModule('menu_home'); ?>
    <!-- Phần content -->
    <div id="current_book">
        <!-- show infor curent book -->
        <div id="img_book">
            <!-- image book -->
            <img src="" alt="" class="img_book">
        </div>
        <form id="content_book">
            <!-- content book -->
            <div id="main_details">               
                <div class="main_details">
                    <!-- name book, writer and rate number star -->
                </div>
                <div class="main_details">
                    <!-- add in Favorite labrary -->
                </div>
            </div>
            <hr>
            <div id="book_introduction">
                <!-- introduct for curent book-->
                <hr>
                <!-- introduct for publishing company -->
            </div>
            <input type="submit" value="Đọc">
        </form>
    </div>

    <!-- Load footer  -->
    <?php loadModule('footer'); ?>
</body>
</html>