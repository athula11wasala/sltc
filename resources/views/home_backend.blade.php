@include('layouts.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
   <div class="main-panel">
      <div class="content-wrapper pb-0">
         <!-- end -->
         <!-- table row starts here -->
         <div class="row">
            <div class="col-xl-8 grid-margin">
               <div class="card stretch-card mb-4">
                  <div class="card-body d-flex flex-wrap justify-content-between">
                     <div id="carousel-example-1z"  style=" width:100%; height: 500px !important;" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                           <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                           <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                           <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner"   role="listbox">
                           <?php 
                              $num = 0;
                              foreach ($data as $row_header) {   
                                  if ($num == 1) {
                                      $carsoul_type = "active";
                                  } else {
                                      $carsoul_type = "item";
                                  }
                              
                                  if ($num < 4) {
                                      unset($data[$num]);
                                      ?>
                           <div class="carousel-item <?php echo $carsoul_type; ?>">
                              <img class=" img-fluid w-100"  data-type="img" data-id="<?php echo $row_header->id ?>" href="<?php echo $row_header->hyf_info ?>"
                                 src="{{ URL::to('/') }}<?php echo "/" . $row_header->src ?>"
                                 style="height: 455px !important;"
                                 alt="">
                           </div>
                           <?php } $num++;
                              } ?>
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                     </div>
                  </div>
                  <div>
                     <div class="text-center "> <button id='btnSlideClick' type="submit" class="btn btn-primary mb-2"> Modify </button> 
                     </div>
                  </div>
               </div>
            </div>
            <?php  if (isset($data[4])) { ?>
            <div class="col-xl-4 stretch-card grid-margin">
               <div class="card stretch-card mb-4">
                  <div class="card-body d-flex flex-wrap justify-content-between">
                     <div>
                        <img  style="height: 455px !important;"
                           class="img-fluid w-100" 
                           data-type="img" data-id="<?php echo $data[4]->id ?>"
                           href="<?php echo $data[4]->hyf_info ?>"
                           src="{{ URL::to('/') }}<?php echo "/" . $data[4]->src ?>"
                           alt="" />
                     </div>
                  </div>
                  <div>
                     <div class="text-center ">    <button id='btnClick' type="submit" 
                        data-type="img" 
                        data-id="<?php echo $data[4]->id ?>"
                        class="btn btn-primary mb-2"> Modify </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php } ?>
         <!-- image card row starts here -->
         <div class="row">
            <?php
               if (isset($data[4])) {
                   unset($data[4]);
               }
               $i = 0;
               
               foreach ($data as $rows) {
                   ?>
            <div class="col-sm-3 stretch-card grid-margin">
               <div class="card">
                  <div class="card-body p-0" >
                     <img class="img-fluid w-100"  data-type="img" data-id="<?php echo $rows->id ?>" 
                        href="<?php echo $rows->hyf_info ?>"
                        src="{{ URL::to('/') }}<?php echo "/" . $rows->src ?>"
                        style="height: 223 !important;"
                        alt="" />
                  </div>
                  <div class="card-body px-3 text-dark">
                     <div class="d-flex justify-content-between">
                        <p class="text-muted font-13 mb-0"></p>
                     </div>
                     <div class="d-flex justify-content-between font-weight-semibold">
                     </div>
                  </div>
                  <div class="text-center"><button id='btnClick' type="submit" 
                     data-type="img" 
                     data-id="<?php echo $rows->id ?>"
                     class="btn btn-primary mb-2"> Modify </button>  
                  </div>
               </div>
            </div>
            <?php //}   $i++; 
               }
               ?>
         </div>
         <!--  -->
         <!--/.Carousel Wrapper-->
         <!-- last row starts here -->
         <div class="row">
            <?php  
               $inc =0;
               foreach($contact as $rows_contact){?>
            <div class="col-sm-4 col-xl-4 stretch-card grid-margin">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex border-bottom mb-4 pb-2">
                        <div class="hexagon">
                           <div class="hex-mid hexagon-warning">
                              <i class="mdi mdi-fad mdi mdi-edge"></i>
                           </div>
                        </div>
                        <div class="pl-4">
                           <h4 class="font-weight-bold text-warning mb-0"><?php echo $rows_contact->symbol;   ?></h4>
                           <small class="text-muted"><b><?php echo $rows_contact->description;   ?></b></small>
                        </div>
                     </div>
                  </div>
                  <div>
                  </div>
                  <div>
                     <div class="text-center ">    <button id='btnClick' type="submit" 
                        data-type="contact" 
                        data-id="<?php echo $rows_contact->id ?>"
                        class="btn btn-primary mb-2"> Modify </button> 
                     </div>
                  </div>
               </div>
            </div>
            <?php 
               } ?>
         </div>
         <!-- end -->		  
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer" style="background: #2d3246;">
         <div class="container">
            <div class="row row-30">
               <div class="d-sm-flex justify-content-center justify-content-sm-between">
                  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">© Copyright 2020 <a href="https://www.bootstrapdash.com/" target="_blank">SLTC</a>. All rights reserved.</span>
               </div>
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