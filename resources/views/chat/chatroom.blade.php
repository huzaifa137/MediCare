@include('layouts.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('layouts.side-bar-menu')

            <div class="layout-page">

                @include('layouts.nav-bar')

                <style>
                    .chat-container {
                        display: flex;
                        height: 85vh;
                        max-width: 1200px;
                        margin: 0 auto;
                        border-radius: 12px;
                        overflow: hidden;
                        background: #fff;
                        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
                    }

                    .chat-sidebar {
                        width: 340px;
                        border-right: 1px solid #eee;
                        display: flex;
                        flex-direction: column;
                        background: #f9fafb;
                    }

                    .sidebar-header {
                        padding: 15px;
                        border-bottom: 1px solid #eee;
                        background: #fff;
                    }

                    .chat-search {
                        width: 100%;
                        padding: 10px 15px;
                        border: 1px solid #ddd;
                        border-radius: 25px;
                        font-size: 14px;
                        outline: none;
                        transition: 0.2s;
                    }

                    .chat-search:focus {
                        border-color: #007bff;
                        box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
                    }

                    .conversations-list {
                        flex-grow: 1;
                        overflow-y: auto;
                    }

                    .conversation-item {
                        display: flex;
                        padding: 12px 15px;
                        cursor: pointer;
                        border-bottom: 1px solid #f0f0f0;
                        transition: background 0.2s, box-shadow 0.2s;
                        align-items: center;
                    }

                    .conversation-item:hover {
                        background: #f1f3f5;
                    }

                    .conversation-item.active {
                        background: #e8f4ff;
                        border-left: 4px solid #007bff;
                    }

                    .avatar {
                        position: relative;
                        margin-right: 12px;
                    }

                    .profile-img {
                        width: 48px;
                        height: 48px;
                        border-radius: 50%;
                        object-fit: cover;
                    }

                    .avatar::after {
                        content: '';
                        position: absolute;
                        bottom: 2px;
                        right: 2px;
                        width: 12px;
                        height: 12px;
                        border-radius: 50%;
                        border: 2px solid #fff;
                    }

                    .avatar.online::after {
                        background: #28a745;
                    }

                    .avatar.offline::after {
                        background: #adb5bd;
                    }

                    .chat-info {
                        flex-grow: 1;
                        overflow: hidden;
                    }

                    .user-name {
                        font-weight: 600;
                        color: #222;
                        display: block;
                    }

                    .last-message {
                        color: #6c757d;
                        font-size: 13px;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                    }

                    .chat-status {
                        text-align: right;
                        min-width: 60px;
                    }

                    .timestamp {
                        font-size: 12px;
                        color: #999;
                    }

                    .unread-count {
                        display: inline-block;
                        background: #007bff;
                        color: #fff;
                        font-size: 11px;
                        padding: 2px 7px;
                        border-radius: 50px;
                        margin-top: 4px;
                        font-weight: bold;
                    }

                    .chat-main {
                        flex-grow: 1;
                        display: flex;
                        flex-direction: column;
                    }

                    .chat-header {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        padding: 14px 20px;
                        border-bottom: 1px solid #eee;
                        background: #fff;
                    }

                    .header-name {
                        font-size: 16px;
                        font-weight: 600;
                    }

                    .header-status {
                        display: block;
                        font-size: 12px;
                        color: #28a745;
                    }

                    .header-actions i {
                        margin-left: 15px;
                        cursor: pointer;
                        font-size: 20px;
                        color: #6c757d;
                        padding: 8px;
                        border-radius: 50%;
                        transition: background 0.2s;
                    }

                    .header-actions i:hover {
                        background: #f1f3f5;
                        color: #007bff;
                    }

                    .messages-area {
                        flex-grow: 1;
                        overflow-y: auto;
                        padding: 20px;
                        background: #ece5dd url('path/to/chat-background.png') repeat;
                    }

                    .message {
                        max-width: 65%;
                        margin-bottom: 12px;
                        padding: 10px 14px;
                        border-radius: 18px;
                        font-size: 14px;
                        line-height: 1.4;
                        clear: both;
                        position: relative;
                    }

                    .message-time {
                        display: block;
                        text-align: right;
                        font-size: 10px;
                        color: rgba(0, 0, 0, 0.45);
                        margin-top: 3px;
                    }

                    .message.received {
                        float: left;
                        background: #fff;
                        border-bottom-left-radius: 6px;
                        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
                    }

                    .message.sent {
                        float: right;
                        background: #dcf8c6;
                        border-bottom-right-radius: 6px;
                        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
                    }

                    .read-status {
                        color: #4fc3f7;
                        font-size: 11px;
                        margin-left: 4px;
                    }

                    .unread-separator {
                        text-align: center;
                        margin: 18px 0;
                        position: relative;
                    }

                    .unread-separator span {
                        background: #ffc107;
                        color: #fff;
                        padding: 5px 12px;
                        border-radius: 20px;
                        font-size: 12px;
                        font-weight: 600;
                    }

                    .chat-input-area {
                        padding: 12px 15px;
                        display: flex;
                        align-items: center;
                        border-top: 1px solid #eee;
                        background: #fff;
                    }

                    .chat-input-area textarea {
                        flex-grow: 1;
                        padding: 10px 15px;
                        border-radius: 25px;
                        border: 1px solid #ddd;
                        resize: none;
                        max-height: 100px;
                        margin: 0 10px;
                        font-size: 14px;
                        outline: none;
                    }

                    .chat-input-area textarea:focus {
                        border-color: #007bff;
                        box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.15);
                    }

                    .chat-input-area i {
                        cursor: pointer;
                        font-size: 22px;
                        color: #007bff;
                        padding: 6px;
                        transition: color 0.2s;
                    }

                    .chat-input-area i:hover {
                        color: #0056b3;
                    }

                    @media (max-width: 768px) {
                        .chat-sidebar {
                            display: none;
                        }

                        .chat-container {
                            border-radius: 0;
                            height: 100vh;
                        }
                    }

                    .chat-container {
                        display: flex;
                        height: 100vh;
                        border: 1px solid #ddd;
                        border-radius: 8px;
                        overflow: hidden;
                    }

                    .chat-sidebar {
                        width: 30%;
                        border-right: 1px solid #ddd;
                        display: flex;
                        flex-direction: column;
                    }

                    .chat-main {
                        flex: 1;
                        display: flex;
                        flex-direction: column;
                    }

                    .chat-header .icon-back {
                        display: none;
                        cursor: pointer;
                        margin-right: 10px;
                    }

                    @media (max-width: 768px) {
                        .chat-container {
                            flex-direction: column;
                        }

                        .chat-sidebar {
                            width: 100%;
                            display: block;
                        }

                        .chat-main {
                            width: 100%;
                            display: none;
                        }

                        .chat-main.active {
                            display: flex;
                        }

                        .chat-sidebar.hidden {
                            display: none;
                        }

                        .chat-header .icon-back {
                            display: inline-block;
                        }
                    }

                    .avatar {
                        width: 50px;
                        height: 50px;
                        flex-shrink: 0;
                        border-radius: 50%;
                        overflow: hidden;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .avatar img.profile-img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }

                    .chat-info .last-message {
                        font-size: 0.85rem;
                        color: #666;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        display: block;
                        max-width: 180px;
                    }

                    .typing-indicator {
                        display: flex;
                        align-items: center;
                        margin: 5px 0;
                        gap: 4px;
                    }

                    .typing-indicator span {
                        width: 8px;
                        height: 8px;
                        background: #999;
                        border-radius: 50%;
                        display: inline-block;
                        animation: typingBounce 1.3s infinite ease-in-out;
                    }

                    .typing-indicator span:nth-child(1) {
                        animation-delay: 0s;
                    }

                    .typing-indicator span:nth-child(2) {
                        animation-delay: 0.2s;
                    }

                    .typing-indicator span:nth-child(3) {
                        animation-delay: 0.4s;
                    }

                    @keyframes typingBounce {

                        0%,
                        80%,
                        100% {
                            transform: scale(0.6);
                            opacity: 0.5;
                        }

                        40% {
                            transform: scale(1);
                            opacity: 1;
                        }
                    }

                    .avatar {
                        position: relative;
                        width: 50px;
                        height: 50px;
                        border-radius: 50%;
                        overflow: hidden;
                    }

                    .avatar img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }

                    .avatar::after {
                        content: "";
                        position: absolute;
                        bottom: 2px;
                        right: 2px;
                        width: 10px;
                        height: 10px;
                        border-radius: 50%;
                        border: 2px solid #fff;
                        background: #999;
                    }

                    .avatar.online::after {
                        background: #28a745;
                    }

                    .chat-container {
                        display: flex;
                        height: 100%;
                        flex-direction: row;
                    }

                    .chat-main {
                        display: flex;
                        flex-direction: column;
                        flex: 1;
                        height: 100%;
                    }

                    .messages-area {
                        flex: 1;
                        overflow-y: auto;
                        padding: 15px;
                        max-height: calc(100vh - 140px);
                        box-sizing: border-box;
                    }

                    /* Blue tick ui Implementation */

                    .message {
                        position: relative;
                        padding: 8px 12px;
                        margin: 6px 0;
                        border-radius: 12px;
                        max-width: 70%;
                        display: inline-block;
                    }

                    .message.sent {
                        background-color: #dcf8c6;
                        margin-left: auto;
                        text-align: right;
                    }

                    .message.received {
                        background-color: #fff;
                        margin-right: auto;
                        text-align: left;
                    }

                    .message-time {
                        font-size: 0.7rem;
                        color: #555;
                        margin-left: 4px;
                    }

                    .tick {
                        font-size: 0.7rem;
                        margin-left: 4px;
                    }

                    .single-gray {
                        color: gray;
                    }

                    .double-gray {
                        color: gray;
                    }

                    .double-blue {
                        color: #4fc3f7;
                        /* WhatsApp blue */
                    }

                    .profile-initials {
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    background-color: #cce5ff; /* light blue */
                    color: #004085; /* dark text for contrast */
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: bold;
                    font-size: 16px;
                    text-transform: uppercase;
                }

                @media (max-width: 768px) {
                    .chat-container {
                        flex-direction: column;
                        height: 100vh;
                    }

                    .chat-sidebar {
                        width: 100%;
                        display: block;
                    }

                    .chat-main {
                        width: 100%;
                        display: none; /* hidden initially */
                        flex: 1;
                    }

                    .chat-main.active {
                        display: flex;
                    }

                    .chat-sidebar.hidden {
                        display: none;
                    }

                    .chat-header .icon-back {
                        display: inline-block;
                    }
                }


                </style>

        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="chat-container">

                    <!-- Sidebar -->
                    <div class="chat-sidebar">
                        <div class="sidebar-header">
                            <input type="text" placeholder="Search Doctors or Patients..." class="chat-search">
                        </div>

                        <div class="conversations-list">
                            {{-- Existing conversations --}}
                            @if(isset($conversations) && $conversations->count() > 0)
                                @php
                                    // Sort conversations by last message timestamp descending
                                    $sortedConversations = $conversations->sortByDesc(function ($conversation) {
                                        return optional($conversation->lastMessage)->created_at;
                                    });
                                @endphp

                                @foreach($sortedConversations as $conversation)
                                    @php
                                        $otherUser = $user->user_role == 3 ? $conversation->doctor : $conversation->patient;
                                        $otherName = $otherUser->fullName ?? $otherUser->full_name ?? 'Unknown';
                                        $lastMessage = $conversation->lastMessage;

                                        // Generate initials
                                        $nameParts = explode(' ', $otherName);
                                        $initials = strtoupper(substr($nameParts[0], 0, 1) . (isset($nameParts[1]) ? substr($nameParts[1], 0, 1) : ''));
                                    @endphp

                                    <div class="conversation-item" data-id="{{ $conversation->id }}">
                                        <div class="avatar" 
                                            style="background-color: #cce5ff; color: #007bff; display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:16px; border-radius:50%; width:40px; height:40px;">
                                            {{ $initials }}
                                        </div>
                                        <div class="chat-info">
                                            <span class="user-name">{{ $otherName }}</span>
                                            <p class="last-message">{{ $lastMessage->message ?? 'No messages yet' }}</p>
                                        </div>
                                        <div class="chat-status">
                                            <span class="timestamp">{{ $lastMessage?->created_at?->format('h:i A') ?? '' }}</span>
                                            <span class="unread-count"
                                                @if(!($conversation->messages()->where('status', '!=', 'read')->count()))
                                                style="display:none;" @endif>
                                                {{ $conversation->messages()->where('status', '!=', 'read')->count() }}
                                            </span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            {{-- Doctors to start conversation (patients only) --}}
                            @if($user->user_role != 2 && isset($doctors) && $doctors->count() > 0)
                                @foreach($doctors as $doctor)
                                    @php
                                        $existing = $conversations->firstWhere('doctor_id', $doctor->id);
                                        $doctorName = $doctor->fullName ?? 'Unknown';
                                        $doctorInitials = strtoupper(substr(explode(' ', $doctorName)[0], 0, 1) . (isset(explode(' ', $doctorName)[1]) ? substr(explode(' ', $doctorName)[1], 0, 1) : ''));
                                    @endphp
                                    @if(!$existing)
                                        <div class="conversation-item start-doctor" data-doctor-id="{{ $doctor->id }}">
                                            <div class="avatar" 
                                                style="background-color: #cce5ff; color: #007bff; display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:16px; border-radius:50%; width:40px; height:40px;">
                                                {{ $doctorInitials }}
                                            </div>
                                            <div class="chat-info">
                                                <span class="user-name">{{ $doctorName }}</span>
                                                <p class="last-message">Start a new conversation</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif

                            {{-- Empty state --}}
                            @if((!isset($conversations) || $conversations->count() == 0) && (!isset($doctors) || $doctors->count() == 0))
                                <div class="empty-chat">
                                    <p>No conversations yet. Start a chat!</p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Main Chat -->
                    <div class="chat-main">
                        <div class="chat-header">
                            <i class="icon-back" onclick="goBack()">⬅</i>
                            <div class="header-info">
                                <span class="header-name"></span>
                                <span class="header-status"></span>
                            </div>
                        </div>

                        <div class="messages-area">
                            <!-- Messages load dynamically -->
                        </div>

                        <div class="chat-input-area">
                            <i class="icon-attach">📎</i>
                            <textarea id="chatInput" placeholder="Select a conversation to start typing..." rows="1"></textarea>
                            <i class="icon-send" onclick="sendMessage()">🚀</i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<script>
