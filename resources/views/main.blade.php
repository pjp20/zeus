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




@if (isset($cars))
<script>
    var app = <?php echo json_encode($cars3); ?>;
    // The following example creates complex markers to indicate beaches near
// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
// to the base of the flagpole.
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 7,
    zoomControl: true,
    center: { lat: 9.0579, lng: 7.4951 },
  });

  setMarkers(map);
}



// console.log(app[0][1]);
const beaches = [
  [ {!! "'Plate ".$cars[0]->vehno."'" !!}, {{$cars[0]->latitude }}, {{$cars[0]->longitude }}, 4],
  [{!! "'Plate ".$cars[1]->vehno."'" !!}, {{$cars[1]->latitude }}, {{$cars[1]->longitude }}, 5],
  [{!! "'Plate ".$cars[2]->vehno."'" !!}, {{$cars[2]->latitude }}, {{$cars[2]->longitude }}, 2],
  [{!! "'Plate ".$cars[3]->vehno."'" !!}, {{$cars[3]->latitude }}, {{$cars[3]->longitude }}, 3],
  [{!! "'Plate ".$cars[4]->vehno."'" !!}, {{$cars[4]->latitude }}, {{$cars[4]->longitude }}, 1],
  [{!! "'Plate ".$cars[5]->vehno."'" !!}, {{$cars[5]->latitude }}, {{$cars[5]->longitude }}, 5],
  [{!! "'Plate ".$cars[6]->vehno."'" !!}, {{$cars[6]->latitude }}, {{$cars[6]->longitude }}, 6],

  [{!! "'Plate ".$cars[7]->vehno."'" !!}, {{$cars[7]->latitude }}, {{$cars[7]->longitude }}, 7],

  [{!! "'Plate ".$cars[8]->vehno."'" !!}, {{$cars[8]->latitude }}, {{$cars[8]->longitude }}, 8],
  [{!! "'Plate ".$cars[9]->vehno."'" !!}, {{$cars[9]->latitude }}, {{$cars[9]->longitude }}, 9],

  [{!! "'Plate ".$cars[10]->vehno."'" !!}, {{$cars[10]->latitude }}, {{$cars[10]->longitude }}, 10],
  [{!! "'Plate ".$cars[11]->vehno."'" !!}, {{$cars[11]->latitude }}, {{$cars[11]->longitude }}, 11],
  [{!! "'Plate ".$cars[12]->vehno."'" !!}, {{$cars[12]->latitude }}, {{$cars[12]->longitude }}, 12],
  [{!! "'Plate ".$cars[13]->vehno."'" !!}, {{$cars[13]->latitude }}, {{$cars[13]->longitude }}, 13],
  [{!! "'Plate ".$cars[14]->vehno."'" !!}, {{$cars[14]->latitude }}, {{$cars[14]->longitude }}, 14],

  [{!! "'Plate ".$cars[15]->vehno."'" !!}, {{$cars[15]->latitude }}, {{$cars[15]->longitude }}, 15],

[{!! "'Plate ".$cars[16]->vehno."'" !!}, {{$cars[16]->latitude }}, {{$cars[16]->longitude }}, 16],
[{!! "'Plate ".$cars[17]->vehno."'" !!}, {{$cars[17]->latitude }}, {{$cars[17]->longitude }}, 17],

[{!! "'Plate ".$cars[18]->vehno."'" !!}, {{$cars[18]->latitude }}, {{$cars[18]->longitude }}, 18],
[{!! "'Plate ".$cars[40]->vehno."'" !!}, {{$cars[19]->latitude }}, {{$cars[19]->longitude }}, 19],
[{!! "'Plate ".$cars[20]->vehno."'" !!}, {{$cars[20]->latitude }}, {{$cars[20]->longitude }}, 20],

[ {!! "'Plate ".$cars[21]->vehno."'" !!}, {{$cars[21]->latitude }}, {{$cars[21]->longitude }}, 4],
  [{!! "'Plate ".$cars[22]->vehno."'" !!}, {{$cars[22]->latitude }}, {{$cars[22]->longitude }}, 5],
  [{!! "'Plate ".$cars[23]->vehno."'" !!}, {{$cars[23]->latitude }}, {{$cars[23]->longitude }}, 23],
  [{!! "'Plate ".$cars[24]->vehno."'" !!}, {{$cars[24]->latitude }}, {{$cars[24]->longitude }}, 24],
  [{!! "'Plate ".$cars[25]->vehno."'" !!}, {{$cars[25]->latitude }}, {{$cars[25]->longitude }}, 25],
  [{!! "'Plate ".$cars[26]->vehno."'" !!}, {{$cars[26]->latitude }}, {{$cars[26]->longitude }}, 26],
  [{!! "'Plate ".$cars[27]->vehno."'" !!}, {{$cars[27]->latitude }}, {{$cars[27]->longitude }}, 27],

  [{!! "'Plate ".$cars[28]->vehno."'" !!}, {{$cars[28]->latitude }}, {{$cars[28]->longitude }}, 28],

  [{!! "'Plate ".$cars[29]->vehno."'" !!}, {{$cars[29]->latitude }}, {{$cars[29]->longitude }}, 29],
  [{!! "'Plate ".$cars[30]->vehno."'" !!}, {{$cars[30]->latitude }}, {{$cars[30]->longitude }}, 30],

  [{!! "'Plate ".$cars[31]->vehno."'" !!}, {{$cars[31]->latitude }}, {{$cars[31]->longitude }}, 31],
  [{!! "'Plate ".$cars[32]->vehno."'" !!}, {{$cars[32]->latitude }}, {{$cars[32]->longitude }}, 32],
  [{!! "'Plate ".$cars[33]->vehno."'" !!}, {{$cars[33]->latitude }}, {{$cars[33]->longitude }}, 33],
  [{!! "'Plate ".$cars[34]->vehno."'" !!}, {{$cars[34]->latitude }}, {{$cars[34]->longitude }}, 34],
  [{!! "'Plate ".$cars[35]->vehno."'" !!}, {{$cars[35]->latitude }}, {{$cars[35]->longitude }}, 35],

  [{!! "'Plate ".$cars[36]->vehno."'" !!}, {{$cars[36]->latitude }}, {{$cars[36]->longitude }}, 36],

[{!! "'Plate ".$cars[37]->vehno."'" !!}, {{$cars[37]->latitude }}, {{$cars[37]->longitude }}, 37],
[{!! "'Plate ".$cars[38]->vehno."'" !!}, {{$cars[38]->latitude }}, {{$cars[38]->longitude }}, 38],

[{!! "'Plate ".$cars[39]->vehno."'" !!}, {{$cars[39]->latitude }}, {{$cars[39]->longitude }}, 39],
[{!! "'Plate ".$cars[40]->vehno."'" !!}, {{$cars[40]->latitude }}, {{$cars[40]->longitude }}, 40],


];
function setMarkers(map) {
  // Adds markers to the map.
  // Marker sizes are expressed as a Size of X,Y where the origin of the image
  // (0,0) is located in the top left of the image.
  // Origins, anchor positions and coordinates of the marker increase in the X
  // direction to the right and in the Y direction down.
  const image = "assets/images/car2.png"

  // Shapes define the clickable region of the icon. The type defines an HTML
  // <area> element 'poly' which traces out a polygon as a series of X,Y points.
  // The final coordinate closes the poly by connecting to the first coordinate.
  const shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: "poly",
  };

  for (let i = 0; i < beaches.length; i++) {
    const beach = beaches[i];

    new google.maps.Marker({
      position: { lat: beach[1], lng: beach[2] },
      map,
      icon: image,
      shape: shape,
      title: beach[0],
      zIndex: beach[3],
    });
  }
}

window.initMap = initMap;
</script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqf_sbtxVi2F1KSHk3XCxxYCNe2xSkX1Q&callback=initMap&v=weekly"
        defer></script>
@endif
