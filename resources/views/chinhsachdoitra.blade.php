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
            <h4>CHÍNH SÁCH ĐỔI TRẢ</h4>
            <p>Các điều khoản và điều kiện được quy định trong Chính sách đổi trả này tạo thành một phần của Điều khoản dịch vụ, chúng tôi đảm bảo quyền lợi của Người mua bằng cách cho phép gửi yêu cầu hoàn trả sản phẩm và/hoặc đổi hàng.</p>
            <h4>1. Điều kiện đổi trả</h4>
            <p>Người mua cần kiểm tra tình trạng hàng hóa ngay tại thời điểm giao/nhận hàng và đồng ý rằng mình chỉ có thể đổi hàng/trả lại hàng trong những trường hợp sau:</p>
            <ul>
                <li>Hàng không đúng chủng loại, mẫu mã trong đơn hàng đã đặt hoặc như trên website tại thời điểm đặt hàng.</li>
                <li>Tình trạng bên ngoài bị ảnh hưởng như trầy xước, bong tróc, bể vỡ Người mua có trách nhiệm trình các bằng chứng, giấy tờ, tài liệu liên quan chứng minh sự thiếu sót trên để hoàn thành việc hoàn trả/đổi trả hàng hóa.</li>
            </ul>
            <h4>2. Tình trạng của hàng trả lại</h4>
            <p>Để hạn chế các rắc rối phát sinh liên quan đến đổi/trả hàng, Người mua lưu ý cần phải gửi trả sản phẩm nguyên trạng như khi nhận hàng, bao gồm toàn bộ phụ kiện đi kèm nếu có. Chúng tôi khuyến khích Người mua quay video hoặc chụp lại ảnh sản phẩm ngay khi nhận được để làm bằng chứng đối chiếu/khiếu nại về sau nếu cần.</p>
            <h4>3. Thời gian thông báo và gửi sản phẩm đổi trả</h4>
            <p>Thời gian thông báo đổi trả: trong vòng 48h kể từ khi nhận sản phẩm đối với trường hợp sản phẩm thiếu phụ kiện, bong tróc hoặc bể vỡ. Đối với những trường hợp khác, quý khách vui lòng liên hệ với chúng tôi theo thông tin liên hệ ở dưới điều khoản để chúng tôi giải đáp các câu hỏi, trục trặc, và đồng thời sẽ sắp xếp việc gửi lại hàng để kiểm tra. Sau khi kiểm tra, nếu sản phẩm có lỗi, chúng tôi sẽ gửi sản phẩm thay thế tưởng ứng, nếu sản phẩm không có lỗi, chúng tôi sẽ đóng gói và gửi lại bạn.</p>
            <p>Thời gian gửi chuyển trả sản phẩm: trong vòng 14 ngày kể từ khi nhận sản phẩm.</p>
            <p>Địa điểm đổi trả sản phẩm: Người mua có thể mang hàng trực tiếp đến địa chỉ của chúng tôi hoặc chuyển qua đường bưu điện.</p>
            <h4>4. Quy định về hỗ trợ sử dụng</h4>
            <p>Trước khi gửi lại sản phẩm, Người mua cần liên hệ với chúng tôi để chúng tôi kiểm định sản phẩm và hướng dẫn quý khách nếu gặp trục trặc.</p>

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
