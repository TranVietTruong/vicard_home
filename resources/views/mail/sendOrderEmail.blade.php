<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Lato', sans-serif; font-size: 12px">
<div class="container" style="max-width: 520px; margin: 0 auto; padding-top: 40px">
    <div class="header" style="border-bottom: 0.5px solid #4086FF; padding-bottom: 2px">
        <div class="header-content" style="display: flex; padding-bottom: 18px; border-bottom: 2px solid #070707;">
            <img style="width: 100px; margin-left: -3px;" src="https://res.cloudinary.com/truongtv/image/upload/v1631778979/logo/yqbfngewf7meym3n0wp2.png" alt="">
            <div class="text-header" style="color: #364560;line-height: 17px;text-align: right;margin-left: auto;">
                <div class="th-hotline">
                    Hotline: <span style="color: #15c;">0373048419</span>
                </div>
                <div class="th-status">
                    Trạng thái: <span style="color: #15c">Chi tiết đơn hàng</span>
                </div>
            </div>
        </div>
    </div>
    <div class="content" style="padding-top: 18px; padding-bottom: 24px">
        <div class="description" style="line-height: 18px; color: #172948; margin-bottom: 14px">
            <div>
                Xin chào <span style="font-weight: bold;">{{$name}}</span>
            </div>
            <div>Cảm ơn bạn đã lựa chọn dịch vụ của Vicard. Xin vui lòng thanh toán để hoàn tất đơn hàng</div>
        </div>
        <div class="customer" style="line-height: 16px; color: #172948">
            <div style="font-weight: bold;margin-bottom: 5px;">Thông tin dịch vụ:</div>
            <div>Dịch vụ: <span style="font-weight: bold;">Danh Thiếp Điện Tử Vicard</span></div>
            <div>Số lượng: <span style="font-weight: bold;">01</span></div>
            <div>Đơn giá: <span style="font-weight: bold;">299,000đ</span></div>

            <div style="font-weight: bold; margin-top: 10px;margin-bottom: 5px;">Thông tin thanh toán:</div>
            <div>Hình thức thanh toán: <span style="font-weight: bold;">Chuyển khoản</span></div>
            <div>Nội dung: <span style="font-weight: bold;">{{$code_tag}} {{$mobile}}</span></div>
            <br>
            <div>Số tài khoản: <span style="font-weight: bold;">0367 8821 601</span></div>
            <div>Chủ tài khoản: <span style="font-weight: bold;">TRAN VIET TRUONG</span></div>
            <div>Ngân hàng: <span style="font-weight: bold;">Ngân hàng Thương mại Cổ phần Tiên Phong - TPBANK</span></div>
            <div>Chi nhánh: <span style="font-weight: bold;">TRUNG TAM BAN MIEN BAC 1</span></div>
            <br>
            <div>Số tài khoản: <span style="font-weight: bold;">14084637</span></div>
            <div>Chủ tài khoản: <span style="font-weight: bold;">TRAN VIET TRUONG</span></div>
            <div>Ngân hàng: <span style="font-weight: bold;">Ngân hàng Thương mại Cổ phần Á Châu - ACB</span></div>
            <div>Chi nhánh: <span style="font-weight: bold;">ACB - CN CHUA HA</span></div>

        </div>

        <div class="reguard" style="margin-top: 15px; line-height: 16px;">
            <div>Nếu bạn cần hỗ trợ trong quá trình sử dụng dịch vụ của Vicard, vui lòng liên hệ:</div>
            <div>Email: vicard.vn@gmail.vn</div>
            <div>Hotline: 0373048419</div>
        </div>
        <div style="margin-top: 16px; font-size: 11px">
            Trân trọng !
        </div>
        <div style="margin-top: 8px; font-size: 11px">
            Đội ngũ	<a href="https://vicard.vn" title="colearn" target="_blank" style="color: #15c; text-decoration: underline;">vicard.vn</a>
        </div>
        <div style="margin-top: 24px; height: 1px; background: #BFBFBF"></div>
        <div style="margin-top: 16px; text-align: center; color: #707070; font-size: 9px; line-height: 11px">Vicard Copyright © 2021. All Rights Reserved. Privacy | Terms</div>
    </div>
</div>
</body>
</html>
