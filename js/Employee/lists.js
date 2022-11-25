$(document).ready(function () {
	let table = '<h1 style="color:hsl(0 0% 98%);">Employee List, <span class="underlined underline-clip">JQuery</span></h1>\n' +
		'<table class="zigzag">' +
		'<tr><th>Employee Name</th> <th>Employee Id</th> <th>Employee Email</th><th>Update </th> <th>Delete </th></tr>';

	$.get(window.location + '/index.php/employee/lists', function (data, status) {
		data = JSON.parse(data);
		data.forEach(function (employee) {

			// console.log("rohan");
			table += '<tr>';
			table += '<td>' + employee['employeeName'] + '</td>';
			table += '<td>' + employee['employeeId'] + '</td>';
			table += '<td>' + employee['employeeEmail'] + '</td>';
			table += '<td><a href="edit?id=' + employee['employeeId'] +'">Edit' + '</a></td>';
			table += '<td><a href="delete?id=' + employee['employeeId'] +'">Delete' + '</a></td>';
			table += '</tr>';
		});

		table += '</table>';
		$('.employeeList').append(table);
	});

	$('#flashCard').fadeOut(4000);
})
