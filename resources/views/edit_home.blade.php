
@include('layouts.header')
    

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
       
        @include('layouts.footer')