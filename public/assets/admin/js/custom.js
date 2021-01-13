

$('body').on('change','#status',function(){

	   var id=$(this).attr('data-id');
	   //alert(id);

	   if(this.checked){
	   	var status=1;
	   }
	   else{
	   	status=0;
	   }
	   //alert(status);
	   $('.circle').show();

	   $.ajax({
	   	url:'active/'+id+'/'+status,
	   	method:'get',
	   	success: function(result){

	    $('.circle').hide();
	   		//console.log(result);
	   	}

	   });
	   });






	$(document).ready(function(){

		
//datepicker

		$('.datepicker').datepicker({
        format: "dd/mm/yy",
        weekStart: 1,
        todayBtn: "linked",
        todayHighlight: true
    });

//Select2 basic example
    $("#select").select2({
        placeholder: "Select a catagory",
        allowClear: true
    });	


    $('#summernote').summernote();

    $("#click").click(function(){


	$('p').hide(1000);
	});

});

	

	/*********************image preview*********************************/

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#show').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#image").change(function() {
  readURL(this);
});


	 


