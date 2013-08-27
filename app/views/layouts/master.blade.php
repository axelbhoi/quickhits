<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Quick Hits</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Elegant Accordion with jQuery and CSS3" />
        <meta name="keywords" content="jquery, slide out,accordion, css3, fadeout, fadein, elegant, fancy, box shadow"/>

		
		@foreach($styles as $style)
			<link href="{{ URL::asset('css/'.$style) }}" rel="stylesheet">
		@endforeach	
        

		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />

		<noscript>
			<link rel="stylesheet" type="text/css" href="css/noscript.css" />
		</noscript>
    </head>

    <body>
        @section('content')

        @show

        <!-- The JavaScript -->
		@foreach($scripts as $script)
			<script type = "text/javascript" src = "{{ URL::asset('js/'.$script) }}" ></script>
		@endforeach

    </body>
</html>