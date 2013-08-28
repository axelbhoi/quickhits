<html>
	<head>
		<title>Contact Us</title>
	</head>

	<body>
	{{ Form::open(array('url' => 'send/email','id' => 'emailForm')) }}
		{{ Form::label('name','Your Name: ') }}
		{{ Form::text('name',$value=null,array('class'=>'inputText','id'=>'name')) }}
		<br />
		{{ Form::label('email','Your E-mail:') }}
		{{ Form::email('email',$value = null, array('class'=>'inputText','id'=>'email')) }}
		<br />
		{{ Form::label('mobile','Your mobile number:') }}
		{{ Form::text('mobile',$value = null, array('class' => 'inputText','id'=>'mobile')) }}
		<br />
		{{ Form::label('message','What you want to say') }}
		<br />
		{{ Form::textarea('message','inputText') }}
		<br />
		{{ Form::submit('Send it!', array('id'=>'submitter')) }}
	{{ Form::close() }}		
	</body>

</html>
