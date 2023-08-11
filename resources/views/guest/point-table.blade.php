

@extends('guest.layout')
@section('main-content')
    @include('guest.html.slider-section')
    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Point Table</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Bread<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="#">Crumbs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <div class="world-cup-match-stastic-section">
        <div class="container">
            <div class="row">
                <div class="world-cup-match-stastic-inner">
                    <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#match-statistics" aria-controls="match-statistics" role="tab" data-toggle="tab">Match Statistics</a></li>
                            <li role="presentation"><a href="#match-event" aria-controls="match-reports" role="tab" data-toggle="tab">Match Events</a></li>
                            <li role="presentation"><a href="#team" aria-controls="team" role="tab" data-toggle="tab">Team</a></li>
                            <li role="presentation"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">Comments</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="match-statistics">
                            <div class="point-table-area">
                                <div class="point-title-area">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th width="20%" scope="row">Group A</th>
                                            <th width="10%" class="text-center">Playered</th>
                                            <th width="10%" class="text-center">Won</th>
                                            <th width="10%" class="text-center">Draw</th>
                                            <th width="10%" class="text-center">Lost </th>
                                            <th width="10%" class="text-center">For</th>
                                            <th width="10%" class="text-center">Against</th>
                                            <th width="10%" class="text-center">Goal dif.</th>
                                            <th width="10%" class="text-center">Points</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="point-itmes">
                                    <table class="table table-striped-inverse point-table">
                                        <tbody>
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/flag2.png" alt="" />
                                                <span>France</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">3</td>
                                            <td data-th="Won" width="10%" class="text-center">2</td>
                                            <td data-th="Draw" width="10%" class="text-center">1</td>
                                            <td data-th="Lost" width="10%" class="text-center">0</td>
                                            <td data-th="For" width="10%" class="text-center">4</td>
                                            <td data-th="Against" width="10%" class="text-center">1</td>
                                            <td data-th="Goal dif." width="10%" class="text-center">3</td>
                                            <td data-th="Points" width="10%" class="text-center">7</td>
                                        </tr>
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/flag3.png" alt="" />
                                                <span>Iceland</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">3</td>
                                            <td data-th="Won" width="10%" class="text-center">2</td>
                                            <td data-th="Draw" width="10%" class="text-center">1</td>
                                            <td data-th="Lost" width="10%" class="text-center">0</td>
                                            <td data-th="For" width="10%" class="text-center">4</td>
                                            <td data-th="Against" width="10%" class="text-center">1</td>
                                            <td data-th="Goal dif." width="10%" class="text-center">3</td>
                                            <td data-th="Points" width="10%" class="text-center">7</td>
                                        </tr>
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/flag4.png" alt="" />
                                                <span>Ireland</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">3</td>
                                            <td data-th="Won" width="10%" class="text-center">2</td>
                                            <td data-th="Draw" width="10%" class="text-center">1</td>
                                            <td data-th="Lost" width="10%" class="text-center">0</td>
                                            <td data-th="For" width="10%" class="text-center">4</td>
                                            <td data-th="Against" width="10%" class="text-center">1</td>
                                            <td data-th="Goal dif." width="10%" class="text-center">3</td>
                                            <td data-th="Points" width="10%" class="text-center">7</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="point-table-button text-center">
                                        <a href="">View Details <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                    <table class="table point-items-more table-striped-inverse">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="pt-heading">10 Aug, 2016 - Group Stage</p>
                                                <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                            </td>
                                            <td class="text-right">
                                                <span>France</span>
                                                <img src="images/flag2.png" alt="" />
                                                <span>2:1</span>
                                                <img src="images/flag1.png" alt="" />
                                                <span>Portugal</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="pt-heading">06 Jun, 2016 - Group Stage</p>
                                                <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                            </td>
                                            <td class="text-right">
                                                <span>Iceland</span>
                                                <img src="images/flag3.png" alt="" />
                                                <span>1:0</span>
                                                <img src="images/flag1.png" alt="" />
                                                <span>Portugal</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="pt-heading">04 Jun, 2016 - Group Stage</p>
                                                <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                            </td>
                                            <td class="text-right">
                                                <span>Ireland</span>
                                                <img src="images/flag4.png" alt="" />
                                                <span>2:1</span>
                                                <img src="images/flag1.png" alt="" />
                                                <span>Portugal</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="match-event">
                            <div class="point-table-area">
                                <div class="point-title-area">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th width="20%" scope="row">Group A</th>
                                            <th width="10%" class="text-center">Playered</th>
                                            <th width="10%" class="text-center">Won</th>
                                            <th width="10%" class="text-center">Draw</th>
                                            <th width="10%" class="text-center">Lost </th>
                                            <th width="10%" class="text-center">For</th>
                                            <th width="10%" class="text-center">Against</th>
                                            <th width="10%" class="text-center">Goal dif.</th>
                                            <th width="10%" class="text-center">Points</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="point-itmes">
                                    <table class="table table-striped-inverse point-table">
                                        <tbody>
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/flag2.png" alt="" />
                                                <span>France</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">3</td>
                                            <td data-th="Won" width="10%" class="text-center">2</td>
                                            <td data-th="Draw" width="10%" class="text-center">1</td>
                                            <td data-th="Lost" width="10%" class="text-center">0</td>
                                            <td data-th="For" width="10%" class="text-center">4</td>
                                            <td data-th="Against" width="10%" class="text-center">1</td>
                                            <td data-th="Goal dif." width="10%" class="text-center">3</td>
                                            <td data-th="Points" width="10%" class="text-center">7</td>
                                        </tr>
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/flag3.png" alt="" />
                                                <span>Iceland</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">3</td>
                                            <td data-th="Won" width="10%" class="text-center">2</td>
                                            <td data-th="Draw" width="10%" class="text-center">1</td>
                                            <td data-th="Lost" width="10%" class="text-center">0</td>
                                            <td data-th="For" width="10%" class="text-center">4</td>
                                            <td data-th="Against" width="10%" class="text-center">1</td>
                                            <td data-th="Goal dif." width="10%" class="text-center">3</td>
                                            <td data-th="Points" width="10%" class="text-center">7</td>
                                        </tr>
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/flag4.png" alt="" />
                                                <span>Ireland</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">3</td>
                                            <td data-th="Won" width="10%" class="text-center">2</td>
                                            <td data-th="Draw" width="10%" class="text-center">1</td>
                                            <td data-th="Lost" width="10%" class="text-center">0</td>
                                            <td data-th="For" width="10%" class="text-center">4</td>
                                            <td data-th="Against" width="10%" class="text-center">1</td>
                                            <td data-th="Goal dif." width="10%" class="text-center">3</td>
                                            <td data-th="Points" width="10%" class="text-center">7</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="point-table-button text-center">
                                        <a href="">View Details <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                    <table class="table point-items-more table-striped-inverse">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="pt-heading">10 Aug, 2016 - Group Stage</p>
                                                <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                            </td>
                                            <td class="text-right">
                                                <span>France</span>
                                                <img src="images/flag2.png" alt="" />
                                                <span>2:1</span>
                                                <img src="images/flag1.png" alt="" />
                                                <span>Portugal</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="pt-heading">06 Jun, 2016 - Group Stage</p>
                                                <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                            </td>
                                            <td class="text-right">
                                                <span>Iceland</span>
                                                <img src="images/flag3.png" alt="" />
                                                <span>1:0</span>
                                                <img src="images/flag1.png" alt="" />
                                                <span>Portugal</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="pt-heading">04 Jun, 2016 - Group Stage</p>
                                                <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                            </td>
                                            <td class="text-right">
                                                <span>Ireland</span>
                                                <img src="images/flag4.png" alt="" />
                                                <span>2:1</span>
                                                <img src="images/flag1.png" alt="" />
                                                <span>Portugal</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="comments">
                            <div class="point-table-area">
                                <div class="point-title-area">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th width="20%" scope="row">Group A</th>
                                            <th width="10%" class="text-center">Playered</th>
                                            <th width="10%" class="text-center">Won</th>
                                            <th width="10%" class="text-center">Draw</th>
                                            <th width="10%" class="text-center">Lost </th>
                                            <th width="10%" class="text-center">For</th>
                                            <th width="10%" class="text-center">Against</th>
                                            <th width="10%" class="text-center">Goal dif.</th>
                                            <th width="10%" class="text-center">Points</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="point-itmes">
                                    <table class="table table-striped-inverse point-table">
                                        <tbody>
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/flag2.png" alt="" />
                                                <span>France</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">3</td>
                                            <td data-th="Won" width="10%" class="text-center">2</td>
                                            <td data-th="Draw" width="10%" class="text-center">1</td>
                                            <td data-th="Lost" width="10%" class="text-center">0</td>
                                            <td data-th="For" width="10%" class="text-center">4</td>
                                            <td data-th="Against" width="10%" class="text-center">1</td>
                                            <td data-th="Goal dif." width="10%" class="text-center">3</td>
                                            <td data-th="Points" width="10%" class="text-center">7</td>
                                        </tr>
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/flag3.png" alt="" />
                                                <span>Iceland</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">3</td>
                                            <td data-th="Won" width="10%" class="text-center">2</td>
                                            <td data-th="Draw" width="10%" class="text-center">1</td>
                                            <td data-th="Lost" width="10%" class="text-center">0</td>
                                            <td data-th="For" width="10%" class="text-center">4</td>
                                            <td data-th="Against" width="10%" class="text-center">1</td>
                                            <td data-th="Goal dif." width="10%" class="text-center">3</td>
                                            <td data-th="Points" width="10%" class="text-center">7</td>
                                        </tr>
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/flag4.png" alt="" />
                                                <span>Ireland</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">3</td>
                                            <td data-th="Won" width="10%" class="text-center">2</td>
                                            <td data-th="Draw" width="10%" class="text-center">1</td>
                                            <td data-th="Lost" width="10%" class="text-center">0</td>
                                            <td data-th="For" width="10%" class="text-center">4</td>
                                            <td data-th="Against" width="10%" class="text-center">1</td>
                                            <td data-th="Goal dif." width="10%" class="text-center">3</td>
                                            <td data-th="Points" width="10%" class="text-center">7</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="point-table-button text-center">
                                        <a href="">View Details <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                    <table class="table point-items-more table-striped-inverse">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="pt-heading">10 Aug, 2016 - Group Stage</p>
                                                <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                            </td>
                                            <td class="text-right">
                                                <span>France</span>
                                                <img src="images/flag2.png" alt="" />
                                                <span>2:1</span>
                                                <img src="images/flag1.png" alt="" />
                                                <span>Portugal</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="pt-heading">06 Jun, 2016 - Group Stage</p>
                                                <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                            </td>
                                            <td class="text-right">
                                                <span>Iceland</span>
                                                <img src="images/flag3.png" alt="" />
                                                <span>1:0</span>
                                                <img src="images/flag1.png" alt="" />
                                                <span>Portugal</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="pt-heading">04 Jun, 2016 - Group Stage</p>
                                                <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                            </td>
                                            <td class="text-right">
                                                <span>Ireland</span>
                                                <img src="images/flag4.png" alt="" />
                                                <span>2:1</span>
                                                <img src="images/flag1.png" alt="" />
                                                <span>Portugal</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="team">
                            <div class="point-table-area">
                                <div class="point-title-area">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th width="20%" scope="row">Group A</th>
                                            <th width="10%" class="text-center">Playered</th>
                                            <th width="10%" class="text-center">Won</th>
                                            <th width="10%" class="text-center">Draw</th>
                                            <th width="10%" class="text-center">Lost </th>
                                            <th width="10%" class="text-center">For</th>
                                            <th width="10%" class="text-center">Against</th>
                                            <th width="10%" class="text-center">Goal dif.</th>
                                            <th width="10%" class="text-center">Points</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="point-itmes">
                                    <table class="table table-striped-inverse point-table">
                                        <tbody>
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/flag2.png" alt="" />
                                                <span>France</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">3</td>
                                            <td data-th="Won" width="10%" class="text-center">2</td>
                                            <td data-th="Draw" width="10%" class="text-center">1</td>
                                            <td data-th="Lost" width="10%" class="text-center">0</td>
                                            <td data-th="For" width="10%" class="text-center">4</td>
                                            <td data-th="Against" width="10%" class="text-center">1</td>
                                            <td data-th="Goal dif." width="10%" class="text-center">3</td>
                                            <td data-th="Points" width="10%" class="text-center">7</td>
                                        </tr>
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/flag3.png" alt="" />
                                                <span>Iceland</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">3</td>
                                            <td data-th="Won" width="10%" class="text-center">2</td>
                                            <td data-th="Draw" width="10%" class="text-center">1</td>
                                            <td data-th="Lost" width="10%" class="text-center">0</td>
                                            <td data-th="For" width="10%" class="text-center">4</td>
                                            <td data-th="Against" width="10%" class="text-center">1</td>
                                            <td data-th="Goal dif." width="10%" class="text-center">3</td>
                                            <td data-th="Points" width="10%" class="text-center">7</td>
                                        </tr>
                                        <tr>
                                            <th data-th="Group A" width="20%" scope="row">
                                                <img src="images/flag4.png" alt="" />
                                                <span>Ireland</span>
                                            </th>
                                            <td data-th="Playered" width="10%" class="text-center">3</td>
                                            <td data-th="Won" width="10%" class="text-center">2</td>
                                            <td data-th="Draw" width="10%" class="text-center">1</td>
                                            <td data-th="Lost" width="10%" class="text-center">0</td>
                                            <td data-th="For" width="10%" class="text-center">4</td>
                                            <td data-th="Against" width="10%" class="text-center">1</td>
                                            <td data-th="Goal dif." width="10%" class="text-center">3</td>
                                            <td data-th="Points" width="10%" class="text-center">7</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="point-table-button text-center">
                                        <a href="">View Details <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                    <table class="table point-items-more table-striped-inverse">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="pt-heading">10 Aug, 2016 - Group Stage</p>
                                                <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                            </td>
                                            <td class="text-right">
                                                <span>France</span>
                                                <img src="images/flag2.png" alt="" />
                                                <span>2:1</span>
                                                <img src="images/flag1.png" alt="" />
                                                <span>Portugal</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="pt-heading">06 Jun, 2016 - Group Stage</p>
                                                <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                            </td>
                                            <td class="text-right">
                                                <span>Iceland</span>
                                                <img src="images/flag3.png" alt="" />
                                                <span>1:0</span>
                                                <img src="images/flag1.png" alt="" />
                                                <span>Portugal</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="pt-heading">04 Jun, 2016 - Group Stage</p>
                                                <p>Stade de France, Saint-Desnis <br />Referee: Viktor Kassai (HUN</p>
                                            </td>
                                            <td class="text-right">
                                                <span>Ireland</span>
                                                <img src="images/flag4.png" alt="" />
                                                <span>2:1</span>
                                                <img src="images/flag1.png" alt="" />
                                                <span>Portugal</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
