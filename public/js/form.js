var diction = {
	A1: ["B1", "B2", "B3"],
	A2: ["B4", "B5", "B6"]
  }
  $('#A').on('change', function() {
	$('#B').html(
	  diction[$(this).val()].reduce(function(p, c) {
		return p.concat('<option value="' + c + '">' + c + '</option>');
	  }, '')
	);
  }).trigger('change');