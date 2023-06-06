   <audio id="bildirim">
  <source src="ses.mp3" type="audio/mpeg">
</audio>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $("#not").hide();
    if (typeof (EventSource) !== "undefined") {
        var source = new EventSource("hesapkontrol.php");
        source.onmessage = function (event) {
            var x = document.getElementById("bildirim");
            x.play();
            $("#not").fadeIn(400);
        };
    } else {
        document.getElementById("result").innerHTML = "Tarayıcınız desteklemiyor";
    }
</script>

   <audio id="bildirim">
  <source src="ses.mp3" type="audio/mpeg">
</audio>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $("#notgarson").hide();
    if (typeof (EventSource) !== "undefined") {
        var source = new EventSource("garsonkontrol.php");
        source.onmessage = function (event) {
            var x = document.getElementById("bildirim");
            x.play();
            $("#notgarson").fadeIn(400);
        };
    } else {
        document.getElementById("result").innerHTML = "Tarayıcınız desteklemiyor";
    }
</script>


   <audio id="bildirim">
  <source src="ses.mp3" type="audio/mpeg">
</audio>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $("#notsiparis").hide();
    if (typeof (EventSource) !== "undefined") {
        var source = new EventSource("kontrol.php");
        source.onmessage = function (event) {
            var x = document.getElementById("bildirim");
            x.play();
            $("#notsiparis").fadeIn(400);
        };
    } else {
        document.getElementById("result").innerHTML = "Tarayıcınız desteklemiyor";
    }
</script>
    <!-- Page Footer Start -->


            <!--================================-->

            <footer class="page-footer">

               <div class="pd-t- pd-b-0 pd-x-20">

                  <div class="tx-10 tx-uppercase">

                     <p class="pd-y-10 mb-0">Copyright&copy; 2023 Selim Öztürk | Tüm Hakları Saklıdır.</p>

                  </div>

               </div>

            </footer>

            <!--/ Page Footer End -->

         </div>

         <!--/ Page Content End -->

      </div>

      <!--/ Page Container End -->

      <!--================================-->

      <!-- Scroll To Top Start-->

      <!--================================-->

      <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

      <!--/ Scroll To Top End -->

      <!--================================-->



     <!-- Footer Script -->

      <!--================================-->

      <script src="assets/plugins/jquery/jquery.min.js"></script>

      <script src="assets/plugins/jquery-ui/jquery-ui.js"></script>

      <script src="assets/plugins/popper/popper.js"></script>

      <script src="assets/plugins/feather-icon/feather.min.js"></script>

      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

      <script src="assets/plugins/pace/pace.min.js"></script>

      <script src="assets/plugins/moment/moment.min.js"></script>

      <script src="assets/plugins/toastr/toastr.min.js"></script>

      <script src="assets/plugins/countup/counterup.min.js"></script>

      <script src="assets/plugins/waypoints/waypoints.min.js"></script>

      <script src="assets/plugins/chartjs/chartjs.js"></script>

      <script src="assets/plugins/apex-chart/apexcharts.min.js"></script>

      <script src="assets/plugins/apex-chart/irregular-data-series.js"></script>

      <script src="assets/plugins/simpler-sidebar/jquery.simpler-sidebar.min.js"></script>

      <script src="assets/js/dashboard/sales-dashboard-init.js"></script>

      <script src="assets/js/jquery.slimscroll.min.js"></script>

      <script src="assets/js/highlight.min.js"></script>

      <script src="assets/js/app.js"></script>

      <script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>

      <script src="assets/plugins/simpler-sidebar/jquery.simpler-sidebar.min.js"></script>

      <script src="assets/js/custom.js"></script>

      <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>

      <script src="assets/plugins/datatables/responsive/dataTables.responsive.js"></script>

      <script src="assets/plugins/datatables/extensions/dataTables.jqueryui.min.js"></script>





    <script src="assets/js/datepicker.min.js"></script>

    <script src="assets/js/datepicker.es.js"></script>



        <script src="assets/plugins/dropify/js/dropify.min.js"></script>



           <script>

         $('.dropify').dropify({

            messages: {

               'default': 'Dosyanızı Buraya Sürükleyin yada Seçin',

               'replace': 'Değiştirmek İstediğiniz Dosyayı Sürükleyin yada Seçin',

               'remove':  'Sil',

               'error':   'Belirsiz Bir Hata Oldu'

            }

         });



      </script>

       <script>

         // Basic DataTable

          $('#basicDataTable').DataTable({

            responsive: true,

            language: {

              searchPlaceholder: 'Search...',

              sSearch: ''

            }

           });



         // No Style DataTable

          $('#noStyleedTable').DataTable({

            responsive: true,

            language: {

              searchPlaceholder: 'Search...',

              sSearch: ''

            }

           });



         // Cell Border DataTable

          $('#cellBorder').DataTable({

            responsive: true,

            language: {

              searchPlaceholder: 'Search...',

              sSearch: ''

            }

           });



         // Compact DataTable

          $('#compactTable').DataTable({

            responsive: true,

            language: {

              searchPlaceholder: 'Search...',

              sSearch: ''

            }

           });



         // Hoverable DataTable

          $('#hoverTable').DataTable({

            responsive: true,

            language: {

              searchPlaceholder: 'Search...',

              sSearch: ''

            }

           });



         // Hoverable DataTable

          $('#orderActiveTable').DataTable({

            responsive: true,

            language: {

              searchPlaceholder: 'Search...',

              sSearch: ''

            },

            "order": [[ 1, "desc" ]]

           });



         // Scrollable Table DataTable

          $('#scrollableTable').DataTable({

            responsive: true,

            language: {

              searchPlaceholder: 'Search...',

              sSearch: ''

            },

            "order": [[ 1, "desc" ]],

            "scrollY":        "250px",

            "scrollCollapse": true,

            "paging":         false

           });

      </script>


   </body>

</html>
