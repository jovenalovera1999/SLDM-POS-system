<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
<script src="{{asset('js/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('js/buttons.print.min.js')}}"></script>
<script src="{{asset('js/pdfmake.min.js')}}"></script>
<script src="{{asset('js/searchBuilder.bootstrap5.min.js')}}"></script>
<script src="{{asset('js/searchPanes.bootstrap5.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $("#custom-table").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'print'
            ]
        });
    });
</script>
</body>
</html>