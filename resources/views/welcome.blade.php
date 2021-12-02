<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>
        @yield('title', 'Herb - Ecommerce Doctor | Home')
    </title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ URL::asset('img/p.png') }}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/core-style.css') }}">

    <!-- Responsive CSS -->
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('fonts.css') }}" rel="stylesheet">
        <script src="{{ URL::asset('googleApiJquery.min.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('w3.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('animate.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('toastr.min.css') }}">
</head>

<body>
    @include('public.src.includes.side-nav')

    <div id="wrapper" style="overflow-x: hidden; background: url('img/bg.png') repeat 0 0 !important; background-attachment: fixed; display:flex; flex-direction:column;">
        @include('public.src.header')
            @yield('content')
        {{-- @include('public.src.includes.modal') --}}
        <div id="modalss"></div>

        @include('public.src.footer')
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ URL::asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ URL::asset('js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins.js') }}"></script>
    <script src="{{ URL::asset('js/active.js') }}"></script>
    <script src="{{ URL::asset('toaster.js') }}"></script>
    <script src="{{ URL::asset('myjs.js') }}"></script>
    <script>
    @if(Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}";
      this.toaster;
      switch(type){
          case 'info':
              toastr.info("{{ Session::get('message') }}");
            break;
          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
            break;
          case 'success':
              Command: toastr["success"]("{{ Session::get('message') }}")
            break;
          case 'error':
              toastr.error("{{ Session::get('message') }}");
            break;
        }
    @endif

    function returnModal(id){
        $("#modalss").empty();
        $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
         $.ajax({
            url : '{{ route("modal.generate") }}',
            type : "get",
            data : { item : id},
            success: function(res){
                $("#modalss").append(res);
                $(".quickviews").modal('show');
            },
            error: function(error){
            },
        });
    }
    </script>
</body>

</html>
