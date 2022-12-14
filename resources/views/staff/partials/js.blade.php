<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{asset('admin/vendors/codeanddeploy.tablecheckall/table-check-all.js')}}"></script>
<script src="{{asset('admin/vendors/list.js/list.min.js')}}"></script>
<script src="{{asset('admin/vendors/countup/countUp.umd.js')}}"></script>
<script src="{{asset('admin/vendors/dropzone/dropzone.min.js')}}"></script>
<script src="{{asset('admin/vendors/choices/choices.min.js')}}"></script>
<script src="{{asset('admin/vendors/popper/popper.min.js')}}"></script>
<script src="{{asset('admin/vendors/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/vendors/anchorjs/anchor.min.js')}}"></script>
<script src="{{asset('admin/vendors/is/is.min.js')}}"></script>
<script src="{{asset('admin/vendors/echarts/echarts.min.js')}}"></script>
<script src="{{asset('admin/vendors/fontawesome/all.min.js')}}"></script>
<script src="{{asset('admin/vendors/lodash/lodash.min.js')}}"></script>
<script src="{{asset('admin/assets/js/theme.js')}}"></script>
<script src="{{asset('admin/assets/data/world.js')}}"></script>
<script src="{{asset('admin/vendors/chart/chart.min.js')}}"></script>
<script src="{{asset('admin/vendors/dayjs/dayjs.min.js')}}"></script>
<script src="{{asset('admin/vendors/overlayscrollbars/OverlayScrollbars.min.js')}}"></script>
<script src="{{asset('admin/assets/js/flatpickr.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
            // membuat fungsi change
            function change() {

                // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password
                var x = document.getElementById('pass').type;

                //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
                if (x == 'password') {

                    //ubah form input password menjadi text
                    document.getElementById('pass').type = 'text';

                    //ubah icon mata terbuka menjadi tertutup
                    document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                                    <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                                    <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                                    </svg>`;
                }
                else {

                    //ubah form input password menjadi text
                    document.getElementById('pass').type = 'password';

                    //ubah icon mata terbuka menjadi tertutup
                    document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                    </svg>`;
                }
            }
        </script>

