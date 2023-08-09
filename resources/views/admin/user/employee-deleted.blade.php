@extends("admin.layout")

@section("title", "Employee Deleted")

@section("main-content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main user-member justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Employee Deleted</h4>
                            <span class="sub-title ml-sm-25 pl-sm-25">{{$employees->count()}} Deleted</span>
                        </div>

                        <form action="{{ route('employee-deleted') }}" class="d-flex align-items-center user-member__form my-sm-0 my-2" method="get">
                            <span data-feather="search"></span>
                            <input name="search" class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name" aria-label="Search">
                        </form>

                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="userDatatable global-shadow border p-30 bg-white radius-xl w-100 mb-30">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
                            <tr class="userDatatable-header">
                                <th>
                                    <span class="userDatatable-title">ID</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">Name</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">email</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">phone number</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">position</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">join date</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title float-right">action</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>
                                        <div class="userDatatable-content">
                                            #{{$employee->id}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{$employee->user->avatar ?? '/admin/img/tm6.png'}}'); background-size: cover;"></a>
                                            </div>
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>{{$employee->user->name}}</h6>
                                                </a>
                                                <p class="d-block mb-0">
                                                    {{$employee->user->city ?? 'N/A'}}, {{$employee->user->state ?? 'N/A'}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{$employee->user->email}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{$employee->user->telephone ?? 'N/A'}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{$employee->role}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{$employee->created_at->format('F j, Y')}}
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap" style="min-width: 50px">
                                            <li>
                                                <form id="restore-form-{{ $employee->id }}" action="{{ route('employee-restore') }}" method="post" style="">
                                                    @csrf
                                                    <input type="hidden" name="employee_id" value="{{ $employee->id }}">
                                                    <button type="button" class="delete-button" style="background: none; color: inherit; border: none; padding: 0; font: inherit; cursor: pointer; outline: inherit;" data-toggle="modal" data-target="#modal-info-confirmed-{{ $employee->id }}">
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
                                <div class="modal-info-confirmed modal fade show" id="modal-info-confirmed-{{ $employee->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-info" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="modal-info-body d-flex">
                                                    <div class="modal-info-icon warning">
                                                        <span data-feather="info"></span>
                                                    </div>

                                                    <div class="modal-info-text">
                                                        <h6>Do you want to restore employee #{{$employee->id}}?</h6>
                                                        <p>{{$employee->user->name}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-light btn-outlined btn-sm" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-info btn-sm" onclick="event.preventDefault(); document.getElementById('restore-form-{{ $employee->id }}').submit();">Ok</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end pt-30">

                        <nav class="atbd-page ">
                            <ul class="atbd-pagination d-flex">
                                <li class="atbd-pagination__item">
                                    {{ $employees->appends( app('request')->input() )->links("admin2.html.pagination") }}
                                </li>
                            </ul>
                        </nav>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


