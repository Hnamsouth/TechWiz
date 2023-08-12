@extends("admin.layout")

@section("title", "Edit Player")

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
                        <h4 class="text-capitalize breadcrumb-title">Edit Player</h4>
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
                                <form action="{{ route('player-edit',["players"=>$players->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row mb-25">
                                        <div class="card-header">
                                            <h6 class="fw-500">ID: {{$players->id}}</h6>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-25">
                                        <div class="col-sm-3 d-flex aling-items-center">
                                            <label for="inputName" class=" col-form-label color-dark fs-14 fw-500 align-center">Name</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15 @error("name") is-invalid @enderror" name="name" id="inputName" placeholder="Enter name" value="{{ $players->name }}" >
                                            @error("name")
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-25">
                                        <div class="col-sm-3 d-flex aling-items-center">
                                            <label for="inputCountry" class="col-form-label  color-dark fs-14 fw-500 align-center">Nationality</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control  ih-medium ip-gray radius-xs b-light px-15 @error("nationality") is-invalid @enderror" name="nationality" id="inputCountry" placeholder="Enter nationality" value="{{ $players->nationality }}" >
                                            @error("nationality")
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-25">
                                        <div class="col-sm-3">
                                            <label for="inputLevel" class=" col-form-label  color-dark fs-14 fw-500 align-center">Position</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select class="form-control ih-medium ip-gray radius-xs b-light px-15" id="inputLevel">
                                                <option @if(old("position")== "Wingback") selected @endif value="Wingback" >Wingback</option>
                                                <option @if(old("position")== "Sweeper") selected @endif value="Sweeper">Sweeper</option>
                                                <option @if(old("position")== "Defensive Midfielder") selected @endif value="Defensive Midfielder">Defensive Midfielder</option>
                                                <option @if(old("position")== "Winger") selected @endif value="Winger">Winger</option>
                                                <option @if(old("position")== "Center Midfielder") selected @endif value="Center Midfielder">Center Midfielder</option>
                                                <option @if(old("position")== "Striker") selected @endif value="Striker">Striker</option>
                                                <option @if(old("position")== "Center Forward") selected @endif value="Center Forward">Center Forward</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row mb-25">
                                        <div class="col-sm-3 d-flex aling-items-center">
                                            <label for="inputCountry" class="col-form-label  color-dark fs-14 fw-500 align-center">Date of birth</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control  ih-medium ip-gray radius-xs b-light px-15 @error("date_of_birth") is-invalid @enderror" name="date_of_birth" id="inputCountry" value="{{ $players->date_of_birth }}" >
                                            @error("date_of_birth")
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-25">
                                        <div class="col-sm-3 d-flex aling-items-center">
                                            <label for="inputCountry" class="col-form-label  color-dark fs-14 fw-500 align-center">Description</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea rows="5" class="form-control  ih-medium ip-gray radius-xs b-light px-15 @error("description") is-invalid @enderror" name="description" id="inputCountry" placeholder="Description" value="{{ $players->description }}"></textarea>
                                            @error("description")
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-25">
                                        <div class="col-sm-3 d-flex aling-items-center">
                                            <label for="inputCountry" class="col-form-label  color-dark fs-14 fw-500 align-center">Number</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control  ih-medium ip-gray radius-xs b-light px-15 @error("number") is-invalid @enderror" name="number" id="inputCountry" value="{{ $players->number }}" >
                                            @error("number")
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-25">
                                        <div class="col-sm-3 d-flex aling-items-center">
                                            <label for="inputCountry" class="col-form-label  color-dark fs-14 fw-500 align-center">Height</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control  ih-medium ip-gray radius-xs b-light px-15 @error("height") is-invalid @enderror" name="height" id="inputCountry" value="{{ $players->height }}">
                                            @error("height")
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-25">
                                        <div class="col-sm-3 d-flex aling-items-center">
                                            <label for="inputCountry" class="col-form-label  color-dark fs-14 fw-500 align-center">Weight</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control  ih-medium ip-gray radius-xs b-light px-15 @error("weight") is-invalid @enderror" name="weight" id="inputCountry" value="{{ $players->weight }}">
                                            @error("weight")
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-1">
                                        <div class="col-sm-3">
                                            <label class="col-form-label  color-dark fs-14 fw-500 align-center">Image</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="atbd-tag-wrap d-inline-block position-relative">
                                                <div class="atbd-upload">
                                                    <div class="atbd-upload-avatar">
                                                        <img class="avatrSrc img-thumbnail" src="/admin/img/upload.png" alt="Avatar Upload" style="max-width: 200px">
                                                    </div>
                                                    <div class="avatar-up">
                                                        <input type="file" name="image" class="upload-avatar-input" accept="image" value={{$players->image}}>
                                                    </div>
                                                    <div class="image-actions">
                                                        <a href="#" class="edit-icon position-absolute" style="top: -10px;right: -10px"><i class="fas fa-pen"></i>
                                                        </a>
                                                        <a href="#" class="remove-icon position-absolute" style="bottom: -10px;right: -10px"><i class="fas fa-times fs-24"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error("image")
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
