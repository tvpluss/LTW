<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyroject</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <div class="container-xl">
        <header>
            <div class="logo">
                <i class="fas fa-bars menu-icon"></i>
                <img src="./assets/image/logo-png2.png" alt="logo">
            </div>
            <ul>
                <li>
                    <a href="/">Trang chủ</a>
                </li>
                <li>
                    <a href="">Sản Phẩm</a>
                </li>
                <li>
                    <a href="">Dịch Vụ</a>
                </li>
                <li>
                    <a href="">Giới thiệu</a>
                </li>
                <li>
                    <a href="/contact">Liên hệ</a>
                </li>
            </ul>
            <div class="auth">
                <!-- <a href="">Đăng nhập</a>
                <a href="">Đăng kí</a>
                <a href="">
                    <i class="fas fa-cart-plus cart-icon"></i>
                </a> -->
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./assets/image/avatar.jpg" alt=""><span>Name customer</span></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Chỉnh sửa thông tin</a></li>
                        <li><a class="dropdown-item" href="#">Lịch sử mua hàng</a></li>
                        <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                    </ul>
                </div>

            </div>
        </header>
        <div class="menu">
            <ul>
                <li>
                    <a href="/">Trang chủ</a>
                </li>
                <li>
                    <a href="">Sản Phẩm</a>
                </li>
                <li>
                    <a href="">Dịch Vụ</a>
                </li>
                <li>
                    <a href="">Giới thiệu</a>
                </li>
                <li>
                    <a href="/contact">Liên hệ</a>
                </li>
            </ul>
        </div>
    </div>

    {{content}}
    <div class="footer">
        <div class="container-sm">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="item">
                        <img src="./assets/image/logo-png2.png" alt="">
                        <p>Sở hữu Pyriot M2C - Chúng tôi cung cấp dịch vụ số hoá dữ liệu từ thiết bị, máy móc đến Cloud
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="item">
                        <h3>Liên hệ</h3>
                        <ul>
                            <li>
                                <i class="fas fa-search-location"></i>
                                <span>Địa chỉ: 13/35 Thành Mỹ, phường 8, quận Tân Bình</span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>SĐT: 0906515105 - 0914763634</span>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <span>Email: contact@pyroject.com</span>
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>
                                <span>Thời gian làm việc:: T2 - T7 / 8:00 AM - 5:30 PM</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    <script src="./assets/js/base.js"></script>
</body>

</html>