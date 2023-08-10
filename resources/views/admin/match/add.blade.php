@extends("admin.layout")

@section("title", "League Add")

@section("after_css")
    <style>
        .is-invalid {
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
                        <h4 class="text-capitalize breadcrumb-title">add match</h4>
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
                                            <h6 class="fw-500">About match</h6>
                                        </div>
                                        <!-- Start: card body -->
                                        <div class="add-product__body px-sm-40 px-20">
                                            <!-- Start: form -->
                                            <form action="{{ url("/admin/match/create") }}" method="post"
                                                  enctype="multipart/form-data">
                                                @csrf

                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label for="datetime">Datetime</label>
                                                    <input name="datetime" type="datetime-local"
                                                           class="form-control @error("datetime") is-invalid @enderror"
                                                           id="datetime" value="{{ old('datetime') }}" required>

                                                    @error("datetime")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="location">Location</label>
                                                    <input name="location" type="text"
                                                           class="form-control @error("location") is-invalid @enderror"
                                                           id="location" placeholder="Enter Location ..."
                                                           value="{{ old('location') }}" required>
                                                    @error("location")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <div class="countryOption">
                                                        <label for="countryOption">
                                                            First team
                                                        </label>
                                                        <select name="first_team" id="select-search-first"
                                                                class="form-control @error("name") is-invalid @enderror"
                                                                required>
                                                            @foreach($team as $item)
                                                                <option value="{{$item->id}}"
                                                                        @if(old('first_team') == $item->id) selected @endif>{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error("first_team")
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="countryOption1">
                                                        <label for="countryOption1">
                                                            Second team
                                                        </label>
                                                        <select name="second_team" id="select-search-second"
                                                                class="form-control @error("name") is-invalid @enderror"
                                                                required>
                                                            @foreach($team as $item)
                                                                <option value="{{$item->id}}"
                                                                        @if(old('second_team') == $item->id) selected @endif>{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error("second_team")
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>




                                                <!-- form group 6 -->
                                                <div class="form-group">
                                                    <div class="countryOption12">
                                                        <label for="countryOption12">
                                                            League team
                                                        </label>
                                                        <select name="league_id" id="select-search-league_id"
                                                                class="form-control @error("name") is-invalid @enderror"
                                                                required>
                                                            @foreach($league as $item)
                                                                <option value="{{$item->id}}"
                                                                        @if(old('league_id') == $item->id) selected @endif>{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error("league_id")
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- Start: button group -->
                                                <div
                                                    class="button-group add-product-btn d-flex justify-content-end mt-20">
                                                    <button
                                                        class="btn btn-light btn-default btn-squared fw-400 text-capitalize"
                                                        onclick="history.back()">Cancel
                                                    </button>
                                                    <button type="submit"
                                                            class="btn btn-primary btn-default btn-squared text-capitalize">
                                                        Save League
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
@endsection

@section("after_js")

    {{--    <script>--}}
    {{--        $(document).ready(function() {--}}
    {{--            // function to handle image preview and show the edit and remove icons--}}
    {{--            function handlePreview(input) {--}}
    {{--                if (input.files && input.files[0]) {--}}
    {{--                    var reader = new FileReader();--}}

    {{--                    reader.onload = function(e) {--}}
    {{--                        $('.avatrSrc').attr('src', e.target.result);--}}
    {{--                        $('.edit-icon').show();--}}
    {{--                        $('.remove-icon').show();--}}
    {{--                    }--}}

    {{--                    reader.readAsDataURL(input.files[0]);--}}
    {{--                }--}}
    {{--            }--}}

    {{--            // handle change event of the file input--}}
    {{--            $('.upload-avatar-input').change(function() {--}}
    {{--                handlePreview(this);--}}
    {{--            });--}}

    {{--            // handle click event of the edit icon--}}
    {{--            $('.edit-icon').click(function() {--}}
    {{--                $('.upload-avatar-input').click();--}}
    {{--            });--}}

    {{--            // handle click event of the remove icon--}}
    {{--            $('.remove-icon').click(function() {--}}
    {{--                $('.avatrSrc').attr('src', '/admin/img/upload.png');--}}
    {{--                $('.upload-avatar-input').val('');--}}
    {{--                $(this).hide();--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection

