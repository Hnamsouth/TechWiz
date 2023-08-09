@extends("admin.layout")

@section("title", "Order List")

@section("after_css")
    <style>
        #my-btn {
            background: rgba(95, 99, 242, 0.15);
            color: #5f63f2;
        }
        #my-btn:hover {
            background-color: #5f63f2;
            color: white !important;
        }
        #my-btn:active {
            background: #4347d9;
            color: white !important;
        }
    </style>
@endsection

@section("main-content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">order</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <div class="action-btn">

                                <form action="{{url("admin2/order")}}" method="get" id="myForm" class="d-flex">
                                    <div class="form-group mb-0 mr-2">
                                        <div class="input-container icon-left position-relative">
                                            <span class="input-icon icon-left">
                                                <span data-feather="calendar"></span>
                                            </span>
                                            <input type="text" class="form-control form-control-default date-ranger" name="date-ranger">
                                            <span class="input-icon icon-right">
                                                <span data-feather="chevron-down"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-default btn-squared btn-transparent-primary" id="my-btn">Submit</button>
                                </form>

                            </div>
                            <div class="dropdown action-btn">
                                <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-download"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <span class="dropdown-item">Export With</span>
                                    <div class="dropdown-divider"></div>
                                    <a href="" class="dropdown-item">
                                        <i class="la la-print"></i> Printer</a>
                                    <a href="" class="dropdown-item">
                                        <i class="la la-file-pdf"></i> PDF</a>
                                    <a href="" class="dropdown-item">
                                        <i class="la la-file-text"></i> Google Sheets</a>
                                    <a href="" class="dropdown-item">
                                        <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                    <a href="" class="dropdown-item">
                                        <i class="la la-file-csv"></i> CSV</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6 col-md-2">
                <div class="overview-content border-right">
                    <p class="mb-1">No of Order @if($todayOrders)- Today @endif</p>
                    <h1 class="d-inline-block pr-1" style="color: #5f63f2;">{{$todayOrders ? str_pad($todayOrders->count(), 2, '0', STR_PAD_LEFT) : str_pad($timeFilterOrders->count(), 2, '0', STR_PAD_LEFT)}}</h1><strong class="text-primary">Orders</strong>
                </div>
            </div>
            <div class="col-6 col-md-2">
                <div class="overview-content border-right">
                    <p class="mb-1">Ordered Product @if($todayOrders)- Today @endif</p>
                    @php
                        if ($todayOrders) {
                            $todayProducts = 0;
                            foreach ($todayOrders as $order) {
                                $todayProducts += $order->products()->count();
                                }
                        } else {
                            $timeFilterProducts = 0;
                            foreach ($timeFilterOrders as $order) {
                                $timeFilterProducts += $order->products()->count();
                            }
                        }
                    @endphp
                    <h1 class="d-inline-block pr-1" style="color: #5f63f2;">{{$todayOrders ? str_pad($todayProducts, 2, '0', STR_PAD_LEFT) : str_pad($timeFilterProducts, 2, '0', STR_PAD_LEFT)}}</h1><strong class="text-primary">Products</strong>
                </div>
            </div>
            <div class="col-6 col-md-2">
                <div class="overview-content border-right">
                    <p class="mb-1">Total Amount @if($todayOrders)- Today @endif</p>
                    <h1 class="d-inline-block pr-1" style="color: #5f63f2;">{{$todayOrders ? number_format($todayOrders->sum('grand_total')) : number_format($timeFilterOrders->sum('grand_total'))}}</h1><strong class="text-primary">VND</strong>
                </div>
            </div>
            <div class="col-6 col-md-2">
                <div class="overview-content border-right">
                    <p class="mb-1">Pending Order @if($todayOrders)- Today @endif</p>
                    <h1 class="d-inline-block pr-1" style="color: #5f63f2;">{{$todayOrders ? str_pad($todayOrders->where('status', \App\Models\Order::PENDING)->count(), 2, '0', STR_PAD_LEFT) : str_pad($timeFilterOrders->where('status', \App\Models\Order::PENDING)->count(), 2, '0', STR_PAD_LEFT)}}</h1><strong class="text-primary">Pending</strong>
                </div>
            </div>
            <div class="col-6 col-md-2">
                <div class="overview-content border-right">
                    <p class="mb-1">Order Canceled @if($todayOrders)- Today @endif</p>
                    <h1 class="d-inline-block pr-1" style="color: #5f63f2;">{{$todayOrders ? str_pad($todayOrders->where('status', \App\Models\Order::CANCELED)->count(), 2, '0', STR_PAD_LEFT) : str_pad($timeFilterOrders->where('status', \App\Models\Order::CANCELED)->count(), 2, '0', STR_PAD_LEFT)}}</h1><strong class="text-primary">Canceled</strong>
                </div>
            </div>
            <div class="col-6 col-md-2">
                <div class="overview-content">
                    <p class="mb-1">Order Completed @if($todayOrders)- Today @endif</p>
                    <h1 class="d-inline-block pr-1" style="color: #5f63f2;">{{$todayOrders ? str_pad($todayOrders->where('status', \App\Models\Order::COMPLETED)->count(), 2, '0', STR_PAD_LEFT) : str_pad($timeFilterOrders->where('status', \App\Models\Order::COMPLETED)->count(), 2, '0', STR_PAD_LEFT)}}</h1><strong class="text-primary">Completed</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="userDatatable orderDatatable global-shadow border py-30 px-sm-30 px-20 bg-white radius-xl w-100 mb-30">
                    <div class="project-top-wrapper d-flex justify-content-between flex-wrap mb-25 mt-n10">
                        <div class="d-flex align-items-center flex-wrap justify-content-center">
                            <div class="project-search order-search  global-shadow mt-10">
                                <form action="{{url('admin2/order')}}" class="order-search__form" method="get" style="width: 320px">
                                    <span data-feather="search"></span>
                                    <input name="search" class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Filter by name or phone number" aria-label="Search" value="{{ app('request')->input('search') }}">
                                    <input type="hidden" name="date-ranger" value="{{ app('request')->input('date-ranger') }}">
                                    <input type="hidden" name="page" value="1">
                                </form>
                            </div><!-- End: .project-search -->
                        </div><!-- End: .d-flex -->
                        <div class="d-flex align-items-center flex-wrap justify-content-center">
                            <div class="project-category d-flex align-items-center ml-md-30 mt-xl-10 mt-15">
                                <p class="fs-14 color-gray text-capitalize mb-10 mb-md-0  mr-10">Status :</p>
                                <div class="project-tap order-project-tap global-shadow">
                                    <ul class="nav px-1" id="ap-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('status') == null || app('request')->input('status') == '') active @endif" href="{{ url('admin2/order') }}?{{ http_build_query(array_merge(request()->query(), ['status' => null, 'page' => 1 ])) }}">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('status') != null && app('request')->input('status') == 0) active @endif" href="{{ url('admin2/order') }}?{{ http_build_query(array_merge(request()->query(), ['status' => 0, 'page' => 1, 'date-ranger' => app('request')->input('date-ranger') ])) }}">Pending</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('status') != null && app('request')->input('status') == 1) active @endif" href="{{ url('admin2/order') }}?{{ http_build_query(array_merge(request()->query(), ['status' => 1, 'page' => 1, 'date-ranger' => app('request')->input('date-ranger') ])) }}">Confirmed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('status') == 2) active @endif" href="{{ url('admin2/order') }}?{{ http_build_query(array_merge(request()->query(), ['status' => 2, 'page' => 1, 'date-ranger' => app('request')->input('date-ranger') ])) }}">Processing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('status') == 3) active @endif" href="{{ url('admin2/order') }}?{{ http_build_query(array_merge(request()->query(), ['status' => 3, 'page' => 1, 'date-ranger' => app('request')->input('date-ranger') ])) }}">Shipping</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('status') == 4) active @endif" href="{{ url('admin2/order') }}?{{ http_build_query(array_merge(request()->query(), ['status' => 4, 'page' => 1, 'date-ranger' => app('request')->input('date-ranger') ])) }}">Completed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('status') == 5) active @endif" href="{{ url('admin2/order') }}?{{ http_build_query(array_merge(request()->query(), ['status' => 5, 'page' => 1, 'date-ranger' => app('request')->input('date-ranger') ])) }}">Canceled</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('status') == 6) active @endif" href="{{ url('admin2/order') }}?{{ http_build_query(array_merge(request()->query(), ['status' => 6, 'page' => 1, 'date-ranger' => app('request')->input('date-ranger') ])) }}">Returned</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('status') == 7) active @endif" href="{{ url('admin2/order') }}?{{ http_build_query(array_merge(request()->query(), ['status' => 7, 'page' => 1, 'date-ranger' => app('request')->input('date-ranger') ])) }}">Refunded</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End: .project-category -->
                        </div>
                    </div><!-- End: .project-top-wrapper -->
                    <div >
                        <div>
                            <!-- Start Table Responsive -->
                            <div class="table-responsive">
                                <table class="table mb-0 table-hover table-borderless border-0">
                                    <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <span class="userDatatable-title">Order ID</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Customers Name</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Phone Number</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Status</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Grand Total</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Payment Method</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Payment Status</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Ordered Date</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title float-right">Actions</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $order)
                                        <tr>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    {{$order->id}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    {{$order->fullname}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    {{$order->telephone}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-status d-inline-block">
                                                    @switch($order->status)
                                                        @case(0)
                                                            <span class="order-bg-opacity-warning text-warning rounded-pill active">pending</span>
                                                            @break
                                                        @case(1)
                                                            <span class="order-bg-opacity-primary text-primary rounded-pill active">confirmed</span>
                                                            @break
                                                        @case(2)
                                                            <span class="order-bg-opacity-secondary text-secondary rounded-pill active">processing</span>
                                                            @break
                                                        @case(3)
                                                            <span class="order-bg-opacity-info text-info rounded-pill active">shipping</span>
                                                            @break
                                                        @case(4)
                                                            <span class="order-bg-opacity-success text-success rounded-pill active">completed</span>
                                                            @break
                                                        @case(5)
                                                            <span class="order-bg-opacity-gray text-gray rounded-pill active">canceled</span>
                                                            @break
                                                        @case(6)
                                                            <span class="order-bg-opacity-danger text-danger rounded-pill active">returned</span>
                                                            @break
                                                        @case(7)
                                                            <span class="order-bg-opacity-dark text-dark rounded-pill active">refunded</span>
                                                            @break
                                                        @default
                                                            <span>Unidentified</span>
                                                    @endswitch
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    {{number_format($order->grand_total)}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    {{$order->payment_method}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-status d-inline-block">
                                                    @if($order->payment_status)
                                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">paid</span>
                                                    @else
                                                        <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">unpaid</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    {{$order->created_at->format('F j, Y')}}
                                                </div>
                                            </td>

                                            <td>
                                                <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right" style="min-width: 50px">
                                                    <li>
                                                        <a href="{{url('admin2/order/detail', ['order'=>$order->code])}}" class="edit" data-toggle="tooltip" data-placement="top" title="View Detail">
                                                            <span data-feather="eye"></span></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Responsive End -->
                        </div>
                    </div>
                    <div class="d-flex justify-content-sm-end justify-content-start mt-15 pt-25 border-top">

                        <nav class="atbd-page ">
                            <ul class="atbd-pagination d-flex">
                                <li class="atbd-pagination__item">
                                    {{ $data->appends( app('request')->input() )->links("admin2.html.pagination") }}
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div><!-- End: .userDatatable -->
            </div><!-- End: .col -->
        </div>
    </div>
@endsection

@section("after_js")
    <script>
        function submitForm() {
            document.getElementById("myForm").submit();
        }
    </script>
@endsection
