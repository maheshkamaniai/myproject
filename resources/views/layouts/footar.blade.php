<!-- <script src="{{ asset('assets/js/app.js') }}" defer></script>
<script src="{{ asset('assets/bundles/lib.vendor.bundle.js') }}"></script> -->

<!-- <script src="{{ asset('assets/bundles/apexcharts.bundle.js') }}" defer></script>
<script src="{{ asset('assets/bundles/counterup.bundle.js') }}" defer></script>
<script src="{{ asset('assets/bundles/knobjs.bundle.js') }}" defer></script> -->
<!-- <script src="{{ asset('assets/bundles/c3.bundle.js') }}" defer></script>
<script src="{{ asset('assets/js/page/project-index.js') }}" defer></script> -->
<script src="{{ asset('assets/bundles/lib.vendor.bundle.js') }}" defer></script>

<script src="{{ asset('assets/js/core.js') }}" defer></script>
<script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}" defer></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<script src="{{asset('assets/plugins/datatables/media/js/datatables.min.js')}}"></script>


<script src="{{ asset('assets/js/form/dropify.js') }}" defer></script>
<script src="{{asset('assets/plugins/pnotify/pnotify.js')}}"></script>

<script>         
function alertbox(title="",error="",type="")
{
    swal({
        title: title,
        text: error,
        type: type,
        showCancelButton: false,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "ok",
        closeOnConfirm: false
    });
}
</script>

<?php
    if (request()->session()->get('error_msg')!=""):
        $msg =  request()->session()->get('error_msg');
        //request()->session()->flash('error_msg',"");
        echo '  <script>
                    swal({
                        title: "Error",
                        text: "'.$msg.'",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "ok",
                        closeOnConfirm: false
                    });
                </script>';
    endif;
    if (request()->session()->get('success_msg')!=""):
        $msg =  request()->session()->get('success_msg');
        //request()->session()->flash('success_msg',"");
            echo '  <script>
                        swal({
                            title: "Success",
                            text: "'.$msg.'",
                            type: "success",
                            showCancelButton: false,
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "ok",
                            closeOnConfirm: false
                        });
            </script>';
    endif;
    if (request()->session()->get('info_msg')!=""):
        $msg =  request()->session()->get('info_msg');
        //$request()->session->flash('info_msg',"");
        echo '<script>
                swal({
                    title: "Info",
                    text: "'.$msg.'",
                    type: "info",
                    showCancelButton: false,
                    confirmButtonClass: "btn-info",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                });
          </script>';
    endif;
?>


