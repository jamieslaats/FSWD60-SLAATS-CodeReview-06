<?php
require_once 'db_connect.php';

$sql = "SELECT * FROM `addressdata`";

       //when createing above like this `authors`.Name as authorName it is making it more simple to remember and link the name. Then used below. 
$result = $connect->query($sql);

echo "<table border='0' cellspacing='0' cellpadding='0' class='table table-bordered table-condensed'>
<thead>
<h1> VIEW ADDRESS DATA</h1>
<tr>
<th>AddressID</th>
<th>Street</th>
<th>City</th>
<th>State</th>
<th>PostCode/ZIP</th>
<th>Country</th>
<th>Created On</th>
<th>Modified</th>
<th>Edit/Delete</th>

</tr>
</thead>
<tbody>";

if($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
   echo "<tr>
   <td>".$row['Address_ID']."</td>
   <td>".$row['Street']."</td>
   <td>".$row['City']."</td>
   <td>".$row['State']."</td>
   <td>".$row['Postcode']."</td>
   <td>".$row['Country']."</td>
   <td>".$row['Created']."</td>
   <td>".$row['Modified']."</td>
   <td> 
  <a href='updatemedia.php?Address_ID=".$row['Address_ID']."'><button type='button'><i class='fas fa-edit'></i></button></a>
  <a href='deletemedia.php?Address_ID=".$row['Address_ID']."'><button type='button'><i class='fas fa-trash-alt'></i></button></a>
   </tr>";

 }
} else {
 echo "<tr><td colspan='8'><center>No Data Avaliable</center></td></tr>";
}
echo "</tbody></table>";

$connect->close();
?>