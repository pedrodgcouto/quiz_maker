<!--
id_user integer auto increment primary key, 
first_name varchar(200), 
last_name varchar(200), 
email varchar (300), 
gender varchar(60), 
role varchar(80)
-->

<!-- First one is for the admin -->

<script type="text/javascript">

	$(document).ready(function(){

		$("input#quiz_name").keyup(function(e){
		  var val = $(this).val();
		  val = val.replace(/[^\w]+/g, "_");  
		  $("input#quiz_url").val(val);
		});

		$(document).ready(function(){
    		$("#admin_info").validate();
  		});

	});

</script>


<form id="admin_info" method="post" action="?function=maker&page=quiz_users">
	<fieldset>
		<legend>Passo 2 - Informação de Administrador</legend>
		
		<label for="admin_email">E-Mail</label>
		<input type="text" placeholder="e-mail" id="admin_email" class="span5 required email">
		
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
		<button type="submit" class="btn">Seguinte</button>
	</fieldset>
</form>