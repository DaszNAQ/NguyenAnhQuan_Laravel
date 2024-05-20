<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body>
<!-- HEADER -->
    <header>
        <div class="logo-menu">
            <img src="./Img/Luna_Logo.png" alt="" class="logo-img">
            <h1>Luna Shop</h1>
            <nav>
                <ul>
                    <li><a href="./Index.html">Trang chủ</a></li>
                    <li><a href="./product.html">Sản phẩm</a></li>
                    <li><a href="./product_detail.html">Giới thiệu</a></li>
                    <li><a href="./contact.html">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
        <div class="login-cart-search">
            <button><img src="./Img/Login.png" alt=""> </button>
            <button><img src="./Img/cart.png" alt=""> </button>
            <input type="text" placeholder="Tìm kiếm">
            <button> <img src="./Img/search.webp" alt=""></button>
        </div>
    </header>

    <!-- END HEADER -->
<div>

</div>
    <main>
        @yield('content')

    </main>



<!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <p>Thông tin liên hệ</p>
            <ul>
                <li>Email: nq6122003@gmail.com</li>
                <li>Số điện thoại: 0914693462</li>
                <li>Địa chỉ: 20 Tăng Nhơn Phú, Phước Long B, Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam</li>
            </ul>
        </div>
        <div class="copyright">
            <p>&copy; 2024. Bản quyền thuộc về công ty LUNA.</p>
        </div>
    </footer>
    <!-- END FOOTER -->    <div>


    </div>


    @yield('footer')
</body>

</html>