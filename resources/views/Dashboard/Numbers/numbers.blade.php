@section('title') {{'Numbers'}} @endsection
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

            <div class="lg:flex  justify-between">
            <div>
<form class="px-4 mt-5 space-y-6" action="" method="GET">
    <div class="lg:flex space-x-4">
        <div class="">
            <label for="">Filter by Date</label>
            <input type="date" name="date" value="{{date('Y-m-d')}}" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none " />
        </div>
        
        <div class="">
            <label for="">Filter by Status</label>
            <select name="status" id="form-select" class="border border-gray-400 block py-2 px-4 w-full rounded focus:outline-none">
                <option value="">Select Status</option>
                <option value="in Progress">In Progress</option>
                <option value="completed">Completed</option>
                <option value="pending">Pending</option>
                <option value="cancelled">Cancelled</option>
                <option value="out-for-delivery">Out for delivery</option>
            </select>
        </div>
        <div class="mt-5">
           
            <button type="submit" class="uppercase font-semibold tracking-wider w-full bg-sidebar text-white p-3 rounded">Filter</button>
        </div>
        
    </div>
</form>
</div>
<div>
<form action="" class="w-full max-w-md mt-10" method="POST">
                    @csrf
                    <input type="text" name="search_campaign" class="p-2 bg-white rounded text-white" placeholder="Enter callerId to search" />
                    <button type="submit" class="p-2 bg-sidebar rounded text-white">Search</button>
                </form>
                    </div>
                    </div>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Latest Numbers
                </p>
                @if(session()->has('message'))
                    <div class="bg-teal-400 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                            <div>
                                <p class="font-bold"></p>
                                <p class="text-sm">{{ session()->get('message') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="bg-white overflow-auto">
                    @if($numbers)
                        <table class="min-w-full bg-white">
                            <thead class="bg-sidebar text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Number Id</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase form-semibold text-sm">Number</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase form-semibold text-sm">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-700">

                            @foreach($numbers as $number)
                                {{--                                @foreach($campaign["affiliateNumbers"] as $affiliateNumbers)--}}

                                <tr class="hover:bg-gray-200 cursor-pointer border-b-2 border-gray-500">

                                    <td class="w-1/3 text-left py-3 px-4"><a href="">{{  $number->id }}</a></td>
                                    <td class="w-1/3 text-left py-3 px-4"><a href="">{{ $number->callerId }}</a></td>
                                    <td class="text-left py-3 px-5 text-2xl" colspan="2">
                                        <a href="" class="p-1.5 bg-indigo-300 hover:bg-indigo-400 border rounded text-sm text-slate-900 font-semibold cursor-pointer">
                                            Schedule Task
                                        </a>
                                    </td>

                                </tr>

                                {{--                                @endforeach--}}

                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
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
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
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

    var chartTwo = document.getElementById('chartTwo');
    var myLineChart = new Chart(chartTwo, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
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
</body>
</html>
