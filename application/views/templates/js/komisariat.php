<script>
//$(document).ready(function(){
		//$('input[name="dob"]').val('1980-01-01');
			//$("#dob").datepicker("defaultDate",'01/01/1978');
	//$(window).load(function () {
		$(document).on('change', '#wilayah', function(){
            var wilayah = $("#wilayah").val();
            $.ajax({
               type : "POST",
               url  : "<?php echo base_url(); ?>index.php/dashboard/komisariat",
               data : "wilayah=" + wilayah,
               success: function(data){
                   $("#komisariat").html(data);
               }
            });
        });
		$(document).on('change', '#wilayahmodal', function(){
            var wilayahmodal = $("#wilayahmodal").val();
            $.ajax({
               type : "POST",
               url  : "<?php echo base_url(); ?>index.php/dashboard/komisariatmodal",
               data : "wilayahmodal=" + wilayahmodal,
               success: function(data){
                   $("#komisariatmodal").html(data);
               }
            });
        });
		$(document).on('change', '#wilayahmodaledit', function(){
            var wilayahmodaledit = $("#wilayahmodaledit").val();
            $.ajax({
               type : "POST",
               url  : "<?php echo base_url(); ?>index.php/dashboard/komisariatmodaledit",
               data : "wilayahmodaledit=" + wilayahmodaledit,
               success: function(data){
                   $("#komisariatmodaledit").html(data);
               }
            });
        });
	//});
</script>

