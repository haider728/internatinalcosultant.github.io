<html>
    <body>
       <table  border="2" style="width:40%; float:left;">
    <tr>
            <th>NAME</th>
            <th>Email</th>
            <th>SUBJECT</th>
            <th>PHONE</th>
            <th>BIRTHDAY</th>
            <th>MESSAGE</th>
</tr>


<?php


    $server ="localhost";
    $username ="root";
    $password ="";
    $db = "ics";
    $conn = mysqli_connect($server,$username,$password,$db);
    $connection = new mysqli("localhost","root","","ics");
    $name= $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject']; 
    $phone= $_POST['phone'];
    $birthday= $_POST['birthday']; 
    $message= $_POST['message'];
   
    $sql = "INSERT INTO `form`( `name`, `email`, `subject`, `phone`, `birthday`, `message`) VALUES ('$name','$email','$subject','$phone','$birthday','$message')";
    $data=mysqli_query($conn,$sql);
   
    ////////////////////////////////////////////////////////////////////////////
    //for showing data..
    $query = "SELECT * FROM `form`" ;
    $query1= mysqli_query($conn,$query);
    $total = mysqli_num_rows($query1);
    if ($total!=0) {
           while ($result= mysqli_fetch_assoc($query1)) {
              echo 
              "<tr>
                <td>".$result['name']."</td>
                <td>".$result['email']."</td>
                <td>".$result['subject']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['birthday']."</td>
                <td>".$result['message']."</td>
              </tr>";
           }
    }
    else {
        echo "no record";
    }

?>
</table>
</body>
</html>