@section('title') {{'Dashboard'}} @endsection

@include("Dashboard.base")

@include("Dashboard.sidebar")

<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Desktop Header -->
    @include("Dashboard.header")
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow ">
            <!-- <h1 class="text-3xl text-black pb-6">Dashboard</h1> -->



            <div class="bg-slate-200 h-screen w-full ">
            <div class="p-8 ">
                <div class="grid grid-cols-1 md:cols-2 lg:grid-cols-4 gap-4 lg:gap-8">
                    <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm border-4 border-white border-l-red-300">
                        <div class="w-3/5 flex justify-start mt-4">
                        <div class="h-2 bg-indigo-400 rounded-t-md"></div>
                        <ul>
                                <li class="font-bold text-gray-400">Total Sent</li>
                                <li class="font-extrabold text-slate-800 text-xl">00</li>
                                <li><span class="icon-top-text font-bold">+0 </span><span class="text-gray-400">Since
                                        Yesterday</span></li>
                                <li></li>
                            </ul>
                        </div>

                        <div class="w-2/5 flex justify-end">
                            <div class="icon-top rounded-full p-3">
                            <i class="fas fa-paper-plane text-2xl text-white"></i>
                            </div>
                        </div>

                    </div>
                    <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                        <div class="w-3/5 flex justify-start">
                            
                            <ul>
                                <li class="font-bold text-gray-400">Total Failed</li>
                                <li class="font-extrabold text-slate-800 text-xl">00</li>
                                <li><span class="icon-top-text font-bold">+0 </span><span class="text-gray-400">Since
                                        Yesterday</span></li>
                                <li></li>
                            </ul>
                        </div>

                        <div class="w-2/5 flex justify-end">
                            <div class="icon-top rounded-full px-4 py-2">
                            <!-- <i class="fa-sharp fas fa-route text-white text-3xl"></i> -->
                            <i class="fa-sharp fas fa-exclamation text-white text-3xl "></i>
<<<<<<< HEAD
                            
=======
                            
