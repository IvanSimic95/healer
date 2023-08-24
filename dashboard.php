<?php
$title = "User Dashboard | Soulmate Healer";
$description = "Login to your account and access your orders!";
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/header.php';

if (isset($_POST['form_submit'])) {
    $autologin = $_POST['autologin'];
    $userID = $_POST['userID'];
    if($autologin == "yes"){
        autologin($userID);
    }
}


if (isset($_SESSION['login_id'])) {
    $LoggedIN = 1;
} else {
    $LoggedIN = 0;
}
?>
<style>
    .col-md-offset-3 {
        margin-left: 25%;
    }

    @media (max-width: 767px) {
        .col-md-offset-3 {
            margin-left: 0%;
        }
    }
</style>

<!-- Header -->
<header class="ex-6-header" style="min-height:80vh">
    <div class="header-content">
        <?php if ($LoggedIN = 0) { ?>
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/login-form.php'; ?>
        <?php } else { ?>
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/login-dashboard.php'; ?>
        <?php } ?>

        <br clear="all">

    </div>
    </div>
</header>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/footer.php'; ?>