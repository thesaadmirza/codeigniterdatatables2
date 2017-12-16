<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
</head>
<body>

<div id="container" class="container">
	<h1>Welcome to CodeIgniter!</h1>
	<div class="table table-responsive">
		<table class="table" id="datatable">
		<thead>
			<tr>
				<td>ID</td>
				<td>tweet</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
	</div>
	
</div>
<script type="text/javascript">
    $(document).ready(function() {
    $('#datatable').DataTable( {
        "processing": true,
        "serverSide": true,

        "ajax": {
            "url": "<?= base_url(); ?>index.php/Welcome/get_tweets",
            "type": "POST"
        },
        "columns": [
            { "data": "id" },
            { "data": "tweet"},
            {"data" : "edit"},
            {"data" : "delete"}
       
        ]
    } );
} );
</script>
</body>
</html>