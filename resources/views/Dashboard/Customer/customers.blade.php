@section('title') {{'Import Customers'}} @endsection
@include("Dashboard.base")

@include("Dashboard.sidebar")
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Desktop Header -->
    @include("Dashboard.header")
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">

            <div class="create-button text-right">
                <form action="{{ URL("/import-customers") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="excel_file" class="p-2 bg-sidebar rounded text-white" />
                    <button type="submit" class="p-2 bg-sidebar rounded text-white">Import</button>
                </form>

            </div>

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
<form action="" class="w-full max-w-md mt-10">
    <div class="flex space-x-2">
                        <div class="relative lg:flex items-center text-gray-400 focus-within:text-gray-600">
                            <div class="w-5 h-5 absolute ml-3 pointer-events-none">
                            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon " style="pointer-events: none; display: block; width: 100%; height: 100%;"><g class="style-scope yt-icon"><path d="M20.87,20.17l-5.59-5.59C16.35,13.35,17,11.75,17,10c0-3.87-3.13-7-7-7s-7,3.13-7,7s3.13,7,7,7c1.75,0,3.35-0.65,4.58-1.71 l5.59,5.59L20.87,20.17z M10,16c-3.31,0-6-2.69-6-6s2.69-6,6-6s6,2.69,6,6S13.31,16,10,16z" class="style-scope yt-icon text-gray-500"></path></g></svg>
                            </div>
                        
                        <input
                        type="text"
                         name="search"
                         placeholder="Search talk"
                         autocomplete="off"
                         aria-label="Search talk"
                         class="w-full pr-3 pl-10 py-2 font-semibold placeholder-gray-500 text-black rounded border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2"
                         >
                        </div>
                        <div>
                        <button type="submit" class="uppercase font-semibold tracking-wider w-full bg-sidebar text-white p-2 rounded">Search</button>
                        </div>
                        </div>
                    </form>
                    </div>
                    </div>

            <div class="w-full mt-12">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Latest Reports
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
                    @if($customers)
                        <table class="min-w-full bg-white">
                            <thead class="bg-sidebar text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Customer Numbers</th>

                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-700">

                            @foreach($customers as $customer)
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">{{ $customer->customer_phone }}</td>

                                    <td class="text-left py-3 px-5 text-2xl" colspan="2">
{{--                                        <a class="hover:text-green-300" href="{{ url('/edit-template/'.$template->id) }}"><i class="fas fa-edit"></i></a>--}}
                                        <form action="{{ url('/delete-customer/'.$customer->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method("DELETE")
                                            <button class="hover:text-red-300" type="submit"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>

                                </tr>

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
