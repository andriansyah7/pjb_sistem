<script src="{{asset('adminLTE')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminLTE')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminLTE')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminLTE')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminLTE')}}/dist/js/demo.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{asset('adminLTE')}}/plugins/jquery/jquery.min.js"></script>
<!-- Select2 -->
<script src="{{asset('adminLTE')}}/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('adminLTE')}}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="{{asset('adminLTE')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('adminLTE')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('adminLTE')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- page script -->
<script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>

<script type="text/javascript">
  $(function () {
    $('#timepicker').datetimepicker({
      format: 'LT'
    })  

    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('.datee').datetimepicker({
        format: 'YYYY/MM/DD'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    });
  });
  </script>
  

<script type="text/javascript">
  $(function () {
 

    $('.myTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive":true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('.myTable_wrapper .col-md-6:eq(0)');
  });

  $(function () {
    $('.select2').select2({
      theme: 'bootstrap4'
    });
    });
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.my').DataTable();
	});
</script>



<script type='text/javascript'>

$(document).ready(function(){

  // Department Change
  $('#unit_id').change(function(){
    
      console.log('asd');
     // Department id
     var unit_id = $(this).val();

     // Empty the dropdown
     $('#fungsi_id').find('option').not(':first').remove();

     // AJAX request 
     $.ajax({
       url: '/fungsi/'+unit_id,
       type: 'get',
       dataType: 'json',
       success: function(response){

         var len = 0;
         if(response['data'] != null){
           len = response['data'].length;
         }

         if(len > 0){
           // Read data and create <option >
           for(var i=0; i<len; i++){

             var fungsi_id = response['data'][i].fungsi_id;
             var fungsi_name = response['data'][i].fungsi_name;

             var option = "<option value='"+fungsi_id+"'>"+fungsi_name+"</option>"; 

             $('#fungsi_id').append(option); 
           }
         }

       }
    });
  });

});

</script>

