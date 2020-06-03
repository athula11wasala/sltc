<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Plus Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/vendors/select2/select2.min.css" />
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/demo_2/style.css" />
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{ URL::to('/') }}/assets/images/favicon.png" />
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:{{ URL::to('/') }}/partials/_horizontal-navbar.html -->
            <div class="horizontal-menu">

                <nav class="bottom-navbar">
                    <div class="container">
                        <ul class="nav page-navigation">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}/index.html">
                                    <i class="mdi mdi-compass-outline menu-icon"></i>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="mdi mdi-monitor-dashboard menu-icon"></i>
                                    <span class="menu-title">UI Elements</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="submenu">
                                    <ul class="submenu-item">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::to('/') }}/pages/ui-features/buttons.html">Buttons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::to('/') }}/pages/ui-features/dropdowns.html">Dropdown</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL::to('/') }}/pages/ui-features/typography.html">Typography</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}/pages/forms/basic_elements.html">
                                    <i class="mdi mdi-clipboard-text menu-icon"></i>
                                    <span class="menu-title">Forms</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}/pages/icons/mdi.html">
                                    <i class="mdi mdi-contacts menu-icon"></i>
                                    <span class="menu-title">Icons</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}/pages/charts/chartjs.html">
                                    <i class="mdi mdi-chart-bar menu-icon"></i>
                                    <span class="menu-title">Charts</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/') }}/pages/tables/basic-table.html">
                                    <i class="mdi mdi-table-large menu-icon"></i>
                                    <span class="menu-title">Tables</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </nav>
            </div>

            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="page-header">
                            <h3 class="page-title">Edit Home</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Edit  </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="alert alert-success" role="alert">
                                            This is a success alert—check it out!
                                        </div>

                                        <div class="alert alert-danger" role="alert">
                                            This is a danger alert—check it out!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"></h4>
                                        <p class="card-description"></p>
                                        <form class="forms-sample"  method="post" url="backend/edit">
  {{ csrf_field() }}
                                            <?php if (!empty($data['id'])) { ?>
                                                <input name="HndId" type="hidden" <?php echo $data['id']; ?>"> <?php } ?>
                                            <?php if (!empty($data['src'])) { ?>
                                                <div class="form-group">
                                                    <input name="HndType" type="hidden" value="img">
                                                    <img src="{{ URL::to('/') }}<?php echo '/' . $data['src']; ?>"  style="
                                                         width: 354px;
                                                         height: 220px;
                                                         " class="img-rounded" alt="Cinque Terre">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail3">Url</label>
                                                    <input type="text" name ="InputUrl" class="form-control" id="exampleInputEmail3" placeholder="Url"  value="<?php echo $data["hyp_info"]; ?>"/>
                                                </div>

                                                <div class="form-group">
                                                    <label>Image upload</label>
                                                    <input type="file" name="InputImg[]" class="file-upload-default" />
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                                                        <span class="input-group-append">
                                                            <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            <?php } else { ?>

                                                <input name="HndType" type="hidden" value="contact_info">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail3">Description</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" />
                                                </div>
                                            <?php } ?>



                                            <button type="submit" class="btn btn-primary mr-2"> Edit </button>
                                            <button class="btn btn-light">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:{{ URL::to('/') }}/partials/_footer.html -->
                    <footer class="footer">
                        <div class="container">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">© Copyright 2020 <a href="https://www.bootstrapdash.com/" target="_blank">SLTC</a>. All rights reserved.</span>
                            </div>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ URL::to('/') }}/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ URL::to('/') }}/assets/vendors/select2/select2.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ URL::to('/') }}/assets/js/off-canvas.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/hoverable-collapse.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/misc.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/settings.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="{{ URL::to('/') }}/assets/js/file-upload.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/typeahead.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/select2.js"></script>
        <!-- End custom js for this page -->
    </body>
</html>