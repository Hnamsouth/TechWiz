@extends("admin.layout")

@section("title", "Employee List")

@section("after_css")
@endsection

@section("main-content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main user-member justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">User List</h4>
                            <span class="sub-title ml-sm-25 pl-sm-25">{{$users->total()}} Users</span>
                        </div>

                        <form action="{{ route('user-list') }}" class="d-flex align-items-center user-member__form my-sm-0 my-2" method="get">
                            <span data-feather="search"></span>
                            <input name="search" class="form-control mr-sm-2 border-0 box-shadow-none" type="search" placeholder="Search by Name, Email or Phone" aria-label="Search">
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
                                    <span class="userDatatable-title">address</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">no. of order</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">total amount</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">created date</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title float-right">detail</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        <div class="userDatatable-content">
                                            #{{$user->id}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('{{$user->avatar ?? '/admin/img/tm6.png'}}'); background-size: cover;"></a>
                                            </div>
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>{{$user->name}}</h6>
                                                </a>
                                                <p class="d-block mb-0">
                                                    {{$user->city ?? 'N/A'}}, {{$user->state ?? 'N/A'}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{$user->email}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{$user->telephone ?? 'N/A'}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{$user->address ?? 'N/A'}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{$user->orders->count()}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{number_format($user->orders->sum('grand_total'))}} USD
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            {{$user->created_at->format('F j, Y')}}
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap" style="min-width: 20px">
                                            <li>
                                                <a href="{{route('user-detail',['user'=>$user->id])}}" class="edit">
                                                    <span data-feather="eye"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end pt-30">

                        <nav class="atbd-page ">
                            <ul class="atbd-pagination d-flex">
                                <li class="atbd-pagination__item">
                                    {{ $users->appends( app('request')->input() )->links("admin2.html.pagination") }}
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


