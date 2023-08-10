@extends("admin.layout")

@section("title", "User Detail")

@section("after_css")
    <style>
        .desc ul {
            list-style-type: circle;
            padding-left: 18px;
        }
        .desc ul li {
            list-style: unset;
        }
        .star-icon.active{
            color: #fa8b0c;
        }
        .star-icon.inactive {
            color: #C6D0DC;
        }
    </style>
@endsection

@section("main-content")
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex align-items-center user-member__title mb-30 mt-30">
                <h4 class="text-capitalize">User Detail #{{$user->id}}</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="user-info-tab w-100 bg-white global-shadow radius-xl mb-50">
                <div class="ap-tab-wrapper border-bottom ">
                    <ul class="nav px-30 ap-tab-main text-capitalize" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span data-feather="user"></span>personal info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span data-feather="shopping-cart"></span>orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span data-feather="star"></span>reviews</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-sm-6 col-10">
                                <div class="mt-40 mb-50">
                                    <div class="user-tab-info-title mb-40 text-capitalize">
                                        <h5 class="fw-500">Personal Information</h5>
                                    </div>
                                    <div class="account-profile d-flex align-items-center mb-4 ">
                                        <div class="ap-img pro_img_wrapper">
                                            <input id="file-upload" type="file" name="fileUpload" class="d-none">
                                            <!-- Profile picture image-->
                                            <label for="file-upload">
                                                <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex" src="{{$user->avatar ?? '/admin/img/author/profile.png'}}" alt="profile">
                                            </label>
                                        </div>
                                        <div class="account-profile__title">
                                            <h6 class="fs-15 ml-20 fw-500 text-capitalize">profile photo</h6>
                                        </div>
                                    </div>
                                    <div class="edit-profile__body">
                                        <form>
                                            <div class="form-group mb-25">
                                                <label for="name1">name</label>
                                                <input type="text" class="form-control" id="name1" value="{{$user->name}}" readonly>
                                            </div>
                                            <div class="form-group mb-25">
                                                <label for="name2">Email</label>
                                                <input type="email" class="form-control" id="name2" value="{{$user->email}}" readonly>
                                            </div>
                                            <div class="form-group mb-25">
                                                <label for="phoneNumber5">phone number</label>
                                                <input type="tel" class="form-control" id="phoneNumber5" value="{{$user->telephone}}" readonly>
                                            </div>
                                            <div class="form-group mb-25">
                                                <label for="country">country</label>
                                                <input type="text" class="form-control" id="country" value="{{$user->country}}" readonly>
                                            </div>
                                            <div class="form-group mb-25">
                                                <label for="state">state</label>
                                                <input type="text" class="form-control" id="state" value="{{$user->state}}" readonly>
                                            </div>
                                            <div class="form-group mb-25">
                                                <label for="city">city</label>
                                                <input type="text" class="form-control" id="city" value="{{$user->city}}" readonly>
                                            </div>
                                            <div class="form-group mb-25">
                                                <label for="postcode">postal code</label>
                                                <input type="text" class="form-control" id="postcode" value="{{$user->postcode}}" readonly>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="userDatatable orderDatatable global-shadow py-30 px-sm-30 px-20 bg-white radius-xl w-100 mb-30">
                                    <div>
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
                                                    @foreach($user->orders as $order)
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

                                </div><!-- End: .userDatatable -->
                            </div><!-- End: .col -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" global-shadow py-30 px-sm-30 px-20 bg-white radius-xl w-100 mb-30">
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-borderless">
                                            <thead>
                                            <tr class="userDatatable-header">
                                                <th>
                                                    <div class="userDatatable-title">No.</div>
                                                </th>
                                                <th>
                                                    <div class="userDatatable-title">Product</div>
                                                </th>
                                                <th>
                                                    <div class="userDatatable-title">Rating</div>
                                                </th>
                                                <th>
                                                    <div class="userDatatable-title">Comment</div>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Created Date</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Order ID</span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($reviews as $key => $review)
                                                <tr>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{$key+1}}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                                <a href="{{url("admin2/product/detail",["product"=>$review->product->slug])}}" class="profile-image rounded-lg d-block m-0 wh-38" style="background-image:url('{{ substr_replace($review->product->thumbnail, 'w_auto/', strpos($review->product->thumbnail, 'upload/') + 7, 0) }}'); background-size: cover;"></a>
                                                            </div>
                                                            <div class="userDatatable-inline-title">
                                                                <a href="{{url("admin2/product/detail",["product"=>$review->product->slug])}}" class="text-dark fw-500">
                                                                    <h6>{{$review->product->name}}</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @php
                                                            $rounded_rating = round($review->rating * 2) / 2;
                                                        @endphp
                                                        <div>
                                                            @for($i = 1; $i <= 5; $i++)
                                                                @if($i <= $rounded_rating)
                                                                    <span class="star-icon las la-star active"></span>
                                                                @elseif($i - $rounded_rating <= 0.5)
                                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                                @else
                                                                    <span class="star-icon las la-star inactive"></span>
                                                                @endif
                                                            @endfor
                                                        </div>
                                                    </td>
                                                    <td style="max-width: 600px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                        {{$review->comment}}
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{$review->created_at->format('F j, Y')}}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <a href="{{url('admin2/order/detail',['order'=>$review->order->code])}}">Order #{{$review->order->id}}</a>
                                                        </div>
                                                    </td>
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
    </div>
</div>
@endsection
