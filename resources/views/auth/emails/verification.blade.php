Klik link berikut untuk melakukan klik pada link berikut : 
<a href=" {{ $link = url('auth/verify', $token). '?email=' . urlencode($user->email) }} "> {{ $link }} </a>