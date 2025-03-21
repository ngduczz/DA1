<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HHD Shop<?= $title ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="upload/upage/logo.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d2a428f875.js" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= BASE_URL?>assets/client/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= BASE_URL?>assets/client/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php require_once PATH_VIEW . "layouts/partials/header.php"; ?>
    <!-- Topbar End -->
    <?php require_once PATH_VIEW . $view . '.php'; ?>
    <!-- Footer Start -->
    <?php require_once PATH_VIEW . "layouts/partials/footer.php"; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL?>assets/client/lib/easing/easing.min.js"></script>
    <script src="<?= BASE_URL?>assets/client/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?= BASE_URL?>assets/client/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?= BASE_URL?>assets/client/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?= BASE_URL?>assets/client/js/main.js"></script>
</body>

</html>