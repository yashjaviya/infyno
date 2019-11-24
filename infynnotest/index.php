<?php  include('php_code.php'); ?>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="./styles.css">
	<!--<link rel="stylesheet" href="./jquery.dataTables.min.css')">
	<link rel="stylesheet" type="text/css" href="./jquery.dataTables.css">-->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
	<?php $results = mysqli_query($db, "SELECT * FROM cell_phone"); ?>

<table id="example" class="display" style="width:100%">
	<thead>
		<tr>
			<th>Name</th>
			<th>Brand</th>
			<th>Os version</th>
			<th>Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['cell_phones']; ?></td>
			<td><?php echo $row['brand']; ?></td>
			<td><?php echo $row['os_version']; ?></td>
			<td>
				<a href="javascript:void(0)" class="edit_btn" id="edit" onclick="edit(<?php echo $row['id']; ?>)">Edit</a>
				<a href="javascript:void(0)" class="del_btn" onclick="delete_id(<?php echo $row['id']; ?>)">Delete</a>
			</td>
		</tr>
	<?php } ?>
	<tfoot>
         <tr>
			<th>Name</th>
			<th>Brand</th>
			<th>Os version</th>
			<th>Action</th>
		</tr>
     </tfoot>
</table>
	<form method="post">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" id="name" >
		</div>
		<div class="input-group">
			<label>Brand</label>
			<input type="text" name="brand" id="brand">
		</div>
		<div class="input-group">
			<label>Os version</label>
			<input type="text" name="os_version" id="os_version">
			<input type="text" name="id" id="id" hidden>
		</div>
		<div class="input-group">
			<button class="btn" type="button" name="save" id="save">Save</button>
			<button class="btn" type="button" name="edit_btn" id="edit_btn" hidden='true'>Update</button>
		</div>
	</form>
</body>

<script type="text/javascript" src="./js/jquery-2.2.4.min.js"></script>
<script src="./js/jquery.js"></script>.
<script src="./js/bootstrap.min.js"></script>
<script src="./js/bootstrap.js"></script>
<!--<script src="./js/dataTables.bootstrap4.js"></script>
<script src="./js/jquery.dataTables.js"></script>
<script src="./js/jquery.dataTables.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

</html>

<script>
$(document).ready(function()
{
	$('#example').DataTable( );
	
	$('#save').on('click',function()
	{
		var name = $('#name').val();
		var brand = $('#brand').val();
		var os_version = $('#os_version').val();
		$.ajax({
			type: 'POST',
			url: 'php_code.php',
			data: {cell_phones:name,brand:brand,os_version:os_version,submit:'submit'},
			success:function(data)
			{
				alert(data);
				location.reload();
			}
		});
	});
	
	$('#edit_btn').on('click',function()
	{
		var name = $('#name').val();
		var brand = $('#brand').val();
		var os_version = $('#os_version').val();
		var id = $('#id').val();
		$.ajax({
			type: 'POST',
			url: 'php_code.php',
			data: {cell_phones:name,brand:brand,os_version:os_version,update:'update',id:id},
			success:function(data)
			{
				alert(data);
				location.reload();
			}
		});
	});
});
function edit(id)
{
	$('#edit_btn').removeAttr('hidden','false');
	$('#save').attr('hidden','true');
	$.ajax({
		type: 'POST',
		url: 'php_code.php',
		data: {edit_id:id},
		dataType: 'json',
		success:function(data)
		{
			$('#name').val(data.cell_phones);
			$('#brand').val(data.brand);
			$('#os_version').val(data.os_version);
			$('#id').val(data.id);
		}
	});
}

function delete_id(id)
{
	$.ajax({
		type: 'POST',
		url: 'php_code.php',
		data: {delete_id:id},
		dataType: 'json',
		success:function(data)
		{
			alert(data);
			location.reload();
		}
	});
}
</script>