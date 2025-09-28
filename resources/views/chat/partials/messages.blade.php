<div class="messages-list">
    @foreach($messages as $message)
        <div class="message {{ $message->sender_type == 'doctor' ? 'received' : 'sent' }}">
            <p>{{ $message->message }}</p>
            <span class="message-time">{{ $message->created_at->format('h:i A') }}</span>
        </div>
    @endforeach

    <div class="typing-indicator" style="display: none;">
        <span></span><span></span><span></span>
    </div>
</div>
