@include('layouts.header')
     <meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
                     @include('layouts.message')
                            
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"></h4>
                                        <p class="card-description"></p>
                                        <form class="forms-sample" enctype="multipart/form-data"   'files' = 'true' method="post"  action="{{url("backend/update")}}" >
                            
                                            
                                                
                                            
                                       {{ csrf_field() }}
                                            <?php if (!empty($data['id'])) { ?>
                                                <input name="HndId" type="hidden" value="<?php echo $data['id']; ?>> <?php } ?>"  /> 
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
                                                    <div class="input-group col-xs-12">
                                                        <span class="input-group-append">
                                                             <input  class="file-upload-browse btn btn-success" type="file" name="InputImg" id="fileToUpload">
                                                          
                                                        </span>
                                                    </div>
                                                </div>
                                            <?php } else { ?>

                                                <input name="HndType" type="hidden" value="contact_info">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail3">Description</label>
                                                    <input type="text" name='InputContact' class="form-control" id="exampleInputEmail3" placeholder="Email" />
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