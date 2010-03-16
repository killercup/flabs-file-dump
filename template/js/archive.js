$(function() {

jQuery.expr[':'].Contains = function(a,i,m){
    return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase())>=0;
};

$("#archive li").each(function(i) {
	$(this).attr("data-id", "id-"+i)
});
	
$original = $("#archive").clone();

$("#footer form").keyup(function(pd) {
	pd.preventDefault();

/*	$filtered = $original.clone();
	search = $("#search").val();
	
	$filtered.find("li:contains('"+search.toUpperCase()+"')").remove();
	
	$("#archive").empty().append($filtered);
	
//	$("#archive").quicksand($filtered);

*/
	
	$("#archive li").hide();
	$("#archive").find("li:Contains('"+$("#search").val().toLowerCase()+"')").show();
	
});

});