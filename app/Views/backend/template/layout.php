<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
    <link href="<?= base_url('assets/img/logokabij.png') ?>" rel="icon">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/backend/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/backend/css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->

    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('backend/config/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->

            <div id="content">

                <!-- Topbar -->
                <?= $this->include('backend/config/navbar') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?= $this->renderSection('backend') ?>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?= $this->include('backend/config/footer') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Tulis Konten disini',
                tabsize: 2,
                height: 250,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video', 'butons']],
                    ['view', ['fullscree', 'codeview', 'help']]
                ],
                callbacks: {
                    onImageUpload: function(files) {
                        uploadImage(files[0]);
                    }
                },
                buttons: {
                    myfile: function() {
                        var ui = $.summernote.ui;
                        var button = ui.button({
                            contents: '<i class="note-icon-paperclip"/> Upload File',
                            tooltip: 'Upload File',
                            click: function() {
                                $('#fileUploadInput').trigger('click');
                            }
                        });
                        return button.render();
                    }
                }
            });

            function uploadImage(file) {
                var data = new FormData();
                data.append("image", file);

                $.ajax({
                    url: "/dashboard/uploadimage", // Update this endpoint with your actual upload URL
                    type: "POST",
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Assuming 'response' contains the image URL as 'url'
                        var imageNode = $('<img>').attr('src', response.url);
                        $('#summernote').summernote('insertNode', imageNode[0]); // Insert the image
                    },
                    error: function(error) {
                        console.error("Error uploading image:", error);
                    }
                });
            }

            function uploadFile(file) {
                var data = new FormData();
                data.append("file", file);

                $.ajax({
                    url: "/dashboard/uploadfile", // Update with your actual upload URL
                    type: "POST",
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log('sukses');
                        var fileLink = $('<a>').attr('href', response.url).text(file.name);
                        $('#summernote').summernote('insertNode', fileLink[0]); // Insert link to the file
                    },
                    error: function(error) {
                        console.error("Error uploading file:", error);
                    }
                });
            }
        });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('js/sb-admin-2.min.js') ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('vendor/chart.js/Chart.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('js/demo/chart-area-demo.js') ?>"></script>
    <script src="<?= base_url('js/demo/chart-pie-demo.js') ?>"></script>

</body>

</html>