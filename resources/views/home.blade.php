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

    {{-- <link rel="stylesheet" href="{{asset('assets/skeleton.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}"> --}}


    <style>
        *{margin:0;padding:0;box-sizing:border-box}.container{position:relative;width:100%;max-width:960px;margin:0 auto;padding:0 20px;box-sizing:border-box}.column,.columns{width:100%;float:left;box-sizing:border-box}@media (min-width:400px){.container{width:85%;padding:0}}@media (min-width:550px){.container{width:80%}.column,.columns{margin-left:4%}.column:first-child,.columns:first-child{margin-left:0}.one.column,.one.columns{width:4.66666666667%}.two.columns{width:13.3333333333%}.three.columns{width:22%}.four.columns{width:30.6666666667%}.five.columns{width:39.3333333333%}.six.columns{width:48%}.seven.columns{width:56.6666666667%}.eight.columns{width:65.3333333333%}.nine.columns{width:74%}.ten.columns{width:82.6666666667%}.eleven.columns{width:91.3333333333%}.twelve.columns{width:100%;margin-left:0}.one-third.column{width:30.6666666667%}.two-thirds.column{width:65.3333333333%}.one-half.column{width:48%}.offset-by-one.column,.offset-by-one.columns{margin-left:8.66666666667%}.offset-by-two.column,.offset-by-two.columns{margin-left:17.3333333333%}.offset-by-three.column,.offset-by-three.columns{margin-left:26%}.offset-by-four.column,.offset-by-four.columns{margin-left:34.6666666667%}.offset-by-five.column,.offset-by-five.columns{margin-left:43.3333333333%}.offset-by-six.column,.offset-by-six.columns{margin-left:52%}.offset-by-seven.column,.offset-by-seven.columns{margin-left:60.6666666667%}.offset-by-eight.column,.offset-by-eight.columns{margin-left:69.3333333333%}.offset-by-nine.column,.offset-by-nine.columns{margin-left:78%}.offset-by-ten.column,.offset-by-ten.columns{margin-left:86.6666666667%}.offset-by-eleven.column,.offset-by-eleven.columns{margin-left:95.3333333333%}.offset-by-one-third.column,.offset-by-one-third.columns{margin-left:34.6666666667%}.offset-by-two-thirds.column,.offset-by-two-thirds.columns{margin-left:69.3333333333%}.offset-by-one-half.column,.offset-by-one-half.columns{margin-left:52%}}html{font-size:62.5%}body{font-size:1.5em;line-height:1.6;font-weight:400;font-family:Raleway,HelveticaNeue,"Helvetica Neue",Helvetica,Arial,sans-serif;color:#222}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:2rem;font-weight:300}h1{font-size:4rem;line-height:1.2;letter-spacing:-.1rem}h2{font-size:3.6rem;line-height:1.25;letter-spacing:-.1rem}h3{font-size:3rem;line-height:1.3;letter-spacing:-.1rem}h4{font-size:2.4rem;line-height:1.35;letter-spacing:-.08rem}h5{font-size:1.8rem;line-height:1.5;letter-spacing:-.05rem}h6{font-size:1.5rem;line-height:1.6;letter-spacing:0}@media (min-width:550px){h1{font-size:5rem}h2{font-size:4.2rem}h3{font-size:3.6rem}h4{font-size:3rem}h5{font-size:2.4rem}h6{font-size:1.5rem}}p{margin-top:0}a{color:#1eaedb}a:hover{color:#0fa0ce}.button,button,input[type=button],input[type=reset],input[type=submit]{display:inline-block;height:38px;padding:0 30px;color:#555;text-align:center;font-size:11px;font-weight:600;line-height:38px;letter-spacing:.1rem;text-transform:uppercase;text-decoration:none;white-space:nowrap;background-color:transparent;border-radius:4px;border:1px solid #bbb;cursor:pointer;box-sizing:border-box}.button:focus,.button:hover,button:focus,button:hover,input[type=button]:focus,input[type=button]:hover,input[type=reset]:focus,input[type=reset]:hover,input[type=submit]:focus,input[type=submit]:hover{color:#333;border-color:#888;outline:0}.button.button-primary,button.button-primary,input[type=button].button-primary,input[type=reset].button-primary,input[type=submit].button-primary{color:#fff;background-color:#33c3f0;border-color:#33c3f0}.button.button-primary:focus,.button.button-primary:hover,button.button-primary:focus,button.button-primary:hover,input[type=button].button-primary:focus,input[type=button].button-primary:hover,input[type=reset].button-primary:focus,input[type=reset].button-primary:hover,input[type=submit].button-primary:focus,input[type=submit].button-primary:hover{color:#fff;background-color:#1eaedb;border-color:#1eaedb}input[type=email],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=url],select,textarea{height:38px;padding:6px 10px;background-color:#fff;border:1px solid #d1d1d1;border-radius:4px;box-shadow:none;box-sizing:border-box}input[type=email],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=url],textarea{-webkit-appearance:none;-moz-appearance:none;appearance:none}textarea{min-height:65px;padding-top:6px;padding-bottom:6px}input[type=email]:focus,input[type=number]:focus,input[type=password]:focus,input[type=search]:focus,input[type=tel]:focus,input[type=text]:focus,input[type=url]:focus,select:focus,textarea:focus{border:1px solid #33c3f0;outline:0}label,legend{display:block;margin-bottom:.5rem;font-weight:600}fieldset{padding:0;border-width:0}input[type=checkbox],input[type=radio]{display:inline}label>.label-body{display:inline-block;margin-left:.5rem;font-weight:400}ul{list-style:circle inside}ol{list-style:decimal inside}ol,ul{padding-left:0;margin-top:0}ol ol,ol ul,ul ol,ul ul{margin:1.5rem 0 1.5rem 3rem;font-size:90%}li{margin-bottom:1rem}code{padding:.2rem .5rem;margin:0 .2rem;font-size:90%;white-space:nowrap;background:#f1f1f1;border:1px solid #e1e1e1;border-radius:4px}pre>code{display:block;padding:1rem 1.5rem;white-space:pre}td,th{padding:12px 15px;text-align:left;border-bottom:1px solid #e1e1e1}td:first-child,th:first-child{padding-left:0}td:last-child,th:last-child{padding-right:0}.button,button{margin-bottom:1rem}fieldset,input,select,textarea{margin-bottom:1.5rem}blockquote,dl,figure,form,ol,p,pre,table,ul{margin-bottom:2.5rem}.u-full-width{width:100%;box-sizing:border-box}.u-max-full-width{max-width:100%;box-sizing:border-box}.u-pull-right{float:right}.u-pull-left{float:left}hr{margin-top:3rem;margin-bottom:3.5rem;border-width:0;border-top:1px solid #e1e1e1}.container:after,.row:after,.u-cf{content:"";display:table;clear:both}header{height:70px;min-height:50px;background:#fff;box-shadow:0 0 3px rgb(60 72 88 / 15%);position:fixed;width:100%;top:0;left:0;z-index:99999}p{font-size:16px}ul{list-style-type:none}a{text-decoration:none;color:inherit}.menu{height:70px}.logo{height:70px;display:flex;align-items:center;justify-content:start}.logo img{height:50px}.menu ul{list-style-type:none;height:inherit;display:flex;justify-content:end;align-items:center}.menu ul li{display:inline-block;margin:0;margin-left:40px;text-transform:uppercase;cursor:pointer}#trangchu{padding-top:70px;height:100vh;display:flex;justify-content:center;align-items:center;background:url(https://lh3.googleusercontent.com/0OzNHoo8ngXi28LUCHtVEmiuSG9zzaBOWD_9hC6zlHCCs0NTAEBi828OHzpvyDGcpEochFKo6mwsTrJemGoS8wvv3zmFKruLhfayTjpCwLDzSs9qQ_YK2ZFjbX3102tWvX8ZfMCosLXzAThNKZfrOt_TO1Fw71_caHbLPn7cMgtzu8iPtdauVzPNUtL9IAuthgPnTWB-dv3z3QznXUWm7-ajbPHsdwRzgX65aoczqwR_7Cr3vjWC7ME1O93huotGdw5__8kiLQXfR26ED8gIgTrIi_VW9lWdXw29m9Q141I4rNKgaYCFuhKfmFAfub5FVwI0N6oMw6yVzyRu1HCZ7VOi3mQ7d5WaK3la-GroR1fB_4Alp9lje_k3JTzb-_0WUH-k7cXbmOFyzxEZqPh4AAnkIZknIoETqPHuyD5zRDZO3Eimum5WhTXvwuu2Rjk32FqU15xuc5yQAdjwtFn_0hAEj7BLDWwl8lcEYfCqqThDoiB0LhS69_n5bEO6DlKLIbBLW9GWzzZrUTWfV_qlsFQYCltZBx523iVE1m5mbGQlWMEERUzERCPJ-_GG14N6JP3mEUKjl8nr8Qop4gFEE-vqzjsEedxhjdg8awQRMEcbaMUki1lJzEF9moa30Ly5Vf0-00QWHfL_riPe8l3gvvMtB68dn5rDcyygjxwaE27fSLU-2jCy3g1eBcHJf8Wh0qafPNnmGd5CeRQ9H3BvO0w=w1920-h1080-no?authuser=0) no-repeat center center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}.overlay{width:100%;height:100%;position:absolute;top:0;left:0;background:#000000a1}.trangchu{text-align:center;color:#fff}.trangchu h1{font-size:2.6em;font-weight:700}#tinhnang{padding:100px 0;background-color:#303539;background-image:url(https://lh3.googleusercontent.com/oHfprWUY9uLPnpa0oI-xPrr_8URxAORXjesbW2gv1OIaOkFxr1-DbyGuLPlVAIfPS-TkdSjyjReQcvNyoVRgl8mrPvk12parV7cVSAfUpeZ5hWweN8GmzIZ6dWCyPpBWiEdD4ha4PhSjhgCc03vQg6_DqUWpt6nzdVr0fgfWzjHgooi1iWIRQbuR6XD3RF8wP6HNiR96IBsYAGV5igi1ODl5vVdhQOc8wxdgjJKnMqaqGqcUEo_lDkJO5QiCYtMwqvOPckLJoGvAo7bqZ7wgSnaHXp7GrEyPiRw1P1Gyp6FOkb_xq89Xubru6Vm-YC738aJDOofhttgT15V_37jujaEOI9ilIxsdRW9QEd6aKU9du2y_I-11WxYpO1dODAkqqs5H5rAMVgESe9hwkezgHkIn87_Y3ubJNd6qXzidG4yo4Ys39B_ZrEbIWTcjBiQvZWaItFDkuD-mFhWW3yM5Wb5Nm-XsWNmOC0H_xGu4-gNfPy7_Hv3JfeZPwEAjMcZSl5QSLEcD-uLe5SlgpcCaQuUj07-0bGrui7jGi6tzNhMORsDjIMp-zFOt4DtmZyz9PPwQcq0iwpI0aL2Ed4pz2A2iaemITll6RsQ8qPZtuRQy9g9ivCc9e1cicl7D7gAHBznkANx-DkL5D9s_9uFBfdoWzcS4jyN7KcGxwvpY97v2VwYWXbVldZ4VXyaapCnxrAVNGQOrUIWF0o_8fIOHyIA=w1677-h943-no?authuser=0);background-size:cover;position:relative;color:#fff}.content{display:flex;justify-content:space-between;align-items:center}#tinhnang .content .info{padding-right:50px}#tinhnang .img{width:450px;min-width:450px}#tinhnang img{width:100%}.bg-overlay{background-color:rgba(60,72,88,.7);position:absolute;top:0;right:0;left:0;bottom:0;width:100%;height:100%}#loiich{padding:100px 0}#loiich .img{width:300px;min-width:300px}#loiich .img img{width:100%}#loiich .content .text{padding-left:80px}#loiich .content .text ul li{display:flex;text-align:center;padding:9px 0}#loiich .content .text ul li span{margin-left:10px}#loiich .content .text ul li svg{filter:invert(42%) sepia(93%) saturate(1352%) hue-rotate(
68deg) brightness(119%) contrast(119%)}section#huongdan{background:#38434f;color:#fff;padding:50px;text-align:center;font-size:25px;font-weight:700}section#huongdan svg{filter:invert(100%) sepia(0) saturate(100%) hue-rotate( 
43deg) brightness(119%) contrast(119%);transform:scale(1.5)}.step_child{width:250px}section#mua{padding-top:50px}.dat_mua{display:flex;justify-content:center;flex-direction:column;align-items:center}.dat_mua img{width:100%}.thumb{width:350px;margin:0 50px;position:relative}.content_image{display:flex;justify-content:space-between}.title{font-size:40px}.des{font-size:30px;margin-bottom:40px}.name{width:220px;height:50px;position:absolute;background:#060606;bottom:6%;left:2%;color:#fff;line-height:60px;padding-left:10px;text-transform:uppercase}.form{width:400px;margin:40px}.form input{width:100%;height:45px}.price{padding:15px}span.price_origin{text-decoration:line-through;color:#828282;font-size:22px}span.price_promotion{margin-left:30px;font-size:35px;color:#00bc00}.freeship svg{filter:invert(42%) sepia(93%) saturate(1352%) hue-rotate(
68deg) brightness(119%) contrast(119%)}.freeship{display:flex;align-items:center;margin:10px 0;margin-bottom:20px}footer#footer{background:#38434f;color:#fff;padding-top:50px;color:#d4d4d4}.head{font-size:25px;font-weight:700;color:#fff;margin-bottom:15px}ul.diachia{margin-top:10px}ul.diachia li{display:flex}ul.diachia li span{margin-left:10px}ul.diachia li svg{filter:invert(100%) sepia(0) saturate(100%) hue-rotate( 
43deg) brightness(119%) contrast(119%)}footer#footer ul li:hover{cursor:pointer;color:#fff}
    </style>

    <script type="application/ld+json">
        [ {
          "@context" : "http://schema.org",
          "@type" : "Article",
          "name" : "Danh thiếp điện tử đầu tiên tại Việt Nam",
          "author" : {
            "@type" : "Person",
            "name" : "vicard.vn"
          },
          "image" : [ "https://lh3.googleusercontent.com/KJt2QWYolG-LRSp-D16MyopN2uBlQtcwomhUZqV30UZLg_XPEfI4r1Llzd9DZ6EX8r9V_8_HHLgDklnDymePHXITHdDcM16lti_A4Bit7_w_6y4SQRIKcs3MtjfA-6u_10G6kFMlQPKZ0dYEog1l4sr1FjwFtsJ0hWZC6ac4xgxrvr-G_QTHsfVNq6JovYR4zwQBmRX-WCA42HO9Dp9i5qJ17ShKt4k6L2nAfL7pDDtTB1nXarZNLV54mlWUiQ3FJ2SKGTlze-DXFi1k00VXK4de0iDZB5f2xCzm6DQKehUkCRQDzm6KINPm2HsDk0KA-xpVoCik33XcBco77bpLI0t_IbB36WVvl8Qa-QcLndwHlSqh970oz7PHzkh6DIveFBouitj9ZQKXdOhkMfB4Yev41llwky_qnsdvlKzCx8qJItxSULiKGxjdU-aUXQIRfMOOOlGAy1A7FIci_94NNGXmjRp3fAUBkCeFim7rkmhTIg0fYfKY6335JL4H2fM2vR1OL6P87lseLsSvJChL23RFQifcvvtlIK0CKXl1Apj1lJca6D6GK7hkwlaqUMV9E58l8y5-fnSiUBdMK0HHyjYNhPwzEtOKOkrbs2wEmqUzpzQK08oxgkWMYWlt_DaD_xlYjMNqrlcsPQuEMwiONlOpMhnRFxtx2cn2PrJk6-8DUBoj9Uh3czLXwQzjMxbZtP3RuQNceBnAbW56rLb4sZg=s943-no?authuser=0", "https://lh3.googleusercontent.com/unVpmuw5rwzQqCKuPoJseiJ-j2pE3sm7oF1HKUfLVMlKZzT4uFLAY-9vu4mA0MC9g3WszSG2FarC5IxGDo79kDKl2VChjW3DMznRK7mEeLYnXVng5miejkixIbIW-P13ScEX5kv-XG0lbtXelxpM6e73UXUwZ_VeDHMFpu494hg8_AqJp5wiG-qOP1p70IPEvZ_s3r2z4PBSd7vfEpWAcx4Pvr7ZuuqD3XB9rCJig6vNlx9zPCzMnQ4G0fexK5-BMdsyjrW3OZ-zd8kw0Lmoc-R_h-ysyPZAjtRJseHZ8nZTWzfDZw7XkWuFsAHQHF0_Zl7htq8it2Qssjw22P_yhRk3EwSWm9GxoOJF4H7SbrPeqt6SdyqZ7kR-wogYMEtKYIPHKfj_WtFBpGyMzgQd7Uu1eAHbYZKmVX8gQhPRVtawINJoFfOSkBji2BH6CwxVYpusm4JtwPrlTBTqD9CZzHP2x7SJOi3jWU6VUY3vk2tEmwixAW_-MFSR0s96sjv75G_UgxrrGg6RR4Q6jV0TaeY9SJoXHjVQSn6KP__0oQRj9dX4yaYXxw-M95z8nvF0Y6WDmQyYYW3oT-_gHYDNYV8GGlzKSV7k2J5CvMkQ3GgpRNEfu6nc8uD6b5_TADnCoSkc9mHn5ehkTPzoMcEfcRWp470Vawa5abOQUhLSx9_Bv8J-kmaiC1tnqlAOv85EWpmSKSMY118tgCkuHGay2iA=w386-h800-no?authuser=0" ],
          "articleSection" : "Xu hướng kết nối chuyên nghiệp hiện đại",
          "articleBody" : "Với thẻ cá nhân thông minh Vicard, bạn có thể chia sẻ tất cả mạng xã hội đang phổ biến hiện nay như Facebook, Zalo, Instagram, Tiktok, ... và nhiều hơn nữa. Ngoài ra, với tính năng lưu danh bạ, đối tác của bạn sẽ chỉ mất 1 giây để có thể lưu liên lạc của bạn thay vì phải nhập từ bàn phím tốn rất nhiều thời gian.",
          "url" : "https://vicard.vn/"
        }, {
          "@context" : "http://schema.org",
          "@type" : "Article",
          "name" : "Danh thiếp điện tử đầu tiên tại Việt Nam",
          "author" : {
            "@type" : "Person",
            "name" : "vicard.vn"
          },
          "articleSection" : "Không cần cài đặt thêm bất cứ phần mềm nào",
          "articleBody" : "Chạm thẻ Vicard vào điện thoại để chia sẻ thông tin, giảm thời gian trao đổi thông tin liên lạc. Các thông tin bạn có thể chia sẻ như số điện thoại, email, facebook, zalo, tài khoản ngân hàng ... </P>\n<UL>\n<LI>\n<SVG width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z\"></path></SVG>\n<SPAN>Chia sẻ mạng xã hội trong 1 giây</SPAN>\n</LI>\n<LI>\n<SVG width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z\"></path></SVG>\n<SPAN>Không cần cài đặt gì thêm</SPAN>\n</LI>\n<LI>\n<SVG width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z\"></path></SVG>\n<SPAN>Không cần cài ứng dụng</SPAN>\n</LI>\n<LI>\n<SVG width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z\"></path></SVG>\n<SPAN>Không giới hạn số lần chạm thẻ</SPAN>\n</LI>\n<LI>\n<SVG width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z\"></path></SVG>\n<SPAN>Không cần phí hàng tháng</SPAN>\n</LI>\n<LI>\n<SVG width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z\"></path></SVG>\n<SPAN>Thoải mái đổi thông tin không giới hạn</SPAN>\n</LI>\n<LI>\n<SVG width=\"24\" height=\"24\" xmlns=\"http://www.w3.org/2000/svg\" fill-rule=\"evenodd\" clip-rule=\"evenodd\"><path d=\"M21 6.285l-11.16 12.733-6.84-6.018 1.319-1.49 5.341 4.686 9.865-11.196 1.475 1.285z\"></path></SVG>\n<SPAN>Thông tin được bảo mật tuyệt đối",
          "url" : "https://vicard.vn/"
        }, {
          "@context" : "http://schema.org",
          "@type" : "Article",
          "name" : "Danh thiếp điện tử đầu tiên tại Việt Nam",
          "author" : {
            "@type" : "Person",
            "name" : "vicard.vn"
          },
          "image" : [ "https://lh3.googleusercontent.com/g7Sqp1_kM4ejb6xBa1lg_zZoEkPy4L375lQGiZjIRytz4Ff6xjAjyV3ljF7-2w3SRJxHFmpbSzoyHWsKPgdD0yrM2wmI30M5jWXdjleY-3cP2wR4kHVzolDZC2xWUdomn-iSM7ku-s_PF6MEDwdQyPV3GQlOrRFKPyNek8TgjFr3dhoBST16cZMBMkuwzS2lG9wkjG3twp86MeNhd6dqnTk7usAqs_7lnBpEArVjtg68lnf0-3pmb25rq2C-KUQih1VBT01mNk4uv_G3gCkob7UiJG8pEHffHQ73Xz9eMovd5kq7eeL-F1urrBk1hhfPO7U2FjOQX60aMSbNyEobw2uhA8GHxI4IyUL5b-J9Wzed54pCgiC56sTyiiJZCi2bahpKqCAquA17d4z50TJcfWJBCbGi4WUjP-33g6RAidzzYHjb7sZLY0Nr12kYq6JUnkoK-sdXSABw8JJ4vgQwWzcrk3FiRZ41we4CSvP5Ky26o3LqyaaH_bmNbBrtbpdMZ9k6-P50U1nKplN3rmb9WbdY7kw6nGt2vlUoQQVhfkQa4Yd8lv7MIgz6ViCenNOtYn3lCf7CVJew4OxtbH9qEN0OMNgokYjUyHQp6KGbuPFAIyKcrZ0Acxub_1KAYFlpfoAsevFIJPS_sa_rFt0TPj4BnoOBKHuHDhZjp-ZtXSIFkPtN_T4bDq02gQEM3NoTeLXpu73EHmJveNJfh9HxqsY=w1125-h675-no?authuser=0", "https://lh3.googleusercontent.com/jCnbdtakrK2urZDA6uTVfaN_DPfKVubO7QCGADOH1PA6mYKu_CfB5mhg5KwF5HCsQhbyu1uwruNgEVgTShlwo20r6tRyKo-E0NzzqpscuUP2J_J8um6tEH9j8L6kFOpKfP8-0nDqg_U_lNfnw0FyaPGg9x63siI9EPCgrvteqVKdx5EFTTdle0jYyCVy1cItzMXxuKYVJL4AenvU9E5uP79TkcPkgvlA4jZq1nrzeDos_NcYc-UvLdn1p-S4HQXuhbRvrL93MLR_g9tOh9sNJstCTFMbuQuI4shD380m3j0FlV-p-MdSoXCrC0Z8gr9UVSvqy5yOyyqUas7o7nMejo0d5h-eMsQu1qv3m-KJsxF46mWNSpco6L_BlfzEvTsQhl4eESEPLNQIilxRokGD-ekmLtisvB8rW1ay61ssOzkMmruoFu26emf8IstxCcLhv5Que47RR17D_6mBaGjPfmBb_6v-_cKLfihkKW3-5UBO9ZBPUFNEvwV-9kjdsekC0PP5B4Q3CzcELP28drPA4hLXdT7lqZTJBTrOGWiorKYKA3ZY-ykSYeZNB03JvWGI6b7Gi8oMbCFyve8ja0N0Jufd8WkwqQk47mXsLKe-B_U9vAaMFXgpre2bQD3H8y6zmN185kPfnr2uMckyl6HLSpQ9xLNgKCAbZ-80AIYJ60R18USmp-0yaFP27oZgphulCaCJ8ZiqdcC1wngqNh5k0kI=w1125-h675-no?authuser=0" ],
          "articleSection" : "Danh thiếp điện tử Xu hướng chia sẻ - Sang Trọng - Chuyên Nghiệp",
          "url" : "https://vicard.vn/"
        } ]
    </script>
    <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "Product",
          "name" : "Danh thiếp điện tử đầu tiên tại Việt Nam",
          "image" : [ "https://lh3.googleusercontent.com/g7Sqp1_kM4ejb6xBa1lg_zZoEkPy4L375lQGiZjIRytz4Ff6xjAjyV3ljF7-2w3SRJxHFmpbSzoyHWsKPgdD0yrM2wmI30M5jWXdjleY-3cP2wR4kHVzolDZC2xWUdomn-iSM7ku-s_PF6MEDwdQyPV3GQlOrRFKPyNek8TgjFr3dhoBST16cZMBMkuwzS2lG9wkjG3twp86MeNhd6dqnTk7usAqs_7lnBpEArVjtg68lnf0-3pmb25rq2C-KUQih1VBT01mNk4uv_G3gCkob7UiJG8pEHffHQ73Xz9eMovd5kq7eeL-F1urrBk1hhfPO7U2FjOQX60aMSbNyEobw2uhA8GHxI4IyUL5b-J9Wzed54pCgiC56sTyiiJZCi2bahpKqCAquA17d4z50TJcfWJBCbGi4WUjP-33g6RAidzzYHjb7sZLY0Nr12kYq6JUnkoK-sdXSABw8JJ4vgQwWzcrk3FiRZ41we4CSvP5Ky26o3LqyaaH_bmNbBrtbpdMZ9k6-P50U1nKplN3rmb9WbdY7kw6nGt2vlUoQQVhfkQa4Yd8lv7MIgz6ViCenNOtYn3lCf7CVJew4OxtbH9qEN0OMNgokYjUyHQp6KGbuPFAIyKcrZ0Acxub_1KAYFlpfoAsevFIJPS_sa_rFt0TPj4BnoOBKHuHDhZjp-ZtXSIFkPtN_T4bDq02gQEM3NoTeLXpu73EHmJveNJfh9HxqsY=w1125-h675-no?authuser=0", "https://lh3.googleusercontent.com/jCnbdtakrK2urZDA6uTVfaN_DPfKVubO7QCGADOH1PA6mYKu_CfB5mhg5KwF5HCsQhbyu1uwruNgEVgTShlwo20r6tRyKo-E0NzzqpscuUP2J_J8um6tEH9j8L6kFOpKfP8-0nDqg_U_lNfnw0FyaPGg9x63siI9EPCgrvteqVKdx5EFTTdle0jYyCVy1cItzMXxuKYVJL4AenvU9E5uP79TkcPkgvlA4jZq1nrzeDos_NcYc-UvLdn1p-S4HQXuhbRvrL93MLR_g9tOh9sNJstCTFMbuQuI4shD380m3j0FlV-p-MdSoXCrC0Z8gr9UVSvqy5yOyyqUas7o7nMejo0d5h-eMsQu1qv3m-KJsxF46mWNSpco6L_BlfzEvTsQhl4eESEPLNQIilxRokGD-ekmLtisvB8rW1ay61ssOzkMmruoFu26emf8IstxCcLhv5Que47RR17D_6mBaGjPfmBb_6v-_cKLfihkKW3-5UBO9ZBPUFNEvwV-9kjdsekC0PP5B4Q3CzcELP28drPA4hLXdT7lqZTJBTrOGWiorKYKA3ZY-ykSYeZNB03JvWGI6b7Gi8oMbCFyve8ja0N0Jufd8WkwqQk47mXsLKe-B_U9vAaMFXgpre2bQD3H8y6zmN185kPfnr2uMckyl6HLSpQ9xLNgKCAbZ-80AIYJ60R18USmp-0yaFP27oZgphulCaCJ8ZiqdcC1wngqNh5k0kI=w1125-h675-no?authuser=0" ],
          "description" : "Với thẻ cá nhân thông minh Vicard, bạn có thể chia sẻ tất cả mạng xã hội đang phổ biến hiện nay như Facebook, Zalo, Instagram, Tiktok, ... và nhiều hơn nữa. Ngoài ra, với tính năng lưu danh bạ, đối tác của bạn sẽ chỉ mất 1 giây để có thể lưu liên lạc của bạn thay vì phải nhập từ bàn phím tốn rất nhiều thời gian.",
          "url" : "https://vicard.vn/",
          "brand" : {
            "@type" : "Brand",
            "name" : "vicard.vn",
            "logo" : "https://vicard.vn/"
          },
          "offers" : {
            "@type" : "Offer",
            "price" : "359,000đ"
          }
        }
    </script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
   {{--  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VL8VHYKYQW"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VL8VHYKYQW');
    </script>
 --}}
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="three columns">
                    <div class="logo">
                        <a href="{{asset('')}}">
                            <img width="100%" height="50px" src="{{ asset('logo.png') }}" alt="logo webite vicard">
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
            <button onclick="smoothScroll(document.getElementById('mua'))" class="button button-primary"> Đặt Mua </button>
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
                    <img src="https://lh3.googleusercontent.com/KJt2QWYolG-LRSp-D16MyopN2uBlQtcwomhUZqV30UZLg_XPEfI4r1Llzd9DZ6EX8r9V_8_HHLgDklnDymePHXITHdDcM16lti_A4Bit7_w_6y4SQRIKcs3MtjfA-6u_10G6kFMlQPKZ0dYEog1l4sr1FjwFtsJ0hWZC6ac4xgxrvr-G_QTHsfVNq6JovYR4zwQBmRX-WCA42HO9Dp9i5qJ17ShKt4k6L2nAfL7pDDtTB1nXarZNLV54mlWUiQ3FJ2SKGTlze-DXFi1k00VXK4de0iDZB5f2xCzm6DQKehUkCRQDzm6KINPm2HsDk0KA-xpVoCik33XcBco77bpLI0t_IbB36WVvl8Qa-QcLndwHlSqh970oz7PHzkh6DIveFBouitj9ZQKXdOhkMfB4Yev41llwky_qnsdvlKzCx8qJItxSULiKGxjdU-aUXQIRfMOOOlGAy1A7FIci_94NNGXmjRp3fAUBkCeFim7rkmhTIg0fYfKY6335JL4H2fM2vR1OL6P87lseLsSvJChL23RFQifcvvtlIK0CKXl1Apj1lJca6D6GK7hkwlaqUMV9E58l8y5-fnSiUBdMK0HHyjYNhPwzEtOKOkrbs2wEmqUzpzQK08oxgkWMYWlt_DaD_xlYjMNqrlcsPQuEMwiONlOpMhnRFxtx2cn2PrJk6-8DUBoj9Uh3czLXwQzjMxbZtP3RuQNceBnAbW56rLb4sZg=s943-no?authuser=0" width="100%" height="100%" alt="Nền tảng kết nối thẻ vicard">
                </div>
            </div>
        </div>
    </section>
    <section id="loiich">
        <div class="container">
            <div class="content">
                <div class="img">
                    {{-- <img src="{{ asset('assets/img/tinhnang.png') }}" alt=""> --}}
                    <img width="100%" height="100%" src="https://lh3.googleusercontent.com/unVpmuw5rwzQqCKuPoJseiJ-j2pE3sm7oF1HKUfLVMlKZzT4uFLAY-9vu4mA0MC9g3WszSG2FarC5IxGDo79kDKl2VChjW3DMznRK7mEeLYnXVng5miejkixIbIW-P13ScEX5kv-XG0lbtXelxpM6e73UXUwZ_VeDHMFpu494hg8_AqJp5wiG-qOP1p70IPEvZ_s3r2z4PBSd7vfEpWAcx4Pvr7ZuuqD3XB9rCJig6vNlx9zPCzMnQ4G0fexK5-BMdsyjrW3OZ-zd8kw0Lmoc-R_h-ysyPZAjtRJseHZ8nZTWzfDZw7XkWuFsAHQHF0_Zl7htq8it2Qssjw22P_yhRk3EwSWm9GxoOJF4H7SbrPeqt6SdyqZ7kR-wogYMEtKYIPHKfj_WtFBpGyMzgQd7Uu1eAHbYZKmVX8gQhPRVtawINJoFfOSkBji2BH6CwxVYpusm4JtwPrlTBTqD9CZzHP2x7SJOi3jWU6VUY3vk2tEmwixAW_-MFSR0s96sjv75G_UgxrrGg6RR4Q6jV0TaeY9SJoXHjVQSn6KP__0oQRj9dX4yaYXxw-M95z8nvF0Y6WDmQyYYW3oT-_gHYDNYV8GGlzKSV7k2J5CvMkQ3GgpRNEfu6nc8uD6b5_TADnCoSkc9mHn5ehkTPzoMcEfcRWp470Vawa5abOQUhLSx9_Bv8J-kmaiC1tnqlAOv85EWpmSKSMY118tgCkuHGay2iA=w386-h800-no?authuser=0" alt="Cách thức hoạt động của thẻ vicard">
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
                        <img width="100%" height="100%" src="https://lh3.googleusercontent.com/g7Sqp1_kM4ejb6xBa1lg_zZoEkPy4L375lQGiZjIRytz4Ff6xjAjyV3ljF7-2w3SRJxHFmpbSzoyHWsKPgdD0yrM2wmI30M5jWXdjleY-3cP2wR4kHVzolDZC2xWUdomn-iSM7ku-s_PF6MEDwdQyPV3GQlOrRFKPyNek8TgjFr3dhoBST16cZMBMkuwzS2lG9wkjG3twp86MeNhd6dqnTk7usAqs_7lnBpEArVjtg68lnf0-3pmb25rq2C-KUQih1VBT01mNk4uv_G3gCkob7UiJG8pEHffHQ73Xz9eMovd5kq7eeL-F1urrBk1hhfPO7U2FjOQX60aMSbNyEobw2uhA8GHxI4IyUL5b-J9Wzed54pCgiC56sTyiiJZCi2bahpKqCAquA17d4z50TJcfWJBCbGi4WUjP-33g6RAidzzYHjb7sZLY0Nr12kYq6JUnkoK-sdXSABw8JJ4vgQwWzcrk3FiRZ41we4CSvP5Ky26o3LqyaaH_bmNbBrtbpdMZ9k6-P50U1nKplN3rmb9WbdY7kw6nGt2vlUoQQVhfkQa4Yd8lv7MIgz6ViCenNOtYn3lCf7CVJew4OxtbH9qEN0OMNgokYjUyHQp6KGbuPFAIyKcrZ0Acxub_1KAYFlpfoAsevFIJPS_sa_rFt0TPj4BnoOBKHuHDhZjp-ZtXSIFkPtN_T4bDq02gQEM3NoTeLXpu73EHmJveNJfh9HxqsY=w1125-h675-no?authuser=0" alt="Mặt trước thẻ vicard">
                        <div id="replace_name" class="name">TÊN CỦA BẠN</div>
                    </div>
                    <div class="thumb">
                        {{-- <img src="{{ asset('assets/img/back.png') }}" alt=""> --}}
                        <img width="100%" height="100%" src="https://lh3.googleusercontent.com/jCnbdtakrK2urZDA6uTVfaN_DPfKVubO7QCGADOH1PA6mYKu_CfB5mhg5KwF5HCsQhbyu1uwruNgEVgTShlwo20r6tRyKo-E0NzzqpscuUP2J_J8um6tEH9j8L6kFOpKfP8-0nDqg_U_lNfnw0FyaPGg9x63siI9EPCgrvteqVKdx5EFTTdle0jYyCVy1cItzMXxuKYVJL4AenvU9E5uP79TkcPkgvlA4jZq1nrzeDos_NcYc-UvLdn1p-S4HQXuhbRvrL93MLR_g9tOh9sNJstCTFMbuQuI4shD380m3j0FlV-p-MdSoXCrC0Z8gr9UVSvqy5yOyyqUas7o7nMejo0d5h-eMsQu1qv3m-KJsxF46mWNSpco6L_BlfzEvTsQhl4eESEPLNQIilxRokGD-ekmLtisvB8rW1ay61ssOzkMmruoFu26emf8IstxCcLhv5Que47RR17D_6mBaGjPfmBb_6v-_cKLfihkKW3-5UBO9ZBPUFNEvwV-9kjdsekC0PP5B4Q3CzcELP28drPA4hLXdT7lqZTJBTrOGWiorKYKA3ZY-ykSYeZNB03JvWGI6b7Gi8oMbCFyve8ja0N0Jufd8WkwqQk47mXsLKe-B_U9vAaMFXgpre2bQD3H8y6zmN185kPfnr2uMckyl6HLSpQ9xLNgKCAbZ-80AIYJ60R18USmp-0yaFP27oZgphulCaCJ8ZiqdcC1wngqNh5k0kI=w1125-h675-no?authuser=0" alt="Mặt sau thẻ vicard">
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
        }
    </script>
</body>
</html>
