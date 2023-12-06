<?php
ob_start();
$hienthi = '';
if (isset($_SESSION['s_user']) && is_array($_SESSION['s_user']) && count($_SESSION['s_user']) > 0) {
    extract($_SESSION['s_user']);
    $hienthi .= ' <img src="' . $hinh . '" width="30px" height="30px" style=" border-radius: 20px;margin-top:8px">
    <a class="user" href="index.php?pg=myaccount" style="color:white; bottom:10px;">' . $username . '
    
</a>
<!-- Menu phụ -->
<div class="dropdown-content">
    <div>
    <a href="index.php?pg=myaccount">Tài khoản của tôi</a>
    </div>

    <div>
    <a href="index.php?pg=lichsumh">Lịch sử <br> mua hàng</a>
    </div>

    <div class="icon_logout">
    <img src="layout/img/logout-2.png" alt="" srcset="">
    <a href="index.php?pg=logout">Thoát</a>
    </div>
</div>';
} else {
    $hienthi .= '<a class="user" href="">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 30 30" fill="none">
    <path
        d="M17.5 5C19.1576 5 20.7473 5.65848 21.9194 6.83058C23.0915 8.00268 23.75 9.5924 23.75 11.25C23.75 12.9076 23.0915 14.4973 21.9194 15.6694C20.7473 16.8415 19.1576 17.5 17.5 17.5C15.8424 17.5 14.2527 16.8415 13.0806 15.6694C11.9085 14.4973 11.25 12.9076 11.25 11.25C11.25 9.5924 11.9085 8.00268 13.0806 6.83058C14.2527 5.65848 15.8424 5 17.5 5ZM17.5 20.625C24.4062 20.625 30 23.4219 30 26.875V30H5V26.875C5 23.4219 10.5938 20.625 17.5 20.625Z"
        fill="white" />
    </svg>
</a>
<!-- Menu phụ -->
<div class="dropdown-content">
    <div class="icon_login">
    <img src="layout/img/sigin.png" alt="" srcset="">
    <a href="index.php?pg=dangky">Đăng ký</a>
    </div>
    <div class="icon_login">
        <img src="layout/img/login-3.png" alt="" srcset="">
        <a href="index.php?pg=dangnhap">Đăng nhập</a>   
    </div>
</div>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DỰ ÁN 1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/chitietsp.css">

</head>

<body>
    <header>
        <!-- HEADER TOP  -->
        <div class="hdtop">
            <p class="hdtop right">RISE là THƯƠNG HIỆU THỜI TRANG phong cách FREESTYLE dành cho CÁC BẠN TRẺ chuyên để
                MẶC ĐI CHƠI</p>
            <div class="hdtop left">
                <div class="phone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7933 18.4442C12.5933 18.4 9.19248 17.93 5.63081 14.3692C2.06998 10.8075 1.60081 7.4075 1.55581 6.20666C1.48915 4.37666 2.89081 2.59916 4.50998 1.905C4.70496 1.8208 4.91848 1.78875 5.12959 1.81198C5.3407 1.83521 5.54214 1.91292 5.71415 2.0375C7.04748 3.00916 7.96748 4.47916 8.75748 5.635C8.9313 5.88894 9.00562 6.19795 8.96628 6.50316C8.92693 6.80837 8.77668 7.08844 8.54415 7.29L6.91831 8.4975C6.83976 8.55422 6.78447 8.63752 6.76271 8.73193C6.74095 8.82634 6.75419 8.92545 6.79998 9.01083C7.16831 9.68 7.82331 10.6767 8.57331 11.4267C9.32415 12.1767 10.3675 12.875 11.0833 13.285C11.1731 13.3354 11.2787 13.3495 11.3785 13.3244C11.4783 13.2992 11.5647 13.2368 11.62 13.15L12.6783 11.5392C12.8729 11.2807 13.1599 11.1076 13.4793 11.056C13.7987 11.0044 14.1256 11.0784 14.3916 11.2625C15.5641 12.0742 16.9325 12.9783 17.9341 14.2608C18.0688 14.4341 18.1545 14.6403 18.1822 14.858C18.2099 15.0757 18.1786 15.2969 18.0916 15.4983C17.3941 17.1258 15.6291 18.5117 13.7933 18.4442Z" fill="black" />
                    </svg>
                    <a href="">032 788 3144 |</a>
                </div>
                <div class="donhang">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.01503 2.70833C7.24836 2.21667 7.75169 1.875 8.33336 1.875H11.6667C12.2484 1.875 12.7509 2.21667 12.985 2.70833C13.5542 2.71333 13.9984 2.73917 14.395 2.89417C14.8686 3.07939 15.2804 3.39418 15.5834 3.8025C15.8892 4.21417 16.0334 4.74167 16.23 5.4675L16.8484 7.73583L17.0817 8.43667L17.1017 8.46167C17.8525 9.42333 17.495 10.8533 16.78 13.7125C16.325 15.5317 16.0984 16.4408 15.42 16.9708C14.7417 17.5 13.8042 17.5 11.9292 17.5H8.07086C6.19586 17.5 5.25836 17.5 4.58003 16.9708C3.90169 16.4408 3.67419 15.5317 3.22003 13.7125C2.50503 10.8533 2.14753 9.42333 2.89836 8.46167L2.91836 8.43667L3.15169 7.73583L3.77003 5.4675C3.96753 4.74167 4.11169 4.21333 4.41669 3.80167C4.7198 3.39365 5.13161 3.07916 5.60503 2.89417C6.00169 2.73917 6.44503 2.7125 7.01503 2.70833ZM7.01669 3.96C6.46503 3.96583 6.24336 3.98667 6.06003 4.05833C5.805 4.15807 5.5832 4.32759 5.42003 4.5475C5.27336 4.745 5.18669 5.02083 4.94503 5.91L4.47003 7.65083C5.32003 7.5 6.48169 7.5 8.07003 7.5H11.9292C13.5184 7.5 14.6792 7.5 15.5292 7.65L15.055 5.90917C14.8134 5.02 14.7267 4.74417 14.58 4.54667C14.4169 4.32676 14.1951 4.15723 13.94 4.0575C13.7567 3.98583 13.535 3.965 12.9834 3.95917C12.865 4.20821 12.6785 4.4186 12.4455 4.56595C12.2125 4.7133 11.9424 4.79156 11.6667 4.79167H8.33336C8.05773 4.79164 7.78775 4.7135 7.55472 4.5663C7.32168 4.41911 7.13514 4.20888 7.01669 3.96Z" fill="black" />
                    </svg>
                    <a href="">Tra cứu đơn hàng</a>
                </div>
            </div>
        </div>
        <div class="headerbot">
            <div class="logo">
                <a href="index.php"><img src="layout/img/logorise.png" alt="" srcset=""></a>
            </div>
            <nav class="menu">
                <a href="index.php">TRANG CHỦ</a>
                <a href="index.php?pg=sanpham">SẢN PHẨM</a>
                <a href="">GIỚI THIỆU</a>
                <a href="">LIÊN HỆ</a>
            </nav>

            <!-- TÌM KIẾM -->
            <div class="timkiem">
                <div class="box">
                    <form action="index.php?pg=sanpham" method="post">
                        <input type="text" name="kyw" placeholder="Tìm kiếm ...">
                        <a href="#">
                            <button class="search" type="submit" name="timkiem"><i class="fas fa-search"></i></button>
                        </a>
                    </form>
                </div>
            </div>
            <div class="icon">
                <div>
                    <a class="cart" href="index.php?pg=giohang">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2763 4.73958C12.6846 3.87917 13.5654 3.28125 14.5834 3.28125H20.4167C21.4346 3.28125 22.314 3.87917 22.7238 4.73958C23.7198 4.74833 24.4971 4.79354 25.1913 5.06479C26.0199 5.38894 26.7406 5.93981 27.2709 6.65438C27.8061 7.37479 28.0583 8.29792 28.4025 9.56812L29.4846 13.5377L29.8929 14.7642L29.9279 14.8079C31.2419 16.4908 30.6163 18.9933 29.365 23.9969C28.5688 27.1804 28.1721 28.7715 26.985 29.699C25.7979 30.625 24.1573 30.625 20.8761 30.625H14.124C10.8427 30.625 9.2021 30.625 8.01502 29.699C6.82793 28.7715 6.42981 27.1804 5.63502 23.9969C4.38377 18.9933 3.75814 16.4908 5.0721 14.8079L5.1071 14.7642L5.51543 13.5377L6.59752 9.56812C6.94314 8.29792 7.19543 7.37333 7.72918 6.65292C8.25962 5.93889 8.98028 5.38854 9.80877 5.06479C10.5029 4.79354 11.2788 4.74688 12.2763 4.73958ZM12.2792 6.93C11.3138 6.94021 10.9259 6.97667 10.605 7.10208C10.1587 7.27662 9.77058 7.57328 9.48502 7.95812C9.22835 8.30375 9.07668 8.78646 8.65377 10.3425L7.82252 13.389C9.31002 13.125 11.3429 13.125 14.1225 13.125H20.8761C23.6571 13.125 25.6886 13.125 27.1761 13.3875L26.3463 10.341C25.9234 8.785 25.7717 8.30229 25.515 7.95667C25.2295 7.57183 24.8413 7.27516 24.395 7.10063C24.0742 6.97521 23.6863 6.93875 22.7208 6.92854C22.5138 7.36436 22.1874 7.73255 21.7796 7.99041C21.3718 8.24827 20.8992 8.38523 20.4167 8.38542H14.5834C14.101 8.38537 13.6285 8.24862 13.2207 7.99103C12.8129 7.73343 12.4865 7.36555 12.2792 6.93Z" fill="white" />
                        </svg>
                    </a>
                </div>

                <!-- <a class="user" href="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                              <path d="M17.5 5C19.1576 5 20.7473 5.65848 21.9194 6.83058C23.0915 8.00268 23.75 9.5924 23.75 11.25C23.75 12.9076 23.0915 14.4973 21.9194 15.6694C20.7473 16.8415 19.1576 17.5 17.5 17.5C15.8424 17.5 14.2527 16.8415 13.0806 15.6694C11.9085 14.4973 11.25 12.9076 11.25 11.25C11.25 9.5924 11.9085 8.00268 13.0806 6.83058C14.2527 5.65848 15.8424 5 17.5 5ZM17.5 20.625C24.4062 20.625 30 23.4219 30 26.875V30H5V26.875C5 23.4219 10.5938 20.625 17.5 20.625Z" fill="white" />
                         </svg>
                    </a> -->


                <div class="dropdown">
                    <?= $hienthi ?>
                </div>
            </div>
        </div>
        </div>
    </header>
</body>
