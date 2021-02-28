<?php

//fetch_user.php

include('database_connection.php');

session_start();

$query = "
SELECT * FROM register
WHERE user_id != '".$_SESSION['user_id']."' 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-bordered table-striped" style>
 <tr>
  <th width="40%" style="font-family: Akaya Telivijala, cursive">Username</td>
  <th width="20%" style="font-family: Akaya Telivijala, cursive">Status</td>
  <th width="70%" style="font-family: Akaya Telivijala, cursive">Action</td>
 </tr>
';

foreach($result as $row)
{
 $status = '';
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($row['user_id'], $connect);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="label green-text">Online</span>';
 }
 else
 {
  $status = '<span class="label red-text">Offline</span>';
 }
 $output .= '
 <tr>
  <td>'.$row['username'].' '.count_unseen_message($row['user_id'], $_SESSION['user_id'], $connect).' '.fetch_is_type_status($row['user_id'], $connect).'</td>
  <td>'.$status.'</td>
  <td><button type="submit" class="btn waves-effect waves-light blue white-text start_chat"  data-touserid="'.$row['user_id'].'" data-tousername="'.$row['username'].'">Start Chat</button></td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>
