@extends("admin.layout")

@section("title", "Product List")

@section("after_css")
    <style>
        .userDatatable-title{
            display: flex;
            align-items: center;
        }
        .userDatatable-title .userDatatable-sort {
            display: flex;
            flex-direction: column;
            margin-left: 8px;
            margin-top: 4px;
        }
        .userDatatable-title .userDatatable-sort i {
            line-height: 5px;
            font-size: 13px;
            color: #9299b8;
        }
        .userDatatable-title .userDatatable-sort i.selected{
            color: #5f63f2;
        }
        #table-hover tbody tr {
            transition: all 0.3s ease;
        }
        #table-hover tbody tr:hover {
            background-color: #fafafa;
        }
        .atbd-pagination__item a.disabled:hover {
            background: #ffffff;
        }
        .atbd-select .select2-selection {
            height: 40px;
            max-width: unset;
        }
        #select-1{
            height: 40px;
        }
        @media (min-width: 992px) {
            .order-search__form {
                width: 250px;
            }
        }
        .select2 {

        }
    </style>
@endsection

@section("main-content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main mb-3">
                    <h4 class="text-capitalize breadcrumb-title">Products Deleted</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
{{--                        <div class="dropdown action-btn">--}}
{{--                            <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i class="la la-download"></i> Export--}}
{{--                            </button>--}}
{{--                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">--}}
{{--                                <span class="dropdown-item">Export With</span>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a href="" class="dropdown-item">--}}
{{--                                    <i class="la la-print"></i> Printer</a>--}}
{{--                                <a href="" class="dropdown-item">--}}
{{--                                    <i class="la la-file-pdf"></i> PDF</a>--}}
{{--                                <a href="" class="dropdown-item">--}}
{{--                                    <i class="la la-file-text"></i> Google Sheets</a>--}}
{{--                                <a href="" class="dropdown-item">--}}
{{--                                    <i class="la la-file-excel"></i> Excel (XLSX)</a>--}}
{{--                                <a href="" class="dropdown-item">--}}
{{--                                    <i class="la la-file-csv"></i> CSV</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>

            </div>
        </div>

        <div class="row">

            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header color-dark fw-500 pb-10 flex-column flex-md-row">
                        <div>
                            <div class="project-search order-search global-shadow mt-10 float-left ml-4 ml-md-0 mr-0 mr-md-3">
                                <form action="{{url('admin2/product/deleted')}}" method="get" class="order-search__form">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    <input name="search" class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by name" aria-label="Search" value="{{ app('request')->input('search') }}">
                                    <input type="hidden" name="category_id" value="{{ app('request')->input('category_id') }}">
{{--                                    <input type="hidden" name="status" value="{{ app('request')->input('status') }}">--}}
{{--                                    <input type="hidden" name="orderCol" value="{{ app('request')->input('orderCol') }}">--}}
                                    <input type="hidden" name="page" value="1">
                                </form>
                            </div>
                            <div class="mt-xl-10 mt-15 float-left ml-4 ml-md-0 mr-0 mr-md-3">
                                <div class="atbd-select-list d-flex align-items-center">
                                    <label class="color-gray fs-14 mr-10 mb-0">Category :</label>
                                    <div class="atbd-select" style="min-width: 240px">
                                        <form action="{{url("admin2/product/deleted")}}" method="get" id="category-form">
                                            <select name="category_id" id="select-search" class="form-control" onchange="document.getElementById('category-form').submit();">
                                                <option value="0" @if(app('request')->input('category_id') == null || app('request')->input('category_id') == '0') selected @endif>All ({{$searchedDataCount}})</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" @if(app('request')->input('category_id') == $category->id) selected @endif>{{$category->name}} ({{$category->products_count}})</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" name="search" value="{{ app('request')->input('search') }}">
{{--                                            <input type="hidden" name="status" value="{{ app('request')->input('status') }}">--}}
{{--                                            <input type="hidden" name="orderCol" value="{{ app('request')->input('orderCol') }}">--}}
                                            <input type="hidden" name="page" value="1">
                                        </form>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="mt-xl-10 mt-15 float-left ml-4 ml-md-0">--}}
{{--                                <div class="atbd-select-list d-flex align-items-center">--}}
{{--                                    <label class="color-gray fs-14 mr-10 mb-0">Price :</label>--}}
{{--                                    <input type="text" class="form-control form-control-default" placeholder="Lowest" style="width: 110px; height: 40px">--}}
{{--                                    <span class="color-gray px-1"><i class="fas fa-angle-right"></i></span>--}}
{{--                                    <input type="text" class="form-control form-control-default" placeholder="Highest" style="width: 110px; height: 40px">--}}

{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <div>
                            <div class="mt-xl-10 mt-15 float-left float-md-right ml-4">
                                <div class="atbd-select-list d-flex align-items-center">
                                    <label class="color-gray fs-14 mr-10 mb-0">Sort by :</label>
                                    <div class="atbd-select" style="min-width: 170px">
                                        <form action="{{url("admin2/product/deleted")}}" method="get" id="sort-form">
                                            <select name="orderCol" id="select-1" class="form-control" onchange="document.getElementById('sort-form').submit();">
                                                <option value="created_at/desc" @if(app('request')->input('orderCol') == null || app('request')->input('orderCol') == 'created_at/desc') selected @endif>Newest</option>
                                                <option value="created_at/asc" @if(app('request')->input('orderCol') == 'created_at/asc') selected @endif>Oldest</option>
                                                <option value="name/asc" @if(app('request')->input('orderCol') == 'name/asc') selected @endif>Name A-Z</option>
                                                <option value="name/desc" @if(app('request')->input('orderCol') == 'name/desc') selected @endif>Name Z-A</option>
                                                <option value="price/desc" @if(app('request')->input('orderCol') == 'price/desc') selected @endif>Highest Price</option>
                                                <option value="price/asc" @if(app('request')->input('orderCol') == 'price/asc') selected @endif>Lowest Price</option>
                                                <option value="quantity/desc" @if(app('request')->input('orderCol') == 'quantity/desc') selected @endif>Highest Quantity</option>
                                                <option value="quantity/asc" @if(app('request')->input('orderCol') == 'quantity/asc') selected @endif>Lowest Quantity</option>
                                            </select>
                                            <input type="hidden" name="search" value="{{ app('request')->input('search') }}">
                                            <input type="hidden" name="category_id" value="{{ app('request')->input('category_id') }}">
                                            <input type="hidden" name="status" value="{{ app('request')->input('status') }}">
                                            <input type="hidden" name="page" value="1">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="project-category d-flex align-items-center ml-md-30 mt-xl-10 mt-15 float-left float-md-right ml-4 ml-md-0 mr-0 mr-md-3">
                                <p class="fs-14 color-gray text-capitalize mb-10 mb-md-0 mr-10">Status :</p>
                                <div class="project-tap order-project-tap global-shadow">
                                    <ul class="nav px-1" id="ap-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('status') == null || app('request')->input('status') == '') active @endif" id="ap-overview-tab" href="{{ url('admin2/product/deleted') }}?{{ http_build_query(array_merge(request()->query(), ['status' => null])) }}" role="tab" aria-controls="ap-overview" >All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('status') == 1) active @endif" id="timeline-tab" href="{{ url('admin2/product/deleted') }}?{{ http_build_query(array_merge(request()->query(), ['status' => 1])) }}" role="tab" aria-controls="timeline" >Active</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(app('request')->input('status') == 0 && app('request')->input('status') != null) active @endif" id="activity-tab" href="{{ url('admin2/product/deleted') }}?{{ http_build_query(array_merge(request()->query(), ['status' => 0])) }}" role="tab" aria-controls="activity" >Inactive</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="userDatatable global-shadow border-0 bg-white w-100" id="table-hover">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                    <tr class="userDatatable-header">
                                        <th>
                                            <div class="userDatatable-title">ID</div>
                                        </th>
                                        <th>
                                            <div class="userDatatable-title">Name</div>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Category</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Price</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Discount</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Quantity</span>
                                        </th>
                                        <th>
                                            <div class="userDatatable-title">Created date</div>
                                        </th>
                                        <th>
                                            <div class="userDatatable-title">Deleted date</div>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Status</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title float-right">Action</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $item)
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{$item->id}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                    <a href="{{url("admin2/product/detail",["product"=>$item->slug])}}" class="profile-image rounded-lg d-block m-0 wh-38" style="background-image:url('{{ substr_replace($item->thumbnail, 'w_auto/', strpos($item->thumbnail, 'upload/') + 7, 0) }}'); background-size: cover;"></a>
                                                </div>
                                                <div class="userDatatable-inline-title">
                                                    <a href="{{url("admin2/product/detail",["product"=>$item->slug])}}" class="text-dark fw-500">
                                                        <h6>{{$item->name}}</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{$item->category->name}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{number_format($item->price)}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                @if($item->discount_id == null)
                                                    (No discount)
                                                @else
                                                    {{$item->discount_id}}
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{$item->quantity}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{$item->created_at->format('F j, Y')}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{$item->deleted_at->format('F j, Y')}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content d-inline-block">
                                                @if($item->status)
                                                    <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                                @else
                                                    <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">inactive</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap" style="min-width: 50px">
                                                <li>
                                                    <form id="restore-form-{{ $item->id }}" action="{{ url("admin2/product/restore") }}" method="post" style="">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$item->id}}">
                                                        <button type="button" class="delete-button" style="background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;" data-toggle="modal" data-target="#modal-info-confirmed-{{ $item->id }}">
                                                        <a class="remove">
                                                            <span data-feather="rotate-ccw"></span>
                                                        </a>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <!-- Delete Confirm Modal -->
                                    <div class="modal-info-confirmed modal fade show" id="modal-info-confirmed-{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-info" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="modal-info-body d-flex">
                                                        <div class="modal-info-icon warning">
                                                            <span data-feather="info"></span>
                                                        </div>

                                                        <div class="modal-info-text">
                                                            <h6>Do you want to restore product #{{$item->id}}?</h6>
                                                            <p>{{$item->name}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-light btn-outlined btn-sm" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-info btn-sm" onclick="event.preventDefault(); document.getElementById('restore-form-{{ $item->id }}').submit();">Ok</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Delete Confirm Modal -->
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end mt-30 table5">
                                <div class="pagination-total-text">{{ $data->firstItem() }}-{{ $data->lastItem() }} of {{ $data->total() }} items</div>
                                <nav class="atbd-page ">
                                    <ul class="atbd-pagination d-flex">
                                        <li class="atbd-pagination__item">
                                            {{ $data->appends( app('request')->input() )->links("admin2.html.pagination") }}
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

