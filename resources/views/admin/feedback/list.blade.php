@extends("admin.layout")

@section("title", "Category List")

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
                    <h4 class="text-capitalize breadcrumb-title">Feedbacks</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">

                    </div>
                </div>

            </div>
        </div>
        <div class="row">

            <div class="col-lg-12 mb-30">
                <div class="card">
                    <div class="card-header color-dark fw-500">
                        Feedback List
                        <div class="d-flex align-items-center flex-wrap justify-content-center mb-2">
                            <div class="project-search order-search  global-shadow mt-10">
                                <form action="{{url('admin/feedback')}}" method="get" class="order-search__form">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    <input name="search" class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Filter by name" aria-label="Search" value="{{ app('request')->input('search') }}">
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
                                                    <a href="{{ url('admin/feedback') }}?{{ http_build_query(array_merge(request()->query(), ['order_col' => 'id','sort_by' => (app('request')->input('sort_by') == 'desc' || app('request')->input('sort_by') == null) ? 'asc' : 'desc' ,'page' => 1])) }}">
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
                                                    <a href="{{ url('admin/feedback') }}?{{ http_build_query(array_merge(request()->query(), ['order_col' => 'name','sort_by' => (app('request')->input('sort_by') == 'desc' || app('request')->input('sort_by') == null) ? 'asc' : 'desc' ,'page' => 1])) }}">
                                                    <span class="userDatatable-sort">
                                                        <i class="fas fa-sort-up up @if(app('request')->input('order_col')=='name' && app('request')->input('sort_by')=='asc') selected @endif"></i>
                                                        <i class="fas fa-caret-down down @if(app('request')->input('order_col')=='name' && app('request')->input('sort_by')=='desc') selected @endif"></i>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Feedback</span>
                                        </th>
                                        <th>
                                            <div class="userDatatable-title">
                                                Created date
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <a href="{{ url('admin/feedback') }}?{{ http_build_query(array_merge(request()->query(), ['order_col' => 'created_at','sort_by' => (app('request')->input('sort_by') == 'desc' || app('request')->input('sort_by') == null) ? 'asc' : 'desc' ,'page' => 1])) }}">
                                                    <span class="userDatatable-sort">
                                                        <i class="fas fa-sort-up up @if(app('request')->input('order_col')=='created_at' && app('request')->input('sort_by')=='asc') selected @endif"></i>
                                                        <i class="fas fa-caret-down down @if(app('request')->input('order_col')=='created_at' && app('request')->input('sort_by')=='desc') selected @endif"></i>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </th>
                                        <th></th>
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
                                                @if($item->feedback == null || $item->feedback == "")
                                                    (No Feedback)
                                                @else
                                                    {{$item->feedback}}
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

                                            </div>
                                        </td>
                                    </tr>
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
        <!-- Detail Info Modal -->
        <div class="modal-basic modal fade show" id="modal-basic" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content modal-bg-white ">
                    <div class="modal-header">
                        <h6 class="modal-title">Category #<span id="modal-category-id"></span></h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span data-feather="x"></span></button>
                    </div>
                    <div class="modal-body text-dark">
                        <div class="row justify-content-between">
                            <div class="col-2 fw-500">Name:</div>
                            <div class="col-10 pl-4 mb-2" id="modal-category-name"></div>
                            <div class="col-2 fw-500">Description:</div>
                            <div class="col-10 pl-4 mb-2" id="modal-category-desc"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Detail Info Modal -->

    </div>
@endsection

@section("after_js")
    {{--Script for Detail Info Modal--}}
    <script>
        $(document).ready(function() {
            $('.detail-btn').click(function() {
                var categoryId = $(this).data('category-id');
                var categoryName = $(this).data('category-name');
                var categoryDescription = $(this).data('category-description');

                $('#modal-category-id').text(categoryId);
                $('#modal-category-name').text(categoryName);
                if(categoryDescription == null || categoryDescription === '') {
                    $('#modal-category-desc').text('(There is no description for this category)');
                } else {
                    $('#modal-category-desc').text(categoryDescription);
                }
            });
        });
    </script>
@endsection
