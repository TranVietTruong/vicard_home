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

    <meta property="twitter:type" content="website">
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


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VL8VHYKYQW"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VL8VHYKYQW');
    </script>

</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="three columns">
                    <div class="logo">
                        <a href="{{asset('')}}">
                            <img src="{{ asset('logo.png') }}" alt="">
                        </a>
                    </div>
                </div>  
                <div class="nine columns">
                    <div class="menu">
                        <ul>
                            <li>
                                <a href="#trangchu">trang chủ</a>
                            </li>
                            <li>
                                <a href="#tinhnang">tính năng</a>
                            </li>
                            <li>
                                <a href="#loiich">hướng dẫn</a>
                            </li>
                            <li>
                                <a href="#mua">mua ngay</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="trangchu">
        {{-- <img class="bg" src="{{ asset('assets/img/background2.png') }}" alt=""> --}}
        <div class="overlay"></div>
        <div class="trangchu container">
            <h1>Danh thiếp điện tử đầu tiên tại Việt Nam</h1>
            <p style="font-size: 20px">Chia sẻ thông tin trong 1 giây</p>
            <button class="button button-primary"> Đặt Mua </button>
        </div>
    </section>
    <section id="tinhnang">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="content">
                <div class="info">
                    <h2>Xu hướng kết nối chuyên nghiệp hiện đại</h2>
                    <p style="font-size: 16px">Với thẻ cá nhân thông minh Vicard, bạn có thể chia sẻ tất cả mạng xã hội đang phổ biến hiện nay như Facebook, Zalo, Instagram, Tiktok, ... và nhiều hơn nữa. Ngoài ra, với tính năng lưu danh bạ, đối tác của bạn sẽ chỉ mất 1 giây để có thể lưu liên lạc của bạn thay vì phải nhập từ bàn phím tốn rất nhiều thời gian.</p>
                </div>
                <div class="img">
                    {{-- <img src="{{ asset('assets/img/logo-social.png') }}" alt=""> --}}
                    <img src="https://lh3.googleusercontent.com/KJt2QWYolG-LRSp-D16MyopN2uBlQtcwomhUZqV30UZLg_XPEfI4r1Llzd9DZ6EX8r9V_8_HHLgDklnDymePHXITHdDcM16lti_A4Bit7_w_6y4SQRIKcs3MtjfA-6u_10G6kFMlQPKZ0dYEog1l4sr1FjwFtsJ0hWZC6ac4xgxrvr-G_QTHsfVNq6JovYR4zwQBmRX-WCA42HO9Dp9i5qJ17ShKt4k6L2nAfL7pDDtTB1nXarZNLV54mlWUiQ3FJ2SKGTlze-DXFi1k00VXK4de0iDZB5f2xCzm6DQKehUkCRQDzm6KINPm2HsDk0KA-xpVoCik33XcBco77bpLI0t_IbB36WVvl8Qa-QcLndwHlSqh970oz7PHzkh6DIveFBouitj9ZQKXdOhkMfB4Yev41llwky_qnsdvlKzCx8qJItxSULiKGxjdU-aUXQIRfMOOOlGAy1A7FIci_94NNGXmjRp3fAUBkCeFim7rkmhTIg0fYfKY6335JL4H2fM2vR1OL6P87lseLsSvJChL23RFQifcvvtlIK0CKXl1Apj1lJca6D6GK7hkwlaqUMV9E58l8y5-fnSiUBdMK0HHyjYNhPwzEtOKOkrbs2wEmqUzpzQK08oxgkWMYWlt_DaD_xlYjMNqrlcsPQuEMwiONlOpMhnRFxtx2cn2PrJk6-8DUBoj9Uh3czLXwQzjMxbZtP3RuQNceBnAbW56rLb4sZg=s943-no?authuser=0" alt="Nền tảng kết nối thẻ vicard">
                </div>
            </div>
        </div>
    </section>
    <section id="loiich">
        <div class="container">
            <div class="content">
                <div class="img">
                    {{-- <img src="{{ asset('assets/img/tinhnang.png') }}" alt=""> --}}
                    <img src="https://lh3.googleusercontent.com/unVpmuw5rwzQqCKuPoJseiJ-j2pE3sm7oF1HKUfLVMlKZzT4uFLAY-9vu4mA0MC9g3WszSG2FarC5IxGDo79kDKl2VChjW3DMznRK7mEeLYnXVng5miejkixIbIW-P13ScEX5kv-XG0lbtXelxpM6e73UXUwZ_VeDHMFpu494hg8_AqJp5wiG-qOP1p70IPEvZ_s3r2z4PBSd7vfEpWAcx4Pvr7ZuuqD3XB9rCJig6vNlx9zPCzMnQ4G0fexK5-BMdsyjrW3OZ-zd8kw0Lmoc-R_h-ysyPZAjtRJseHZ8nZTWzfDZw7XkWuFsAHQHF0_Zl7htq8it2Qssjw22P_yhRk3EwSWm9GxoOJF4H7SbrPeqt6SdyqZ7kR-wogYMEtKYIPHKfj_WtFBpGyMzgQd7Uu1eAHbYZKmVX8gQhPRVtawINJoFfOSkBji2BH6CwxVYpusm4JtwPrlTBTqD9CZzHP2x7SJOi3jWU6VUY3vk2tEmwixAW_-MFSR0s96sjv75G_UgxrrGg6RR4Q6jV0TaeY9SJoXHjVQSn6KP__0oQRj9dX4yaYXxw-M95z8nvF0Y6WDmQyYYW3oT-_gHYDNYV8GGlzKSV7k2J5CvMkQ3GgpRNEfu6nc8uD6b5_TADnCoSkc9mHn5ehkTPzoMcEfcRWp470Vawa5abOQUhLSx9_Bv8J-kmaiC1tnqlAOv85EWpmSKSMY118tgCkuHGay2iA=w386-h800-no?authuser=0" alt="Cách thức hoạt động của thẻ vicard">
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
                <div class="title">
                    Danh thiếp điện tử
                </div>
                <div class="des">
                    Xu hướng chia sẻ - Sang Trọng - Chuyên Nghiệp
                </div>
                <div class="content_image">
                    <div class="thumb">
                        {{-- <img src="{{ asset('assets/img/front.png') }}" alt=""> --}}
                        <img src="https://lh3.googleusercontent.com/g7Sqp1_kM4ejb6xBa1lg_zZoEkPy4L375lQGiZjIRytz4Ff6xjAjyV3ljF7-2w3SRJxHFmpbSzoyHWsKPgdD0yrM2wmI30M5jWXdjleY-3cP2wR4kHVzolDZC2xWUdomn-iSM7ku-s_PF6MEDwdQyPV3GQlOrRFKPyNek8TgjFr3dhoBST16cZMBMkuwzS2lG9wkjG3twp86MeNhd6dqnTk7usAqs_7lnBpEArVjtg68lnf0-3pmb25rq2C-KUQih1VBT01mNk4uv_G3gCkob7UiJG8pEHffHQ73Xz9eMovd5kq7eeL-F1urrBk1hhfPO7U2FjOQX60aMSbNyEobw2uhA8GHxI4IyUL5b-J9Wzed54pCgiC56sTyiiJZCi2bahpKqCAquA17d4z50TJcfWJBCbGi4WUjP-33g6RAidzzYHjb7sZLY0Nr12kYq6JUnkoK-sdXSABw8JJ4vgQwWzcrk3FiRZ41we4CSvP5Ky26o3LqyaaH_bmNbBrtbpdMZ9k6-P50U1nKplN3rmb9WbdY7kw6nGt2vlUoQQVhfkQa4Yd8lv7MIgz6ViCenNOtYn3lCf7CVJew4OxtbH9qEN0OMNgokYjUyHQp6KGbuPFAIyKcrZ0Acxub_1KAYFlpfoAsevFIJPS_sa_rFt0TPj4BnoOBKHuHDhZjp-ZtXSIFkPtN_T4bDq02gQEM3NoTeLXpu73EHmJveNJfh9HxqsY=w1125-h675-no?authuser=0" alt="Mặt trước thẻ vicard">
                        <div id="replace_name" class="name">TÊN CỦA BẠN</div>
                    </div>
                    <div class="thumb">
                        {{-- <img src="{{ asset('assets/img/back.png') }}" alt=""> --}}
                        <img src="https://lh3.googleusercontent.com/jCnbdtakrK2urZDA6uTVfaN_DPfKVubO7QCGADOH1PA6mYKu_CfB5mhg5KwF5HCsQhbyu1uwruNgEVgTShlwo20r6tRyKo-E0NzzqpscuUP2J_J8um6tEH9j8L6kFOpKfP8-0nDqg_U_lNfnw0FyaPGg9x63siI9EPCgrvteqVKdx5EFTTdle0jYyCVy1cItzMXxuKYVJL4AenvU9E5uP79TkcPkgvlA4jZq1nrzeDos_NcYc-UvLdn1p-S4HQXuhbRvrL93MLR_g9tOh9sNJstCTFMbuQuI4shD380m3j0FlV-p-MdSoXCrC0Z8gr9UVSvqy5yOyyqUas7o7nMejo0d5h-eMsQu1qv3m-KJsxF46mWNSpco6L_BlfzEvTsQhl4eESEPLNQIilxRokGD-ekmLtisvB8rW1ay61ssOzkMmruoFu26emf8IstxCcLhv5Que47RR17D_6mBaGjPfmBb_6v-_cKLfihkKW3-5UBO9ZBPUFNEvwV-9kjdsekC0PP5B4Q3CzcELP28drPA4hLXdT7lqZTJBTrOGWiorKYKA3ZY-ykSYeZNB03JvWGI6b7Gi8oMbCFyve8ja0N0Jufd8WkwqQk47mXsLKe-B_U9vAaMFXgpre2bQD3H8y6zmN185kPfnr2uMckyl6HLSpQ9xLNgKCAbZ-80AIYJ60R18USmp-0yaFP27oZgphulCaCJ8ZiqdcC1wngqNh5k0kI=w1125-h675-no?authuser=0" alt="Mặt sau thẻ vicard">
                    </div>
                </div>
                <div class="form">
                    <div class="price">
                        <span class="price_origin">500,000đ</span>
                        <span class="price_promotion">359,000đ</span>
                    </div>
                    <form action="">
                        <label for="name">Tên của bạn</label>
                        <input onkeyup="changeText()" maxlength="22" id="name" type="text" placeholder="Nhập tên của bạn">
                        <label for="name">Số điện thoại</label>
                        <input id="mobile" type="text" placeholder="Nhập số điện thoại của bạn">
                        <label for="name">Địa chỉ giao hàng</label>
                        <input id="address" type="text" placeholder="Nhập địa chỉ giao hàng của bạn">
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
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="five columns">
                    <div class="head">vicard.vn</div>
                    <div class="description">
                        Vicard cung cấp danh thiếp điện tử và nền tảng công nghệ giúp người dùng tích hợp tất cả thông tin cần thiết mà người dùng sử dụng để Trao Đổi và Kết Nối chỉ với 1 lần chạm thẻ trên điện thoại thông minh.
                    </div>
                    <ul class="diachia">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>
                            <span>Tầng 8, Tòa nhà Intracom, Trần Thái Tông, Cầu Giấy, Hà Nội.</span>
                        </li>
                        <li>
                            <svg style="transform: scale(0.8);" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm0 2.574l-12-9.725v15.438h24v-15.438l-12 9.725z"/></svg>
                            <span>vicard.vn@gmail.com</span>
                        </li>
                    </ul>
                </div>
                <div class="four columns">
                    <div class="head">
                        Thông tin khác
                    </div>
                    <ul>
                        <li>Chính sách bảo mật</li>
                        <li>Điều khoản dịch vụ</li>
                        <li>Chính sách đổi trả</li>
                        <li>Giao hàng và thanh toán</li>
                        <li>Thông tin chuyển khoản</li>
                    </ul>
                </div>
                <div class="three columns">
                    <div class="head">
                        Hướng dẫn
                    </div>
                    <ul>
                        <li>Hướng dẫn mua hàng</li>
                        <li>Hướng dẫn thay đổi thông tin</li>
                        <li>Thiết bị tương thích</li>
                        <li>Câu hỏi thường gặp</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

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
    </script>
</body>
</html>
