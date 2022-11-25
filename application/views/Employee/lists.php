<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url();?>/css/Employee/lists.css">


<main class="container">
	<p>Hello 👋 I'm</p>
	<section class="animation">
		<div class="first"><div>Rohan Niraula</div></div>
		<div class="second"><div>Web Developer</div></div>
		<div class="third"><div>Software Engineer</div></div>
	</section>
</main>

<section class="wrapper">
	<div class="top">Employee Management System</div>
	<div class="bottom" aria-hidden="true">Employee Management System</div>
</section>

<?php if (!is_null($this->session->flashdata('error_message'))) { ?>
<div class="card card-outline-danger text-center w-25" id="flashCard">
		<?php echo $this->session->flashdata('error_message') ; ?>
	</div>
</div>
<?php } ?>

<a href="<?php echo base_url() ?>index.php/employee/edit">
	<button class="btn btn-outline-success float-end m-4">Add Employee</button>
</a>

<h1 style="color:hsl(0 0% 98%);" >Employee List, <span class="underlined underline-clip">PHP</span></h1>
<table class="zigzag">
	<tr class="">
		<th>Employee Name</th>
		<th>Employee Id</th>
		<th>Employee Email</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>

	<?php foreach ($employees as $employee) : ?>
		<tr>

			<td><?php echo $employee->employeeName; ?></td>
			<td><?php echo $employee->employeeId; ?></td>
			<td><?php echo $employee->employeeEmail; ?></td>
			<td><a href="<?php echo base_url()."index.php/employee/edit?id=" . $employee->employeeId?>">Edit</a></td>
			<td><a href="<?php echo base_url()."index.php/employee/delete?id=" . $employee->employeeId?>">Delete</a></td>
		</tr>
	<?php endforeach; ?>
</table>
<div class="employeeList">

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url() ?>js/Employee/lists.js"></script>
