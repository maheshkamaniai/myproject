        <script>
    $(document).ready(function() {
        $(document).on('click','.removercd',function(){
                
                var id=$(this).data('id');
                swal({
                title: "Are you sure?",
                text: "You will not be able to recover this Records!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: true,
                closeOnCancel: false
                
            },
            function(isConfirm) {
            alert('Hello ' + id);
                if (isConfirm) {
                   
                     window.location.href='<?= url('Settings/CustomerManagement/deletePerson/') ?>'+id;

                } else {
                    swal({
                        title: "Cancelled",
                        text: "Your Records are safe :)",
                        type: "error",
                        confirmButtonClass: "btn-danger"
                    });
                }
            });
        }); 

    });
    </script>