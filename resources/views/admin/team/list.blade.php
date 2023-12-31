@extends("admin.layout")

@section("title", "Team List")


@section("main-content")
<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Teams List</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">
                        <a href="{{route('team-create')}}" class="btn btn-sm btn-primary btn-add">
                            <i class="la la-plus"></i> Add New</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12">

            <div class="card mb-25">
                <div class="card-header">
                    <h6>Team List</h6>
                </div>
                <div class="card-body pt-0 pb-0">
                    <div class="drag-drop-wrap">
                        <div class="drag-drop table-responsive-lg bg-white w-100 mb-30">
                            <table class="table mb-0 table-basic">
                                <thead>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Continent</th>
                                    <th>Level</th>
                                    <th>Logo</th>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                <tr class="draggable" draggable="true">
                                    <td>{{$item->id}}</td>
                                    <td>
                                        <div class="item d-flex align-items-center">
                                            <div class="item-info d-flex align-items-center">
                                                <div class="item_title">
                                                    <h6>
                                                        {{$item->name}}
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {{$item->country}}
                                    </td>
                                    <td>
                                        {{$item->continent}}
                                    </td>
                                    <td>
                                        @if($item->level)
                                            <span>Club</span>
                                        @else
                                            <span>National</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{$item->logo}}
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="{{route("team-edit",["team"=>$team->id])}}">
                                                <span data-feather="edit"></span>
                                            </a>
                                            <form method="post" action="{{route('team-delete',['team'=>$team->id])}}">
                                                @method("DELETE")
                                                @csrf
                                                <span data-feather="trash-2"></span>
                                            </form>
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
            <!-- ends: card -->

        </div>
        <!-- ends: col-12 -->
    </div>
</div>
@endsection
