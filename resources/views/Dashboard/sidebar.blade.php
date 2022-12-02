<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
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
        <a href="" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            SENDER NUMBERS
        </a>
        <a href="" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            EXPORT CUSTOMERS
        </a>
        <a href="" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            SEND BULK MESSAGE
        </a>
        <a href="" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sign-out mr-3"></i>
            LOGOUT
        </a>
    </nav>

</aside>
