$(document).ready(function () {

	$('#employeeSubmit').click(function (e) {
		console.log("clicked");
		e.preventDefault();
		console.log($('#form').serializeArray());
		$.ajax({
			type: "POST",
			url: window.location + "/edit",

			data: $('#form').serialize(),

			datatype: "json",
			success: function (data) {
				try {
					data = JSON.parse(data);
					$('#validationErrors').html(data.errors);
					console.log(data);
				} catch (e) {

					document.location.assign(window.location.href.replace('edit', 'lists'));
				}

			}
		});
	});
	if (window.location.href.includes('?id')) {

		$('#employeeEmail').after('<input type="hidden" name="employee[employeeId]" id="employeeId" value="">');
		$.get(window.location.href, function (data) {
			data = JSON.parse(data);
			// console.log(data);
			$('#employeeName').val(data.employeeName);
			$('#employeeId').val(data.employeeId);
			$('#employeeEmail').val(data.employeeEmail);

		})
	}

})

