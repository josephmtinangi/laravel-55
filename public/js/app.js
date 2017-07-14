$(document).ready(function() {

	var token = $('meta[name="csrf-token"]').attr('content');

	$('.delete-post').click(function () {
		var post_id = $(this).val();

		swal({
		  title: "Delete Post",
		  text: "Are you sure that you want to delete this post?",
		  type: "info",
		  showCancelButton: true,
		  closeOnConfirm: false,
		  showLoaderOnConfirm: true,
		},
		function(){
		  $.ajax({
		  	type: "DELETE",
		  	data: '_token=' + token,
		  	url: '/dashboard/posts/' + post_id,
		  	success: function (data) {
		  		if(data.deleted){
					swal({
					  title: "Deleted!",
					  type: 'success',
					  showCancelButton: false,
					  showConfirmButton: true
					}, function() {
						location.reload();
					});
		  		}
		  	},
		  	error: function (data) {
		  		console.log('Error: ', data);
		  	}	
		  })
		});
	});
});
