</div> <!-- container -->

</div> <!-- content -->

<!--footer class="footer text-right">
    2017 - 2018 © Ibn Batuta
</footer-->

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="{{ asset("backend/assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("backend/assets/js/popper.min.js") }}"></script>
<script src="{{ asset("backend/assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("backend/assets/js/metisMenu.min.js") }}"></script>
<script src="{{ asset("backend/assets/js/waves.js") }}"></script>
<script src="{{ asset("backend/assets/js/jquery.slimscroll.js") }}"></script>
<script src="{{ asset("backend/plugins/waypoints/lib/jquery.waypoints.min.js") }}"></script>
<script src="{{ asset("backend/plugins/counterup/jquery.counterup.min.js") }}"></script>

<!-- Chart JS -->
<script src="{{ asset("backend/plugins/chart.js/chart.bundle.js") }}"></script>

<!-- init dashboard -->
<script src="{{ asset("backend/assets/pages/jquery.dashboard.init.js") }}"></script>

<!-- Parsley js -->
<script type="text/javascript" src="{{ asset("backend/plugins/parsleyjs/parsley.min.js") }}"></script>
<script type="text/javascript">
  function check_all() {
 
  $('input[class="item_checkbox"]:checkbox').each(function(){
       if($('input[class="check_all"]:checkbox:checked').length==0){
           $(this).prop('checked',false)
        }else{
          $(this).prop('checked',true)
             }
    });
}
check_all();
 function delete_all() {

$(document).on('click', '.del_all', function(){
   $('#form_data').submit();
});

  $(document).on('click', '.delBtn', function(){
    var item_checked= $('input[class="item_checkbox"]:checkbox:checked').length;
      if(item_checked>0){
        $('.not_empty_record').css("display", "block");
        $('.empty_record').css("display", "none");
        $('.record_count').text(item_checked);
        }else{
        $('.empty_record').css("display", "block");
        $('.not_empty_record').css("display", "none");
        $('.record_count').text('');
        }
      
   $('#multipaleDelete').modal('show');
    // do the button binding work..
});
 }
 delete_all(); 
</script>

<!-- Required datatable js -->
<script src="{{ asset("backend/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("backend/plugins/datatables/dataTables.bootstrap4.min.js") }}"></script>
<!-- Buttons examples -->
<script src="{{ asset("backend/plugins/datatables/dataTables.buttons.min.js") }}"></script>
<script src="{{ asset("backend/plugins/datatables/buttons.bootstrap4.min.js") }}"></script>
<script src="{{ asset("backend/plugins/datatables/jszip.min.js") }}"></script>
<script src="{{ asset("backend/plugins/datatables/pdfmake.min.js") }}"></script>
<script src="{{ asset("backend/plugins/datatables/vfs_fonts.js") }}"></script>
<script src="{{ asset("backend/plugins/datatables/buttons.html5.min.js") }}"></script>
<script src="{{ asset("backend/plugins/datatables/buttons.print.min.js") }}"></script>
<!-- Responsive examples -->
<script src="{{ asset("backend/plugins/datatables/dataTables.responsive.min.js") }}"></script>
<script src="{{ asset("backend/plugins/datatables/responsive.bootstrap4.min.js") }}"></script>

<!-- App js -->
<script src="{{ asset("backend/assets/js/jquery.core.js") }}"></script>
<script src="{{ asset("backend/assets/js/jquery.app.js") }}"></script>
<script src="{{ asset("backend/assets/js/custom.js") }}"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBitu1HtfLyw71gOXPX-JoNErtXsgq_tyk&libraries=places&callback=initAutocomplete"
        async defer></script>

</body>
</html>

