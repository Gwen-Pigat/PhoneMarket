$(document).ready(function(){
	$(".container").fadeIn(1500);

	$("#vente_trigger").click(function(){
		$(".bloc_produit").toggle(500);
		$(".bloc_vente").toggle(500);
	});

	$("#loading").fadeIn(1000);

	$(".box").delay(5000).toggle(2000);

	$(".vente_trigger").click(function(){
		$(".bloc_produit").toggle(500);
		$(".bloc_vente").toggle(500);
	});
});