<?php 
    require_once('./config/dbconfig.php'); 
    $db = new operations();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  content="0; url=view.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        @keyframes hover {
        50% {
            transform: translateY(-3px);
        }

        100% {
            transform: translateY(-6px);
        }
    }
    b{
        text-align: right;
    }

    </style>
    <title>Registration</title>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <h2 class="text-center text-dark"> Users Record </h2>
                    <div class="card-header">
                        
                        <h2> Fill User Details </h2>

                    </div>
                        <?php $db->Store_Record(); ?>
                        <div class="card-body">
                            <form method="POST">
                                <input type="text" name="username" placeholder=" Enter Username" class="form-control mb-2" required>
                                <input type="Email" name="email" placeholder=" User Email" class="form-control mb-2" required>
                                <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
                                <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control mb-2" required>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_save"> Save </button>                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
