<?php
    include("data_layer.php");

    function create_tasks_table() {
        if ($_POST) {
        if (isset($_POST['category'])) {
        $category=$_POST['category'];
        $tasks = db_get_task_dataByCategory($category);
    }
        //  Request for student data
        
        // Create table with student data
        foreach ($tasks as $r) {
            echo "<tr>\n";
            echo "<td>" . $r[0] . "</td>\n";
            echo "<td>" . $r[1] . "</td>\n";
            echo "<td>" . $r[2] . "</td>\n";
	        echo "<td>" . $r[3] . "</td>\n";
	        echo "<td>" . $r[4] . "</td>\n";
	        echo "<td>" . $r[5] . "</td>\n";
           
            echo "</tr>\n";
        }
    }
    }
?>

<!DOCTYPE html>

<html lan="en">
<head>
      <meta charset="utf-8">
      <title>Tasks table</title>
</head>
<body>
    <h1>Tasks by Selected Category</h1>
    <table style="border: 1px solid black;">
        <tr>
            <th>ID</th>
            <th>description</th>
            <th>Due Date</th>
	    <th>Category</th>
	    <th>Priority</th>
	    <th>Status</th>
	   
            <!--<th></th>-->
        </tr>
        
        <?php
            create_tasks_table();    
        ?>
        
    </table>
     <p><a href="add_task.html">Add a task</a></p>
    <p><a href="tasks.php">Default View</a></p>
    <p><a href="updatetasks.php">Update a Task</a></p>
    <p><a href="categoryselect.php">Category View</a></p>
    <p><a href="dateselect.html">Completed Tasks by Certain Day</a></p>
</body>
</html>