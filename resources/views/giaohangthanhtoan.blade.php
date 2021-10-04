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
            <h4>GIAO HÀNG VÀ THANH TOÁN</h4>
            <h5>1. Thời gian xử lý đơn hàng để vận chuyển</h5>
            <ul>
                <li>- Toàn bộ đơn hàng sẽ được xác nhận thông tin đơn hàng trong vòng 12h kể từ khi đặt hàng.</li>
                <li>- Đơn hàng sẽ được nhà máy sản xuất trong khoảng thời gian từ 2-3 ngày ngay sau khi xác nhận thông tin đơn hàng.</li>
                <li>- Đơn hàng sẽ được đóng gói và vận chuyển trong khoảng thời gian từ 1-2 ngày ngay sau khi sản xuất đơn hàng.</li>
                <li>- Đơn hàng không được vận chuyển hoặc giao vào ngày nghỉ (chủ nhật hoặc lễ tết).</li>
                <li>- Nếu quá trình xử lý đơn và vận chuyển bị gián đoạn và chậm trễ chúng tôi sẽ thông báo lại cho quý khách hàng qua email hoặc điện thoại.</li>
                <h4>2. Thời gian làm việc</h4>
                <p> Tất cả các ngày trong tuần từ thứ 2 đến thứ 7.</p>
                <h4>3. Phí vận chuyển</h4>
                <p>Tất cả đơn hàng được miễn phí giao hàng toàn quốc</p>
                <h4>5. Phương thức thanh toán</h4>
                <p>Thanh toán chuyển khoản:Quý khách có thể chuyển khoản tới trực tiếp cho chúng tôi <a href="/thong-tin-chuyen-khoan"> tại đây</a></p>
            </ul>
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
