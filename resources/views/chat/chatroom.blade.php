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
                </style>

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="chat-container">

                            <!-- Sidebar -->
                            <div class="chat-sidebar">
                                <div class="sidebar-header">
                                    <input type="text" placeholder="Search Doctors or Patients..." class="chat-search">
                                </div>

                                @if(isset($conversations) && $conversations->count() > 0)
                                    <div class="conversations-list">
                                        @foreach($conversations as $conversation)
                                            @php
                                                $otherUser = $user->user_role == 3 ? $conversation->doctor : $conversation->patient;
                                                $lastMessage = $conversation->lastMessage;
                                            @endphp
                                            <div class="conversation-item" data-id="{{ $conversation->id }}"
                                                onclick="openChat('{{ $conversation->id }}', this)">
                                                <div class="avatar {{ $otherUser->status ?? 'offline' }}">
                                                    <img src="{{ asset($otherUser->avatar ?? 'assets-site/img/default-avatar.png') }}"
                                                        class="profile-img"
                                                        alt="{{ $otherUser->full_name ?? $otherUser->name }}">
                                                </div>
                                                <div class="chat-info">
                                                    <span
                                                        class="user-name">{{ $otherUser->full_name ?? $otherUser->name }}</span>
                                                    <p class="last-message">{{ $lastMessage->message ?? 'No messages yet' }}</p>
                                                </div>
                                                <div class="chat-status">
                                                    <span
                                                        class="timestamp">{{ $lastMessage?->created_at?->format('h:i A') ?? '' }}</span>
                                                    <span class="unread-count">{{ $conversation->unread_count ?? 0 }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if($user->user_role != 2 && isset($doctors) && $doctors->count() > 0)
                                    <div class="conversations-list">
                                        @foreach($doctors as $doctor)
                                            <div class="conversation-item start-doctor" data-id="{{ $doctor->id }}">
                                                <div class="avatar online">
                                                    <img src="{{ asset('assets-site/img/default-avatar.png') }}"
                                                        class="profile-img" alt="{{ $doctor->fullName }}">
                                                </div>
                                                <div class="chat-info">
                                                    <span class="user-name">{{ $doctor->fullName }}</span>
                                                    <p class="last-message">Start a new conversation</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if((!isset($conversations) || $conversations->count() == 0) && (!isset($doctors) || $doctors->count() == 0))
                                    <div class="empty-chat">
                                        <p>No conversations yet. Start a chat!</p>
                                    </div>
                                @endif
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
                                    <!-- Messages will load dynamically via AJAX -->
                                </div>

                                <div class="chat-input-area">
                                    <i class="icon-attach">📎</i>
                                    <textarea id="chatInput" placeholder="Select a conversation to start typing..."
                                        rows="1"></textarea>
                                    <i class="icon-send" onclick="sendMessage()">🚀</i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <script>
                    // Global
                    let activeConversationId = null;

                    // Delegated click: handles both existing conversations and "start new" doctor items.
                    $(document).on('click', '.conversation-item', function () {
                        const id = $(this).attr('data-id');

                        if ($(this).hasClass('start-doctor')) {
                            // doctor item → start new conversation
                            startConversation(id, this);
                        } else {
                            // existing conversation
                            openChat(id, this);
                        }
                    });

                    function openChat(conversationId, el) {
                        activeConversationId = conversationId;

                        // Highlight active conversation
                        $('.conversation-item').removeClass('active');
                        $(el).addClass('active');

                        // Enable input
                        $('#chatInput')
                            .prop('disabled', false)
                            .attr('placeholder', 'Type a message...');

                        // Update header info
                        const name = $(el).find('.user-name').text() || $(el).data('name') || '';
                        $('.header-name').text(name);

                        const statusText = $(el).find('.avatar').hasClass('online') ? 'Online' : 'Offline';
                        $('.header-status').text(statusText);

                        // Load messages into .messages-area
                        $.ajax({
                            url: `/chat/${conversationId}`,
                            method: 'GET',
                            success: function (html) {
                                $('.messages-area').html(html);

                                // scroll to bottom
                                $('.messages-area').scrollTop($('.messages-area').prop("scrollHeight"));
                            },
                            error: function (xhr) {
                                console.error('openChat error:', xhr.responseText || xhr.statusText);
                            }
                        });
                    }

                    function startConversation(doctorId, el) {
                        $.ajax({
                            url: `/chat/start/${doctorId}`,
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (data) {
                                if (data.conversation_id) {
                                    // Update the clicked doctor item → conversation item
                                    $(el).removeClass('start-doctor');
                                    $(el).attr('data-id', data.conversation_id);

                                    // Immediately open the new conversation
                                    openChat(data.conversation_id, el);
                                } else {
                                    console.error('startConversation: no conversation_id in response', data);
                                    alert('Could not start conversation. Try again.');
                                }
                            },
                            error: function (xhr) {
                                console.error('startConversation error:', xhr.responseText || xhr.statusText);
                            }
                        });
                    }

                    function sendMessage() {
                        const text = $('#chatInput').val().trim();
                        if (!text) return;

                        if (!activeConversationId) {
                            alert("Please select a conversation first.");
                            return;
                        }

                        $.ajax({
                            url: `/chat/${activeConversationId}/send`,
                            method: 'POST',
                            data: { message: text },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function (data) {
                                const $messagesArea = $('.messages-area');

                                // Escape user text to prevent XSS
                                const safeText = $('<div>').text(data.message).html();

                                const $div = $('<div>')
                                    .addClass('message sent')
                                    .html(`
                        <p>${safeText}</p>
                        <span class="message-time">${data.time}</span>
                    `);

                                $messagesArea.append($div);
                                $('#chatInput').val('');

                                // Scroll to bottom after new message
                                $messagesArea.scrollTop($messagesArea.prop("scrollHeight"));
                            },
                            error: function (xhr) {
                                console.error('sendMessage error:', xhr.responseText || xhr.statusText);
                            }
                        });
                    }

                    // Press Enter to send (Shift+Enter for newline)
                    $(document).on('keypress', '#chatInput', function (e) {
                        if (e.which === 13 && !e.shiftKey) {
                            e.preventDefault();
                            sendMessage();
                        }
                    });

                    // Disable input until a conversation is selected
                    $('#chatInput').prop('disabled', true);
                </script>


                @include('layouts.footer')