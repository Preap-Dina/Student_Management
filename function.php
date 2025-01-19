<!-- JQuery link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- SweetAlert Link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<?php
    include 'connectDB.php';

    // function for adding new student
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


    // function for displaying student
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
                        <button class="btn btn-warning btn-update" data-bs-toggle="modal" data-bs-target="#exampleModalUpdate" data-bs-whatever="@mdo">Update</button>
                        <button class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModalRemove">Remove</button>
                    </td>
                </tr>
            ';
        }
    }


    // function for removing student
    function removeStudent(){
        global $connection;

        if(isset($_POST['btn-confrim-remove'])){
            $id = $_POST['hidden-id'];

            $sql_remove = "DELETE FROM student_list WHERE id = '$id'";

            $result = $connection->query($sql_remove);
            if ($result){
                echo '
                    <script>
                        $(document).ready(function(){
                            swal({
                                title: "Done",
                                text: "You removed student",
                                icon: "success",
                                button: "Confirm",
                            });
                        })
                    </script> 
                ';
            }
        }
    }
    removeStudent();


    // function for updating student
    function updateStudent(){
        global $connection;

        if(isset($_POST['btn-confirm-update'])){
            $id = $_POST['id'];
            $fullName_update = $_POST['fullName-update'];
            $email_update = $_POST['email-update'];
            $major_update = $_POST['major-update'];
            $year_update = $_POST['year-update'];

            $sql_update = "UPDATE student_list 
            SET fullName='$fullName_update', email='$email_update', major='$major_update', year='$year_update' WHERE id='$id'";

            $result = $connection->query($sql_update);

            if($result){
                echo '
                    <script>
                        $(document).ready(function(){
                            swal({
                                title: "Done",
                                text: "You updated student",
                                icon: "success",
                                button: "Confirm",
                            });
                        })
                    </script> 
                ';
            }
        }
    }   
    updateStudent();


    // function for count number of student
    function countStudent(){
        global $connection;

        $sql_count = "SELECT COUNT(id) AS totalStudent FROM student_list";

        $result = $connection->query($sql_count);

        $row = mysqli_fetch_assoc($result);

        echo '
            <tr>
                <td colspan="6" class="fw-bold text-light bg-secondary">Total Student: '.$row['totalStudent'].'</td>
            </tr>
        ';
    };

?>
