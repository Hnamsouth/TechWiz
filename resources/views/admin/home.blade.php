@extends("admin.layout")

@section("title", "Admin Dashboard")

@section("main-content")
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Dashboard</h4>
                </div>

            </div>
            <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                <!-- Card 1 -->
                <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                    <div>
                        <div class="overview-content">
                            <h1>{{number_format($ordersCount)}}</h1>
                            <p>Orders</p>
                            <div class="ap-po-details-time">
                                @if($ordersRate >= 0)
                                    <span class="color-success"><i class="las la-arrow-up"></i>
                                @else
                                    <span class="color-danger"><i class="las la-arrow-down"></i>
                                @endif
                                    <strong>{{number_format($ordersRate,2)}}%</strong>
                                </span>
                                <small>Since last week</small>
                            </div>
                        </div>
                    </div>
                    <div class="ap-po-timeChart">
                        <div class="overview-single__chart d-md-flex align-items-end">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="orders-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 1 End -->
            </div>
            <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                <!-- Card 2 End  -->
                <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                    <div>
                        <div class="overview-content">
                            <h1>{{number_format($totalRevenue/1000)}}k</h1>
                            <p>Revenue</p>
                            <div class="ap-po-details-time">
                                @if($revenueRate >= 0)
                                    <span class="color-success"><i class="las la-arrow-up"></i>
                                @else
                                    <span class="color-danger"><i class="las la-arrow-down"></i>
                                @endif
                                    <strong>{{number_format($revenueRate,2)}}%</strong>
                                </span>
                                <small>Since last week</small>
                            </div>
                        </div>

                    </div>
                    <div class="ap-po-timeChart">
                        <div class="overview-single__chart d-md-flex align-items-end">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="revenue-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 End  -->
            </div>
            <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                <!-- Card 3 -->
                <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                    <div>
                        <div class="overview-content">
                            <h1>{{number_format($averageValue/1000)}}k</h1>
                            <p>Avg. Order Value</p>
                            <div class="ap-po-details-time">
                                @if($avgOrderValueRate >= 0)
                                    <span class="color-success"><i class="las la-arrow-up"></i>
                                @else
                                    <span class="color-danger"><i class="las la-arrow-down"></i>
                                @endif
                                    <strong>{{number_format($avgOrderValueRate,2)}}%</strong>
                                </span>
                                <small>Since last week</small>
                            </div>
                        </div>

                    </div>
                    <div class="ap-po-timeChart">
                        <div class="overview-single__chart d-md-flex align-items-end">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="average-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 End -->
            </div>
            <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                <!-- Card 1 -->
                <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                    <div>
                        <div class="overview-content">
                            <h1>{{$usersCount}}</h1>
                            <p>Registered Users</p>
                            <div class="ap-po-details-time">
                                @if($usersRate >= 0)
                                    <span class="color-success"><i class="las la-arrow-up"></i>
                                @else
                                            <span class="color-danger"><i class="las la-arrow-down"></i>
                                @endif
                                    <strong>{{number_format($usersRate,2)}}%</strong>
                                </span>
                                <small>Since last week</small>
                            </div>
                        </div>

                    </div>
                    <div class="ap-po-timeChart">
                        <div class="overview-single__chart d-md-flex align-items-end">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="users-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 1 End -->
            </div>
            <div class="col-xxl-6 mb-30">

                <div class="card broder-0">
                    <div class="card-header">
                        <h6>Total Revenue</h6>
                        <div class="card-extra">
                            <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                                <li>
                                    <a href="#tl_revenue-week" data-toggle="tab" id="tl_revenue-week-tab" role="tab" aria-selected="false">Week</a>
                                </li>
                                <li>
                                    <a href="#tl_revenue-month" data-toggle="tab" id="tl_revenue-month-tab" role="tab" aria-selected="false">Month</a>
                                </li>
                                <li>
                                    <a class="active" href="#tl_revenue-year" data-toggle="tab" id="tl_revenue-year-tab" role="tab" aria-selected="true">Year</a>
                                </li>
                            </ul>
{{--                            <div class="dropdown dropleft">--}}
{{--                                <a href="#" role="button" id="revenue1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    <span data-feather="more-horizontal"></span>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu" aria-labelledby="revenue1">--}}
{{--                                    <a class="dropdown-item" href="#">Action</a>--}}
{{--                                    <a class="dropdown-item" href="#">Another action</a>--}}
{{--                                    <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <!-- ends: .card-header -->
                    <div class="card-body pt-0">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="tl_revenue-week" role="tabpanel" aria-labelledby="tl_revenue-week-tab">
                                <div class="revenue-labels">
                                    <div>
                                        <strong class="text-primary">{{number_format(array_sum($revenueWeek)*1000)}}k</strong>
                                        <span>Current Period</span>
                                    </div>
                                    <div>
                                        <strong>{{number_format(array_sum($previousRevenueWeek)*1000)}}k</strong>
                                        <span>Previous Period</span>
                                    </div>
                                </div>
                                <!-- ends: .performance-stats -->

                                <div class="wp-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="myChart6W"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tl_revenue-month" role="tabpanel" aria-labelledby="tl_revenue-month-tab">
                                <div class="revenue-labels">
                                    <div>
                                        <strong class="text-primary">{{number_format(array_sum($revenueMonth)*1000)}}k</strong>
                                        <span>Current Period</span>
                                    </div>
                                    <div>
                                        <strong>{{number_format(array_sum($previousRevenueMonth)*1000)}}k</strong>
                                        <span>Previous Period</span>
                                    </div>
                                </div>
                                <!-- ends: .performance-stats -->

                                <div class="wp-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="myChart6M"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="tl_revenue-year" role="tabpanel" aria-labelledby="tl_revenue-year-tab">
                                <div class="revenue-labels">
                                    <div>
                                        <strong class="text-primary">{{number_format(array_sum($revenueYear)*1000)}}k</strong>
                                        <span>Current Period</span>
                                    </div>
                                    <div>
                                        <strong>{{number_format(array_sum($previousRevenueYear)*1000)}}k</strong>
                                        <span>Previous Period</span>
                                    </div>
                                </div>
                                <!-- ends: .performance-stats -->

                                <div class="wp-chart">
                                    <div class="parentContainer">
                                        <div>
                                            <canvas id="myChart6"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ends: .card-body -->
                </div>

            </div>
            <div class="col-xxl-6 mb-30">

                <div class="card border-0">
                    <div class="card-header">
                        <h6>Source of Revenue Generated</h6>
                        <div class="card-extra">
                            <ul class="card-tab-links mr-3 nav-tabs nav">
                                <li>
                                    <a href="#s_revenue-today" class="active" data-toggle="tab" id="s_revenue-today-tab" role="tab" area-controls="s_revenue-table" aria-selected="true">All time</a>
                                </li>
                                <li>
                                    <a href="#s_revenue-week" data-toggle="tab" id="s_revenue-week-tab" role="tab" area-controls="s_revenue-table" aria-selected="false">Week</a>
                                </li>
                                <li>
                                    <a href="#s_revenue-month" data-toggle="tab" id="s_revenue-month-tab" role="tab" area-controls="s_revenue-table" aria-selected="false">Month</a>
                                </li>
                                <li>
                                    <a href="#s_revenue-year" data-toggle="tab" id="s_revenue-year-tab" role="tab" area-controls="s_revenue-table" aria-selected="false">Year</a>
                                </li>
                            </ul>
{{--                            <div class="dropdown dropleft">--}}
{{--                                <a href="#" role="button" id="action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    <span data-feather="more-horizontal"></span>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu" aria-labelledby="action">--}}
{{--                                    <a class="dropdown-item" href="#">Action</a>--}}
{{--                                    <a class="dropdown-item" href="#">Another action</a>--}}
{{--                                    <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="s_revenue-today" role="tabpanel" aria-labelledby="s_revenue-today-tab">
                                <div class="table-responsive table-revenue">
                                    <table class="table table--default">
                                        <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>No. of Orders</th>
                                            <th>No. of Product Sold</th>
                                            <th>Revenue</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($topCategories1 as $key => $category)
                                            <tr>
                                                <td>{{$category->name}}</td>
                                                <td>{{$category->total_orders}}</td>
                                                <td>{{$category->total_products}}</td>
                                                <td>{{number_format($category->revenue)}} VND</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="s_revenue-week" role="tabpanel" aria-labelledby="s_revenue-week-tab">
                                <div class="table-responsive table-revenue">
                                    <table class="table table--default">
                                        <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>No. of Orders</th>
                                            <th>No. of Product Sold</th>
                                            <th>Revenue</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($topCategories2 as $key => $category)
                                            <tr>
                                                <td>{{$category->name}}</td>
                                                <td>{{$category->total_orders}}</td>
                                                <td>{{$category->total_products}}</td>
                                                <td>{{number_format($category->revenue)}} VND</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="s_revenue-month" role="tabpanel" aria-labelledby="s_revenue-month-tab">
                                <div class="table-responsive table-revenue">
                                    <table class="table table--default">
                                        <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>No. of Orders</th>
                                            <th>No. of Product Sold</th>
                                            <th>Revenue</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($topCategories3 as $key => $category)
                                            <tr>
                                                <td>{{$category->name}}</td>
                                                <td>{{$category->total_orders}}</td>
                                                <td>{{$category->total_products}}</td>
                                                <td>{{number_format($category->revenue)}} VND</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="s_revenue-year" role="tabpanel" aria-labelledby="s_revenue-year-tab">
                                <div class="table-responsive table-revenue">
                                    <table class="table table--default">
                                        <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>No. of Orders</th>
                                            <th>No. of Product Sold</th>
                                            <th>Revenue</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($topCategories4 as $key => $category)
                                            <tr>
                                                <td>{{$category->name}}</td>
                                                <td>{{$category->total_orders}}</td>
                                                <td>{{$category->total_products}}</td>
                                                <td>{{number_format($category->revenue)}} VND</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-6 mb-30">

                <div class="card border-0">
                    <div class="card-header">
                        <h6>Top Selling Products</h6>
                        <div class="card-extra">
                            <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                                <li>
                                    <a class="active" href="#t_selling-today" data-toggle="tab" id="t_selling-today-tab" role="tab" aria-selected="true">All time</a>
                                </li>
                                <li>
                                    <a href="#t_selling-week" data-toggle="tab" id="t_selling-week-tab" role="tab" aria-selected="true">Week</a>
                                </li>
                                <li>
                                    <a href="#t_selling-month" data-toggle="tab" id="t_selling-month-tab" role="tab" aria-selected="true">Month</a>
                                </li>
                                <li>
                                    <a href="#t_selling-year" data-toggle="tab" id="t_selling-year-tab" role="tab" aria-selected="true">Year</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel" aria-labelledby="t_selling-today-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default">
                                            <thead>
                                            <tr>
                                                <th>Prduct Name</th>
                                                <th>Price</th>
                                                <th>Sold</th>
                                                <th>Revenue</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($topProducts1 as $product)
                                                <tr>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{number_format($product->price)}} VND</td>
                                                    <td>{{$product->total_quantity}}</td>
                                                    <td>{{number_format($product->revenue)}} VND</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t_selling-week" role="tabpanel" aria-labelledby="t_selling-week-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default">
                                            <thead>
                                            <tr>
                                                <th>Prduct Name</th>
                                                <th>Price</th>
                                                <th>Sold</th>
                                                <th>Revenue</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($topProducts2 as $product)
                                                <tr>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{number_format($product->price)}} VND</td>
                                                    <td>{{$product->total_quantity}}</td>
                                                    <td>{{number_format($product->revenue)}} VND</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t_selling-month" role="tabpanel" aria-labelledby="t_selling-month-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default">
                                            <thead>
                                            <tr>
                                                <th>Prduct Name</th>
                                                <th>Price</th>
                                                <th>Sold</th>
                                                <th>Revenue</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($topProducts3 as $product)
                                                <tr>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{number_format($product->price)}} VND</td>
                                                    <td>{{$product->total_quantity}}</td>
                                                    <td>{{number_format($product->revenue)}} VND</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t_selling-year" role="tabpanel" aria-labelledby="t_selling-year-tab">
                                <div class="selling-table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table--default">
                                            <thead>
                                            <tr>
                                                <th>Prduct Name</th>
                                                <th>Price</th>
                                                <th>Sold</th>
                                                <th>Revenue</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($topProducts4 as $product)
                                                <tr>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{number_format($product->price)}} VND</td>
                                                    <td>{{$product->total_quantity}}</td>
                                                    <td>{{number_format($product->revenue)}} VND</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!-- ends: .row -->
    </div>