>>>>>>> 8e39b289a4d895e0865d0d889f7f5dc799986a44
                            </div>
                        </div>

                    </div>
                    <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                        <div class="w-3/5 flex justify-start">
                            <ul>
                                <li class="font-bold text-gray-400">Monthly Cost</li>
                                <li class="font-extrabold text-slate-800 text-xl">$00</li>
                                <li><span class="icon-top-text font-bold">+0 </span><span class="text-gray-400">Previous Month</span></li>
                                <li></li>
                            </ul>
                        </div>

                        <div class="w-2/5 flex justify-end">
                            <div class="icon-top rounded-full px-4 py-2">
                            <i class="fas fa-file-invoice-dollar text-white text-3xl"></i>
                            </div>
                        </div>

                    </div>
                    <div class="p-4 bg-white rounded-lg flex items-center h-32 shadow-sm">
                        <div class="w-3/5 flex justify-start">
                            <ul>

                                <li class="font-bold text-gray-400">Yearly Cost</li>
                                <li class="font-extrabold text-slate-800 text-xl">$00</li>
                                <li><span class="icon-top-text font-bold">+0 </span><span class="text-gray-400">previous Year</span></li>
                                <li></li>
                            </ul>

                        </div>

                        <div class="w-2/5 flex justify-end">
                            <div class="icon-top rounded-full p-2">
                            <i class="fa-sharp fas fa-id-card text-white text-3xl"></i>
                            </div>
                        </div>

                    </div>

                    <div class="p-4 bg-white rounded-lg shadow-sm lg:col-span-3">
                        <div class="rounded-lg">
                            <div class="flex-1 icon-top-text">Data Chart</div>
                            <canvas class="p-10" id="chartOne"></canvas>
                        </div>
                    </div>

                    <div class="rounded-lg shadow-sm bg-cover" style="background-image: url('https://i.ibb.co/fFLJV14/dashboard-image.jpg');">
                        <div class="text-white items-baseline">
                            <h3 class="flex mt-32 pl-5 text-2xl font-bold uppercase">W've got you !!</h3>
                            <p class="flex items-center pt-5 px-5 mb-5">we help each other to grow together</p>
                        </div>
                    </div>

                    <div class="rounded-lg shadow-sm bg-white md:col-span-2 lg:col-span-4">
                        <div class="overflow-x-auto relative sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500">
                                <thead class="text-xs text-white uppercase bg-sidebar">
                                    <tr>
                                        <th class="py-3 px-6 text-lg">Title</th>
                                        <th class="py-3 text-lg px-6">Content</th>
                                        
                                        <th class="py-3 text-lg px-6">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-600 whitespace-nowrap font-semibold">
                                            Testing Message
                                        </th>
                                        <td class="py-4 px-6">
                                        Hello It's a testing message from ray sms platform
                                        </td>
                                        
                                        <td class="py-4 px-6">
                                        <a href="{{ URL('/templates') }}" class="flex items-center">
                                        <i class="fas fa-eye"></i>
        </a>          
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-600 whitespace-nowrap font-semibold">
                                           Testing Message 2
                                        </th>
                                        <td class="py-4 px-6">
                                           Hey It's a testing message from sms platform
                                        </td>
                                        
                                        <td class="py-4 px-6">
                                        <a href="{{ URL('/templates') }}" class="flex items-center">
                                        <i class="fas fa-eye"></i>
        </a>          
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-600  whitespace-nowrap font-semibold">
                                          Testing Message 3
                                        </th>
                                        <td class="py-4 px-6">
                                        Its a testing message from ray sms platform
                                        </td>
                                        
                                        <td class="py-4 px-6">
                                        <a href="{{ URL('/templates') }}" class="flex items-center">
                                        <i class="fas fa-eye"></i>
        </a>          
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-600 whitespace-nowrap font-semibold">
                                           Testing Message 4
                                        </th>
                                        <td class="py-4 px-6">
                                        testing message from sms platform
                                        </td>
                                        
                                        <td class="py-4 px-6">
                                        <a href="{{ URL('/templates') }}" class="flex items-center">
                                        <i class="fas fa-eye"></i>
        </a>          
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>

                    

                    <!-- <div class=" bg-gray-100 text-gray-800 antialiased py-6 flex">
                        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                            <span class="text-2xl font-light">Login to your account</span>
                            <div class="mt-4 bg-white shadow-md rounded-lg">
                                <div class="h-2 bg-indigo-400 rounded-t-md"></div>
                                <div class="px-8 py-6">
                                    <label class="block font-semibold" for="">Username</label>
                                    <input type="text" placeholder="username" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-400 rounded-md">
                                    <label class="block mt-3 font-semibold" for="">Password</label>
                                    <input type="password" placeholder="Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-400 rounded-md">
                                    <div class="flex justify-between items-baseline">
                                        <button type="submit" class="mt-4 bg-indigo-400 text-white py-2 px-6 rounded-md hover:bg-indigo-600">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Footer -->
                    <div class="pt-5 flex justify-center">
                        <p class="text-gray-400 text-xs">Copyright © 2023 Ray Advertising LLC | All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>

            <!-- <div class="flex flex-wrap mt-6">
                <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-plus mr-3"></i> Monthly Reports
                    </p>
                    <div class="p-6 bg-white">
                        <canvas id="chartOne" width="400" height="200"></canvas>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-check mr-3"></i> Resolved Reports
                    </p>
                    <div class="p-6 bg-white">
                        <canvas id="chartTwo" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
{{--                    <i class="fas fa-list mr-3"></i> Latest Reports--}}
                </p>
                <div class="bg-white overflow-auto">
{{--                    <table class="min-w-full bg-white">--}}
{{--                        <thead class="bg-gray-800 text-white">--}}
{{--                        <tr>--}}
{{--                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>--}}
{{--                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Last name</th>--}}

{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody class="text-gray-700">--}}
{{--                        @foreach($allSents as $a)--}}
{{--                        <tr>--}}
{{--                            <td class="w-1/3 text-left py-3 px-4">{{ $a->created_at }}</td>--}}
{{--                            <td class="w-1/3 text-left py-3 px-4">{{ $a->customer_id }}</td>--}}

{{--                        </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
                </div>
            </div> -->
        </main>


    </div>

</div>

<!-- AlpineJS -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

<script>
    var chartOne = document.getElementById('chartOne');
    var myChart = new Chart(chartOne, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: '# First DataSet',
                data: [2, 1, 8, 5, 12, 3],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var chartTwo = document.getElementById('chartTwo');
    var myLineChart = new Chart(chartTwo, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
<script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
<script>
    $(function(){
        setTimeOut(()=>{
            $(".loader").fadeOut(500);
        },1000)
    })
</script>
</body>
</html>
