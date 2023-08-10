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

                                <form action="{{ url("/admin/product/edit",["product"=>$product->slug]) }}" method="post" enctype="multipart/form-data" id="my-form">
                                    @method('PUT')
                                    @csrf
                                    <!-- Start: card -->
                                    <div class="card add-product p-sm-30 p-20 mb-30">
                                        <div class="card-body p-0">
                                            <div class="card-header">
                                                <h6 class="fw-500">About Product #{{$product->id}}</h6>
                                            </div>
                                            <!-- Start: card body -->
                                            <div class="add-product__body px-sm-40 px-20">

                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label class="d-block mb-3">Product Thumbnail</label>
                                                    <div class="atbd-tag-wrap d-inline-block position-relative">
                                                        <div class="atbd-upload">
                                                            <div class="atbd-upload-avatar">
                                                                <img class="avatrSrc img-thumbnail" src="{{ $product->thumbnail != null ? add_w_auto_to_cloudinary_url($product->thumbnail) : '/admin/img/upload.png'}}" alt="Avatar Upload" style="max-width: 200px">
                                                            </div>
                                                            <div class="avatar-up">
                                                                <input type="file" name="thumbnail" class="upload-avatar-input" accept="image/*">
                                                                <input type="hidden" name="old_thumb_url" value="{{$product->thumbnail}}">
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
                                                    <label for="name1">product name</label>
                                                    <input name="name" type="text" class="form-control @error("name") is-invalid @enderror" id="name1" placeholder="Enter Category Name..." value="{{ $product->name }}" required>
                                                    @error("name")
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
                                                        <select name="category_id" id="select-search" class="form-control @error("name") is-invalid @enderror" required>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}" @if($product->category_id == $category->id) selected @endif>{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error("category_id")
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- form group 3 -->
                                                <div class="form-group quantity-appearance">
                                                    <label>price</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <span data-feather="dollar-sign"></span>
                                                            </span>
                                                        </div>
                                                        <div class="pt_Quantity">
                                                            <input name="price" type="number" class="form-control @error("price") is-invalid @enderror" min="0" value="{{$product->price}}" data-inc="1" required>
                                                        </div>
                                                    </div>
                                                    @error("price")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <!-- form group 3 -->
                                                <div class="form-group quantity-appearance">
                                                    <label>quantity</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <span data-feather="package"></span>
                                                            </span>
                                                        </div>
                                                        <div class="pt_Quantity">
                                                            <input name="quantity" type="number" class="form-control @error("quantity") is-invalid @enderror" min="0" step="1" value="{{$product->quantity}}" data-inc="1" required>
                                                        </div>
                                                    </div>
                                                    @error("quantity")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <!-- form group 6 -->
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">Short Description (Optional)</label>
                                                    <textarea name="short_desc" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter short description">{{$product->short_desc}}</textarea>
                                                </div>

                                                <!-- form group 7 -->
                                                <div class="form-group">
                                                    <label for="name8">Desciption (Optional)</label>
                                                    <div id="editor">{!! $product->desc !!}</div>
                                                    <input type="hidden" name="desc" id="desc">
                                                </div>

                                            </div>
                                            <!-- End: card body -->
                                        </div>
                                    </div>
                                    <!-- End: card -->
                                    <!-- Start: card -->
                                    <div class="card add-product p-sm-30 p-20 ">
                                        <div class="card-body p-0">
                                            <div class="card-header">
                                                <h6 class="fw-500">Product images</h6>
                                            </div>
                                            <!-- Start: product body -->
                                            <div class="add-product__body-img px-sm-40 px-20">
                                                <label for="upload" class="file-upload__label">
                                                    <span class="upload-product-img px-10 d-block" ondragover="handleDragOver(event)" ondrop="handleFileSelect(event)">
                                                        <span class="file-upload" id="file-upload">
                                                            <span data-feather="upload"></span>
                                                            <input name="images[]" id="upload" class="file-upload__input" type="file" onchange="handleFileSelect(event)" multiple>
                                                            <input type="hidden" name="keep_old_images" value="1">
                                                        </span>
                                                        <span class="pera">Drag and drop an image</span>
                                                        <span>or <a href="" class="color-secondary">Browse</a> to choose a
                                                            file</span>
                                                    </span>
                                                </label>
                                                <div class="upload-product-media d-flex justify-content-between align-items-center mt-25 row">
                                                    <!-- Uploaded images will be displayed here -->

                                                    <!-- Display old image before edit -->
                                                    @foreach($product->images as $image)
                                                    <div class="upload-media-area d-flex mb-3 col-6">
                                                        <img src="{{$image->url}}" alt="{{basename($image->url)}}">
                                                        <div class=" upload-media-area__title  d-flex flex-wrap align-items-center ml-10">
                                                            <div>
                                                                <p>{{basename($image->url)}}</p>
                                                                <span>KB</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="upload-media-area__btn">
                                                    <button type="button" class="transparent rounded-circle wh-30 border-0 color-danger" onclick="deleteMedia(event)">
                                                        <span data-feather="trash-2"></span>
                                                    </button>
                                                </div>

                                            </div>
                                            <!-- End: product body -->
                                        </div>
                                    </div>
                                    <!-- End: card -->

                                    <!-- Start: button group -->
                                    <div class="button-group add-product-btn d-flex justify-content-end mt-40">
                                        <button type="button" class="btn btn-light btn-default btn-squared fw-400 text-capitalize" onclick="history.back()">cancel</button>
                                        <button type="button" class="btn btn-primary btn-default btn-squared text-capitalize" id="submit-btn">save product</button>
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
                    const descInput = document.querySelector( '#desc' );
                    descInput.value = editor.getData();
                    document.querySelector('#my-form').submit();
                } );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>

    //Script for product images upload
    <script>
        function handleDragOver(evt) {
            evt.preventDefault();
            evt.dataTransfer.dropEffect = "copy";
            $('input[name=keep_old_images]').val('0');
        }

        function handleFileSelect(evt) {
            evt.preventDefault();
            let files;
            if (evt.dataTransfer) {
                // event source is drag and drop
                files = evt.dataTransfer.files;
            } else {
                // event source is click to browse
                files = evt.target.files;
            }
            document.querySelector(".upload-product-media").innerHTML = "";
            for (let i = 0, f; (f = files[i]); i++) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    let file = e.target.result;
                    let fileName = f.name;
                    let fileSize = f.size;
                    let mediaContainer = document.createElement("div");
                    mediaContainer.classList.add("upload-media-area", "d-flex","mb-3","col-6");
                    mediaContainer.innerHTML = `<img src="${file}" alt="${fileName}">
          <div class=" upload-media-area__title  d-flex flex-wrap align-items-center ml-10">
              <div>
                  <p>${fileName}</p>
                  <span>${fileSize} KB</span>
              </div>
<!--              <div class="upload-media-area__btn">-->
<!--                  <button type="button" class="transparent rounded-circle wh-30 border-0 color-danger" onclick="deleteMedia(event)">-->
<!--                      <span data-feather="trash-2"></span>-->
<!--                  </button>-->
<!--              </div>-->
          </div>`;
                    document.querySelector(".upload-product-media").appendChild(mediaContainer);


                    feather.replace();
                };
                reader.readAsDataURL(f);
            }
            $('input[name=keep_old_images]').val('0');
        }

        function deleteMedia(evt) {
            evt.preventDefault();
            document.querySelector(".upload-product-media").innerHTML = "";
            $('input[name=keep_old_images]').val('0');
        }
    </script>

@endsection

