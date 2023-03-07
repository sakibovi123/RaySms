<div class="navigation">
    <div class="mt-5 ml-3">
        <img src="assets/dashboard/dash-icon.png" alt="">
    </div>
    <ul>
        <li>
            <a href="#">
                <span class="icon"></span>
                <span class="title !text-2xl mt-8">SMS Thunder</span>
            </a>
        </li>

        <li>
            <a href="{{ url('/') }}">
                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/campaigns') }}">
                <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                <span class="title">Campaigns</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/templates') }}">
                <span class="icon"><ion-icon name="git-compare-outline"></ion-icon></span>
                <span class="title">Manage Templates</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/sender-numbers') }}">
                <span class="icon"><ion-icon name="apps-outline"></ion-icon></span>
                <span class="title">Sender Numbers</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/lists') }}">
                <span class="icon"><ion-icon name="map-outline"></ion-icon></span>
                <span class="title">Manage Datalist</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/customers') }}">
                <span class="icon"><ion-icon name="barcode-outline"></ion-icon></span>
                <span class="title">Import Customers</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/messages') }}">
                <span class="icon"><ion-icon name="chatbox-ellipses-outline"></ion-icon></span>
                <span class="title">Send Bulk Message</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/numbers') }}">
                <span class="icon"><ion-icon name="hourglass-outline"></ion-icon></span>
                <span class="title">Numbers</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/logs') }}">
                <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                <span class="title">Logs</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/logout') }}">
                <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                <span class="title">Log Out</span>
            </a>
        </li>
    </ul>
</div>