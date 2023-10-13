<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RR - Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/PHP/Projet02/css/styles.css">
    <link rel="stylesheet" href="/PHP/Projet02/css/account.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include(__DIR__ . '/headfoot/header.php'); ?>
    <form action="" method="post">
        <div class="container light-style flex-grow-1 container-p-y">
            <h4 class="h4 font-weight-bold py-3 mb-4">
                Account settings
            </h4>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list"
                                href="#account-general">General</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-change-password">Change password</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#account-notifications">Notifications</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <?php echo '<input type="text" name="uid" class="form-control mb-1" value="' . $_SESSION["uid"] . '">' ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <?php echo '<input type="text" name="user_firstname" class="form-control mb-1" value="' . $_SESSION["user_firstname"] . '">' ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <?php echo '<input type="text" name="user_lastname" class="form-control mb-1" value="' . $_SESSION["user_lastname"] . '">' ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <?php echo '<input type="text" name="user_email" class="form-control mb-1" value="' . $_SESSION["user_email"] . '">' ?>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-change-password">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Repeat new password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-notifications">
                                <div class="card-body pb-2">
                                    <h6 class="mb-4">Activity</h6>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <?php
                                            if ($_SESSION["user_newsletter"] == 0) {
                                                echo '<input type="checkbox" class="switcher-input">';
                                            } else {
                                                echo '<input type="checkbox" class="switcher-input">';
                                            } ?>
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">Email me about new apparel and products</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-container text-right mt-3">
                <button type="button" class="btn btn-danger"><a href="/PHP/Projet02/includes/logout.inc.php">Log
                        out</a></button>&nbsp;
                <button type="submit" class="btn btn-success" name="submit-edit">Save changes</button>&nbsp;
                <button type="button" class="btn btn-default"><a href="/PHP/Projet02/">Cancel</a></button>
            </div>
        </div>
    </form>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>