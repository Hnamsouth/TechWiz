@extends('guest.layout')
@section('main-content')
    <div class="tg-banner tg-haslayout">
        <div class="tg-imglayer">
            <img src="assets/images/bg-pattran.png" alt="image desctription">
        </div>
        <div class="container">
            <div class="row">
                <div class="tg-banner-content tg-haslayout">
                    <div class="tg-pagetitle">
                        <h1>User Account</h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">User Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="tg-main-section tg-haslayout">
        <div class="container user-acc">
            <div class="row">
                <div class="col-sm-2">
                    <ul>
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#user-profile">User Profile</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#change-pass">Change Password</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Log out</a></li>
                    </ul>
                </div>
                <div class="col-sm-10">
                    <div class="tab-content">
                        <div id="user-profile" class="tab-pane fade show active">
                            <h4>User Profile</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="user-input">
                                        <label>User name</label>
                                        <input type="text">
                                    </div>
                                    <div>
                                        <label>Email</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <label>Telephone</label>
                                        <input type="text">
                                    </div>
                                    <div>
                                        <label>Address</label>
                                        <input type="text">
                                    </div>
                                    <div>Change information</div>
                                </div>
                            </div>
                        </div>
                        <div id="change-pass" class="tab-pane fade show">
                            <h4>CHANGE PASSWORD</h4>
                            <div>
                                <label>Current Password</label>
                                <input type="password">
                            </div>
                            <div>
                                <label>New password</label>
                                <input type="password">
                            </div>
                            <div>
                                <label>Re-type new password</label>
                                <input type="password">
                            </div>
                            <button type="">Change password</button>
                        </div>
                        <div id="logout" class="tab-pane fade show">
                            <div>log out button</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Add event listener to handle tab clicks
        document.addEventListener("DOMContentLoaded", function () {
            var tabs = document.querySelectorAll('.nav-link');
            tabs.forEach(function (tab) {
                tab.addEventListener('click', function (event) {
                    event.preventDefault();
                    var tabId = this.getAttribute('href');
                    // Remove 'active' class from all tabs and content panes
                    tabs.forEach(function (tab) {
                        tab.classList.remove('active');
                    });
                    var tabContents = document.querySelectorAll('.tab-pane');
                    tabContents.forEach(function (tabContent) {
                        tabContent.classList.remove('show', 'active');
                    });
                    // Add 'active' class to clicked tab and content pane
                    this.classList.add('active');
                    document.querySelector(tabId).classList.add('show', 'active');
                });
            });
        });
    </script>

@endsection