const currentUserId = {{ $user->id }};
let activeConversationId = null;
let currentDoctorIdForNew = null; // For new conversations
const csrfToken = $('meta[name="csrf-token"]').attr('content');

// =========================
// Handle conversation click
// =========================
$(document).on('click', '.conversation-item', function () {
    const doctorId = $(this).data('doctor-id');
    const conversationId = $(this).data('id');

    $('.conversation-item').removeClass('active');
    $(this).addClass('active');

    if ($(this).hasClass('start-doctor')) {
        currentDoctorIdForNew = doctorId;
        openChatPlaceholder(doctorId);
    } else if (conversationId) {
        currentDoctorIdForNew = null;
        openChat(conversationId, this);
    }
});

// =========================
// Open existing conversation
// =========================
function openChat(conversationId, el) {
    activeConversationId = conversationId;
    $('#chatInput').prop('disabled', false).attr('placeholder', 'Type a message...');
    $('.header-name').text($(el).find('.user-name').text() || '');
    $('.header-status').text('Online');

    $.get(`/chat/${conversationId}/messages`, function (messages) {
        $('.messages-area').html('');
        messages.forEach(msg => appendMessage(msg));

        // Mark all incoming messages as read on server
        $.post(`/chat/${conversationId}/mark-read`, { _token: csrfToken }, function () {
            $(el).find('.unread-count').hide();
        });
    });

    if (window.innerWidth <= 768) {
        $('.chat-sidebar').addClass('hidden');
        $('.chat-main').addClass('active');
    }
}

