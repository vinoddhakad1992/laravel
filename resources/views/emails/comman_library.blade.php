<!DOCTYPE html>
<html>
<head>
	<title>Quest Team</title>
</head>
<body>
<div style="width:100%; max-width: 100%; height: auto; border:1px solid #ddd; margin:50px 0;max-width: 100%;">
	<div style="background: #eee;padding: 15px 20px;">
		
	</div>
	<div style="font-size: 16px;font-family: sans-serif;text-align: left; margin: 40px 20px">
		<p style="font-size: 18px;">Dear {{ ucfirst($name) }},</p>
		<p>{!! $body !!}</p>
		
		<div style="margin-top: 30px;">
			<p style="margin:5px 0;font-weight: bold;color:#000;"> Thanks &  Regards,</p>
			<p style="margin:5px 0;font-weight: bold;color:#000;">Team Quest</p>
		</div>
	</div>
	<div style="background-color: #8D021E;color: #fff;padding: 15px 20px;text-align: center;">
		Copyright © 2020 - 2021 
		<div style="margin-top: 10px;">
			
		</div>
	</div>
</div>
</body>
</html>