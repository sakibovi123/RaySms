@section('title') {{'Logs'}} @endsection
@include("Dashboard.base")

@include("Dashboard.sidebar")
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Desktop Header -->
    @include("Dashboard.header")
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">

            <!-- <div class="create-button text-right">
                <form action="" method="POST">
                    @csrf
                    <input type="text" name="search_campaign" class="p-2 bg-white rounded text-white" placeholder="Enter callerId to search" />
                    <button type="submit" class="p-2 bg-sidebar rounded text-white">Search</button>
                </form>

            </div> -->

            <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tab"
  role="tablist">
  <li class="nav-item" role="presentation">
    <a href="{{ url('tab1') }}" class="
      nav-link
      block
      font-medium
      text-lg
      leading-tight
      uppercase
      border-x-0 border-t-0 border-b-2 border-transparent
      px-6
      py-3
      my-2
      hover:border-transparent hover:bg-gray-100
      focus:border-transparent
      {{ request()->is('tab1') ? 'active-nav-link' : null}}
    " id="tabs-home-tab" data-bs-toggle="pill" data-bs-target="#tabs-home" role="tab" aria-controls="tabs-home"
      aria-selected="true">Home</a>
  </li>
  <li class="nav-item" role="presentation">
    <a href="{{ url('/tab2') }}" class="
      nav-link
      block
      font-medium
      text-lg
      leading-tight
      uppercase
      border-x-0 border-t-0 border-b-2 border-transparent
      px-6
      py-3
      my-2
      hover:border-transparent hover:bg-gray-100
      focus:border-transparent
      {{ request()->is('tab2') ? 'active-nav-link' : null}}
    " id="tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile" role="tab"
      aria-controls="tabs-profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item" role="presentation">
    <a href="{{url('tab3') }}" class="
      nav-link
      block
      font-medium
      text-lg
      leading-tight
      uppercase
      border-x-0 border-t-0 border-b-2 border-transparent
      px-6
      py-3
      my-2
      hover:border-transparent hover:bg-gray-100
      focus:border-transparent
      {{ request()->is('tab3') ? 'active-nav-link' : null}}
    " id="tabs-messages-tab" data-bs-toggle="pill" data-bs-target="#tabs-messages" role="tab"
      aria-controls="tabs-messages" aria-selected="false">Messages</a>
  </li>
  
</ul>
<div class="tab-content" id="tabs-tabContent">
  <div class="tab-pane fade show {{ request()->is('tab1') ? 'active' : null}}" id="{{ url('tab1') }}" role="tabpanel" aria-labelledby="tabs-home-tab">
    Tab 1 content
  </div>
  <div class="tab-pane fade {{ request()->is('tab2') ? 'active' : null}}" id="{{ url('tab2') }}" role="tabpanel" aria-labelledby="tabs-profile-tab">
    Tab 2 content
  </div>
  <div class="tab-pane fade {{ request()->is('tab3') ? 'active' : null}}" id="{{ url('tab3') }}" role="tabpanel" aria-labelledby="tabs-profile-tab">
    Tab 3 content
  </div>
  
</div>

           <!-- <div class="max-w-3xl mx-auto px-8 sm:px-0">
            <div class="sm:w-7/12 sm:mx-auto">
                <div
                 role="tablist"
                 arial-label="tabs"
                 class="relative w-max mx-auto h-12 grid grid-cols-3 items-center px-[3px] rounded-full bg-gray-900/20 overflow-hidden shadow-2xl shadow-900/20 transition">
                 <div class="absolute indicator h-11 my-auto top-0 bottom-0 left-0 w-32 rounded-full bg-white shadow-md"></div>
                 <button 
                 role="tab"
                 aria-selected="true"
                 aria-controls="panel-1"
                 id="tab-1"
                 tabindex="0"
                 class="relative block h-10 px-6 tab rounded-full"
                 >
                <span class="text-gray-800">First Tab</span>
            </button>
                 <button 
                 role="tab"
                 aria-selected="false"
                 aria-controls="panel-2"
                 id="tab-2"
                 tabindex="-1"
                 class="relative block h-10 px-6 tab rounded-full"
                 >
                <span class="text-gray-800">Second Tab</span>
            </button>
                 <button 
                 role="tab"
                 aria-selected="false"
                 aria-controls="panel-3"
                 id="tab-3"
                 tabindex="-1"
                 class="relative block h-10 px-6 tab rounded-full"
                 >
                <span class="text-gray-800">Third Tab</span>
            </button>
                </div>
                <div class="mt-6 relative rounded-3xl bg-purple-50">
                    <div
                     role="tabpanel"
                     id="panel-1"
                      class="tab-panel p-6 transition duration-300">
                        <h2 class="text-xl font-semibold text-gray-800">First Tab Panel</h2>
                        <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet consecture</p>
                    </div>
                    <div 
                    role="tabpanel"
                    id="panel-2"
                     class="absolute top-0 invisible opacity-0 tab-panel p-6 transition duration-300">
                        <h2 class="text-xl font-semibold text-gray-800">Second Tab Panel</h2>
                        <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet consecture</p>
                    </div>
                    <div 
                    role="tabpanel"
                    id="panel-3"
                     class="absolute top-0 invisible opacity-0 tab-panel p-6 transition duration-300">
                        <h2 class="text-xl font-semibold text-gray-800">Third Tab Panel</h2>
                        <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet consecture</p>
                    </div>
                </div>
            </div>
           </div>                -->
           
        </main>
    </div>
</div>

<!-- AlpineJS -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

<!-- <script>
   let tabs = document.querySelectorAll("tab")
   let indicator = document.querySelector(".indicator")
   let panels = document.querySelectorAll(".tab-panel")

   indicator.style.width = tabs[0].getBoundingClientRect().width + 'px'
   indicator.style.left = tabs[0].getBoundingClientRect().left - tabs[0].parentElement.getBoundingClientRect().left + 'px'

   tabs.forEach(tab =>{
    tab.addEventListener("click", ()=>{
        let tabTarget = tab.getAttribute("aria-controls")

        indicator.style.width = tab.getBoundingClientRect().with + 'px'
        indicator.style.left = tab.getBoundingClientRect().left - tab.parentElement.getBoundingClientRect().left + 'px'

        panels.forEach(panel =>{
            let panelId = panel.getAttribute("id")

            if(tabTarget === panelId){
panel.classList.remove("invisible", "opacity-0")
panel.classList.add("visible", "opacity-100")
            } else {
panel.classList.add("invisible", "opacity-0")
            }
        })
    })
   })
</script> -->
</body>
</html>
