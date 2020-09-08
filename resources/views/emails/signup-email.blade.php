Hello {{$email_data['first_name']}} {{$email_data['last_name']}}
<br><br>
Welcome to Eshop Website!
<br>
Please click the below link to verify your email and activate your account!
<br><br>
<a href="{{ url('/')}}/verify?code={{$email_data['verification_code']}}">Click Here!</a>

<br><br>
Thank you!
<br>
Eshop