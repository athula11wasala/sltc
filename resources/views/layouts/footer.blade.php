 <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ URL::to('/') }}/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ URL::to('/') }}/assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/vendors/chart.js/Chart.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/vendors/flot/jquery.flot.js"></script>
        <script src="{{ URL::to('/') }}/assets/vendors/flot/jquery.flot.resize.js"></script>
        <script src="{{ URL::to('/') }}/assets/vendors/flot/jquery.flot.categories.js"></script>
        <script src="{{ URL::to('/') }}/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
        <script src="{{ URL::to('/') }}/assets/vendors/flot/jquery.flot.stack.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ URL::to('/') }}/assets/js/off-canvas.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/hoverable-collapse.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/misc.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/settings.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <meta name="base_url" content="{{ URL::to('/') }}">
        <script src="{{ URL::to('/') }}/assets/js/dashboard.js"></script>
        <script>
$(document).ready(function () {
    $("#btnClick").click(function () {

        var id = document.querySelector('.carousel-item.active > img').getAttribute('data-id');
        var type = document.querySelector('.carousel-item.active > img').getAttribute('data-type');
        console.log(document.querySelector('.carousel-item.active > img').getAttribute('src'));
        var url = $('meta[name="base_url"]').attr('content');

        window.location = url + "/backend/edit/" + id + "/" + type;
    });
    ;
});


        </script>
        <!-- End custom js for this page -->
    </body>
</html>