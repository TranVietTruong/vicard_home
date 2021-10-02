<header>
    <div class="container">
        <div class="header">
            <div class="logo">
                <a href="{{asset('')}}">
                    <img width="100%" height="50px" src="{{ asset('logo.png') }}" alt="logo webite vicard">
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="/#trangchu">trang chủ</a>
                    </li>
                    <li>
                       <a href="/#tinhnang">tính năng</a>
                    </li>
                    <li>
                        <a href="/#loiich">hướng dẫn</a>
                    </li>
                    <li>
                        <a href="/#mua">mua ngay</a>
                    </li>
                </ul>
            </div>
            <div class="menu_mobile">
                <div onclick="showMenu()" id="icon_show" class="icon_show">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg>
                </div>
                <div onclick="hideMenu()" id="icon_hide" class="icon_hide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
                </div>
            </div>
        </div>
    </div>
    <div id="fix_menu_mobile" class="fix_menu_mobile">
        <div class="container">
             <ul>
                <li>
                    <a href="/#trangchu">trang chủ</a>
                </li>
                <li>
                   <a href="/#tinhnang">tính năng</a>
                </li>
                <li>
                    <a href="/#loiich">hướng dẫn</a>
                </li>
                <li>
                    <a href="/#mua">mua ngay</a>
                </li>
            </ul>
        </div>
    </div>
</header>