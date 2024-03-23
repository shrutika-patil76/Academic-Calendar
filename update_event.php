<?php                
require 'database_connection.php'; 
$event_name = $_POST['event_name'];
$event_start_date = date("y-m-d", strtotime($_POST['event_start_date'])); 
$event_end_date = date("y-m-d", strtotime($_POST['event_end_date'])); 
			
$update_query = "update calendar_event_master set event_start_date='$event_start_date',event_end_date='$event_end_date' where event_name='$event_name'";             
if(mysqli_query($con, $update_query))
{
	$data = array(
                'status' => true,
                'msg' => 'Event updated successfully!'
            );
}
else
{
	$data = array(
                'status' => false,
                'msg' => 'Sorry, Event not updated.'				
            );
}
echo json_encode($data);	
?>
