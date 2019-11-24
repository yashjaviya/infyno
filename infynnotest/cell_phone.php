<?php

$host = "localhost";
$user = "root";
$password ="";
$database = "test";

$id = "";
$cell_phones = "";
$brand = "";
$os_version = "";

$connect = mysqli_connect($host, $user, $password, $database);

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['cell_phones'];
    $posts[2] = $_POST['brand'];
    $posts[3] = $_POST['os_version'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM cell_phone WHERE id = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $cell_phones = $row['cell_phones'];
                $brand = $row['brand'];
                $os_version = $row['os_version'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `cell_phone`(`cell_phones`, `brand`, `os_version`) VALUES ('$data[1]','$data[2]',$data[3])";
 
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
			echo 'Data Inserted';
        }
    
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `cell_phone` WHERE `id` = $data[0]";
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `cell_phone` SET `cell_phones`='$data[1]',`brand`='$data[2]',`os_version`=$data[3] WHERE `id` = $data[0]";
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
}



?>


<!DOCTYPE Html>
<html>
    <head>
        <title>PHP INSERT UPDATE DELETE SEARCH</title>
    </head>
    <body>
        <form action="#" method="post">
            
            <input type="text" name="cell_phones" id="cell_phones" placeholder="cell_phones" value="<?php echo $cell_phones;?>" required><br><br>
            <input type="text" name="brand" id="brand" placeholder="brand" value="<?php echo $brand;?>"><br><br>
            <input type="number" name="os_version" id="os_version" placeholder="os_version" value="<?php echo $os_version;?>"required><br><br>
            <div>
                <!-- Input For Add Values To Database-->
                <input type="submit" name="insert" id="add" value="Add">
                
                <!-- Input For Edit Values -->
                <input type="submit" name="update" id="update" value="Update">
                
                <!-- Input For Clear Values -->
                <input type="submit" name="delete" id="delete" value="Delete">
                
            </div>
        </form>	
		
    </body>
</html>

<script type="text/javascript" src="./js/jquery-2.2.4.min.js"></script>
<script src="./js/jquery.js"></script>.
<script src="./js/bootstrap.min.js"></script>
<script src="./js/bootstrap.js"></script>

<script>
$(document).ready(function()
{
	$('#add').on('click',function()
	{
		var cell_phones = $('#cell_phones').val();
		var brand = $('#brand').val();
		var os_version = $('#os_version').val();
		
	});
});
</script>