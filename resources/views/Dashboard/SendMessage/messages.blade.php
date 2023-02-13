@include("Dashboard.base")

@include("Dashboard.sidebar")
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Desktop Header -->
    @include("Dashboard.header")
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">

            <div class="create-button text-right">
                <a href="{{ URL('/send-message') }}" class="p-2 bg-gray-900 rounded text-white">Send Message</a>
            </div>
            <div class="w-full mt-12">
                <div class="flex items-center justify-between text-xl pb-3 flex items-center">
                    <h3>LATEST CONTENTS</h3>
                    <button class="px-6 py-1 bg-red-600 text-gray-100 rounded shadow" id="delete-btn">
                        REMOVE ALL
                    </button>
                </div>
                {{-- modal start --}}
                <div class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center" id="overlay">
                    <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
                        <div class="flex justify-between items-center">
                            <h4 class="text-lg font-bold">Confirm Delete?</h4>
                            <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="mt-2 text-sm">
                            <p>Are you sure you want to delete all of the data?</p>
                        </div>
                        <div class="mt-3 flex justify-end space-x-3">
                            <button class="px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900" id="no-modal">No</button>
                            <a href="{{ route('remove_all') }}" class="px-3 py-1 bg-blue-800 text-gray-200 hover:bg-red-600 rounded">Yes</a>
                        </div>
                    </div>
                </div>
                {{-- modal End --}}
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
                    @if(session()->has("numbers"))
                        Messages sent to : {{ session()->get("numbers") }}
                    @endif

                    @if($sent)
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Delivered Date</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Id</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-700">

                            @foreach($sent as $s)
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4"><a href="{{ url('/view-details/'.$s->id) }}">{{ $s->created_at }}</a></td>
                                    <td class="w-1/3 text-left py-3 px-4">
                                        <a href="{{ url('/view-details/'.$s->id) }}">{{ $s->id }}</a>
                                    </td>
                                    <td class="text-left py-3 px-5 text-2xl" colspan="2">
{{--                                        <a class="hover:text-blue-500" href="{{ url('/edit-template/'.$template->id) }}"><i class="fas fa-edit"></i></a>--}}
                                        <form action="{{ url('/remove/'.$s->id) }}" method="POST">
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
    window.addEventListener('DOMContentLoaded', () =>{
        const overlay = document.querySelector('#overlay')
        const delBtn = document.querySelector('#delete-btn')
        const closeBtn = document.querySelector('#close-modal')
        const noBtn = document.querySelector('#no-modal')
        const toggleModal = () => {
            overlay.classList.toggle('hidden')
            overlay.classList.toggle('flex')
        }
        delBtn.addEventListener('click', toggleModal)
        closeBtn.addEventListener('click', toggleModal)
        noBtn.addEventListener('click', toggleModal)
    })
</script>
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