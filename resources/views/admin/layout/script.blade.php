<script src="{{asset('/')}}admin/assets/js/jquery.min.js"></script>
<!-- BOOTSTRAP JS -->
<script src="{{asset('/')}}admin/assets/js/bootstrap/js/popper.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/bootstrap/js/bootstrap.min.js"></script>

<!-- javascript -->
<script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/admin-apexchart.init.js"></script>
<script src="{{asset('/')}}admin/assets/libs/feather-icons/feather.min.js"></script>
<!-- Main Js -->
<!-- JAVASCRIPT -->
<script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/plugins.init.js"></script>
<script src="{{asset('/')}}admin/assets/js/app.js"></script>
<script src="{{asset('/')}}admin/assets/js/formelementadvnced.js"></script>
<!--Internal Fileuploads js-->
<script src="{{asset('/')}}admin/assets/js/fileuploads/js/fileupload.js"></script>
<script src="{{asset('/')}}admin/assets/js/fileuploads/js/file-upload.js"></script>

<!--Internal Fancy uploader js-->
<script src="{{asset('/')}}admin/assets/js/fancyuploder/jquery.ui.widget.js"></script>
<script src="{{asset('/')}}admin/assets/js/fancyuploder/jquery.fileupload.js"></script>
<script src="{{asset('/')}}admin/assets/js/fancyuploder/jquery.iframe-transport.js"></script>
<script src="{{asset('/')}}admin/assets/js/fancyuploder/jquery.fancy-fileupload.js"></script>
<script src="{{asset('/')}}admin/assets/js/fancyuploder/fancy-uploader.js"></script>

{{--multiple image show input field--}}
<script type="text/javascript">

    $(document).ready(function() {
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img style="height: 60px; width: 60px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#gallery-photo-add').on('change', function() {
                imagesPreview(this, 'div.gallery');
            });
        });
    });
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#show_image').attr('src', e.target.result);
                $('#show_image').attr('height', '100');
                $('#show_image').attr('width', '120');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imgInp").change(function(){
        readURL(this);
        console.log('111111111111');
    });

</script>
<script src="https://kit.fontawesome.com/3ad9a7a10b.js" crossorigin="anonymous"></script>

{{-- Success or fail message--}}
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>


{{-- toastr js  --}}
{{--<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>--}}

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

<!-- INTERNAL Notifications js -->
<script src="{{asset('/')}}admin/assets/notify/js/rainbow.js"></script>
<script src="{{asset('/')}}admin/assets/notify/js/sample.js"></script>
<script src="{{asset('/')}}admin/assets/notify/js/jquery.growl.js"></script>
<script src="{{asset('/')}}admin/assets/notify/js/notifIt.js"></script>
