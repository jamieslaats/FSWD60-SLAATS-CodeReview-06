<?php
require_once 'db_connect.php';

$sql = "SELECT * FROM `userdata`";

       //when createing above like this `authors`.Name as authorName it is making it more simple to remember and link the name. Then used below. 
$result = $connect->query($sql);

echo "<table border='0' cellspacing='0' cellpadding='0' class='table table-bordered table-condensed'>
<thead>
<h1> VIEW USER DATA</h1>
<tr>
<th>UserID</th>
<th>First Name</th>
<th>Surname</th>
<th>Email</th>
<th>Password</th>
<th>Status</th>
<th>EmployeeID</th>
<th>Created On</th>
<th>Modified</th>
<th>Edit/Delete</th>

</tr>
</thead>
<tbody>";

if($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
   echo "<tr>
   <td>".$row['User_ID']."</td>
   <td>".$row['Firstname']."</td>
   <td>".$row['Surname']."</td>
   <td>".$row['Email']."</td>
   <td>".$row['Password']."</td>
   <td>".$row['Status']."</td>
   <td>".$row['Empl_ID']."</td>
   <td>".$row['Created']."</td>
   <td>".$row['Modified']."</td>
   <td> 
   <a href='updatemedia.php?User_ID=".$row['User_ID']."'><button type='button'><i class='fas fa-edit'></i></button></a>
   <a href='deletemedia.php?User_ID=".$row['User_ID']."'><button type='button'><i class='fas fa-trash-alt'></i></button></a>
   </tr>";

 }
} else {
 echo "<tr><td colspan='8'><center>No Data Avaliable</center></td></tr>";
}
echo "</tbody></table>";

$connect->close();
?>