<?php
    require("inc/essentials.php");
    require("inc/db_config.php");
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel -Users</title>

    <!-- CSS Links -->
    <?php require("inc/links.php");?>
</head>

<body class="bg-light">

    <?php require("inc/header.php");?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Users</h3>

                <!-- Add Room Section -->

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="text-end mb-3">
                            <input type="text" oninput="search_user(this.value)" class="form-control shadow-none w-25 ms-auto" placeholder="Type to search..">
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover border text-center" style="min-width:1300px;">
                                <thead>
                                  <tr>
                                    <th scope="col" class="bg-dark text-light">#</th>
                                    <th scope="col" class="bg-dark text-light">Name</th>
                                    <th scope="col" class="bg-dark text-light">Email</th>
                                    <th scope="col" class="bg-dark text-light">Contact</th>
                                    <th scope="col" class="bg-dark text-light">Location</th>
                                    <th scope="col" class="bg-dark text-light">DOB</th>
                                    <th scope="col" class="bg-dark text-light">Action</th>
                                  </tr>
                                </thead>
                                <tbody id="users-data">
                                </tbody>
                            </table>    
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    


    
    <?php require("inc/scripts.php");?> 

    <script src="scripts/users.js"></script>

</body>
</html>