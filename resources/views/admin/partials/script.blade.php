<script src="{{ asset('assets/admin/js/pages/datatables.init.js') }}"></script> 
<script src="{{ asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/node-waves/waves.min.js') }}"></script>

<script src="{{ asset('assets/admin/libs/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/dashboard.init.js') }}"></script>
<script src="{{ asset('assets/admin/js/app.js') }}"></script>
<script src="{{ asset('assets/admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/table-edits/build/table-edits.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/table-editable.init.js') }}"></script> 
<script src="{{ asset('assets/admin/js/raj_custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script>
    $(document).ready(function() {
        toastr.options.timeOut = 2000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
    });

    function closeModel()
    {
        $('#myModel').hide();
    }

    function addData() {
        $('.error').text('');
        $('#addModal').fadeIn(500);
    }
    function hideModal() {
       $('.modal').hide();
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    });

    function editItem(id, url) {
        $('.section.loader-section').show(); 
        let fullUrl = "{{ url('admin') }}/" + url + "/" + id;
        $('#data').load(fullUrl, function () {
            $('#editModal').show();
            $('.section.loader-section').hide();   
        });
    }

    $(document).on('submit','form.add-form',function(e){    
        e.preventDefault();
        $('.section.loader-section').show();          
        var form = $(this);
        var url = form.attr('action');
      
        $.ajax({
            type: 'POST',
            url: url,
            data: new FormData(this),
            dataType:'json',
            contentType: false,
            processData: false,
            cache:false,
            success: function (response) {
                if (response.status == 1) {
                    toastr.success( response.message );
                    window.location.reload();
                }else {
                    $('.message').text(response.message);
                    toastr.error(response.message );
                }
            },
            error: function (xhr) {
                $('.error').text('');
                if (xhr.status === 422) {
                    let res = xhr.responseJSON; 
                    $.each(res.errors, function(field, message){
                      var input = form.find('[name="'+field+'"], [name="'+field+'[]"]');
                      input.after('<div class="error">'+message+'</div>');
                    });
                    $('.message').text(res.message);
                    toastr.error(res.message );
                } else {
                    toastr.error(xhr.status);
                }
            },
            complete: function () {
                $('.section.loader-section').hide();
            }
        });
    })     

    $(document).on('submit', 'form.edit-form', function (e) {
        e.preventDefault();
        $('.section.loader-section').show();          
        var form = $(this);
        var url = form.attr('action');
      
        $.ajax({
            type: 'POST',
            url: url,
            data: new FormData(this),
            dataType:'json',
            contentType: false,
            processData: false,
            cache:false,
            success: function (response) {
                if (response.status == 1) {
                    toastr.success( response.message );
                    window.location.reload();
                }else {
                    $('.message').text(response.message);
                    toastr.error(response.message );
                }
            },
            error: function (xhr) {
                $('.error').text('');
                if (xhr.status === 422) {
                    let res = xhr.responseJSON; 
                    $.each(res.errors, function(field, message){
                      var input = form.find('[name="'+field+'"], [name="'+field+'[]"]');
                      input.after('<div class="error">'+message+'</div>');
                    });
                    $('.message').text(res.message);
                    toastr.error(res.message );
                } else {
                    toastr.error(xhr.status);
                }
            },
            complete: function () {
                $('.section.loader-section').hide();
            }
        });
    });
</script>
@stack('script')

        


        
        