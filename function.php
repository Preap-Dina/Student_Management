<!-- JQuery link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- SweetAlert Link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>






<?php
    include 'connectDB.php';

    // Add new student function
    function addstudent(){
        global $connection;
        if(isset($_POST['btn-add-student'])){
            $fullName = $_POST['fullName'];
            $email = $_POST['email'];
            $major = $_POST['major'];
            $year = $_POST['year'];

            $sql_add = "INSERT INTO student_list(fullName, email, major, year) 
            VALUE ('$fullName', '$email', '$major', '$year')";

            $result = $connection->query($sql_add);

            if($result){
                echo '
                    <script>
                        $(document).ready(function(){
                            swal({
                                title: "Done",
                                text: "You added new student",
                                icon: "success",
                                button: "Confirm",
                            });
                        })
                    </script> 
                ';
            }
        }
    }
    addstudent();


    // display student
    function getStudent(){
        global $connection;

        $sql_get = "SELECT id, fullName, email, major , year FROM student_list"; 

        $result = $connection->query($sql_get);

        while($row = mysqli_fetch_assoc($result)){
            echo '
                <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['fullName'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['major'].'</td>
                    <td>'.$row['year'].'</td>
                    <td>
                        <button class="btn btn-warning">Update</button>
                        <button class="btn btn-danger">Remove</button>
                    </td>
                </tr>

            ';
        }
    }

?>
