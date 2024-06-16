<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Management System</title>
</head>

<body>
    <?php include "connection.php"; ?>
    <div class="signin-background">
        <div class="signin-background-section1"></div>
        <div class="signin-background-section2" id="loginPage">
            <div class="signin-title">Login</div>
            <div class="signin-inputset">
                <label for="" class="signin-label">Mobile Number</label>
                <input type="text" class="signin-input" />
            </div>
            <div class="signin-inputset">
                <label for="" class="signin-label">Password</label>
                <input type="password" class="signin-input" />
            </div>
            <div class="signin-button-panel">
                <button class="signin-button">Login</button>
                <span class="create-account-label" onclick="switchToNewAccount();">Create Account</span>
            </div>
        </div>
        <div class="signin-background-section3" id="newAccountPage">
            <div class="signin-title">Create Account</div>
            <div class="signin-inputset">
                <label for="" class="signin-label">First Name</label>
                <input type="text" class="signin-input" />
            </div>
            <div class="signin-inputset">
                <label for="" class="signin-label">Last Name</label>
                <input type="text" class="signin-input" />
            </div>
            <div class="signin-inputset">
                <label for="" class="signin-label">Role</label>
                <select class="signin-input">
                    <option>Select</option>
                    <?php
                    $role_rs = Database::search("SELECT * FROM `role`");
                    $role_num = $role_rs->num_rows;
                    for ($i = 0; $i < $role_num; $i++) {
                        $role_data = $role_rs->fetch_assoc();
                    ?>
                        <option value="<?php echo($role_data["id"]); ?>"><?php  echo($role_data["role"]);  ?> </option>
                    <?php
                    }

                    ?>
                </select>
            </div>
            <div class="signin-inputset">
                <label for="" class="signin-label">Mobile Number</label>
                <input type="text" class="signin-input" />
            </div>
            <div class="signin-inputset">
                <label for="" class="signin-label">Password</label>
                <input type="password" class="signin-input" />
            </div>
            <div class="signin-button-panel">
                <button class="signin-button">Create Account</button>
                <span class="create-account-label" onclick="switchToLogin();">Login</span>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>