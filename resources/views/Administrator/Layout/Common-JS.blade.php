<!-- jQuery -->
<script src={{URL::asset('plugins/jquery/jquery.min.js')}}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{URL::asset('https://code.jquery.com/ui/1.12.1/jquery-ui.min.js')}}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{URL::asset('dist/js/adminlte.js')}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{URL::asset('dist/js/demo.js')}}></script>
