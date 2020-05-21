// HTML
function getRes1(e){
	var currentForm = $(e).parents('form');

	$.ajax({
	  type: "GET",
	  url: "league.php",
	  data: currentForm.serialize(),
	  success: function(result){
	  	$('#res1').html(result);
	  }
	});
}

// XML
function getRes2(e){
	var currentForm = $(e).parents('form');

	$.ajax({
	  type: "GET",
	  url: "date.php",
	  data: currentForm.serialize(),
	  dataType: "xml",
	  success: function(result){
	  	var output = "";
	  	$(result).find('game').each(function(){
	  		var id = $(this).find('id').text();
	  		var date = $(this).find('date').text();
	  		var place = $(this).find('place').text();
	  		var score = $(this).find('score').text();
	  		output += '<tr>'+'<td>'+id+'</td>' + '<td>'+date+'</td>' + '<td>'+place+'</td>' + '<td>'+score+'</td>' + '</tr>';
	  	})
  		$('#res2').html(output);
	  }
	});
}

// JSON
function getRes3(e){
	var currentForm = $(e).parents('form');

	$.ajax({
	  type: "GET",
	  url: "player.php",
	  data: currentForm.serialize(),
	  dataType: "json",
	  success: function(result){
	  	var output = "";
	  	for (var i = 0; i < result.length; i++) {
	  		output += '<tr>'+'<td>'+result[i].id+'</td>' + '<td>'+result[i].date+'</td>' + '<td>'+result[i].place+'</td>' + '<td>'+result[i].score+'</td>' + '</tr>';
	  	}
	  	$('#res3').html(output);
	  }
	});
}