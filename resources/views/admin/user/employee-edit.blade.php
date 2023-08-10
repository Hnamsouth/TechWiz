@extends("admin.layout")

@section("title", "Add New Employee")

@section("after_css")
    <style>
        .is-invalid{
            border-color: #dc3545 !important;
        }
        .invalid-feedback {
            display: block;
        }
        .edit-icon, .remove-icon {
            box-shadow: 0px 9px 16px 0px rgb(24 28 50 / 25%) !important;
            border-radius: 50%;
            height: 28px;
            width: 28px;
            color: #3F4254;
            background-color: #ffffff;
            border-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .edit-icon i, .remove-icon i {
            color: #B5B5C3 !important;

        }
    </style>
@endsection

@section("main-content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">edit employee</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- Start: product page -->
                <div class="global-shadow border px-sm-30 py-sm-50 px-0 py-20 bg-white radius-xl w-100 mb-40">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-10">
                            <div class="mx-sm-30 mx-20 ">
                                <!-- Start: card -->
                                <div class="card add-product p-sm-30 p-20 mb-30">
                                    <div class="card-body p-0">
                                        <div class="card-header">
                                            <h6 class="fw-500">Employee Info #{{$employee->id}}</h6>
                                        </div>
                                        <!-- Start: card body -->
                                        <div class="add-product__body px-sm-40 px-20">
                                            <!-- Start: form -->
                                            <form action="{{ route('edit-employee',['employee'=>$employee->id]) }}" method="post" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label class="d-block">Avatar</label>
                                                    <div class="atbd-tag-wrap d-inline-block position-relative">
                                                        <div class="atbd-upload">
                                                            <div class="atbd-upload-avatar">
                                                                <img class="avatrSrc img-thumbnail" src="{{ $employee->user->avatar ?? '/admin/img/upload.png' }}" alt="Avatar Upload" style="max-width: 200px">
                                                            </div>
                                                            <div class="avatar-up">
                                                                <input type="file" name="avatar" class="upload-avatar-input" accept="image/*">
                                                                <input type="hidden" name="keep_old_avatar" value="1">
                                                            </div>
                                                            <div class="image-actions">
                                                                <a href="#" class="edit-icon position-absolute" style="top: -10px;right: -10px"><i class="fas fa-pen"></i>
                                                                </a>
                                                                <a href="#" class="remove-icon position-absolute" style="bottom: -10px;right: -10px"><i class="fas fa-times fs-24"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @error("avatar")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label for="name1">Name *</label>
                                                    <input name="name" type="text" class="form-control @error("name") is-invalid @enderror" placeholder="Enter Name..." value="{{ $employee->user->name }}" required>
                                                    @error("name")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label for="name1">Email *</label>
                                                    <input name="email" type="email" class="form-control @error("email") is-invalid @enderror" placeholder="Enter Email..." value="{{ $employee->user->email }}" required>
                                                    @error("email")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label for="name1">Phone Number *</label>
                                                    <input name="phone" type="text" class="form-control @error("phone") is-invalid @enderror" placeholder="Enter Phone Number..." value="{{ $employee->user->telephone }}" required>
                                                    @error("phone")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label for="name1">Country</label>
                                                    <input name="country" type="text" class="form-control @error("country") is-invalid @enderror" placeholder="Enter Country..." value="{{$employee->user->country}}">
                                                    @error("country")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label for="name1">State</label>
                                                    <input name="state" type="text" class="form-control @error("state") is-invalid @enderror" placeholder="Enter State..." value="{{$employee->user->state}}">
                                                    @error("state")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label for="name1">City</label>
                                                    <input name="city" type="text" class="form-control @error("city") is-invalid @enderror" placeholder="Enter City..." value="{{$employee->user->city}}">
                                                    @error("city")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label for="name1">Address</label>
                                                    <input name="address" type="text" class="form-control @error("address") is-invalid @enderror" placeholder="Enter Address..." value="{{$employee->user->address}}">
                                                    @error("address")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                @if(Session::get('success') && Session::get('success') != null)
                                                    <div class="d-flex justify-content-end text-success">{{ Session::get('success') }}</div>
                                                    @php
                                                        Session::put('success', null)
                                                    @endphp
                                                @endif

                                                <!-- Start: button group -->
                                                <div class="button-group add-product-btn d-flex justify-content-end mt-20">
                                                    <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize" onclick="history.back()">Cancel
                                                    </button>
                                                    <button type="button" class="btn btn-secondary btn-default btn-squared text-capitalize" data-toggle="modal" data-target="#modal-basic">Set new password
                                                    </button>
                                                    <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize">Save info
                                                    </button>
                                                </div>
                                                <!-- End: button group -->
                                            </form>
                                            <!-- End: form -->
                                        </div>
                                        <!-- End: card body -->
                                    </div>
                                </div>
                                <!-- End: card -->


                            </div>
                        </div>
                        <!-- ends: col-lg-8 -->
                    </div>
                </div>
                <!-- End: Product page -->
            </div>
            <!-- ends: col-lg-12 -->
        </div>
    </div>

    <!-- Create new password modal -->
    <div class="modal-basic modal fade show" id="modal-basic" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-bg-white ">
                <form action="{{ route('change-employee-pwd',['employee'=>$employee->id]) }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h6 class="modal-title">Set new password</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span data-feather="x"></span></button>
                    </div>
                    <div class="modal-body">
                        <!-- form group -->
                        <div class="form-group">
                            <label for="name1">Password <small style="text-transform: none">(Default password is "password")</small></label>
                            <input name="password" type="password" class="form-control @error("password") is-invalid @enderror" placeholder="Enter Password..." value="password" required>
                            @error("password")
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <!-- form group -->
                        <div class="form-group">
                            <label for="name1">Confirm Password</label>
                            <input name="password_confirmation" type="password" class="form-control" value="password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("after_js")
    <script>
        $(document).ready(function() {
            // function to handle image preview and show the edit and remove icons
            function handlePreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.avatrSrc').attr('src', e.target.result);
                        $('.edit-icon').show();
                        $('.remove-icon').show();
                        $('input[name=keep_old_avatar]').val('0'); // set value of the keep_old_avatar input to false
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            // handle change event of the file input
            $('.upload-avatar-input').change(function() {
                handlePreview(this);
            });

            // handle click event of the edit icon
            $('.edit-icon').click(function() {
                $('.upload-avatar-input').click();
            });

            // handle click event of the remove icon
            $('.remove-icon').click(function() {
                $('.avatrSrc').attr('src', '/admin/img/upload.png');
                $('.upload-avatar-input').val('');
                $(this).hide();
                $('input[name=keep_old_avatar]').val('0'); // set value of the keep_old_avatar input to false
            });
        });
    </script>

    @error("password")
    <script>
        $('#modal-basic').modal('show')
    </script>
    @enderror
@endsection

