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

    @include('components/ga')
</head>
<body>

    @include('components/header')

    <section id="content">
        <div class="container">
            <h4>HƯỚNG DẪN SỬ DỤNG</h4>
            <h5>1. HƯỚNG DẪN KÍCH HOẠT VÀ ĐĂNG KÝ TÀI KHOẢN</h5>
            <p>- Chạm thẻ/quét mã qr code trên smartphone của bạn hoặc truy cập <a href="https://info.vicard.vn">https://info.vicard.vn</a> để tạo tài khoản mới.</p>
            <p>- Điền đầy đủ các thông tin vào trang Đăng ký tài khoản theo hướng dẫn cụ thể</p>
            <img width="100%" height="100%" src="{{asset('assets/support/register.jpg')}}">
            <p>- Sau khi đăng ký thành công, hệ thống sẽ tự động đăng nhập hoặc bạn có thể đăng nhập tại đây <a href="https://info.vicard.vn/login">https://info.vicard.vn/login</a></p>
            <h5>2. HƯỚNG DẪN QUẢN LÝ THÔNG TIN TÀI KHOẢN</h5>
            <p><b>1. Thông tin cơ bản:</b></p>
            <p>Sau khi đăng nhập, hệ thống sẽ chuyển bạn đến trang quản lý thông tin. Hãy nhấn vào ảnh đại diện để tại ảnh lên, nhập tên bạn muốn hiển thị và mô tả ngắn gọn về bản thân.</p>
            <img width="100%" height="100%" src="{{asset('assets/support/info.jpg')}}">
            <p><b>2. Chỉnh sửa đường dẫn:</b></p>
            <p> Tiếp theo, để thêm vào danh thiếp điện tử các thông tin mạng xã hội Facebook, Zalo, Instagram, TikTok … Các bạn đến phần "THÔNG TIN LIÊN HỆ", chọn "THÊM". Hệ thống sẽ cho bạn chọn loại tài khoản và thêm đường link phù hợp</p>
            <img width="100%" height="100%" src="{{asset('assets/support/share.jpg')}}">
            <p><b>3. Thay đổi giao diện hiển thị: </b></p>
            <p>Các bạn nhấn vào Tài Khoản ở góc trên bên phải và chọn mục "Đổi mẫu website". </p>
            <img width="100%" height="100%" src="{{asset('assets/support/ui.jpg')}}">
            <p>Nhấn vào giao diện muốn chọn và nhấn đồng ý để thay đổi mẫu website theo ý của bạn.</p>
            <h4>3. HƯỚNG DẪN CÁCH LẤY LINK MẠNG XÃ HỘI</h4>
            <p>Hướng dẫn lấy link <b><a href="https://www.thegioididong.com/game-app/cach-lay-link-trang-ca-nhan-fanpage-link-bai-viet-tren-1293304">Facebook</a></b></p>
            <p>Hướng dẫn lấy link <b><a href="https://www.thegioididong.com/game-app/cach-lay-sao-chep-link-instagram-ca-nhan-hoac-cua-nguoi-khac-1295177">Instagram</a></b></p>
            <p>Hướng dẫn lấy link <b><a href="https://quantrimang.com/cach-lay-link-video-youtube-tren-dien-thoai-may-tinh-150064">Youtube</a></b></p>
            <p>Hướng dẫn lấy link <b><a href="https://www.thegioididong.com/game-app/cach-tao-duong-link-lien-ket-chuyen-tien-tren-momo-cuc-nhanh-1294525">Momo</a></b></p>
            <p>Hướng dẫn lấy link <b><a href="https://tamblogs.com/cach-lay-link-video-tik-tok/">Tiktok</a></b></p>
            <p>Đối với link <b>Zalo</b> các bạn soạn theo cú pháp sau <b>https://zalo.me/số_điện_thoại_của_bạn</b> </p>
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
