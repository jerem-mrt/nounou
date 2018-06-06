<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="http://localhost/nounou/health-center-master/js/jquery.js"></script>
    </head>
    <body>
                                 <script type="text/javascript">
$(document).ready(function(){
	var MAX_FIELDS = 10;
	var fields = 1;
	
	$(":input[name='add']").click(function () {
		if (fields <= MAX_FIELDS) {
			$("div[id='creneau']:last").clone(true).insertAfter("div[id='creneau']:last");
			fields++;
		}
	});
});
</script>


<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<div id="creneau"><input type="time" name="creneau[]" id="creneau"/></div>
        <input name="add" type="button" value="Ajouter" />
</form>
    </body>
</html>
