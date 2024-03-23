<?php                
require 'database_connection.php'; 
$event_name = $_POST['event_name'];
$event_start_date = date("y-m-d", strtotime($_POST['event_start_date'])); 
$event_end_date = date("y-m-d", strtotime($_POST['event_end_date'])); 
			
$delete_query = "delete from `calendar_event_master` where event_name='$event_name' AND event_start_date='$event_start_date'";             
if(mysqli_query($con, $delete_query))
{
	$data = array(
                'status' => true,
                'msg' => 'Event deleted successfully!'
            );
}
else
{
	$data = array(
                'status' => false,
                'msg' => 'Sorry, Event not deleted.'				
            );
}
echo json_encode($data);	
?>
