<!DOCTYPE html>
<html>
<head>
    <title><?php echo self::titulo; ?></title>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" />
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
<header>
    <div class="wrap grid-5x5 center w90">
        <div class="logo">
            <h1><a href="home">Raissa <span>Dev</span></a></h1>
        </div><!--logo-->
        <div class="menu">
            <i class="menuMobile" id="menuMobile" data-feather="menu" width="20" height="20"></i>
            <i style="display:none;" class="menuMobile" id="menuMobileClose" data-feather="menu" width="20" height="20"></i>
            <nav class="wrap-menu item-flex"  id="myMenu">
                <?php
                    foreach($this->menuItems as $key => $value) {
                    echo '<a href="'.INCLUDE_PATH.$value.'">'.$value.'</a>';
                    }
                ?>
                <div class="socials item-flex">
                    <a href="https://www.linkedin.com/in/raissa-developer-69986a214/" target="_blank"><i data-feather="linkedin" width="17" height="17"></i></a>
                    <a href="https://www.instagram.com/raissa_dev/" target="_blank"><i data-feather="instagram" width="17" height="17"></i></a>
                    <a href="https://github.com/Raissadev" target="_blank"><i data-feather="github" width="17" height="17"></i></a>
                </div><!--socials-->
            </div><!--wrap-menu-->
        </div><!--menu-->
    </div><!--wrap-->
</header>


