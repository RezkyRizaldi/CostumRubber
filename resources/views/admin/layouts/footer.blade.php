<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT
            &copy; 2020<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio"
                target="_blank">Rull Rubber</a>| All rights Reserved</span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="/admin/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="/admin/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="/admin/app-assets/vendors/js/extensions/tether.min.js"></script>
<script src="/admin/app-assets/vendors/js/extensions/shepherd.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/admin/app-assets/js/core/app-menu.js"></script>
<script src="/admin/app-assets/js/core/app.js"></script>
<script src="/admin/app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="/admin/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
<!-- END: Page JS-->

<!-- JS code -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js">
</script>
<script src="/admin/assets/bootstrap-4.5.0-dist/js/bootstap.js">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function(){
        var table = $('#dataTable').DataTable();

        // Start Edit Record
        table.on('click','.edit',function(){

            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }
            var data = table.row($tr).data();
            console.log(data);
            $('#product').val(data[1]);
            // $('#image').val(data[2]);
            $('#description').val(data[3]);
            $('#type').find(':selected');
            $('#price').val(data[5]);
            $('#formEdit').attr('action','/admin/product/edit_product/'+data[0]);
            $('#edit').modal('show');
        });
    });
</script>
<!--JS below-->
