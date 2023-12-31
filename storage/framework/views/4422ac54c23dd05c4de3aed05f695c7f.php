<section class="">
    <div class="container-fluid">
        <div class="row text-center pt-5">
            <h2>Gallery</h2>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="<?php echo e(asset('image/ab.jpg')); ?>" class="w-100 h-80" />
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-2.webp" class="w-100" />
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-3.webp" class="w-100" />
                    <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                </div>
            </div>
        </div>
</section>
<!-- Section: Images -->

<!-- Section: Modals -->
<section class="">
    <!-- Modal 1 -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/A3PDXmYoF5U" title="YouTube video"
                        allowfullscreen></iframe>
                </div>

                <div class="text-center py-3">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/wTcNtgA6gHs" title="YouTube video"
                        allowfullscreen></iframe>
                </div>

                <div class="text-center py-3">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3 -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/vlDzYIIOYmM" title="YouTube video"
                        allowfullscreen></iframe>
                </div>

                <div class="text-center py-3">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

</section>
<?php /**PATH C:\Users\Nathan\Desktop\Bike Service Application\Bike_Service-app\resources\views/layouts/gallery.blade.php ENDPATH**/ ?>