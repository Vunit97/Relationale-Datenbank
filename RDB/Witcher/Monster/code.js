
$(document).ready(function(){
	$(".monster").click(function(e){
		var name = $(this).html();
		$("#monster_pic").attr("src",name+".png");
		console.log(name);
		$.ajax({
			url: 'monster_query.php',
			data: {
				name:name
			},
			type: 'post',
			cache: false,
			async: false,
			dataType: 'json',
			success: function(rows){
				console.log(rows);


				if(rows[0].MONSTER == name){
					console.log("Works");
					var traenke = rows[0].TRÄNKE;
					var bomben = rows[0].BOMBEN;
					var zeichen = rows[0].ZAUBER;
					var oel = rows[0].ÖLE;
					var resistenzen = rows[0].RESISTENZEN;

					var bewegung = rows[1].BEWEGUNGSFÄHIGKEIT;
					var variation = rows[1].VARIATION;
					var monster_name = rows[1].MONSTER;
					var klasse = rows[1].TYP;

					var region = rows[2].REGION;
					var vorkommen = rows[2].VORKOMMEN;



					$("#traenke").html("<i>Tränke:</i> " + traenke);
					$("#bomben").html("<i>Bomben:</i> " + bomben);
					$("#oel").html("<i>Öl:</i> " + oel);
					$("#zeichen").html("<i>Zeichen:</i> " + zeichen);
					$("#resistenzen").html(resistenzen);

					$("#vorkommen").html(vorkommen);
					$("#monster_name").html(monster_name);
					$("#klasse").html(klasse);

					$("#variation").html(variation);
					$("#bewegung").html(bewegung);
					$("#region").html(region);
				}

			}
		});
		e.preventDefault();
	});
	$(".logo").on("mouseenter",function(){
		$(".logo").animate({
			width: "130px",
			height: "110px"
		});
	});
	$(".logo").on("mouseleave",function(){
		$(".logo").animate({
			width: "120px",
			height: "100px"
		});
	});


});
