<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
	  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url(); ?>/css/Employee/edit.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<?php echo form_open(base_url() . "index.php/employee/edit", array('id' => 'form')); ?>


<div class="login-root">
	<div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
		<div class="loginbackground box-background--white padding-top--64">
			<div class="loginbackground-gridContainer">
				<div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
					<div class="box-root"
						 style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
					</div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
					<div class="box-root box-divider--light-all-2 animationLeftRight tans3s"
						 style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
					<div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
					<div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
					<div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
					<div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
					<div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
					<div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
				</div>
				<div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
					<div class="box-root box-divider--light-all-2 animationRightLeft tans3s"
						 style="flex-grow: 1;"></div>
				</div>
			</div>
		</div>
		<div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
			<div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
				<h1>Save Employee</h1>
			</div>
			<div class="formbg-outer">
				<div class="formbg">
					<div class="formbg-inner padding-horizontal--48">
						<span class="padding-bottom--15">Fill the form</span>
						<span style="font-size: 14px;" id="validationErrors"><?php echo validation_errors(); ?></span>
						<form id="stripe-login">
							<div class="field padding-bottom--24">
								<div class="grid--50-50">
									<label for="employeeName">Employee Name:</label>
								</div>
								<input type="text" id="employeeName" name="employee[employeeName]"
									   value="<?php echo isset($employee) ? $employee->employeeName : set_value("employee[employeeName]"); ?>"><br><br>

							</div>
							<div class="field padding-bottom--24">
								<div class="grid--50-50">
									<label for="employeeEmail">Employee Email:</label>
								</div>
								<input type="text" id="employeeEmail" name="employee[employeeEmail]"
									   value="<?php echo isset($employee) ? $employee->employeeEmail : set_value("employee[employeeEmail]"); ?>"><br><br>
							</div>
							<div class="field padding-bottom--24">
								<input type="submit" value="Submit by PHP"><br>
								<input type="submit" id="employeeSubmit" value="Submit by JQuery">
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</form>


<script type="text/javascript" src="<?php echo base_url() ?>js/Employee/edit.js"></script>


