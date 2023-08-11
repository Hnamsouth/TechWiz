@extends("admin.layout")

@section("title", "Blog List")

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
                    <h4 class="text-capitalize breadcrumb-title">Blog</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">


                        <div class="action-btn">
                            <a href="{{url("admin/blog/create")}}" class="btn btn-sm btn-primary btn-add">
                                <i class="la la-plus"></i> Add New Blog</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <div class="row">

            <div class="col-lg-12 mb-30">
                <div class="card">




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
                                            <div class="userDatatable-title">Title</div>
                                        </th>

                                        <th>
                                            <span class="userDatatable-title">League</span>
                                        </th>
                                        <th>
                                            <span class="userDatatable-title">Publish Date</span>
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
                                                    <a href="{{url("admin/blog/detail",["blog"=>$item->id])}}" class="profile-image rounded-lg d-block m-0 wh-38" style="background-image:url('{{ add_w_auto_to_cloudinary_url($item->thumbnail) }}'); background-size: cover;"></a>
                                                </div>
                                                <div class="userDatatable-inline-title">
                                                    <a href="{{url("admin/blog/detail",["blog"=>$item->id])}}" class="text-dark fw-500">
                                                        <h6>{{$item->title}}</h6>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="userDatatable-content">
                                                {{$item->league->name}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                              {{$item->publish_date}}
                                            </div>
                                        </td>

                                        <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                <li>
                                                    <a class="view detail-btn" href="{{url("admin/blog/detail",["blog"=>$item->id])}}">
                                                        <span data-feather="eye"></span></a>
                                                </li>

                                                <li>
                                                    <a href="{{url("admin/blog/edit",["blog"=>$item->id])}}" class="edit">
                                                        <span data-feather="edit"></span></a>
                                                </li>
                                                <li>
                                                    <form id="delete-form-{{ $item->id }}" action="{{ url("admin/blog/delete",["blog"=>$item->id]) }}" method="post" style="">
                                                        @method("DELETE")
                                                        @csrf
                                                        <button type="button" class="delete-button" style="background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;" data-toggle="modal" data-target="#modal-info-confirmed-{{ $item->id }}">
                                                        <a class="remove">
                                                            <span data-feather="trash-2"></span>
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
                                                            <h6>Do you Want to delete product #{{$item->id}}?</h6>
                                                            <p>{{$item->name}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-light btn-outlined btn-sm" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-info btn-sm" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">Ok</button>
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

