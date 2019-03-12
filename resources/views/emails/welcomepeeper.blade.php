<div style="margin:50px auto;text-align: center;">
    <a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_NAME') }}</a>
    <p>Hello, {{ $fullname }}</p>
    <p>
        <br>Your eVisit employee details are:<br>
        Full Name: {{ $fullname }}<br>
        Email: {{ $email }}<br>
        Password: {{ $password }}<br><br>
        You may change your temporary password by clicking on this link <a href="{{ env('APP_URL')  }}/password/reset"> Change Password</a>
    </p>
</div>