<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>TaniKuy!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>Loginuser/images/icons/tanikuyicon.png" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url() ?>NiceUser/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>NiceUser/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url() ?>NiceUser/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url() ?>NiceUser/css/style.css" rel="stylesheet">

    <script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                // Kirim data koordinat ke server menggunakan AJAX atau formulir tersembunyi
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/path-to-your-controller-method', true); // Ganti dengan URL yang sesuai
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send('latitude=' + latitude + '&longitude=' + longitude);
            }, function(error) {
                console.error('Error getting geolocation: ', error);
            });
        } else {
            console.log('Geolocation is not supported by this browser.');
        }
    </script>


</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- <?= $this->include('Components/navbaruser'); ?> -->
    <?= $this->renderSection('content') ?>
    <?= $this->include('Components/footeruser'); ?>



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>NiceUser/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url() ?>NiceUser/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>NiceUser/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?php echo base_url() ?>NiceUser/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url() ?>NiceUser/js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    console.log('Latitude: ' + latitude);
                    console.log('Longitude: ' + longitude);

                    // Kirim data koordinat ke server menggunakan AJAX
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', '/path-to-your-controller-method', true); // Ganti dengan URL yang sesuai
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.send('latitude=' + latitude + '&longitude=' + longitude);
                }, function(error) {
                    console.error('Error getting geolocation: ', error);
                });
            } else {
                console.log('Geolocation is not supported by this browser.');
            }
        });
    </script>
</body>

</html>