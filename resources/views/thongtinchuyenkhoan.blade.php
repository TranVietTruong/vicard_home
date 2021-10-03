<!doctype html>
<html lang="vi">
<head>
    <base href="{{asset('')}}">
    <meta id="token" name="csrf-token" content="{{csrf_token()}}">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    {{-- <meta http-equiv="refresh" content="5;url=https://vicard.vn/"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="VICARD - Danh thiếp điện tử">
    <meta name="geo.region" content="VN-HN">
    <meta name="geo.placename" content="Hà Nội">
    <meta name="geo.position" content="21.029165;105.803438">
    <meta name="ICBM" content="21.029165, 105.803438">
    <meta name="description" content="Vicard cung cấp danh thiếp điện tử và nền tảng giúp người dùng tích hợp tất cả thông tin cần thiết mà người dùng sử dụng để Trao Đổi và Kết Nối chỉ với 1 lần chạm thẻ trên điện thoại thông minh"/>
    <meta name="keywords" content="vicard, nfc, danh thiếp điện tử, thẻ">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="vicard">
    <meta property="og:title" content="VICARD - Danh thiếp điện tử đầu tiên tại Việt Nam">
    <meta property="og:url" content="{{asset('')}}">
    <meta property="og:description" content="Vicard cung cấp danh thiếp điện tử và nền tảng giúp người dùng tích hợp tất cả thông tin cần thiết mà người dùng sử dụng để Trao Đổi và Kết Nối chỉ với 1 lần chạm thẻ trên điện thoại thông minh">
    <meta property="og:image" content="{{asset('thumbnail.png')}}">
    <meta property="og:image:alt" content="vicard - danh thiếp điện tử">

    <meta property="twitter:site" content="@vicard">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:creator" content="@vicard">
    <meta property="twitter:title" content="VICARD - Danh thiếp điện tử đầu tiên tại Việt Nam">
    <meta property="twitter:url" content="{{asset('')}}">
    <meta property="twitter:description" content="Vicard cung cấp danh thiếp điện tử và nền tảng giúp người dùng tích hợp tất cả thông tin cần thiết mà người dùng sử dụng để Trao Đổi và Kết Nối chỉ với 1 lần chạm thẻ trên điện thoại thông minh">
    <meta property="twitter:image" content="{{asset('thumbnail.png')}}">

    <link rel="shortcut icon" href="{{asset('icon.png')}}" type="image/x-icon" />
    <title>Danh Thiếp Điện Tử đầu tiên tại Việt Nam</title>
    <link rel="canonical" href="{{asset('')}}" />

    {{-- <link rel="stylesheet" href="{{asset('assets/skeleton.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}"> --}}

    @include('components/css')
</head>
<body>

    @include('components/header')

    <section id="content">
        <div class="container">
            <h4>THÔNG TIN CHUYỂN KHOẢN</h4>
            <img style="margin-bottom:20px;" width="300px" height="100%" src="https://lh5.googleusercontent.com/_VXB7ZpDfnBDmDwqUm0dUcV7t9y-zB_ZMgmYwbduUMwcIPxPFTu_TLoYOCqb-dbsm6nhuLANDvgp0QpcTcmECfxNlkB1WphOKLvmdhmqtlXqC7Ye3GK_VaUqdWcL5Lcs1LbBJ602w8rC1pukBQ" alt="">
            <p>Ngân Hàng: <b>Ngân hàng Thương mại Cổ phần Tiên Phong - TPBANK</b></p>
            <p>Chủ tài khoản: <b>TRAN VIET TRUONG</b></p>
            <p>Số Tài Khoản :  <b>0367 8821 601</b></p>
            <p>Chi nhánh: <b>TRUNG TAM BAN MIEN BAC 1</b></p>
            <hr>
            <img style="margin-bottom:20px;" width="300px" height="100%" src="https://cdn.tgdd.vn/Files/2021/03/17/1335982/acb-la-ngan-hang-gi-co-tot-khong-1-652x367.jpg" alt="">
            <p>Ngân Hàng: <b>Ngân hàng Thương mại Cổ phần Á Châu - ACB</b></p>
            <p>Chủ tài khoản: <b>TRAN VIET TRUONG</b></p>
            <p>Số Tài Khoản :  <b>14084637</b></p>
            <p>Chi nhánh: <b>TRUNG TAM BAN MIEN BAC 1</b></p>
        </div>
    </section>

    @include('components/footer')

    <script>
        function changeText()
        {
            let name = document.getElementById('name').value;
            if(name) {
                document.getElementById('replace_name').innerText = name;
            }
            else {
                document.getElementById('replace_name').innerText = 'TÊN CỦA BẠN';
            }

        }

        window.smoothScroll = function(target) {
            var scrollContainer = target;
            do { //find scroll container
                scrollContainer = scrollContainer.parentNode;
                if (!scrollContainer) return;
                scrollContainer.scrollTop += 1;
            } while (scrollContainer.scrollTop == 0);

            var targetY = 0;
            do { //find the top of target relatively to the container
                if (target == scrollContainer) break;
                targetY += target.offsetTop;
            } while (target = target.offsetParent);

            scroll = function(c, a, b, i) {
                i++; if (i > 30) return;
                c.scrollTop = a + (b - a) / 30 * i;
                setTimeout(function(){ scroll(c, a, b, i); }, 20);
            }
            // start scrolling
            scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
            hideMenu();
        }

        function showMenu() {
            let menu = document.getElementById('fix_menu_mobile');
            menu.className += " visible";
            let icon_show = document.getElementById('icon_show');
            icon_show.className += " hide";
            let icon_hide = document.getElementById('icon_hide');
            icon_hide.className += " visible";
        }

        function hideMenu() {
            let menu = document.getElementById('fix_menu_mobile');
            menu.classList.remove("visible");
            let icon_show = document.getElementById('icon_show');
            icon_show.classList.remove("hide");
            let icon_hide = document.getElementById('icon_hide');
            icon_hide.classList.remove("visible");
        }
    </script>
</body>
</html>
