<?php
    include 'function.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal University of Phnom Penh.edu.kh</title>

    <!-- Boostrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- style css -->
    <style>
        .container-fluid{
            background-color: dodgerblue;
            box-shadow: 0 0 5px black;
        }
    </style>
</head>
<body>
    
    <!-- navbar -->
    <div class="container-fluid">
        <nav class="navbar rounded-3 p-0 m-0">
            <div class="container d-flex align-content-center py-3  m-0 m-auto">
                <a class="navbar-brand text-light fw-bold" style="width: 60px"><img class="w-100 h-100 object-fit-cover" src="./image/RUPP_logo-removebg-preview (1).png" alt=""></a>
                <form class="d-flex align-middle m-0 p-0" role="search">
                    <input class="form-control me-2 shadow-none" type="search" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-success  border-light" style="width: 180px;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Student</button>
                </form>
            </div>
        </nav>
    </div>


    <!-- pop-up form for add student-->
    <form method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Student</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Full Name:</label>
                                <input type="text" class="form-control" id="recipient-name" name="fullName">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" id="recipient-name" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Major:</label>
                                <input type="text" class="form-control" id="recipient-name" name="major">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Year:</label>
                                <input type="number" class="form-control" id="recipient-name" name="year">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btn-add-student">Add Student</button>
                    </div>
                </div>
            </div>
        </div>
    </form> 


    <!-- pop-up form for update student -->
    <form method="post">
        <div class="modal fade" id="exampleModalUpdate" tabindex="-1" aria-labelledby="exampleModalUpdateLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Student</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <input type="hidden" class="form-control id" id="recipient-name" name="id">

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Full Name:</label>
                                <input type="text" class="form-control fullName-update" id="recipient-name" name="fullName-update">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="text" class="form-control email-update" id="recipient-name" name="email-update">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Major:</label>
                                <input type="text" class="form-control major-update" id="recipient-name" name="major-update">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Year:</label>
                                <input type="number" class="form-control year-update" id="recipient-name" name="year-update">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btn-confirm-update">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- Modal form for remove product -->
    <form method="post">
        <div class="modal fade" id="exampleModalRemove" tabindex="-1" aria-labelledby="exampleModalRemoveLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Remove Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure to remove this product?
                    </div>
                    <input type="hidden" class="hidden-id" name="hidden-id">
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btn-confrim-remove">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- table for displaying student -->
    <div class="mx-3">
        <table class="table align-middle" border="1" style="table-layout: fixed;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Major</th>
                <th>Year</th>
                <th>Action</th>
            </tr>   
            <?php
                getStudent();
            ?>
            <?php
                countStudent();
            ?>
        </table>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        
        // jquery for delete student 
        $('body').on('click', '.btn-remove', function(){
            let id = $(this).parents('tr').find('td').eq(0).text();
            $('.hidden-id').val(id);
        });


        // jquery for update student
        $('body').on('click', '.btn-update', function(){
            let id = $(this).parents('tr').find('td').eq(0).text();
            let fullName = $(this).parents('tr').find('td').eq(1).text();
            let email = $(this).parents('tr').find('td').eq(2).text();
            let major = $(this).parents('tr').find('td').eq(3).text();
            let year = $(this).parents('tr').find('td').eq(4).text();

            $('.id').val(id);
            $('.fullName-update').val(fullName);
            $('.email-update').val(email);
            $('.major-update').val(major);
            $('.year-update').val(year);
        });
    });
</script>