<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
    <form action="index.php" method="post">
        <input type = "text" name = "task" placeholder="ENTER YOUR TASK">
        <br>
        <br>
        <input type = "text" name = "day" placeholder="DD/MM/YY">
        <br>
        <br>
<select name="status">
    <option value="">-- Select Status --</option>
    <option value="DONE">DONE</option>
    <option value="ONGOING">ONGOING</option>
    <option value="NOT STARTED">NOT STARTED</option>
</select>
        <br><br>
<p>Priority:</p>

<input type="radio" name="priority" value="LOW" id="low">
<label for="low">Low</label>

<input type="radio" name="priority" value="MEDIUM" id="medium">
<label for="medium">Medium</label>

<input type="radio" name="priority" value="HIGH" id="high">
<label for="high">High</label>
         <br><br>
    


        <button type="submit" name ="done" placeholder="done">Completed</button>
</form>

</head>
<body>
    
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","todo_db");
if(!$conn)
{
 die("Database failed");
}
if(isset($_POST['done']))
{
    $task = $_POST['task'];
    $status = $_POST['status'];
    $day = $_POST['day'];
    $priority = $_POST['priority'];
    $query = "INSERT into tasks (task,day,status,priority) values ('$task','$day','$status','$priority') ";
  mysqli_query($conn,$query);
}
echo $day;
exit;


?>
