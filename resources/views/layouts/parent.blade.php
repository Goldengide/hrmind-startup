
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <title>
            HRmind UK | Healthcare Staffing Agency
        </title><!-- Stylesheets -->
        <link href="{{ URL::asset("css/bootstrap.css") }}" rel="stylesheet">
        <link href="{{ URL::asset("css/style.css") }}" rel="stylesheet">
        <link href="{{ URL::asset("css/responsive.css") }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&amp;family=Merienda:wght@400;700&amp;family=Montserrat:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="{{ URL::asset("images/favicon.png") }}" type="image/x-icon">
        <link rel="icon" href="{{ URL::asset("images/favicon.png") }}" type="image/x-icon"><!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]--><!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>
    <body>
        @yield("content")
        <script src="{{ URL::asset("js/jquery.js") }}"></script>
        <script src="{{ URL::asset("js/popper.min.js") }}"></script>
        <script src="{{ URL::asset("js/bootstrap.min.js") }}"></script>
        <script src="{{ URL::asset("js/jquery.mCustomScrollbar.concat.min.js") }}"></script>
        <script src="{{ URL::asset("js/jquery.fancybox.js") }}"></script>
        <script src="{{ URL::asset("js/appear.js") }}"></script>
        <script src="{{ URL::asset("js/nav-tool.js") }}"></script>
        <script src="{{ URL::asset("js/mixitup.js") }}"></script>
        <script src="{{ URL::asset("js/owl.js") }}"></script>
        <script src="{{ URL::asset("js/tilt.jquery.min.js") }}"></script>
        <script src="{{ URL::asset("js/wow.js") }}"></script>
        <script src="{{ URL::asset("js/isotope.js") }}"></script>
        <script src="{{ URL::asset("js/jquery-ui.js") }}"></script>
        <script src="{{ URL::asset("js/script.js") }}"></script>
    </body>
</html>
