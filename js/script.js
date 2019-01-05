$(document).ready(function() {
	$.ajax({

	  dataType: 'json',
	  url: 'tracker',
	  success: function(data){
	    $('#add_link select').html('<option value=' + data.Id_track + '>' + data.Name_track+ '</option>');
	  },
	  error: function(msg){
         alert(msg);
      }
	});
});