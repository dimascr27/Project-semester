    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url('assets/vendor/jquery-3.2.1.min.js') ?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/vendor/bootstrap-4.1/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap-4.1/bootstrap.min.js') ?>"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url('assets/vendor/slick/slick.min.js') ?>">
    </script>
    <script src="<?= base_url('assets/vendor/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/animsition/animsition.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>">
    </script>
    <script src="<?= base_url('assets/vendor/counter-up/jquery.waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/counter-up/jquery.counterup.min.js') ?>">
    </script>
    <script src="<?= base_url('assets/vendor/circle-progress/circle-progress.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('assets/vendor/chartjs/Chart.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/select2/select2.min.js') ?>"></script>

     <!-- Main JS-->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

    <script>
        $(".hapus").click(function (){
            var id = $(this).data("id");
            var link = $(this).data("link");

            Swal.fire({
                title: 'Yakin?',
                text: "Yakin ingin menghapus data ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tidak'
                }).then((willDelete) => {
                    if (willDelete) {
                        window.location.href = '<?=base_url()?>' + link + id;
                    } else {
                        Swal.fire(
                        'Deleted!',
                        'Data berhasil dihapus.',
                        'success'
                        )
                    }
                });
        });
    </script>

</body>

</html>
<!-- end document-->
