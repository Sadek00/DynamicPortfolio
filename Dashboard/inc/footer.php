    <script src="assets/lib/jquery/jquery.js"></script>
    <script src="assets/lib/popper.js/popper.js"></script>
    <script src="assets/lib/bootstrap/bootstrap.js"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="assets/lib/highlightjs/highlight.pack.js"></script>
    <script src="assets/lib/datatables/jquery.dataTables.js"></script>
    <script src="assets/lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="assets/lib/select2/js/select2.min.js"></script>
    <script src="assets/lib/parsleyjs/parsley.js"></script>

    <script src="assets/lib/jquery-ui/jquery-ui.js"></script>

    <script src="assets/js/starlight.js"></script>

    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

  </body>
</html>