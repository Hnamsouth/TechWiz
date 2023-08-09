@extends("admin.layout")

@section("title", "Return Request")

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
                        <h4 class="text-capitalize breadcrumb-title">Return Request</h4>

                    </div>

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
                                <form action="{{url('admin2/order/return-request')}}" class="order-search__form" method="get" style="width: 320px">
                                    <span data-feather="search"></span>
                                    <input name="search" class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Filter by name or phone number" aria-label="Search" value="{{ app('request')->input('search') }}">
                                    <input type="hidden" name="page" value="1">
                                </form>
                            </div><!-- End: .project-search -->
                        </div><!-- End: .d-flex -->
                        <div class="d-flex align-items-center flex-wrap justify-content-center">
                            <div class="project-category d-flex align-items-center ml-md-30 mt-xl-10 mt-15">
                                <p class="fs-14 color-gray text-capitalize mb-10 mb-md-0  mr-10">Return Status :</p>
                                <div class="project-tap order-project-tap global-shadow">
                                    <ul class="nav px-1" id="ap-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('return_status') == null || app('request')->input('return_status') == '') active @endif" href="{{ url('admin2/order/return-request') }}?{{ http_build_query(array_merge(request()->query(), ['return_status' => null, 'page' => 1 ])) }}">All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('return_status') != null && app('request')->input('return_status') == 0) active @endif" href="{{ url('admin2/order/return-request') }}?{{ http_build_query(array_merge(request()->query(), ['return_status' => 0, 'page' => 1, 'date-ranger' => app('request')->input('date-ranger') ])) }}">Pending</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('return_status') != null && app('request')->input('return_status') == 1) active @endif" href="{{ url('admin2/order/return-request') }}?{{ http_build_query(array_merge(request()->query(), ['return_status' => 1, 'page' => 1, 'date-ranger' => app('request')->input('date-ranger') ])) }}">Confirmed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('return_status') == 2) active @endif" href="{{ url('admin2/order/return-request') }}?{{ http_build_query(array_merge(request()->query(), ['return_status' => 2, 'page' => 1, 'date-ranger' => app('request')->input('date-ranger') ])) }}">Denied</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('return_status') == 3) active @endif" href="{{ url('admin2/order/return-request') }}?{{ http_build_query(array_merge(request()->query(), ['return_status' => 3, 'page' => 1, 'date-ranger' => app('request')->input('date-ranger') ])) }}">Completed</a>
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
                                            <span class="userDatatable-title">Request for Order</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Return Products</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Customers Name</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Phone Number</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Refund Amount</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Return Reason</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Return Status</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Request Date</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title float-right">Detail</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($returnRequests as $order)
                                        <tr>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    Order #{{$order->id}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    <div class="d-flex justify-content-start">
                                                        @foreach($order->products()->get() as $product)
                                                            <img class="mr-1" src="{{ substr_replace($product->thumbnail, 'w_auto/', strpos($product->thumbnail, 'upload/') + 7, 0) }}" alt="{{$product->name}}" width="50">
                                                        @endforeach
                                                    </div>
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
                                                <div class="orderDatatable-title">
                                                    {{number_format($order->refund_amount)}} VND
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    {{$order->return_reason}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-status d-inline-block">
                                                    @switch($order->return_status)
                                                        @case(0)
                                                            <span class="order-bg-opacity-warning text-warning rounded-lg active">pending</span>
                                                            @break
                                                        @case(1)
                                                            <span class="order-bg-opacity-primary text-primary rounded-lg active">confirmed</span>
                                                            @break
                                                        @case(2)
                                                            <span class="order-bg-opacity-danger text-danger rounded-lg active">denied</span>
                                                            @break
                                                        @case(3)
                                                            <span class="order-bg-opacity-success text-success rounded-lg active">completed</span>
                                                            @break
                                                        @default
                                                            <span>Unidentified</span>
                                                    @endswitch
                                                </div>
                                            </td>
                                            <td>
                                                <div class="orderDatatable-title">
                                                    {{\Carbon\Carbon::parse($order->request_date)->format('F j, Y')}}
                                                </div>
                                            </td>
                                            <td>
                                                <ul class="orderDatatable_actions mb-0 d-flex flex-wrap float-right" style="min-width: 50px">
                                                    <li>
                                                        <a href="{{url('admin2/order/detail', ['order'=>$order->code])}}#return-request" class="edit" data-toggle="tooltip" data-placement="top" title="View Detail">
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
                                    {{ $returnRequests->appends( app('request')->input() )->links("admin2.html.pagination") }}
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
