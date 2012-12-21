<script type="text/javascript">
	
	$(document).ready(function(){
		$("#users_info").validate();
	});

		

</script>




<form id="users_info" method="post" action="?function=maker&page=quiz_users">
	<fieldset>
		
		
		<label for="user_email">E-Mail</label>
		<input type="text" placeholder="e-mail" id="user_email" class="span5 required email">
		
		<label for="first_name">Primeiro Nome</label>
		<input type="text" name="" id="first_name" class="required">
		
		<label for="last_name">Último Nome</label>
		<input type="text" name="" id="last_name" class="required">
		
		<label for="gender">Género</label>
		<select name="" id="gender">
			<option value="">Masculino</option>
			<option value="">Feminino</option>
		</select>
		<br /><br />
		<button onclick="ajax_post()" class="btn">Adicionar colaborador</button>
	</fieldset>
</form>

<script type="text/javascript">
	
	function ajax_post() {
			//Create XMLHttpRequest Object
			var hr = new XMLHttpRequest();

			//Create some variables we need to our PHP file
			var url = "maker/quiz_users.add.php";
			var user_email = document.getElementById('user_email').value;
			var first_name = document.getElementById('first_name').value;
			var last_name = document.getElementById('last_name').value;
			var gender = document.getElementById('gender').value;

			var vars = "user_email"+user_email;

			hr.open("POST", url, true);

			//Set content type header information for sending url encoded variables in the request
			hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

			//Access the onreadystatechange event for the XMLHttpRequest object
			hr.onreadystatechange = function() {
				if(hr.readyState == 4 && hr.status == 200) {
					var.return_data = hr.responseText;
					document.getElementById("status").innerHTML = return_data;
				}
			}
		}

		hr.send(vars);
		document.getElementById("status").innerHTML = "a registar...";

		var name = $("input#name").val();
		var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone;  
		
		var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone;
		//alert (dataString);return false;
		$.ajax({
			type: "POST",
			url: "bin/process.php",
			data: dataString,
			success: function() {
				$('#contact_form').html("<div id='message'></div>");
				$('#message').html("<h2>Contact Form Submitted!</h2>")
				.append("<p>We will be in touch soon.</p>")
				.hide()
				.fadeIn(1500, function() {
					$('#message').append("<img id='checkmark' src='images/check.png' />");
				});
			}
		});
		return false;



</script>