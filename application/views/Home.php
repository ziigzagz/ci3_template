<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<!-- 
        dashboard panel
     -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 table-responsive">
				<table id="example" class="display table table-striped " style="width:100%">
					<thead>
						<tr>
							<th>First Name</th>
							<th>Second Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Tiger</td>
							<td>Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td>2011-04-25</td>
						</tr>
						<tr>
							<td>Garrett</td>
							<td>Winters</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>63</td>
							<td>2011-07-25</td>
						</tr>
						<tr>
							<td>Ashton</td>
							<td>Cox</td>
							<td>Junior Technical Author</td>
							<td>San Francisco</td>
							<td>66</td>
							<td>2009-01-12</td>
						</tr>
						<tr>
							<td>Cedric</td>
							<td>Kelly</td>
							<td>Senior Javascript Developer</td>
							<td>Edinburgh</td>
							<td>22</td>
							<td>2012-03-29</td>
						</tr>
						<tr>
							<td>Airi</td>
							<td>Satou</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>33</td>
							<td>2008-11-28</td>
						</tr>

					</tbody>
					<tfoot>
						<tr>
							<th>First Name</th>
							<th>Second Name</th>
							<th>Position</th>
							<th>Office</th>
							<th>Start date</th>
							<th>Salary</th>
						</tr>
					</tfoot>
				</table>

			</div>
		</div>
	</div>
	<button onclick="Send()">send</button>
	<script>
		var host = "<?php echo base_url() ?>";

		function Send() {
			$.ajax(host + 'api/testapi/get_data', {
				data: {
					"username": "อิฟฟาน",
					"password": 456
				},
				contentType: "contentType/json",
				timeout: 3000,
				success: function(data) {
					console.log("success", data)
				},
				error: function(res) {
					console.log("error", res)
				},
				complete: function(res) {
					console.log("complete", res)
				}
			});
		}
	</script>
</body>

</html>
