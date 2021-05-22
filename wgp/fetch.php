<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "comment_system");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM comments 
  WHERE name LIKE '%".$search."%'
  OR place LIKE '%".$search."%' 
  OR reports LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM comments ORDER BY name
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>name</th>
     <th>place</th>
     <th>reports</th>
    
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name"].'</td>
    <td>'.$row["place"].'</td>
    <td>'.$row["reports"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>