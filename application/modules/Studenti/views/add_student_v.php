<div class="row">
<div class="col-md-12">

	<form method= "POST" action = "<?php echo base_url(); ?>Studenti/post_student">

	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
			<label>meno</label>
				<input type=text" name="student_meno" class="form-control">
			</div>
		</div>

	
		<div class="col-md-12">
			<div class="form-group">
			<label>priezvisko</label>
				<input type=text" name="student_priezvisko" class="form-control">
			</div>
		</div>

	
		<div class="col-md-12">
			<div class="form-group">
			<label>stud.program</label>
				<input type=text" name="student_program" class="form-control">
			</div>
		</div>

	
		<div class="col-md-12">
			<div class="form-group">
			<label>rocnik</label>
				<input type=text" name="student_rocnik" class="form-control">
			</div>
		</div>

<div class="col-md-12">
<button class="btn btn-primary btn-large">Save details</button>
</div>

	</div>
</form>
</div>
