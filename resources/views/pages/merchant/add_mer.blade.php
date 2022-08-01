<!DOCTYPE html>
<html lang="en">

<!-- title, css, meta etc. imports here -->
@include('layout.css')

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        @include('header.header')
        @include('sidebar.left_sidebar')

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <form class="form-horizontal">
                            <div class="card-body">
                                <h4 class="card-title">Personal Info</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="First Name Here" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-end control-label col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name Here" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-end control-label col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="lname" placeholder="Password Here" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-end control-label col-form-label">Company</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email1" placeholder="Company Name Here" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Contact No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="cono1" placeholder="Contact No Here" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Message</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary">
                                        Submit
                                    </button>
                                    <button type="button" class="btn btn-secondary">
                                        <a href="view_merchant">Back</a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by
                <a href="#">WrapPixel</a>.
            </footer>
        </div>
    </div>

    <!-- all script imports -->
    @include('layout.script')
</body>

</html>