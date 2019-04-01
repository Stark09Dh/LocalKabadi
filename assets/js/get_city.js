var get_city={
init:function(){
console.log("get_city");
	
$("#state").change(function () {
	console.log('state')
    var id = $("#state :selected").attr('value');
	console.log('state'+id)
	get_city.getcity(id);
	
});


$( "#state" ).trigger( "change" );

},
getcity:function(id){
console.log(id);


$.ajax({
        url: 'get_city.php',
        type: 'POST',
        data: {'id':id} ,
     //   contentType: 'application/json; charset=utf-8',
	// cache: false,
        success:get_city.getcityCallback ,
        error: function () {
            //your error code
        }
    }); 




},


getcityCallback:function(data, status){
	console.log(data);
//	console.log(status);
	$("#city").html(data)
	
	
}




}

$("document").ready(function(){

get_city.init();	
	
});