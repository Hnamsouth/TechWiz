@extends("admin.layout")

@section("title", "League edit")

@section("after_css")
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <style>
        .is-invalid {
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
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
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
                        <h4 class="text-capitalize breadcrumb-title">Edit League</h4>
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

                                <form action="{{ url("/admin/league/edit",["league"=>$league->id]) }}" method="post"
                                      enctype="multipart/form-data" id="my-form">
                                    @method('PUT')
                                    @csrf
                                    <!-- Start: card -->
                                    <div class="card add-product p-sm-30 p-20 mb-30">
                                        <div class="card-body p-0">
                                            <div class="card-header">
                                                <h6 class="fw-500">About League #{{$league->id}}</h6>
                                            </div>
                                            <!-- Start: card body -->
                                            <div class="add-product__body px-sm-40 px-20">

                                                <!-- form group -->
                                                <div class="form-group">
                                                    <label class="d-block mb-3">League Logo</label>
                                                    <div class="atbd-tag-wrap d-inline-block position-relative">
                                                        <div class="atbd-upload">
                                                            <div class="atbd-upload-avatar">
                                                                <img class="avatrSrc img-thumbnail"
                                                                     src="{{ $league->logo != null ? add_w_auto_to_cloudinary_url($league->logo) : '/admin/img/upload.png'}}"
                                                                     alt="Avatar Upload" style="max-width: 200px">
                                                            </div>
                                                            <div class="avatar-up">
                                                                <input type="file" name="thumbnail"
                                                                       class="upload-avatar-input" accept="image/*">
                                                                <input type="hidden" name="old_thumb_url"
                                                                       value="{{$league->logo}}">
                                                            </div>
                                                            <div class="image-actions">
                                                                <a href="#" class="edit-icon position-absolute"
                                                                   style="top: -10px;right: -10px"><i
                                                                        class="fas fa-pen"></i>
                                                                </a>
                                                                <a href="#" class="remove-icon position-absolute"
                                                                   style="bottom: -10px;right: -10px"><i
                                                                        class="fas fa-times fs-24"></i></a>
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
                                                    <label for="name1">League name</label>
                                                    <input name="name" type="text"
                                                           class="form-control @error("name") is-invalid @enderror"
                                                           id="name1" placeholder="Enter Category Name..."
                                                           value="{{ $league->name }}" required>
                                                    @error("name")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="country">Country</label>
                                                    <input name="country" type="text"
                                                           class="form-control @error("country") is-invalid @enderror"
                                                           id="country" placeholder="Enter Country Name..."
                                                           value="{{ $league->country }}" required>
                                                    @error("country")
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>


                                                <div class="form-group">
                                                    <label for="season">Season</label>
                                                    <input name="season" type="text"
                                                           class="form-control @error("season") is-invalid @enderror"
                                                           id="season" placeholder="Enter Season Name..."
                                                           value="{{ $league->season }}" required>
                                                    @error("season")
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


                                    <!-- Start: button group -->
                                    <div class="button-group add-product-btn d-flex justify-content-end mt-40">
                                        <button type="button"
                                                class="btn btn-light btn-default btn-squared fw-400 text-capitalize"
                                                onclick="history.back()">cancel
                                        </button>
                                        <button type="submit"
                                                class="btn btn-primary btn-default btn-squared text-capitalize"
                                                id="submit-btn">save league
                                        </button>
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
        $(document).ready(function () {
            // function to handle image preview and show the edit and remove icons
            function handlePreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.avatrSrc').attr('src', e.target.result);
                        $('.edit-icon').show();
                        $('.remove-icon').show();
                        $('input[name=old_thumb_url]').val(''); // clear the value of the old_thumb_url input
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            // handle change event of the file input
            $('.upload-avatar-input').change(function () {
                handlePreview(this);
            });

            // handle click event of the edit icon
            $('.edit-icon').click(function () {
                $('.upload-avatar-input').click();
            });

            // handle click event of the remove icon
            $('.remove-icon').click(function () {
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
            .create(document.querySelector('#editor'))
            .then(editor => {
                document.querySelector('#submit-btn').addEventListener('click', () => {
                    const descInput = document.querySelector('#desc');
                    descInput.value = editor.getData();
                    document.querySelector('#my-form').submit();
                });
            })
            .catch(error => {
                console.error(error);
            });
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
                    mediaContainer.classList.add("upload-media-area", "d-flex", "mb-3", "col-6");
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

