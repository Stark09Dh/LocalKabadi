var add_row={
init:function(){
console.log("add_row");
	
$("#add").click(function () {
	console.log('add_row')
    var id = $('#add_in').attr('value');
	console.log('add_row='+id)
	add_row.addrow(id)
	$('#add_in').attr('value',parseFloat(id)+1);
	console.log("updated id="+$('#add_in').attr('value'));
	$('#remove').attr('data-id',parseFloat(id))
	if(id<2)
		$("#remove").attr("disabled", "disabled");
	else 
		$("#remove").removeAttr("disabled");
	
});


$( "#add" ).trigger( "click" );

},
addrow:function(id){
console.log(id);


$.ajax({
        url: 'add_row_mat.php',
        type: 'POST',
        data: {'id':id} ,
     //   contentType: 'application/json; charset=utf-8',
	// cache: false,
        success:add_row.addrowCallback ,
        error: function () {
            //your error code
        }
    }); 




},


addrowCallback:function(data, status){
	
	console.log(data);
//	console.log(status);
	$("#mat_table").append(data)
	
	
}




}

$("#remove").click(function()
{
	
	var id= $(this).attr('data-id')
	console.log('in remove: '+id)
	$('#tr_'+id).remove();
	$('#add_in').attr('value',parseFloat(id));
	$( ".qty" ).trigger( "change" );
	$('#remove').attr('data-id',parseFloat(id)-1)
	if(id<=2)
		$("#remove").attr("disabled", "disabled");
})
$("document").ready(function(){

add_row.init();	
	
});