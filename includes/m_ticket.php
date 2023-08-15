<?php

if(isset($_POST['submit'])){
include_once'dbh.php';

$adult_price = $_POST['adult_price'];
$adult_sit_number = $_POST['adult_sit_number'];
$child_price = $_POST['child_price'];
$child_sit_number = $_POST['child_sit_number'];
$ticket_type = $_POST['ticket_type'];

    if((empty($adult_price) OR empty($adult_sit_number)) OR (empty($child_price) OR empty($child_sit_number))){
        
        echo"
        <script>
            alert('Fill all empty fields');
            window.location.href='../manage_ticket.php';
        </script>
    ";
    }
    else{
        if(strcmp($ticket_type, 'citizen') == 0){
            $sql = "UPDATE manage_ticket SET adult_price = '$adult_price', 
            adult_sit_num = '$adult_sit_number', child_price = '$child_price', child_sit_num = '$child_sit_number'
            WHERE nationality = 'citizen' ;";
        mysqli_query($conn, $sql);
        echo"
        <script>
            alert('Citizen ticket Saved successfully');
            window.location.href='../manage_ticket.php';
        </script>
    ";
        }else if(strcmp($ticket_type, 'foreigner') == 0){
            $sql = "UPDATE manage_ticket SET adult_price = '$adult_price', 
            adult_sit_num = '$adult_sit_number', child_price = '$child_price', child_sit_num = '$child_sit_number'
            WHERE nationality = 'foreigner' ;";
            mysqli_query($conn, $sql);
    echo"
    <script>
        alert('Foreigner ticket Saved successfully');
        window.location.href='../manage_ticket.php';
    </script>
";
        }else{
            echo"
            <script>
                alert('select a ticket type');
                window.location.href='../manage_ticket.php';
            </script>
        ";
        }
        
    }
}else{
    echo"
        <script>
            alert('Error');
            window.location.href='../manage_ticket.php';
        </script>
    ";
}
