<div>
    <ul class="dropdown-menu">
        @foreach ($notifications as $notification)
            <li>{{ $notification->data['username'] }}: {{ $notification->data['message_body']  }}</li>
        @endforeach
    </ul>
</div>
