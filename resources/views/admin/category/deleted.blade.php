@extends("admin.layout")

@section("title", "Category Deleted")

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
    </style>
@endsection

@section("main-content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Categories Deleted</h4>
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
                    <div class="card-header color-dark fw-500">
                        Category Deleted
                        <div class="d-flex align-items-center flex-wrap justify-content-center mb-2">
                            <div class="project-search order-search  global-shadow mt-10">
                                <form action="{{url('admin/category/deleted')}}" method="get" class="order-search__form">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    <input name="search" class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Filter by name" aria-label="Search" value="{{ app('request')->input('search') }}">
                                    <input type="hidden" name="page" value="1">
                                </form>
                            </div><!-- End: .project-search -->
                        </div>
                    </div>



                    <div class="card-body">
                        <div class="userDatatable global-shadow border-0 bg-white w-100" id="table-hover">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless">
                                    <thead>
                                    <tr class="userDatatable-header">
                                        <th>

                                            <div class="userDatatable-title">
                                                ID
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <a href="{{ url('admin/category/deleted') }}?{{ http_build_query(array_merge(request()->query(), ['order_col' => 'id','sort_by' => (app('request')->input('sort_by') == 'desc' || app('request')->input('sort_by') == null) ? 'asc' : 'desc' ,'page' => 1])) }}">
                                                    <span class="userDatatable-sort">
                                                        <i class="fas fa-sort-up up @if(app('request')->input('order_col')=='id' && app('request')->input('sort_by')=='asc') selected @endif"></i>
                                                        <i class="fas fa-caret-down down @if(app('request')->input('order_col')=='id' && app('request')->input('sort_by')=='desc') selected @endif"></i>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="userDatatable-title">
                                                Name
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <a href="{{ url('admin/category/deleted') }}?{{ http_build_query(array_merge(request()->query(), ['order_col' => 'name','sort_by' => (app('request')->input('sort_by') == 'desc' || app('request')->input('sort_by') == null) ? 'asc' : 'desc' ,'page' => 1])) }}">
                                                    <span class="userDatatable-sort">
                                                        <i class="fas fa-sort-up up @if(app('request')->input('order_col')=='name' && app('request')->input('sort_by')=='asc') selected @endif"></i>
                                                        <i class="fas fa-caret-down down @if(app('request')->input('order_col')=='name' && app('request')->input('sort_by')=='desc') selected @endif"></i>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Description</span>
                                        </th>
                                        <th>
                                            <div class="userDatatable-title">
                                                Created date
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <a href="{{ url('admin/category/deleted') }}?{{ http_build_query(array_merge(request()->query(), ['order_col' => 'created_at','sort_by' => (app('request')->input('sort_by') == 'desc' || app('request')->input('sort_by') == null) ? 'asc' : 'desc' ,'page' => 1])) }}">
                                                    <span class="userDatatable-sort">
                                                        <i class="fas fa-sort-up up @if(app('request')->input('order_col')=='created_at' && app('request')->input('sort_by')=='asc') selected @endif"></i>
                                                        <i class="fas fa-caret-down down @if(app('request')->input('order_col')=='created_at' && app('request')->input('sort_by')=='desc') selected @endif"></i>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">No. of Products</span>
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
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6>{{$item->name}}</h6>
                                                    </a>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                @if($item->desc == null || $item->desc == "")
                                                    (No description)
                                                @else
                                                    {{$item->desc}}
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{$item->created_at->format('F j, Y')}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{$item->products->count('id')}} products
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap" style="min-width: 50px">
                                                <li>
                                                    <form id="restore-form-{{ $item->id }}" action="{{ url("admin/category/restore") }}" method="post" style="">
                                                        @csrf
                                                        <input type="hidden" name="category_id" value="{{ $item->id }}">
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
                                                            <h6>Do you want to restore category #{{$item->id}}?</h6>
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
                                            {{ $data->appends( app('request')->input() )->links("admin.html.pagination") }}
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
