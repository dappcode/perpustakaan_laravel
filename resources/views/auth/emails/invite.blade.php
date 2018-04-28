@component('mail::message')
# Assalamualaikum {{ $member->name }}

Admin telah mendaftarkan email anda ({{ $member->email }}) ke Aplikasi Perpustakaan Online. untuk Login, silahkan kunjungi link berikut : 

@component('mail::button', ['url' => url('login')])
Login
@endcomponent

Login dengan email Anda dan password <strong> {{ $password }} </strong>

Syukran, Jazakallahu khairan<br>
{{ config('app.name') }}
@endcomponent
