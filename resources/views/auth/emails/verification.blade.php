@component('mail::message')
# Halo {{ $user->name }}

Klik button untuk verifikasi acount anda!

@component('mail::button', ['url' => url('auth/verify', $user->verification_token) . '?email=' . urlencode($user->email)])

Verifikasi
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
