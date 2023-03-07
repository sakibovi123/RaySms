@section('title') {{'Dashboard'}} @endsection
@include("Dashboard.base")
@include("Dashboard.sidebar")

    <div class="container">
        <!-- main -->
        <div class="main">
            <!-- header -->
            @include('Dashboard.header')
            <!-- End header -->
            <div>
                <!-- cards -->
                
                <div class="cardBox">
                    <div class="grid lg:grid-cols-2 gap-5">
                    <div class="card">
                        <div>
                            <div class="numbers">1,504</div>
                            <div class="cardName">Total Sent</div>
                        </div>
                        <div class="iconBox text-[#002F42]">
                            <ion-icon name="navigate-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">80</div>
                            <div class="cardName">Total Failed</div>
                        </div>
                        <div class="iconBox text-[#002F42]">
                            <ion-icon name="alert-circle-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">$284</div>
                            <div class="cardName">Monthly Cost</div>
                        </div>
                        <div class="iconBox text-[#002F42]">
                            <ion-icon name="wallet-outline"></ion-icon>
                            <!-- <ion-icon name="chatbubbles-outline"></ion-icon> -->
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <div class="numbers">$7,842</div>
                            <div class="cardName">Yearly Cost</div>
                        </div>
                        <div class="iconBox text-[#002F42]">
                            <!-- <img src="assets/dashboard/yearly_cost.png" alt=""> -->
                            <ion-icon name="cash-outline"></ion-icon>
                            <!-- <ion-icon name="cash-outline"></ion-icon> -->
                        </div>
                    </div>
                </div>
                    <div class="rounded-lg shadow-sm bg-cover" style="background-image: url('https://i.ibb.co/n6Jb8SR/dash-img.png');">
                        <div class="text-white items-baseline">
                            <h3 class="flex mt-32 pl-5 text-2xl font-bold uppercase">W've got you !!</h3>
                            <p class="flex items-center pt-5 px-5 mb-5">we help each other to grow together</p>
                        </div>
                    </div>
                </div>

                <!-- Add Charts -->
                <div class="graphBox">
                    <div class="box">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="box">
                        <canvas id="earning"></canvas>
                    </div>
                </div>
                <!-- End Add Charts -->

                <div class="details">
                    <!-- details list -->
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Recent Sent</h2>
                            <a href="#" class="btn">View All</a>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Price</td>
                                    <td>Payment</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>James</td>
                                    <td>$1200</td>
                                    <td>paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>Robert</td>
                                    <td>$120</td>
                                    <td>Due</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>Michael</td>
                                    <td>$620</td>
                                    <td>paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>William</td>
                                    <td>$150</td>
                                    <td>Due</td>
                                    <td><span class="status inprogress">In Progress</span></td>
                                </tr>
                                <tr>
                                    <td>Christopher</td>
                                    <td>$1200</td>
                                    <td>paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>Daniel</td>
                                    <td>$110</td>
                                    <td>paid</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>Paul</td>
                                    <td>$620</td>
                                    <td>paid</td>
                                    <td><span class="status delivered">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>Mark</td>
                                    <td>$110</td>
                                    <td>Due</td>
                                    <td><span class="status inprogress">Inprogress</span></td>
                                </tr>
                                <tr>
                                    <td>Donald</td>
                                    <td>$575</td>
                                    <td>paid</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>Patricia</td>
                                    <td>$120</td>
                                    <td>paid</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>Linda</td>
                                    <td>$110</td>
                                    <td>Due</td>
                                    <td><span class="status inprogress">Inprogress</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- New Customers -->
                    <div class="recentCustomers">
                        <div class="cardHeader">
                            <h2>Recent Sent</h2>
                        </div>
                        <table>
                            <tr>
                                <td width="60px">
                                    <div class="imgBox"><img src="assets/dashboard/img1.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>David <br><span>Italy</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBox"><img src="assets/dashboard/img2.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Muhammad <br><span>India</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBox"><img src="assets/dashboard/img3.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Amelia <br><span>France</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBox"><img src="assets/dashboard/img4.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Olivia <br><span>USA</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBox"><img src="assets/dashboard/img5.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Amit <br><span>Japan</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBox"><img src="assets/dashboard/img6.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Ashraf <br><span>India</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBox"><img src="assets/dashboard/img7.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Diana <br><span>Malaysia</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBox"><img src="assets/dashboard/img8.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Amit <br><span>India</span></h4>
                                </td>
                            </tr>
                            <tr>
                                <td width="60px">
                                    <div class="imgBox"><img src="assets/dashboard/img9.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>David <br><span>Italy</span></h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- script ioniicon -->
        <script src="{{ asset('js/chart.js') }}"></script>
</body>

</html>