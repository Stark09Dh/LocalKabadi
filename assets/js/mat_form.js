$(".material").change(function () {
	console.log('add_rate')
    //var id = $("#state :selected").attr('data-value');
	var id = $(this).attr('data-value');
    var rate = $("option:selected", this).attr('data-rate');
	console.log('add_rate='+rate+'  id='+id)
	$("#mat_rt_"+id).html(rate);
	$( ".qty" ).trigger( "change" );
});

$( ".material" ).trigger( "change" );



$(".qty").change(function () {
	console.log('total')
    //var id = $("#state :selected").attr('data-value');
	var id = $(this).attr('data-value');
	var qty = $(this).val();
	if(qty<1)
	{	$(this).val(1)
	qty=1;}
    var rate = $("#mat_rt_"+id).html();
	console.log('qty='+qty+' rate='+rate)
	var total= qty*rate;
	console.log('total='+total)
	$("#mat_ttl_"+id).html(total),
	 totalfunc()
});

$( ".qty" ).trigger( "change" );


function totalfunc()
{
	var qty=0,total=0;
	
	$(".qty").each(function()
	{	
		qty+=Number($(this).val())
		//console.log("in qty: "+qty)
	})
	$("#qty_total").html(qty);
	
	$(".total").each(function()
	{
		total+=Number($(this).text())
		console.log("in total: "+total)
	})
	$("#net_total").html(total);
}
