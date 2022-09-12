<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Zeus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- C3 Chart css -->
    <link href="{{ asset('assets/libs/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- App css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="assets/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- C3 Chart css -->
    <link href="assets/libs/c3/c3.min.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


</head>
<style>
    .form1 {
        width: 100%;
        left: 0;
        background: url('../assets/images/fati.png');
    }

    label {
        font-weight: bold;
    }
</style>

<body>
    <div id="wrapper">
        @include('sweetalert::alert')
        @include('sections.topbar')
        @include('sections.sidebar')
        @yield('content')

    </div>
</body>

</html>


<script src="{{ asset('assets/js/zeus.js') }}"></script>
<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>

<!-- Chart JS -->
<script src="{{ asset('assets/libs/chart-js/Chart.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/chartjs.init.js') }}"></script>

<!--C3 Chart-->
<script src="{{ asset('assets/libs/d3/d3.min.js') }}"></script>
<script src="{{ asset('assets/libs/c3/c3.min.js') }}"></script>

<script src="{{ asset('assets/libs/echarts/echarts.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.colVis.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatables init -->
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
<!--C3 Chart-->
<script src="{{ asset('assets/libs/d3/d3.min.js') }}"></script>
<script src="{{ asset('assets/libs/c3/c3.min.js') }}"></script>

<!-- Init js -->
<script src="assets/js/pages/c3.init.js"></script>


<!-- Chart JS -->
{{-- <script src="{{asset('assets/libs/chart-js/Chart.bundle.min.js')}}"></script>

<script src="{{asset('assets/js/chartjs.init.js')}}"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.users').select2({
            placeholder: 'Select an option'
        });
        $('.body').select2({
            placeholder: 'Select an option'
        });
        $('.vehicleOwner').select2({
            placeholder: 'Select an option'
        });
        $('.brands').select2({
            placeholder: 'Select an option'
        });
        $('.year').select2({
            placeholder: 'Select an option'
        });
        $('.transmission').select2({
            placeholder: 'Select an option'
        });
        $('.package').select2({
            placeholder: 'Select an option'
        });
        $('.fleet').select2({
            placeholder: 'Select an option'
        });
        $('.serviceCenter').select2({
            placeholder: 'Select an option'
        });
        $('.colors').select2({
            placeholder: 'Select an option'
        });
    });
</script>
<script>
    $('#requestPayment').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var reference = button.data('reference') // Extract info from data-* attributes
        var payee = button.data('payee') // Extract info from data-* attributes
        var amount = button.data('amount') // Extract info from data-* attributes
        var package_name = button.data('package_name') // Extract info from data-* attributes
        var fleet = button.data('fleet') // Extract info from data-* attributes
        var workshop = button.data('workshop') // Extract info from data-* attributes
        var datez = button.data('datez') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

        // console.log(reference)
        var modal = $(this)
        // modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.referencez').text(reference)
        modal.find('.payeez').text(payee)
        modal.find('.amount').text(amount)
        modal.find('.package_name').text(package_name)
        modal.find('.fleetz').text(fleet)
        modal.find('.datez').text(datez)
        modal.find('.workshop').text(workshop)
    })
</script>
