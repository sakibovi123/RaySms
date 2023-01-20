@include("Dashboard.base")

@include("Dashboard.sidebar")
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Desktop Header -->
    @include("Dashboard.header")
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">

            <div class=" flex items-center justify-between create-button">
                {{-- <form action="{{ URL("/import-customers") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="excel_file" class="p-2 bg-gray-900 rounded text-white" />
                    <button type="submit" class="p-2 bg-gray-900 rounded text-white">Import</button>
                </form> --}}

                <a href="{{ url('/add-customer') }}" class="p-2 bg-gray-900 rounded text-white hover:bg-gray-700">
                    ADD CUSTOMER
                </a>

            </div>
            <div class="w-full mt-12">
                <p class="flex items-center justify-between text-lg pb-3 flex items-center">
                    Campaign Name: {{ $list->title }}
                    <a href="" class="bg-red-300 px-5 py-1 rounded"><i class="fas fa-trash"></i> DELETE ALL</a>
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
                    @if($customer)
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Customer Numbers</th>


                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-700">

                            @foreach($customer as $customer)
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">{{ $customer->customer_phone }}</td>

                                    <td class="text-left py-3 px-5 text-2xl" colspan="2">
{{--                                        <a class="hover:text-blue-500" href="{{ url('/edit-template/'.$template->id) }}"><i class="fas fa-edit"></i></a>--}}
                                        <form action="{{ url('/delete-customer/'.$customer->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method("DELETE")
                                            <button class="hover:text-blue-500" type="submit"><i class="fas fa-trash"></i></button>
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