// =========================
// Open placeholder for new conversation
// =========================
function openChatPlaceholder(doctorId) {
    activeConversationId = null;
    $('#chatInput').prop('disabled', false).attr('placeholder', 'Type a message...');
    $('.header-name').text($('.conversation-item.active').find('.user-name').text() || '');
    $('.header-status').text('Online');
    $('.messages-area').html('<p class="no-messages">No messages yet. Start typing below...</p>');

    if (window.innerWidth <= 768) {
        $('.chat-sidebar').addClass('hidden');
        $('.chat-main').addClass('active');
    }
}

// =========================
// Send message handler
// =========================
function handleSend() {
    const text = $('#chatInput').val().trim();
    if (!text) return;

    const now = new Date();
    const time = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', hour12: true });

    if (activeConversationId) {
        // Normal message
        $.post(`/chat/${activeConversationId}/send`, { message: text, _token: csrfToken }, function (data) {
            appendMessage({ ...data, sender_id: currentUserId, conversation_id: activeConversationId, time });
            $('#chatInput').val('');

            moveConversationToTop(activeConversationId);
            updateConversationPreview(activeConversationId, text, time);
        });

    } else if (currentDoctorIdForNew) {
        // First message
        const el = $('.conversation-item.start-doctor.active')[0];

        $.post(`/chat/send-first-message`, { 
            message: text, 
            doctor_id: currentDoctorIdForNew, 
            _token: csrfToken 
        }, function (data) {
            if (data.conversation_id) {
                $(el).removeClass('start-doctor').attr('data-id', data.conversation_id);
                activeConversationId = data.conversation_id;
                currentDoctorIdForNew = null;
                $('.messages-area').html('');

                appendMessage({
                    ...data,
                    sender_id: currentUserId,
                    conversation_id: data.conversation_id,
                    time
                });

                $('#chatInput').val('');

                moveConversationToTop(data.conversation_id);
                updateConversationPreview(data.conversation_id, text, time);

                $(el).find('.unread-count').hide();
            }
        });
    }
}

