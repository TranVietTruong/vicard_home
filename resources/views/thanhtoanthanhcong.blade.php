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

    <section id="content" style="padding: 30px 0;">
        @if (Session::has('order'))
            <div class="container">
                <div style="text-align:center;">
                    <img width="150px" height="100%" src="{{asset('assets/img/success.png')}}" alt="thanh cong">
                    <p style="margin-top: 10px;">Cảm ơn bạn đã sử dụng dịch vụ của Vicard. Thông tin chi tiết đơn hàng đã được gửi đến email {{Session::get('order')->email}}. Xin vui lòng thanh toán để hoàn tất đơn hàng. Email xác nhận thanh toán sẽ được gửi đến bạn chậm nhất sau 12h.</p>
                </div>
                <ul>
                    <li>Đơn giá: <b>299,000đ</b></li>
                    <li>Hình thức thanh toán: <b>Chuyển khoản</b></li>
                    <li>Nội dung: <b>{{Session::get('order')->code_tag}} {{Session::get('order')->mobile}}</b></li>
                </ul>
                <hr>
                <ul>
                    <li>Số Tài Khoản : <b>0367 8821 601</b></li>
                    <li>Chủ tài khoản: <b>TRAN VIET TRUONG</b></li>
                    <li>Ngân Hàng: <b>Ngân hàng Thương mại Cổ phần Tiên Phong - TPBANK</b></li>
                    <li>Chi nhánh: <b>TRUNG TAM BAN MIEN BAC 1</b></li>
                </ul>
                <hr>
                <ul>
                    <li>Số Tài Khoản : <b>14084637</b></li>
                    <li>Chủ tài khoản: <b>TRAN VIET TRUONG</b></li>
                    <li>Ngân Hàng: <b> Ngân hàng Thương mại Cổ phần Á Châu - ACB</b></li>
                    <li>Chi nhánh: <b>ACB - CN CHUA HA</b></li>
                </ul>
            </div>
        @else
            <script>
                window.location.href = 'https://vicard.vn/'
            </script>
        @endif

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
    @include('components/ga')
</body>
</html>
