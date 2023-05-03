// sweet alert

$(document).ready(function() {
   // put Ajax here.

     $.ajax({
	    type:'POST',
	    url:'process.php',
	    data:{'Done!'},
	    success:function(data){
	      Swal.fire({
	        'title':'Successful',
	        'text' : data,
	        'type' : 'success'
	      })

	    },
	    error:function(data){
	      Swal.fire({
	        'title':'Errors',
	        'text' : 'There were errors whie saving the data',
	        'type' : 'error'
	      })
	      
	    }
});