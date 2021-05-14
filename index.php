<?php include 'pages/header.php'; ?>


<!-- top nav -->
<div class="container-fluid mb-2">
    <?php include 'pages/topNav.php'; ?>
</div>

<div class="container-fluid mb-2">
    <div class="row">
    <!-- navigation and notification -->
        <div class="col-lg-4 col-md-12">
            <?php include 'pages/navigation.php'; ?>
            <?php include 'pages/notification.php'; ?>
        </div>
        <div class="col-lg-8 col-md-12">
            <?php
                $content=isset($_GET['content_id']) ? $_GET['content_id'] : '';

                switch ($content) {
                    case "home":
                        include 'pages/imageSlider.php';
                        include 'pages/cards.php';
                      break;
                    case "cources":
                    //   include 'pages/imageSlider.php';
                      include ("pages/cources.php");
                      break;                      
                    case "job":
                    //   include 'pages/imageSlider.php';
                      include ("pages/jobOpportunities.php");
                      break;                      
                    default:
                    include 'pages/imageSlider.php';
                    include 'pages/cards.php';
                  }     
            ?>
        </div>
    </div>
</div>



<?php include 'pages/adminLogin.php'; ?>

<?php include 'pages/studentRegister.php'; ?>
<?php include 'pages/studentLogin.php'; ?>


<div class="chat-bot">
    <div class="chat-bot-btn shadow"><button id="chatBtn"><i class="fa fa-comments" aria-hidden="true"></i></button>
    </div>
    <div class="chat-box" id="chatBox">
        <div class="row">
            <h6 class="text-light ml-3">chat</h6>
            <button id="close" class="ml-auto mr-3"><i class="fa fa-times mr-aoto" aria-hidden="true"></i></button>
        </div>
        <form action="">
            <input type="text" name="" id="chatInput">
            <button id="send"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
        </form>
    </div>
</div>

<!-- foote -->
<footer class="footer text-center py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 py-4">
                <h5 class="text-white mb-4">&nbsp;</h5>
                <a href="" class="c-btn" data-toggle="modal" data-target="#exampleModalLong"> Carrier Guide </a>
            </div>
            <div class="col-sm-4 py-4">
                <h5 class="text-white mb-4">Site Links</h5>
                <a href="" class="mx-2 text-white">Home</a>
                <a href="" class="mx-2 text-white">About</a>
                <a href="" class="mx-2 text-white">Contact us</a>
                <a href="" class="mx-2 text-white">lorem</a>
                <a href="" class="mx-2 text-white">lorem</a>
            </div>
            <div class="col-sm-4 py-4">
                <div class="social-icon text-center">
                    <h5 class="text-white mb-4">Social Links</h5>
                    <a href="#"><span><i class="fa fa-facebook"></i></span></a>
                    <a href="#"><span><i class="fa fa-twitter"></i></span></a>
                    <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                    <a href="#"><span><i class="fa fa-instagram"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="copy">
        <h6>&copy; 2021 Designed By HEXAPHOR</h6>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLongTitle">Your Personal Guide</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <div class="modal-body">
        ...
      </div> -->
            <div class="modal-footer" style="margin:0 auto">
                <a href="mailto:someone@something.com" type="button" class="btn btn-secondary px-5"><i
                        class="fa fa-envelope mr-2" aria-hidden="true"></i> Mail Us</a>
                <a href="tel:5551234567" type="button" class="btn btn-primary px-5"><i class="fa fa-phone mr-2"
                        aria-hidden="true"></i> Call Us</a>
            </div>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>

<script src="js/script.js"></script>
</body>

</html>