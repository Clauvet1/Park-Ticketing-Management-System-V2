<?php

if(isset($_POST['submit'])){
    include_once'dbh.php';

    $customer_name = $_POST['customer_name'];
    $adult_number = $_POST['adult_number'];
    $ticket_for = $_POST['ticket_for'];
    $child_num = $_POST['child_num'];
    $change = $_POST['change'];
    $total = $_POST['total'];
    $sold_date = $_POST['sold_date'];

    if(empty($customer_name) OR empty($adult_number) OR empty($child_num) OR empty($change) OR empty($total) OR empty($sold_date)){
        
        echo"
        <script>
            alert('Fill all empty fields');
            window.location.href='../normal_ticket.php';
        </script>
    ";
    }else{
        $sql = "INSERT INTO normal_ticket (customer_name, num_of_adults, num_of_children, ticket_for, total_cost, customer_change, sold_date)
                VALUES ('$customer_name', '$adult_number', '$child_num', '$ticket_for', '$total', '$change', '$sold_date');";
    mysqli_query($conn, $sql);
    echo"
    <script>
        alert('Ticket Created successfully');
        window.location.href='../normal_ticket.php';
    </script>
";
    }
    

}