
</div>
      <!-- End of Main Content -->
 <!-- Footer -->
 <footer class="sticky-footer  bg-gradient-primary">
 <!-- bg-gradient-primary  bg-white-->
        <div class="container my-auto ">
          <div class="copyright text-center my-auto">
            <span class="text-white">Copyright &copy; <a href="{{ route('user.welcome') }}" style="color: blanchedalmond;text-decoration:none;">BBC UNIVERSITY</a>  2020 - {{ Date('Y') }} | Design By EMPRO </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper c' est le dernier div-->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('asset_admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('asset_admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  
  <!-- Core plugin JavaScript-->
  <script src="{{asset('asset_admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('asset_admin/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('asset_admin/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('asset_admin/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('asset_admin/js/demo/chart-pie-demo.js')}}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js" integrity="sha256-T/f7Sju1ZfNNfBh7skWn0idlCBcI3RwdLSS4/I7NQKQ=" crossorigin="anonymous"></script>
  
  <script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var info_id = button.data('id') 
  var email = button.data('email') 
  var title = button.data('phone') 
  var adress = button.data('adress') 
  var bp = button.data('bp') 
  var modal = $(this)
  modal.find('.modal-body #info_id').val(info_id)
  modal.find('.modal-body #email').val(email)
  modal.find('.modal-body #phone').val(title)
  modal.find('.modal-body #adress').val(adress)
  modal.find('.modal-body #bp').val(bp)
})


$('#imageModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var info_id = button.data('id') 
  var name = button.data('name') 
  var link = button.data('link') 
  var logo = button.data('logo') 
  var modal = $(this)
  modal.find('.modal-body #info_id').val(info_id)
  modal.find('.modal-body #name').val(name)
  modal.find('.modal-body #link').val(link)
  modal.find('.modal-body #logo').html("< img src= {{URL::to('/')}}/image"+logo+" width:'30' class='img-thumbnail' />")
  modal.find('.modal-body #logo').append("<input type='hidden' name='hidden_image' value='"+logo+"'/>")
})

$('#update_slides').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var info_id = button.data('id') 
  var image = button.data('image') 
  var modal = $(this)
  modal.find('.modal-body #info_id').val(info_id)
  modal.find('.modal-body #image').html("< img src= {{URL::to('/')}}/image"+image+" width:'30' class='img-thumbnail' />")
  modal.find('.modal-body #image').append("<input type='hidden' name='hidden_image' value='"+image+"'/>")
})


$('#edit_teamsModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var info_id = button.data('id') 
  var firstname = button.data('firstname') 
  var lastname = button.data('lastname') 
  var job = button.data('job') 
  var image = button.data('image') 
  var modal = $(this)
  modal.find('.modal-body #info_id').val(info_id)
  modal.find('.modal-body #firstname').val(firstname)
  modal.find('.modal-body #lastname').val(lastname)
  modal.find('.modal-body #job').val(job)
  modal.find('.modal-body #image').html("< img src= {{URL::to('/')}}/image"+image+" width:'30' class='img-thumbnail' />")
  modal.find('.modal-body #image').append("<input type='hidden' name='hidden_image' value='"+image+"'/>")
})


$('#edit_progModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var prog_id = button.data('id') 
  var libele = button.data('libele') 
  var modal = $(this)
  modal.find('.modal-body #prog_id').val(prog_id)
  modal.find('.modal-body #libele').val(libele)

})


$('#edit_moduleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var module = button.data('id') 
  var libele = button.data('libele') 
  var filiere = button.data('filiere') 
  var niveau = button.data('niveau') 
  var modal = $(this)
  modal.find('.modal-body #module').val(module)
  modal.find('.modal-body #libele').val(libele)
  modal.find('.modal-body #filiere_id').val(filiere)
  modal.find('.modal-body #niveau_id').val(niveau)
})


$('#wordModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var word_id = button.data('id') 
  var editor = button.data('editor') 
  var modal = $(this)
  modal.find('.modal-body #word_id').val(word_id)
  modal.find('.modal-body #editor').val(editor)
})



$('#edit_niveauModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var niv_id = button.data('id') 
  var libele_niv = button.data('libele_niv') 
  var modal = $(this)
  modal.find('.modal-body #niv_id').val(niv_id)
  modal.find('.modal-body #libele_niv').val(libele_niv)
})



$('#edit_diplomeModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var dip_id = button.data('id') 
  var libele_dip = button.data('libele_dip') 
  var modal = $(this)
  modal.find('.modal-body #dip_id').val(dip_id)
  modal.find('.modal-body #libele_dip').val(libele_dip)
})




$('#bookModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var book_id = button.data('id') 
  var title = button.data('title') 
  var auteur = button.data('auteur') 
  var dateOut = button.data('dateOut') 
  var modal = $(this)
  modal.find('.modal-body #book_id').val(book_id)
  modal.find('.modal-body #title').val(title)
  modal.find('.modal-body #auteur').val(auteur)
  modal.find('.modal-body #dateOut').val(dateOut)
  modal.find('.modal-body #image').html("< img src= {{URL::to('/')}}/image"+image+" width:'30' class='img-thumbnail' />")
  modal.find('.modal-body #image').append("<input type='hidden' name='hidden_image' value='"+image+"'/>")
})


$('#edit_imgModal1').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var img_id = button.data('id') 
  var libele = button.data('libele') 
  var modal = $(this)
  modal.find('.modal-body #image_id').val(img_id)
  modal.find('.modal-body #libele').val(libele)
  modal.find('.modal-body #image').html("< img src= {{URL::to('/')}}/image"+image+" width:'30' class='img-thumbnail' />")
  modal.find('.modal-body #image').append("<input type='hidden' name='hidden_image' value='"+image+"'/>")
})



$('#edit_newModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var new_id = button.data('id') 
  var libele = button.data('libele') 
  var date = button.data('date') 
  var editor = button.data('editor') 
  var modal = $(this)
  modal.find('.modal-body #new_id').val(new_id)
  modal.find('.modal-body #libele').val(libele)
  modal.find('.modal-body #date').val(date)
  modal.find('.modal-body #editor').val(editor)
})
    </script>
    @yield('js')
</body>

</html>