@endsection

@section('after_js')
    <script>
        //Script for 4 bar charts on top
        chartJsBarChartThree("orders-chart", "#5F63F220", "#5F63F2", "Order", @json($months), @json(array_values($ordersData)));
        chartJsBarChartThree("revenue-chart", "#FF69A520", "#FF69A5", "Revenue", @json($months), @json(array_values($revenueData)));
        chartJsBarChartThree("average-chart", "#20C99720", "#20C997", "Avg. Order", @json($months), @json(array_values($averageData)));
        chartJsBarChartThree("users-chart", "#2C99FF20", "#2C99FF", "Visitors", @json($months), @json(array_values($usersData)));
    </script>

    <script>
        //Script for Revenue line chart
        $('#tl_revenue-week-tab').on("shown.bs.tab", function () {
            chartjsLineChartFour(
                "myChart6W",
                "#FA8B0C",
                "95",
                (data = @json(array_values($revenueWeek))),
                (data = @json(array_values($previousRevenueWeek))),
                labels = @json($labelsWeek)

            );
            $('#tl_revenue-week-tab').off();
        });
        $('#tl_revenue-month-tab').on("shown.bs.tab", function () {
            chartjsLineChartFour(
                "myChart6M",
                "#FA8B0C",
                "95",
                (data = @json(array_values($revenueMonth))),
                (data = @json(array_values($previousRevenueMonth))),
                labels = @json($labelsMonth)
            );
            $('#tl_revenue-month-tab').off();
        });

        chartjsLineChartFour(
            "myChart6",
            "#FA8B0C",
            "95",
            (data = @json(array_values($revenueYear))),
            (data = @json(array_values($previousRevenueYear))),
            labels = @json($labelsYear)
        );
    </script>
@endsection
