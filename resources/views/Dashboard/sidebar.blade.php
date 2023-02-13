


<aside class="relative bg-white h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="{{ URL('/') }}" class=" text-3xl font-semibold uppercase hover:text-gray-300">RAYSMSTOOL</a>
        {{-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> New Report
        </button> --}}
    </div>
    <nav class=" text-base font-semibold pt-3">
        <p class="{{ 'dashboard' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ URL('/') }}" class="flex items-center  py-4 pl-6  nav-item">
            <i class="fas fa-tachometer-alt mr-3 "></i>
            Dashboard
        </a>
        </p>

        <p class="{{ 'all_campaigns' == request()->path() ? 'active-nav-link' : '' }}">
            <a href="{{ route('all_campaigns') }}" class="flex items-center  opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-compass mr-3"></i>
                Campaigns
            </a>
        </p>

       <p class="{{ 'templates' == request()->path() ? 'active-nav-link' : '' }}">
       <a href="{{ URL('/templates') }}" class="flex items-center  opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Manage Templates
        </a>
       </p>
        <p class="{{ 'sender-numbers' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ url('/sender-numbers') }}" class="flex items-center  opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Sender Numbers
        </a>
        </p>
        <p class="{{ 'lists' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ url('/lists') }}" class="flex items-center  opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <!-- <i class="fas fa-align-left mr-3"></i> -->
            <i class="fa fa-cube mr-3"></i>
            Manage Datalist
        </a>

        <p class="{{ 'customers' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ url('/customers') }}" class="flex items-center  opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <!-- <i class="fas fa-align-left mr-3"></i> -->
            <i class="fa-sharp fas fa-bolt mr-3"></i>
            Import Customers
        </a>
        </p>
        <p class="{{ 'messages' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ url("/messages") }}" class="flex items-center  opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-paper-plane mr-3"></i>
            Send Bulk Message
        </a>
        </p>
        <p class="{{ 'numbers' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ route('numbers') }}" class="flex items-center  opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Numbers
        </a>
</p>

{{--        <p class="{{ 'contents' == request()->path() ? 'active-nav-link' : '' }}">--}}
{{--            <a href="{{ route('all_campaigns') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">--}}
{{--                <i class="fa-solid fa-circle-info fa-beat-fade">contents</i>--}}
{{--            </a>--}}
{{--        </p>--}}

        <p class="{{ 'all_campaigns' == request()->path() ? 'active-nav-link' : '' }}">
            <a href="{{ route('jobs') }}" class="flex items-center  opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-compass mr-3"></i>
                Logs
            </a>
            </p>
        <p class="{{ 'logout' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ url("/logout") }}" class="flex items-center  opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <!-- <i class="fas fa-sign-out "></i> -->
            <i class="fa-sharp fas fa-download mr-3"></i>
            LogOut
        </a>
        </p>

    </nav>

</aside>