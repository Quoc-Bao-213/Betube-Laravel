<p>We heard that you lost your BeTube password. Sorry about that!</p>
<p>But don’t worry! You can use the following link to reset your password:</p>
<p>{{URL::to('/')}}/change-pass?email={{ $email }}&token={{ $token }}</p>
<p>If you don’t use this link within 1 hours, it will expire. To get a new password reset link, visit {{ env('APP.ENV') }}/forgot-password</p>
<p>Thanks,<br>
The BeTube Team</p>
