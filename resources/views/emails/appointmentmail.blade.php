<div style="margin:50px auto;text-align: center;">
    <a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_NAME') }}</a>
    <p>Hello, {{ $firstName }}</p>
    <p> Booked an appointment with a Peeper.<br><br>

    You booked an appointment with a peeper.<br>
    Your appointment details are:
        <ul>
            <li>Fullname: {{ $firstName.' '. $lastName }}</li>
            <li>Email: {{ $email }}</li>
            <li>Telephone: {{ $telephone }}</li>
            <li>Venue: {{ $venue }}</li>
            <li>Date: {{ $dates }}</li>
            <li>Time: {{ $time }}</li>
            <li>No. Of Photographers: {{ $adults }}</li>
            <li>Event: {{ $event }}</li>
            <li>Notes: {{ $note }}</li>
        </ul>
    </p>
    <br>
    <p>Thanks for working with Unpeep.</p>
</div>