@extends('guest.layout')

@section('after_css')
    <style>
        .d-flex {
            display: flex;
        }
        .justify-content-center {
            justify-content: center;
        }
        .justify-content-between {
            justify-content: space-between;
        }
        /* Style My Account Page */
        #sidebar .widget-title1 {
            font-weight: 500;
            line-height: 26px;
            padding: 23px 0px 16px;
            position: relative;
        }
        #sidebar .accout-item {
            position: relative;
            display: block;
            padding: 12px 0px;
            line-height: 24px;
            font-weight: 500;
            font-size: 14px;
            text-transform: capitalize;
            color: #222;
            border-bottom: 1px solid #e3e3e3;
            text-align: left;
        }
        #sidebar .accout-item:last-child {
            border-bottom: none;
        }
        #sidebar .accout-item a{
            color: #222222;
        }
        #sidebar .accout-item a:hover {
            color: #ff4135;
        }
        #sidebar li.current a {
            color: #ff4135;
        }
        input[readonly]
        {
            background-color: #f2f3f5;
        }

        /*Style avatar input*/
        .pro_img_wrapper {
            width: 120px;
            height: 120px;
            border-radius: 300px;
            position: relative;
        }
        #remove_pro_pic {
            position: absolute;
            color: #fff;
            border: 4px solid #ffffff;
            bottom: 0;
            right: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #707070;
        }
        #remove_pro_pic svg {
            width: 16px;
        }

        .more-categories i {
            position: relative;
            top: 2px;
        }

        .checkout-section {
            position: relative;
            display: block;
            padding: 120px 0px;
        }
        .checkout-section .sub-title {
            position: relative;
            display: block;
            font-size: 20px;
            line-height: 26px;
            color: #222;
            font-weight: 600;
            background: #f2f3f5;
            padding: 23px 15px 16px 30px;
        }
        .checkout-section .billing-form {
            position: relative;
            display: block;
            padding: 23px 0px 28px 0px;
        }
        .checkout-section .billing-form .form-group {
            position: relative;
            display: block;
            margin-bottom: 23px;
        }
        .checkout-section .billing-form .form-group label {
            position: relative;
            display: block;
            font-size: 15px;
            color: #222;
            margin-bottom: 2px;
        }
        .checkout-section .billing-form .form-group input[type='text'], .checkout-section .billing-form .form-group input[type='password'], .checkout-section .billing-form .form-group input[type='email'] {
            position: relative;
            display: block;
            width: 100%;
            height: 45px;
            border: 1px solid #e6e6e6;
            font-size: 15px;
            color: #848484;
            padding: 10px 15px;
            transition: all 500ms ease;
        }
        input[readonly] {
            background-color: #f2f3f5;
        }
        .rounded-circle {
            border-radius: 50% !important;
        }
        #remove_pro_pic {
            position: absolute;
            color: #fff;
            border: 4px solid #ffffff;
            bottom: 0;
            right: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #707070;
        }

    </style>
@endsection

@section('main-content')
    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>My Account</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <!-- START PRODUCTS SECTION -->
    <div class="all-products-area account-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar" id="sidebar">
                        <h3 class="widget-title1">My Account</h3>
                        <ul>
                            <li class="accout-item current"><a href="{{url('/my-account')}}"> Account Information </a></li>
                            <li class="accout-item"><a href="{{url('/order-history')}}">Order History
                                    ({{Auth::user()->orders()->count()}})</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="inner-box checkout-section pt-0">
                        <div class="billing-info">
                            <h4 class="sub-title">Account Information</h4>
                            <form class="billing-form" action="{{url('update-user-info')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group d-flex align-items-center">
                                        <div class="ap-img pro_img_wrapper">
                                            <input id="file-upload" type="file" name="avatar" class="d-none" accept="image/*" disabled>
                                            <input type="hidden" name="keep_old_avatar" value="1">
                                            <!-- Profile picture image-->
                                            <label for="file-upload">
                                                <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex" src="{{Auth::user()->avatar ?? '/admin/img/author/profile.png'}}" alt="profile">
                                                <span class="cross" id="remove_pro_pic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                                                </span>
                                            </label>
                                        </div>
                                        <label class="ml-3">Avatar</label>
                                        @error('avatar')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Name*</label>
                                        <div class="field-input">
                                            <input type="text" name="name" value="{{ Auth::user()->name }}" required class="editable-field" readonly>
                                        </div>
                                        @error('name')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Email Address*</label>
                                        <div class="field-input">
                                            <input type="email" name="email" value="{{ Auth::user()->email }}" required class="editable-field" readonly>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Phone Number</label>
                                        <div class="field-input">
                                            <input type="text" name="telephone" value="{{ Auth::user()->telephone }}" class="editable-field" readonly>
                                        </div>
                                        @error('phone')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Country</label>
                                        <div class="field-input">
                                            <input type="text" name="country" value="{{ Auth::user()->country }}" class="editable-field" readonly>
                                        </div>
                                        @error('country')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Address</label>
                                        <div class="field-input">
                                            <input type="text" name="address" class="editable-field" value="{{ Auth::user()->address }}" readonly>
                                        </div>
                                        @error('address')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Town/City</label>
                                        <div class="field-input">
                                            <input type="text" name="city" value="{{ Auth::user()->city }}" class="editable-field" readonly>
                                        </div>
                                        @error('city')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>State</label>
                                        <div class="field-input">
                                            <input type="text" name="state" value="{{ Auth::user()->state }}" class="editable-field" readonly>
                                        </div>
                                        @error('state')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <label>Postal Code</label>
                                        <div class="field-input">
                                            <input type="text" name="postcode" value="{{ Auth::user()->postcode }}" class="editable-field" readonly>
                                        </div>
                                        @error('postcode')
                                        <span class="invalid-feedback d-block" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group">
                                        <a href="{{url('/my-account/change-password')}}" class="theme-btn-two float-right ml-2">Change password</a>
                                        <button type="button" id="edit-btn" class="theme-btn-two float-right">Edit</button>
                                        <button type="submit" id="save-btn" class="theme-btn-three float-right" style="display: none;">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END OF PRODUCTS SECTION -->
@endsection


@section("after_js")
    <script>
        const editBtn = document.querySelector('#edit-btn');
        const saveBtn = document.querySelector('#save-btn');
        const inputFields = document.querySelectorAll('.editable-field');
        const avatarInput = $('#file-upload');

        editBtn.addEventListener('click', () => {
            // Remove the 'readonly' attribute from all input fields
            inputFields.forEach(input => input.removeAttribute('readonly'));
            // Remove the 'disable' attribute from avatar input fields
            avatarInput.removeAttr('disabled');
            $('#remove_pro_pic').css('background','#ff4135')
            // Show the 'Save' button and hide the 'Edit' button
            saveBtn.style.display = 'block';
            editBtn.style.display = 'none';
        });
    </script>

    {{--Script for avatar upload--}}
    <script>
        $(document).ready(function() {
            // function to handle image preview and show the edit and remove icons
            function handlePreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.ap-img__main').attr('src', e.target.result);
                        $('input[name=keep_old_avatar]').val('0'); //Don't keep the old avatar
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            // handle change event of the file input
            $('#file-upload').change(function() {
                handlePreview(this);
            });
        });
    </script>
@endsection
