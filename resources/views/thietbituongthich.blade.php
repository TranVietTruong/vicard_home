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
            <h4>THIẾT BỊ TƯƠNG THÍCH</h4>
            <h5>1. CHỨC NĂNG “QUÉT” QR CODE </h5>
            <p>Hầu hết các SmartPhone hiện nay đều tương thích với chức năng “Quét” QR code.</p>
            <h5>2. CHỨC NĂNG “CHẠM”</h5>
            <h5><b>Apple</b></h5>
            <ul>
                <li>iPhone 12 Pro Max</li>
                <li>iPhone 12 Pro</li>
                <li>iPhone 12</li>
                <li>iPhone 11 Pro Max</li>
                <li>iPhone 11 Pro</li>
                <li>iPhone 11</li>
                <li>iPhone XS Max</li>
                <li>iPhone XS</li>
                <li>iPhone XR</li>
                <li>iPhone SE (2020)</li>
                <li>iPhone 7 =&gt; iPhone X phải cập nhật <strong>IOS 14</strong></li>
                <li>…</li>
            </ul>
            <h5><b>Samsung Galaxy S+</b></h5>
            <ul><li>Galaxy S20, S20+, S20 Ultra</li><li>Galaxy S10, S10+, S10e</li><li>Galaxy S9, S9+</li><li>Galaxy S8, S8+</li><li>Galaxy S7, S7 Edge</li><li>Galaxy S6, S6 Edge</li><li>Galaxy S5, S5 Mini, S5 Neo</li><li>…</li></ul>
            <h5><b>Samsung Galaxy Note</b></h5>
            <ul><li>Note 10, Note 10+, Note 10+ 5G</li><li>Note 9</li><li>Note 8</li><li>…</li></ul>
            <h5><b>Huawei</b></h5>
            <ul><li>P30, P30 Pro, P30 Lite</li><li>P20, P20 Pro, P20 Lite</li><li>P10, P10 Plus, P10 Lite</li><li>…</li></ul>
            <h5><b>Xiaomi</b></h5>
            <ul><li>Xiaomi Redmi K30</li><li>Xiaomi Redmi Note 8 Pro</li><li>Xiaomi Redmi Note 8T</li><li>Xiaomi Mi Note 10 / Mi CC9 Pro</li><li>Xiaomi Mi Note 10 Pro / Mi CC9 Pro</li><li>Xiaomi Mi Mix 3</li><li>Xiaomi Mi 9T Pro / Redmi K20 Pro</li><li>Xiaomi Mi 9T / Redmi K20</li><li>Xiaomi Mi 9</li><li>Xiaomi Mi 9 Lite / Mi CC9</li><li>Xiaomi Mi 9 SE</li><li>Xiaomi Mi 8</li><li>Xiaomi Mi 8 Pro / Mi 8 Explorer</li><li>Xiaomi Mi Mix 3</li><li>Xiaomi Mi Mix 2</li><li>Xiaomi Mi Mix 2S</li><li>Xiaomi Mi Mix 2</li><li>Xiaomi Mi 2A</li><li>Xiaomi Mi 3</li><li>Xiaomi Mi 4 3G và 4G</li><li>Xiaomi Mi Note Pro</li><li>Xiaomi Mi Note 2 / Mi Note 2</li><li>Xiaomi Mi 5</li><li>Xiaomi Mi 5S</li><li>Xiaomi Mi 5S Plus</li><li>Xiaomi Mi Mix</li><li>Xiaomi Mi 6 / Mi 6</li><li>Xiaomi Mi Note 3</li><li>…</li></ul>
            <h5><b>HTC</b></h5>
            <ul><li>U19e, U12+, U12 Life</li><li>Desire 12, Desire 12s (Ngoại trừ dòng 2017)</li><li>U11, Life, +</li><li>Exodus 1</li><li>…</li></ul>
            <h5><b>LG</b></h5>
            <ul><li>Q9</li><li>One</li><li>G8, G8s ThinQ</li><li>G7, G7 ThinQ</li><li>G6</li><li>V50, V40</li><li>V30, V35</li><li>…</li></ul>
            <h5><b>SONY</b></h5>
            <ul><li>Xpreia</li><li>Xperia Z3 Compact</li><li>Xpreia Z2</li><li>…</li></ul>
            <h5><b>ASUS</b></h5>
            <ul><li>Zenfone 5</li><li>Zenfone 6</li></ul>
            <h5><b>OPPO</b></h5>
            <ul><li>Oppo Find 7a</li><li>Oppo R5</li><li>Oppo N1 Mini</li><li>Oppo R1</li><li>…</li></ul>
            <h5><b>Các máy tính bảng chạy Android:</b></h5>
            <ul><li>Sony Xperia Z3 Tablet Compact</li><li>Samsung Galaxy Tab S 10.5 (SM-T805)</li><li>Samsung Galaxy Tab S 8.4 (SM-T705)</li><li>Google HTC Nexus 9 Volantis</li><li>Lenovo Yoga Tablet 2 Pro</li><li>Asus MeMo Pad 8</li><li>Dell Venue 8</li><li>…</li></ul>
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
    @include('components/ga')
</body>
</html>
