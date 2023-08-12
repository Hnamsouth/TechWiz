@extends("admin.layout")

@section("title", "Create Team")

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
                        <h4 class="text-capitalize breadcrumb-title">Edit team</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-horizontal card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Edit Form</h6>
                        </div>
                        <div class="card-body py-md-30">
                            <div class="horizontal-form">
                                <form action="{{ route('team-edit',["team"=>$team->id]) }}" method="post" enctype="multipart/form-data">
                                    @method("PUT")
                                    @csrf
                                    <div class="form-group row mb-25">
                                        <div class="card-header">
                                            <h6 class="fw-500">ID: {{$team->id}}</h6>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-25">
                                        <div class="col-sm-3 d-flex aling-items-center">
                                            <label for="inputName" class=" col-form-label color-dark fs-14 fw-500 align-center">Name</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15 @error("name") is-invalid @enderror" name="name" id="inputName" placeholder="Enter name" value="{{ $team->name  }}" >
                                            @error("name")
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-25">
                                        <div class="col-sm-3 d-flex aling-items-center">
                                            <label for="inputCountry" class="col-form-label  color-dark fs-14 fw-500 align-center">Country</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light px-15 @error("country") is-invalid @enderror" name="country" id="inputCountry" placeholder="Enter country" value="{{$team->country}}">
                                            @error("country")
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-25">
                                        <div class="col-sm-3 d-flex aling-items-center">
                                            <label for="inputCountry" class="col-form-label  color-dark fs-14 fw-500 align-center">Continent</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light px-15 @error("continent") is-invalid @enderror" name="continent" id="inputCountry" placeholder="Enter continent" value="{{$team->continent}}">
                                            @error("continent")
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <div class="col-sm-3">
                                            <label for="inputLevel" class=" col-form-label  color-dark fs-14 fw-500 align-center">Level</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select class="form-control ih-medium ip-gray radius-xs b-light px-15" id="inputLevel">
                                                <option @if($team->level== "0") selected @endif value="0" >Club</option>
                                                <option @if($team->level== "1") selected @endif value="1">National</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-1">
                                        <div class="col-sm-3">
                                            <label class="col-form-label  color-dark fs-14 fw-500 align-center">Logo</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="atbd-tag-wrap d-inline-block position-relative">
                                                <div class="atbd-upload">
                                                    <div class="atbd-upload-avatar">
                                                        <img class="avatrSrc img-thumbnail" src="/admin/img/upload.png" alt="Avatar Upload" style="max-width: 200px">
                                                    </div>
                                                    <div class="avatar-up">
                                                        <input type="file" name="logo" class="upload-avatar-input" accept="logo" value={{$team->logo}}>
                                                    </div>
                                                    <div class="image-actions">
                                                        <a href="#" class="edit-icon position-absolute" style="top: -10px;right: -10px"><i class="fas fa-pen"></i>
                                                        </a>
                                                        <a href="#" class="remove-icon position-absolute" style="bottom: -10px;right: -10px"><i class="fas fa-times fs-24"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error("logo")
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="layout-button mt-25">
                                                <button type="submit" class="btn btn-default btn-squared border-normal bg-normal px-20 " onclick="history.back()">Cancel</button>
                                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
