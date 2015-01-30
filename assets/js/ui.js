$(document).ready(function(){

	$('#loading').hide();

	$('#page').show();

});


function show(id)
{
	$('#detail_'+id).toggle();
}