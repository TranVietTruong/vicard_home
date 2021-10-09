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

    <link rel="stylesheet" href="{{asset('assets/skeleton.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

{{--     @include('components/css')--}}

    @include('components/schema')

</head>
<body>
    {{-- <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=301226570676398&autoLogAppEvents=1" nonce="rZv1Gp1u"></script> --}}
    <header>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="{{asset('')}}">
                        <img class="lazyload" width="100%" height="50px" data-src="https://res.cloudinary.com/truongtv/image/upload/v1633744512/logo/mgdjnff7fagnafmzcfhg.png" alt="logo website vicard">
                    </a>
                </div>
                <div class="menu">
                    <ul>
                        <li onclick="smoothScroll(document.getElementById('trangchu'))">
                            trang chủ
                        </li>
                        <li onclick="smoothScroll(document.getElementById('tinhnang'))">
                           tính năng
                        </li>
                        <li onclick="smoothScroll(document.getElementById('loiich'))">
                            hướng dẫn
                        </li>
                        <li onclick="smoothScroll(document.getElementById('mua'))">
                            mua ngay
                        </li>
                    </ul>
                </div>
                <div class="menu_mobile">
                    <div onclick="showMenu()" id="icon_show" class="icon_show">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 18v1h-24v-1h24zm0-6v1h-24v-1h24zm0-6v1h-24v-1h24z" fill="#1040e2"/><path d="M24 19h-24v-1h24v1zm0-6h-24v-1h24v1zm0-6h-24v-1h24v1z"/></svg>
                    </div>
                    <div onclick="hideMenu()" id="icon_hide" class="icon_hide">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z"/></svg>
                    </div>
                </div>
            </div>
        </div>
        <div id="fix_menu_mobile" class="fix_menu_mobile">
            <div class="container">
                 <ul>
                    <li onclick="smoothScroll(document.getElementById('trangchu'))">
                        trang chủ
                    </li>
                    <li onclick="smoothScroll(document.getElementById('tinhnang'))">
                       tính năng
                    </li>
                    <li onclick="smoothScroll(document.getElementById('loiich'))">
                        hướng dẫn
                    </li>
                    <li onclick="smoothScroll(document.getElementById('mua'))">
                        mua ngay
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section id="trangchu">
        <div class="container">
            <div class="content">
                <div class="trangchu">
                    <h1>Danh thiếp điện tử đầu tiên tại Việt Nam</h1>
                    <p style="font-size: 20px">Chia sẻ thông tin trong 1 giây</p>
                    <button onclick="smoothScroll(document.getElementById('mua'))" class="button button-primary"> Đặt Mua </button>
                    <button style="margin-left: 10px;" class="button">Xem Thêm</button>
                </div>
                <div class="thumb-pc">
                    <img class="lazyload" width="100%" height="100%" data-src="https://res.cloudinary.com/truongtv/image/upload/v1633744627/vicard/ifdojxnqgmusyqxfz4m3.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="tinhnang" class="lazyload" data-bg="https://res.cloudinary.com/truongtv/image/upload/v1633346536/vicard/ibvdzhf7jp9xmmeexmvq.png">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="content">
                <div class="info">
                    <h2>Xu hướng kết nối chuyên nghiệp hiện đại</h2>
                    <p style="font-size: 16px">Với thẻ cá nhân thông minh Vicard, bạn có thể chia sẻ tất cả mạng xã hội đang phổ biến hiện nay như Facebook, Zalo, Instagram, Tiktok, ... và nhiều hơn nữa. Ngoài ra, với tính năng lưu danh bạ, đối tác của bạn sẽ chỉ mất 1 giây để có thể lưu liên lạc của bạn thay vì phải nhập từ bàn phím tốn rất nhiều thời gian.</p>
                </div>
                <div class="img">
                    {{-- <img src="{{ asset('assets/img/logo-social.png') }}" alt=""> --}}
                    <img class="lazyload" data-src="https://res.cloudinary.com/truongtv/image/upload/v1633346538/vicard/izmdeyqqqhghzuendral.png" width="100%" height="100%" alt="Nền tảng kết nối thẻ vicard">
                </div>
            </div>
        </div>
    </section>
    <section id="loiich">
        <div class="container">
            <div class="content">
                <div class="img">
                    {{-- <img src="{{ asset('assets/img/tinhnang.png') }}" alt=""> --}}
                    <img class="lazyload" width="100%" height="100%" data-src="https://res.cloudinary.com/truongtv/image/upload/v1633346537/vicard/xitewggfonbsqemxv5dl.png" alt="Cách thức hoạt động của thẻ vicard">
                </div>
                <div class="text">
                    <h3>Không cần cài đặt thêm bất cứ phần mềm nào</h3>
                    <p>Chạm thẻ Vicard vào điện thoại để chia sẻ thông tin, giảm thời gian trao đổi thông tin liên lạc. Các thông tin bạn có thể chia sẻ như số điện thoại, email, facebook, zalo, tài khoản ngân hàng ... </p>
                    <ul>
                        <li>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z"/></svg>
                            <span>Chia sẻ mạng xã hội trong 1 giây</span>
                        </li>
                        <li>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z"/></svg>
                            <span>Không cần cài đặt gì thêm</span>
                        </li>
                        <li>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z"/></svg>
                            <span>Không cần cài ứng dụng</span>
                        </li>
                        <li>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z"/></svg>
                            <span>Không giới hạn số lần chạm thẻ</span>
                        </li>
                        <li>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z"/></svg>
                            <span>Không cần phí hàng tháng</span>
                        </li>
                        <li>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z"/></svg>
                            <span>Thoải mái đổi thông tin không giới hạn</span>
                        </li>
                        <li>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z"/></svg>
                            <span>Thông tin được bảo mật tuyệt đối</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="huongdan">
        <div class="container">
            <div class="step content">
                <div class="step_child">
                    <div class="step_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.5 15c-2.483 0-4.5 2.015-4.5 4.5s2.017 4.5 4.5 4.5 4.5-2.015 4.5-4.5-2.017-4.5-4.5-4.5zm2.5 5h-2v2h-1v-2h-2v-1h2v-2h1v2h2v1zm-7.18 4h-14.815l-.005-1.241c0-2.52.199-3.975 3.178-4.663 3.365-.777 6.688-1.473 5.09-4.418-4.733-8.729-1.35-13.678 3.732-13.678 6.751 0 7.506 7.595 3.64 13.679-1.292 2.031-2.64 3.63-2.64 5.821 0 1.747.696 3.331 1.82 4.5z"/></svg>
                    </div>
                    <div class="step_name">
                        Bước 1
                    </div>
                    <div class="step_content">
                        Đặt mua thẻ theo tên của bạn
                    </div>
                </div>
                <div class="step_child">
                    <div class="step_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 1c-6.338 0-12 4.226-12 10.007 0 2.05.739 4.063 2.047 5.625.055 1.83-1.023 4.456-1.993 6.368 2.602-.47 6.301-1.508 7.978-2.536 9.236 2.247 15.968-3.405 15.968-9.457 0-5.812-5.701-10.007-12-10.007zm1 15h-2v-6h2v6zm-1-7.75c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z"/></svg>
                    </div>
                    <div class="step_name">
                        Bước 2
                    </div>
                    <div class="step_content">
                        Tự thêm thông tin
                        theo hướng dẫn kèm theo thẻ
                    </div>
                </div>
                <div class="step_child">
                    <div class="step_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4.062 16.626c-.165-.5.038-.921.656-1.145l3.249-1.155-.134 1.028c-.077.589-.103 1.107-.089 1.573-.25.078-1.095.339-1.945.552-.871.218-1.538-.25-1.737-.853zm1.745 1.916c-.461.167-.612.48-.489.854.147.449.645.798 1.294.635.606-.151 1.408-.396 1.701-.487-.203-.505-.378-1.035-.479-1.659l-2.027.657zm.193-10.542h2.643l.128-1h-2.771v1zm16-6v9c0 1.104-.896 2-2 2h-1.989l.015.02c-.031.43-.105.906-.222 1.457-.451 2.144-1.637 5.122-.83 8.418-2.312.356-3.651.523-5.992 1.105-.273-4.062-2.266-4.943-1.804-8.47.542-4.137.844-6.461 1.196-9.255.11-.879.731-1.307 1.337-1.307.631 0 1.246.464 1.252 1.366.021 3.303.108 6.593.324 7.393.146.54 1.087.638 1.087-.512l-.002-2.216h5.128c.276 0 .5-.224.5-.5v-4.499h-5.568c-.157-1.461-1.27-2.531-2.721-2.531h-.001c-1.44 0-2.578 1.038-2.806 2.531h-4.904v4.5c0 .276.224.5.5.5h3.757l-.261 2h-3.996c-1.104 0-2-.896-2-2v-9c0-1.104.896-2 2-2h16c1.104 0 2 .896 2 2zm-2 .5c0-.276-.224-.5-.5-.5h-15c-.276 0-.5.224-.5.5v.5h16v-.5zm-14 7.5h2.386l.129-1h-2.515v1zm12-3h-3v1h3v-1z"/></svg>
                    </div>
                    <div class="step_name">
                        Bước 3
                    </div>
                    <div class="step_content">
                        Chạm thẻ
                        để chia sẻ thông tin
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mua">
        <div class="container">
            <div class="dat_mua">
                <h3>
                     Danh thiếp điện tử
                </h3>
                <div class="des">
                    Xu hướng chia sẻ - Sang Trọng - Chuyên Nghiệp
                </div>
                <div class="content_image">
                    <div class="thumb">
                        {{-- <img src="{{ asset('assets/img/front.png') }}" alt=""> --}}
                        <img class="lazyload" width="100%" height="100%" data-src="https://res.cloudinary.com/truongtv/image/upload/v1633346537/vicard/pb3yvuumqzxaqxzeef7f.png" alt="Mặt trước thẻ vicard">
                        <div id="replace_name" class="name">TÊN CỦA BẠN</div>
                    </div>
                    <div class="thumb">
                        {{-- <img src="{{ asset('assets/img/back.png') }}" alt=""> --}}
                        <img class="lazyload" width="100%" height="100%" data-src="https://res.cloudinary.com/truongtv/image/upload/v1633346538/vicard/bcd67l2kjygssmbzqegb.png" alt="Mặt sau thẻ vicard">
                    </div>
                </div>
                <div id="form" class="form">
                    <div class="price">
                        <span class="price_origin">500,000đ</span>
                        <span class="price_promotion">359,000đ</span>
                    </div>
                    <form action="{{url('thanh-toan')}}" method="post">
                        @csrf
                        <label for="name">Tên của bạn (tên trên thẻ) *</label>
                        <input
                            onkeyup="changeText()"
                            maxlength="22"
                            id="name"
                            name="name"
                            type="text"
                            placeholder="Nhập tên của bạn">
                        @if($errors->has('name'))
                            <small style="color: #dc0000;">{{$errors->first('name') }}</small>
                        @endif
                        <label for="email">Email của bạn *</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            maxlength="50"
                            placeholder="Nhập địa chỉ email của bạn">
                        @if($errors->has('email'))
                            <small style="color: #dc0000;">{{$errors->first('email') }}</small>
                        @endif
                        <label for="mobile">Số điện thoại *</label>
                        <input
                            id="mobile"
                            name="mobile"
                            type="text"
                            maxlength="10"
                            placeholder="Nhập số điện thoại của bạn">
                        @if($errors->has('mobile'))
                            <small style="color: #dc0000;">{{$errors->first('mobile') }}</small>
                        @endif
                        <label for="address">Địa chỉ giao hàng *</label>
                        <input
                            id="address"
                            name="address"
                            type="text"
                            placeholder="Nhập địa chỉ giao hàng của bạn">
                        @if($errors->has('address'))
                            <small style="color: #dc0000;">{{$errors->first('address') }}</small>
                        @endif
                        <div class="freeship">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z"/></svg>
                            <span style="margin-left: 10px;font-weight: bold;">Miễn phí giao hàng toàn quốc</span>
                        </div>
                        <div style="display: block; text-align: center;">
                            <button class="button button-primary"> ĐẶT MUA</button>
                        </div>
                    </form>
                </div>
            </div>
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

        @if($errors->any())
          window.smoothScroll(document.getElementById('form'));
        @endif

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

        //add simple support for background images:
        document.addEventListener('lazybeforeunveil', function(e){
          var bg = e.target.getAttribute('data-bg');
          if(bg){
            e.target.style.backgroundImage = 'url(' + bg + ')';
          }
        });
    </script>
    <script src="{{asset('assets/lazysizes.js')}}"></script>
    @include('components/ga')
</body>
</html>
