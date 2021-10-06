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
            <h4>BẢO MẬT THÔNG TIN</h4>
            <p>
                Cảm ơn bạn đã truy cập vào website VICARD.VN . Chúng tôi tôn trọng và cam kết sẽ bảo mật những thông tin mang tính riêng tư của bạn. Xin vui lòng đọc bản Chính sách bảo vệ thông tin cá nhân của người tiêu dùng dưới đây để hiểu hơn những cam kết mà chúng tôi thực hiện nhằm tôn trọng và bảo vệ quyền lợi của người truy cập.
            </p>
            <p>
                Bảo vệ thông tin cá nhân của người tiêu dùng và gây dựng được niềm tin cho bạn là vấn đề rất quan trọng với chúng tôi. Vì vậy, chúng tôi sẽ dùng tên và các thông tin khác liên quan đến bạn tuân thủ theo nội dung của chính sách này. Chúng tôi chỉ thu thập những thông tin cần thiết liên quan đến giao dịch mua bán.
            </p>
            <h4>CHÍNH SÁCH BẢO VỆ THÔNG TIN CÁ NHÂN CỦA NGƯỜI TIÊU DÙNG</h4>
            <p>
                Người Tiêu Dùng hoặc Khách hàng sẽ được yêu cầu điền đầy đủ các thông tin theo các trường thông tin theo mẫu có sẵn trên Website như: Họ và Tên, địa chỉ (nhà riêng hoặc văn phòng), địa chỉ email, số điện thoại. Thông tin này được yêu cầu để đặt và hoàn tất việc đặt hàng, tư vấn online của Khách hàng (bao gồm gửi email xác nhận đến Khách hàng).
            </p>
            <h5>1. MỤC ĐÍCH THU THẬP THÔNG TIN CÁ NHÂN CỦA NGƯỜI TIÊU DÙNG</h5>
            <p>
            Cung cấp dịch vụ cho Khách hàng và quản lý, sử dụng thông tin cá nhân của Người Tiêu Dùng nhằm mục đích quản lý cơ sở dữ liệu về Người Tiêu Dùng và kịp thời xử lý các tình huống phát sinh (nếu có).
            </p>
            <h5>2. PHẠM VI SỬ DỤNG THÔNG TIN CÁ NHÂN</h5>
            <p>Website https://vicard.vn/ sử dụng thông tin của Người Tiêu Dùng cung cấp để:</p>
            <ul>
                <li>- Hỗ trợ khách hàng.</li>
                <li>- Cung cấp thông tin liên quan đến dịch vụ.</li>
                <li>- Liên hệ xác nhận đơn hàng và giao hàng.</li>
                <li>- Gửi các thông báo về các hoạt động trên website.</li>
                <li>- Trong trường hợp có yêu cầu của cơ quan quản lý nhà nước có thẩm quyền.</li>
                <li>- Ngoài ra, chúng tôi sẽ sử dụng thông tin bạn cung cấp để xác nhận và thực hiện các giao dịch tài chính liên quan đến các khoản thanh toán trực tuyến của bạn.</li>
            </ul>
            <h5>3. THỜI GIAN LƯU TRỮ THÔNG TIN NGƯỜI DÙNG</h5>
            <p>Không có thời hạn ngoại trừ trường hợp Người Tiêu Dùng có yêu cầu hủy bỏ tới cho Ban quản trị hoặc website dừng hoạt động.</p>
            <p>Người dùng có quyền yêu cầu chúng tôi xóa tài khoản của bạn. Mọi thông tin liên quan đến tài khoản vicard cá nhân bao gồm các kênh mạng xã hội và thông tin khi bạn đặt đơn hàng tại website của vicard đều được xóa bỏ hoàn toàn khỏi hệ thống trong vòng 24 tiếng kể từ khi yêu cầu quyết định ngừng sử dụng dịch vụ của vicard được chúng tôi xác nhận và chứng thực.</p>
            <p>
                Người dùng có quyền tự kiểm tra, cập nhật, điều chỉnh hoặc hủy bỏ thông tin cá nhân của mình bằng cách đăng nhập vào tài khoản và chỉnh sửa thông tin cá nhân.
            </p>
            <h5>4.NHỮNG NGƯỜI HOẶC TỔ CHỨC CÓ THỂ ĐƯỢC TIẾP CẬN VỚI THÔNG TIN CÁ NHÂN CỦA NGƯỜI TIÊU DÙNG</h5>
            <p>Chúng tôi không bán, chia sẻ hay trao đổi thông tin cá nhân của khách hàng thu thập trên trang web cho một bên thứ ba nào khác. Tuy nhiên Người Tiêu Dùng đồng ý rằng, trong trường hợp cần thiết, các cơ quan/ tổ chức/cá nhân sau có quyền được tiếp cận và thu thập các thông tin cá nhân của mình, bao gồm:</p>
            <ul>
                <li>Ban quản trị Website</li>
                <li>Ban quản trị bên thứ ba có dịch vụ tích hợp với Website https://vicard.vn/</li>
                <li>Các cơ quan nhà nước có thẩm quyền</li>
            </ul>
            <h4>CẬP NHẬT VÀ SỬA ĐỔI</h4>
            <p>Nội dung của "Điều khoản bảo mật" này có thể thay đổi để phù hợp với các nhu cầu của Chúng tôi cũng như nhu cầu và sự phản hồi từ khách hàng. Khi cập nhật nội dung chính sách này, chúng tôi sẽ chỉnh sửa lại thời gian "Cập nhật lần cuối". Với những thay đổi quan trọng, chúng tôi sẽ thông báo cho bạn qua các kênh mạng xã hội cũng như thông báo trên website chính thức.</p>
            <h4>LIÊN HỆ</h4>
            <p>
            Khi phát hiện thông tin cá nhân của mình bị sử dụng sai mục đích hoặc phạm vi, Người Tiêu Dùng gửi email khiếu nại đến email vicard.vn@gmail.com hoặc gọi điện thoại tới số 0333.100.001 để khiếu nại và cung cấp chứng cứ liên quan tới vụ việc cho Ban quản trị. Ban quản trị cam kết sẽ phản hồi ngay lập tức hoặc muộn nhất là trong vòng 24 (hai mươi tư) giờ làm việc kể từ thời điểm nhận được khiếu nại.</p>
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
