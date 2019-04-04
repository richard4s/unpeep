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
{{--<script src="{{ URL::asset('assets') }}/js/alerts.js"></script>--}}
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
<script src="{{ URL::asset('assets') }}/plugins/dropzone/dist/dropzone.js"></script><!-- App js -->
<script src="{{ URL::asset('assets') }}/plugins/summernote/summernote-bs4.min.js"></script><!-- App js -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    jQuery(document).ready(function () {

        $('.summernote').summernote({
            height: 250,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });
    });

    function deletePosts(ID) {
        $.ajax({
            headers: {
                'X_CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/dashboard/deletePosts',
            data: {
                'id': ID,
            },
            success: function (data) {
                swal({
                    title: 'Deleted!',
                    text: 'Post has been successfully deleted!',
                    closeOnClickOutside: false,
                    icon: 'success'
                }).then(function() {
                    console.log('Successful');
                    window.location.reload();
                });

                // console.log(data);
            },
            error: function(data) {
                swal({
                    title: 'Not Deleted!',
                    text: 'Post was not deleted!',
                    closeOnClickOutside: false,
                    icon: 'error'
                }).then(function() {
                    console.log('Unsuccessful' + data);
                    window.location.reload();
                });

//                window.location.reload();
                // console.error(data);
            }
        });
    }

    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            success: function(file, response)
            {
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };

</script>
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