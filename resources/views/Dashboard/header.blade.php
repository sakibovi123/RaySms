<div class="topbar bg-white">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>
    <!-- search -->
    <div class="search">
        <label>
            <input type="text" placeholder="Search here">
            <ion-icon name="search-outline"></ion-icon>
        </label>
    </div>
    <!-- user img -->
    <div>
        <img src="assets/dashboard/user.jpg" class="user" alt="" onclick="toggleMenu()">

        <div class="sub-menu-wrap z-50" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="assets/dashboard/user.jpg" alt="">
                    <h3>James Aldrino</h3>
                </div>
                <hr>
                <a href="#" class="sub-menu-link">
                    <img src="assets/dashboard/profile.png" alt="">
                    <p>Edit Profile</p>
                    <span>></span>
                </a>
                <a href="#" class="sub-menu-link">
                    <img src="assets/dashboard/setting.png" alt="">
                    <p>Settings & Privacy</p>
                    <span>></span>
                </a>
                <a href="#" class="sub-menu-link">
                    <img src="assets/dashboard/help.png" alt="">
                    <p>Help & Support</p>
                    <span>></span>
                </a>
                <a href="#" class="sub-menu-link">
                    <img src="assets/dashboard/logout.png" alt="">
                    <p>Logout</p>
                    <span>></span>
                </a>
            </div>
        </div>
    </div>
</div>