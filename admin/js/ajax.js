
$(".showModal").click(function () {
		
 // $(this).parent().parent().find('.view').text('read');
 $(this).parent().prev().text('read');

 // get id 
 // var id = $(this).attr('data-id');
 var id = $(this).data('id');


 $.post('functions/messages/update.php' ,{id} ,function(data){
 	console.log(data);
 });



})