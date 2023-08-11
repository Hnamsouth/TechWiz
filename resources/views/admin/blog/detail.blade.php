@extends("admin.layout")

@section("title", "Blog detail")

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
                <div class="shop-breadcrumb">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Blog Detail #{{$blog->title}}</h4>
                        <h4 class="text-capitalize breadcrumb-title">Publish date #{{$blog->publish_date}}</h4>
                    </div>


                </div>
            </div>
        </div>
        <div class="description">
<h4>Description#</h4>
            <p><strong>{{$blog->description}}</strong></p>
        </div>
    </div>
    <div class="products mb-30">
        <div class="container-fluid">
                {!!$blog->content!!}


        </div>

    </div>
@endsection