// =========================
// Append message dynamically
// =========================
function appendMessage(message) {
    const $messagesArea = $('.messages-area');
    const isSender = message.sender_id == currentUserId;

    // Tick logic
    let tickHtml = '';
    if (isSender) {
        if (message.status === 'sent') tickHtml = '<span class="tick single-gray">✔</span>';
        else if (message.status === 'delivered') tickHtml = '<span class="tick double-gray">✔✔</span>';
        else if (message.status === 'read') tickHtml = '<span class="tick double-blue">✔✔</span>';
    }

    const $div = $('<div>')
        .addClass('message')
        .addClass(isSender ? 'sent' : 'received')
        .html(`
            <p>${$('<div>').text(message.message).html()}</p>
            <span class="message-time">${message.time}</span>
            ${tickHtml}
        `);

    $messagesArea.append($div);
    $messagesArea.scrollTop($messagesArea.prop("scrollHeight"));

    // Hide unread counter if current user opened the chat
    if (!isSender && activeConversationId == message.conversation_id) {
        $(`.conversation-item[data-id="${message.conversation_id}"]`).find('.unread-count').hide();
    }
}

// =========================
// Conversation list helpers
// =========================
function moveConversationToTop(conversationId) {
    const $conversation = $(`.conversation-item[data-id="${conversationId}"]`);
    if ($conversation.length) {
        $conversation.prependTo('.conversations-list');
    }
}

function updateConversationPreview(conversationId, lastMessage, time) {
    const $conversation = $(`.conversation-item[data-id="${conversationId}"]`);
    if ($conversation.length) {
        $conversation.find('.last-message').text(lastMessage);
        $conversation.find('.last-time').text(time);
    }
}

// =========================
// Init on page load
// =========================
$(document).ready(function () {
    $('#chatInput').prop('disabled', true);

    $('#chatInput').off('keypress').on('keypress', function (e) {
        if (e.which === 13 && !e.shiftKey) {
            e.preventDefault();
            handleSend();
        }
    });

    $('.icon-send').off('click').on('click', function () {
        handleSend();
    });
});

// =========================
// Back button for mobile
// =========================
function goBack() {
    $('.chat-main').removeClass('active');
    $('.chat-sidebar').removeClass('hidden');
}
</script>





                @include('layouts.footer')