<!-- 
id_quiz integer auto increment primary key, 
quiz_name varchar(200), 
quiz_url varchar(400), 
quiz_description text, 
quiz_additional_info text
quiz_tags text
-->

<script type="text/javascript">

	$(document).ready(function(){

		$("input#quiz_name").keyup(function(e){
		  var val = $(this).val();
		  val = val.replace(/[^\w]+/g, "_");  
		  $("input#quiz_url").val(val);
		});

		$(document).ready(function(){
    		$("#step_1").validate();
  		});

	});

</script>

<style type="text/css">
	textarea {
		resize: none;
	}
</style>

<form id="step_1" action="?function=maker&page=quiz_admin" method="post">
  <fieldset>
    <legend>Passo 1 - Informação do Inquérito</legend>
    
    <label for="quiz_name">Nome do inquérito</label>
    <input type="text" placeholder="Nome do inquérito..." id="quiz_name" class="required">
	
	<div class="input-prepend input-append">
		<label>URL</label>
		<span class="add-on">http://www.fcna.up.pt/quiz_maker/quizes/</span>
			<input class="span3 required" id="quiz_url" type="text">
		<span class="add-on"><i class="icon-remove"></i></span>
	</div>

	<label>Descrição</label>
	<textarea class="span4" rows="4"></textarea>

	<label>Informação adicional</label>
	<textarea class="span4" rows="4"></textarea>

	<label for="" >Tags</label>
	<input type="text" placeholder="tags separadas por espaço">
	<br>

    <button type="submit" class="btn">Criar quiz</button>
  </fieldset>
</form>