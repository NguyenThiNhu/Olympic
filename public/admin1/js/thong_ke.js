$(document).ready(function(){

         $('#luachon').click( function(){
          		if($('#r4').is(':checked')) 
	          	{ 
	          		$('#get_ngay').val("");
	          		$('#get_thang').val("");
	          		$('#get_nam').val("");
	          		$('#ngay').show();
	          		$('#thang').hide();
	          		$('#nam').hide();
	          		$('#datetimepicker1').datetimepicker({
		                format: 'DD-MM-YYYY'
		          	}); 

		          	 
	      		}
	          else if($('#r5').is(':checked'))
	          	{ 
	          		$('#get_ngay').val("");
	          		$('#get_thang').val("");
	          		$('#get_nam').val("");
	          		$('#ngay').hide();
	          		$('#thang').show();
	          		$('#nam').hide();
		          	$('#datetimepicker2').datetimepicker({
			                viewMode: 'months',
			                format: 'MM-YYYY'
			          }); 
		          	
	      		}
	      		else if($('#r6').is(':checked'))
	      		{
	      			$('#get_ngay').val("");
	      			$('#get_thang').val("");
	      			$('#get_nam').val("");
	      			$('#ngay').hide();
	          		$('#thang').hide();
	          		$('#nam').show();
	      			$('#datetimepicker3').datetimepicker({
		                viewMode: 'years',
		                format: 'YYYY'
		          });

	      		}	

        });
          
 });
