{{-- <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="{{ URL('/') }}" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> New Report
        </button>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ URL('/') }}" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ URL('/templates') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            SMS TEMPLATES
        </a>
        <a href="{{ url('/sender-numbers') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            SENDER NUMBERS
        </a>
        <a href="{{ url('/customers') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            IMPORT CUSTOMERS
        </a>
        <a href="{{ url("/messages") }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            SEND BULK MESSAGE
        </a>
        <a href="{{ route('numbers') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Numbers
        </a>
        <a href="{{ route('all_campaigns') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Campaigns
        </a>
        <a href="{{ route('contents') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Manage Contents
        </a>
        <a href="{{ route("logout") }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sign-out mr-3"></i>
            LOGOUT
        </a>
    </nav>

</aside> --}}


<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="{{ URL('/') }}" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">RAYSMSTOOL</a>
        {{-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fas fa-plus mr-3"></i> New Report
        </button> --}}
    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <p class="{{ 'dashboard' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ URL('/') }}" class="flex items-center  active-nav-text text-white py-4 pl-6  nav-item">
            <i class="fas fa-tachometer-alt mr-3 active-nav-text hover:text-[#032738]"></i>
            Dashboard
        </a>
        </p>
       <p class="{{ 'templates' == request()->path() ? 'active-nav-link' : '' }}">
       <a href="{{ URL('/templates') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            SMS TEMPLATES
        </a>
       </p>
        <p class="{{ 'sender-numbers' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ url('/sender-numbers') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            SENDER NUMBERS
        </a>
        </p>
        <p class="{{ 'customers' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ url('/customers') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <!-- <i class="fas fa-align-left mr-3"></i> -->
            <i class="fa-sharp fas fa-bolt mr-3"></i>
            IMPORT CUSTOMERS
        </a>
        </p>
        <p class="{{ 'messages' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ url("/messages") }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-paper-plane mr-3"></i>
            SEND BULK MESSAGE
        </a>
        </p>
        <p class="{{ 'numbers' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ route('numbers') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Numbers
        </a>
</p>
        <p class="{{ 'all_campaigns' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ route('all_campaigns') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-compass mr-3"></i>
            Campaigns
        </a>
        </p>
        <p class="{{ 'logout' == request()->path() ? 'active-nav-link' : '' }}">
        <a href="{{ url("/logout") }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <!-- <i class="fas fa-sign-out "></i> -->
            <i class="fa-sharp fas fa-download mr-3"></i>
            LOGOUT
        </a>
        </p>
        
    </nav>

</aside>

