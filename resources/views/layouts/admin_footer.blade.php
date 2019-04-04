<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">{{ \Carbon\Carbon::now()->year }} © Copyright <span class="d-none d-sm-inline-block">Unpeep</span></div>
        </div>
    </div>
</footer><!-- End Footer --><!-- jQuery  -->
<script src="{{ URL::asset('assets') }}/js/jquery.min.js"></script>
<script src="{{ URL::asset('assets') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ URL::asset('assets') }}/js/jquery.slimscroll.js"></script>
<script src="{{ URL::asset('assets') }}/js/waves.min.js"></script><!--Chartist Chart-->
<script src="{{ URL::asset('assets') }}/plugins/chartist/js/chartist.min.js"></script>
<script src="{{ URL::asset('assets') }}/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script><!-- peity JS -->
<script src="{{ URL::asset('assets') }}/plugins/peity-chart/jquery.peity.min.js"></script>
<script src="{{ URL::asset('assets') }}/pages/dashboard.js"></script><!-- App js -->
<script src="{{ URL::asset('assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ URL::asset('assets') }}/plugins/datatables/dataTables.bootstrap4.min.js"></script><!-- Buttons examples -->
<script src="{{ URL::asset('assets') }}/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="{{ URL::asset('assets') }}/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="{{ URL::asset('assets') }}/plugins/datatables/jszip.min.js"></script>
<script src="{{ URL::asset('assets') }}/plugins/datatables/pdfmake.min.js"></script>
<script src="{{ URL::asset('assets') }}/plugins/datatables/vfs_fonts.js"></script>
<script src="{{ URL::asset('assets') }}/plugins/datatables/buttons.html5.min.js"></script>
<script src="{{ URL::asset('assets') }}/plugins/datatables/buttons.print.min.js"></script>
<script src="{{ URL::asset('assets') }}/plugins/datatables/buttons.colVis.min.js"></script><!-- Responsive examples -->
<script src="{{ URL::asset('assets') }}/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="{{ URL::asset('assets') }}/plugins/datatables/responsive.bootstrap4.min.js"></script><!-- Datatable init js -->
<script src="{{ URL::asset('assets') }}/pages/datatables.init.js"></script><!-- App js -->
<script src="{{ URL::asset('assets') }}/plugins/summernote/summernote-bs4.min.js"></script><!-- App js -->
<script>jQuery(document).ready(function () {

        $('.summernote').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });
    });</script>
<script src="{{ URL::asset('assets') }}/js/app.js"></script>
<!-- Hotjar Tracking Code for www.unpeep.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1143508,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</body>
</html>