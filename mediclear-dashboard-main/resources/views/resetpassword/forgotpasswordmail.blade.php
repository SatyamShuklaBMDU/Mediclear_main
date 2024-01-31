{{-- <a href="{{ route('resetuserpassword', ['token' => $token]) }}">Reset Password</a> --}}
{{-- reset-password/{token} --}}

<a href="{{ url("user-reset-password/$token") }}">Reset Password</a>
