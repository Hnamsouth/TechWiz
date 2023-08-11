@extends("admin.layout")

@section("title", "Product Add")

@section("after_css")
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <style>
        .is-invalid{
            border-color: #dc3545 !important;
        }
        .invalid-feedback {
            display: block;
        }
        .edit-icon, .remove-icon {
            box-shadow: 0px 4px 8px 0px rgb(24 28 50 / 20%) !important;
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
        .ck-content {
            min-height: 250px;
        }
        .upload-media-area img {
            border-radius: 6px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
            width: 100px;
            height: auto;
            flex: 1;
        }
    </style>
@endsection

@section("main-content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">add product</h4>
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

                                <form action="{{ url("/admin/blog/edit",["blog"=>$blog->id]) }}" method="post" enctype="multipart/form-data" id="my-form">
                                    @method('PUT')
                                    @csrf
                                    <!-- Start: card -->
                                    <div class="card add-product p-sm-30 p-20 mb-30">
                                        <div class="card-body p-0">
                                            <div class="card-header">
                                                <h6 class="fw-500">About Blog #{{$blog->id}}</h6>
                                            </div>
                                            <!-- Start: card body -->
                                            <div class="add-product__body px-sm-40 px-20">

                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label class="d-block mb-3">Blog Thumbnail</label>
                                                    <div class="atbd-tag-wrap d-inline-block position-relative">
                                                        <div class="atbd-upload">
                                                            <div class="atbd-upload-avatar">
                                                                <img class="avatrSrc img-thumbnail" src="{{ $blog->thumbnail != null ? add_w_auto_to_cloudinary_url($blog->thumbnail) : '/admin/img/upload.png'}}" alt="Avatar Upload" style="max-width: 200px">
                                                            </div>
                                                            <div class="avatar-up">
                                                                <input type="file" name="thumbnail" class="upload-avatar-input" accept="image/*">
                                                                <input type="hidden" name="old_thumb_url" value="{{$blog->thumbnail}}">
                                                            </div>
                                                            <div class="image-actions">
                                                                <a href="#" class="edit-icon position-absolute" style="top: -10px;right: -10px"><i class="fas fa-pen"></i>
                                                                </a>
                                                                <a href="#" class="remove-icon position-absolute" style="bottom: -10px;right: -10px"><i class="fas fa-times fs-24"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @error("icon")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label for="title">Title </label>
                                                    <input name="title" type="text" class="form-control @error("name") is-invalid @enderror" id="title" placeholder="Enter title..." value="{{ $blog->title }}" required>
                                                    @error("title")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <!-- form group 2 -->
                                                <div class="form-group">
                                                    <div class="countryOption">
                                                        <label for="countryOption">
                                                            category
                                                        </label>
                                                        <select name="league_id" id="select-search" class="form-control @error("name") is-invalid @enderror" required>
                                                            @foreach($league as $item)
                                                                <option value="{{$item->id}}" @if($blog->league_id == $item->id) selected @endif>{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error("league_id")
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <!-- form group 6 -->
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1"> Description</label>
                                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter short description">{{$blog->description}}</textarea>
                                                </div>

                                                <!-- form group 7 -->
                                                <div class="form-group">
                                                    <label for="content">Content </label>
                                                    <div id="editor">{!! $blog->content !!}</div>
                                                    <input type="hidden" name="content" id="content">
                                                </div>
                                                <div class="form-group">
                                                    <label for="publish_date">Publish Date</label>
                                                    <input name="publish_date" type="date" class="form-control @error("publish_date") is-invalid @enderror" id="publish_date"  value="{{ $blog->publish_date }}" required>
                                                    @error("publish_date")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>







                                            </div>
                                            <!-- End: card body -->
                                        </div>
                                    </div>
                                    <!-- End: card -->
                                    <!-- Start: card -->
                                    <!-- End: card -->

                                    <!-- Start: button group -->
                                    <div class="button-group add-product-btn d-flex justify-content-end mt-40">
                                        <button type="button" class="btn btn-light btn-default btn-squared fw-400 text-capitalize" onclick="history.back()">cancel</button>
                                        <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize" id="submit-btn">save blog</button>
                                    </div>
                                    <!-- End: button group -->
                                </form>
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
    {{--Script for thumbnail upload--}}
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
                        $('input[name=old_thumb_url]').val(''); // clear the value of the old_thumb_url input
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
                $('input[name=old_thumb_url]').val(''); // clear the value of the old_thumb_url input
            });
        });
    </script>

    //Script for CKEditor
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                document.querySelector( '#submit-btn' ).addEventListener( 'click', () => {
                    const descInput = document.querySelector( '#content' );
                    descInput.value = editor.getData();
                    document.querySelector('#my-form').submit();
                } );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>

    //Script for product images upload

@endsection

