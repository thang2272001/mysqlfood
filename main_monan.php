<?php 
    include_once 'database.php';

    // get all hangsx from database
    $query = "SELECT id, ten, gia, img_monan, des_monan FROM monan GROUP BY id";

    $result = mysqli_query($connection, $query);
    $hangsx = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoc HTML</title>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="assets/channel.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="index.php" class="nav__logo">
                    <img class="img__logo" src="./assets/img/Logo-Food.png" alt="ảnh food">
                </a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
    <!-- main -->
    <div class="bg-dark">
        <div class="channel">
            <div class="section p-y-50">
                <div class="row">
                    <div class="col-stretch p col-6">
                        <h1 class="big-title">ĐẶT BÀN<br>NGAY</h1>
                    </div>
                    <div class="col-stretch p col-6">
                        <p class="m-t-10" style="text-align: justify;">Đến với nhà hàng Thắng-Food Hà Nội, quý khách sẽ có cơ hội trải nghiệm nhiều phong cách ẩm thực mới lạ, độc đáo; hay thưởng thức những ly cocktail sáng tạo từ các nhà hàng và quán bar của chúng tôi.

                        Những sự lựa chọn cổ điển chưa bao giờ là cũ, French Grill chính là một ví dụ như vậy với những món ăn đặc trưng của nước Pháp kết hợp cùng rượu vang hảo hạng. Cool Cats Jazz Club đưa quý khách ngược dòng thời gian, về những quán bar nhạc jazz một thời vang bóng xứ cờ hoa và thưởng thức những ly cocktail vừa đẹp mắt mà vẫn đặc sắc trong hương vị. Trở lại với văn hóa ẩm thực Châu Á, John Anthony Cantonese Grill & Dim Sum mang đến một góc nhìn khác về món ăn Quảng Đông truyền thống nhờ những nét chấm phá mới lạ trong nghệ thuật nấu nướng đương đại. Bộ đôi Akira Back - Smack Dab đại diện cho những tâm hồn ưa thích sự phá cách và khác biệt, hòa quyện ẩm thực hiện đại của Nhật Bản với hương vị Hàn Quốc cùng những tinh hoa của thế giới, trong khi Smack Dab lại mang đến những ly cocktail tinh tế mà cá tính.

                        Nhà hàng Thắng-Food đem tới một không gian thoải mái, phù hợp để nhâm nhi một ly café hay ăn vội một thứ quà chiều trong những ngày bận rộn. Trong khi đó, nhà hàng buffet JW Café mang lại trải nghiệm mỹ thực phong phú từ nhiều nền ẩm thực lớn trên thế giới. Và để kết thúc cuộc phiêu lưu này, xin mời quí khách ghé thăm Milk & Co. với những món ăn lành mạnh, chú trọng vào sức khỏe của mỗi vị khách sau một buổi tập luyện hay trị liệu tại Well Being on 8 của khách sạn.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="section">
                <div class="part">
                    <a href="#" class="view">
                        <span>View all <span>&#x27F6;</span></span>
                    </a>
                    <h2 class="part-title">Featured Events</h2>

                    <div class="row">
                        <div class="col-4 p">
                            <a href="#" class="card">
                                <div class="card-header p row jus-between">
                                    <div>
                                        <span>Giao lưu âm nhạc</span>
                                    </div>
                                    <div>
                                        <img class="img-channel"
                                            src="https://img.olympicchannel.com/images/image/private/t_1-1_150/f_auto/v1538355600/primary/ihakfgcljiaqras9f37t"
                                            alt="Day la anh">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="entry p">
                                        <span class="leading-1 d-block p">18 - 19 Dec</span>
                                        <span class="leading-3 d-block p">Đại học Musashino</span>
                                    </div>
                                    <div class="img">
                                        <img src="img/music.jpg" alt="Day la anh">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 p">
                            <a href="#" class="card">
                                <div class="card-header p row jus-between">
                                    <div>
                                        <span>Văn Hóa</span>
                                    </div>
                                    <div>
                                        <img class="img-channel"
                                            src="https://img.olympicchannel.com/images/image/private/t_1-1_150/f_auto/v1538355600/primary/ihakfgcljiaqras9f37t"
                                            alt="Day la anh">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="entry p">
                                        <span class="leading-1 d-block p">20 - 21 Sep</span>
                                        <span class="leading-3 d-block p">Ẩm thực Nhật Bản</span>
                                    </div>
                                    <div class="img">
                                        <img class="img-channel"
                                            src="img/amthuc.jpg"
                                            alt="Day la anh">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 p">
                            <a href="#" class="card">
                                <div class="card-header p row jus-between">
                                    <div>
                                        <span>New Year</span>
                                    </div>
                                    <div>
                                        <img class="img-channel"
                                            src="https://img.olympicchannel.com/images/image/private/t_1-1_150/f_auto/v1538355600/primary/ihakfgcljiaqras9f37t"
                                            alt="Day la anh">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="entry p">
                                        <span class="leading-1 d-block p">1 Jan 2022</span>
                                        <span class="leading-3 d-block p">Mừng năm mới</span>
                                    </div>
                                    <div class="img">
                                        <img class="img-channel"
                                            src="img/newyear.jpg"
                                            alt="Day la anh">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="part">
                    <h2 class="part-title">Every Week</h2>
                    <a href="#" style="color: black;">Thực đơn</a>
                    |
                    <a href="banga.php" style="color: black;">Combo cuối tuấn</a>
                    <div class="row line-1">                       
                    
                        <?php
                            foreach ($hangsx as $hang) {
                                $monans = explode(',', $hang['des_monan']);
                        ?>

                            <div class="col-2 p">
                                <div class="card scaleOnHover">
                                    <div class="img">
                                        <!-- <img class="img-channel"
                                            src="https://kfcvietnam.com.vn/uploads/combo/f7e98746a52f1e24dbbe663be0ade3e0.jpg"
                                            alt="Day la anh"> -->
                                        <img class="img-channel"  src="./img/<?php echo $hang['img_monan'] ?>">                                   
                                    </div>
                                    <div class="body-menu">
                                        <h2 class="p-2"><?php echo $hang['ten'] ?></h2>
                                        <h2 class="p-2"><?php echo $hang['gia'] ?>Đ</h2>
                                        <ul class="ul-1" style="list-style: inside!important; padding-left: 10px;">
                                            <?php                                          
                                                foreach ($monans as $mon) {
                                                    echo '<li class="l-menu">'.$mon.'</li>';
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="toggle">
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <!-- <div class="btn">
                                        <button>
                                            Đặt hàng
                                        </button>
                                    </div> -->
                                </div>
                            </div>


                            <?php
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== FOOTER ==========-->
        <hr>
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Food</a>
                    <span class="footer__description">Restaurant</span>
                    <div>
                        <a href="https://www.facebook.com/thang.dz.227" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Dịch vụ</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Vận chuyển</a></li>
                        <li><a href="#" class="footer__link">Định giá</a></li>
                        <li><a href="#" class="footer__link">Đồ ăn nhanh</a></li>
                        <li><a href="#" class="footer__link">Đặt chỗ của bạn</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Thông tin</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Sự kiện</a></li>
                        <li><a href="#" class="footer__link">Liên hệ chúng tôi</a></li>
                        <li><a href="#" class="footer__link">Chính sách bảo mật</a></li>
                        <li><a href="#" class="footer__link">Điều khoản dịch vụ</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Địa chỉ liên hệ</h3>
                    <ul>
                        <li>Nguyễn Hữu Thắng</li>
                        <li></li>
                        <li>0904683503</li>
                        <li>thang2272001@gmail.com</li>
                        <br>
                        <li>Vũ Minh Hiếu</li>
                        <li></li>
                        <li>0326000143</li>
                        <li>sungahnjung1995@gmail.com</li>
                    </ul>
                </div>
            </div>
            <p class="footer__copy">&#169; Chào 2022</p>
        </footer>                  
    <script src="assets/channel.js"></script>
</body>

</html>