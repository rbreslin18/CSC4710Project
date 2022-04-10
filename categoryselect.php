<?php
    include("data_layer.php");

    function create_tasks_table() {
        //  Request for student data
        $tasks = db_get_task_category();
        // Create table with student data
     
        foreach ($tasks as $r) {
            
            echo '<option value = "' . $r[0] . '">' . $r[0] . '</option>';
            
        }
       
    }
?>

<!DOCTYPE html>

<html lan="en">
<head>
      <meta charset="utf-8">
      <title>Select Category</title>
</head>
<body>
    <h1>Select Category</h1>
    <form method="POST" action="tasksbycategory.php">
        <select name="category">
            <?php
             create_tasks_table();
            
            ?>
           
        </select>
       
       
        <input type="submit" value="Choose category" />
    </form>
</body>
</html>