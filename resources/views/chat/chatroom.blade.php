@include('layouts.header')

<body>

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
            background-color: #cce5ff;
            /* light blue */
            color: #004085;
            /* dark text for contrast */
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
                display: none;
                /* hidden initially */
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

        .last-message-tick {
            margin-right: 6px;
            display: inline-block;
        }

        .empty-chat-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80%;
            text-align: center;
            padding: 2rem;
        }

        .empty-chat-card {
            background-color: #f0f4f8;
            padding: 3rem 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            max-width: 400px;
            width: 100%;
        }

        .empty-chat-card img.empty-chat-image {
            width: 120px;
            margin-bottom: 1.5rem;
            opacity: 0.85;
        }

        .empty-chat-card h3 {
            font-size: 1.5rem;
            color: #1a202c;
            margin-bottom: 0.5rem;
        }

        .empty-chat-card p {
            font-size: 1rem;
            color: #4a5568;
        }

        #attachmentPreview {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin: 5px 0;
        }

        .attachment-item {
            position: relative;
            display: inline-block;
        }

        .attachment-thumb {
            max-width: 150px;
            /* restrict width */
            max-height: 120px;
            /* restrict height */
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .attachment-item .remove-attachment {
            position: absolute;
            top: -5px;
            right: -5px;
            background: red;
            color: #fff;
            font-weight: bold;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            text-align: center;
            line-height: 18px;
            cursor: pointer;
            font-size: 12px;
        }

        /* Audio message inside chat bubble */
        .message audio {
            width: 100%;
            max-width: 250px;
            height: 32px;
            border-radius: 6px;
            outline: none;
        }

        .message.sent audio {
            margin-left: auto;
            display: block;
        }

        .message.received audio {
            margin-right: auto;
            display: block;
        }

        @media (max-width: 480px) {
            .message audio {
                max-width: 180px;
                height: 30px;
            }
        }

        @media (max-width: 768px) {
            .chat-input-area {
                flex-direction: column;
                align-items: stretch;
                gap: 6px;
                padding: 10px;
            }

            /* Icons stay above textarea */
            .chat-input-area .chat-icons {
                order: 1;
                /* above textarea */
                justify-content: flex-start;
                gap: 8px;
            }

            /* Textarea with send button inside */
            .chat-input-area .textarea-wrapper {
                position: relative;
                order: 2;
                width: 100%;
            }

            .chat-input-area textarea {
                width: 100%;
                font-size: 16px;
                padding: 12px 50px 12px 15px;
                /* right padding for send icon */
                border-radius: 25px;
                border: 1px solid #ddd;
                resize: none;
                outline: none;
            }

            .chat-input-area i.icon-send {
                position: absolute;
                right: 12px;
                top: 50%;
                transform: translateY(-50%);
                font-size: 24px;
                cursor: pointer;
                color: #007bff;
                padding: 4px;
                transition: 0.2s;
            }

            .chat-input-area i.icon-send:hover {
                color: #0056b3;
            }
        }

        /* Video Call Modal */
        .video-call-modal {
            position: fixed;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 500px;
            height: 70%;
            background: #111;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
            z-index: 2000;
            display: flex;
            flex-direction: column;
            animation: fadeIn 0.3s ease;
        }

        .video-call-modal video {
            width: 100%;
            flex-grow: 1;
            object-fit: cover;
            border-radius: 12px 12px 0 0;
            background: black;
        }

        .video-call-controls {
            display: flex;
            justify-content: space-around;
            padding: 8px;
            background: #222;
        }

        .video-call-controls button {
            background: #e74c3c;
            border: none;
            color: #fff;
            padding: 10px 15px;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .video-call-controls button.accept {
            background: #2ecc71;
        }

        .video-call-controls button:hover {
            opacity: 0.85;
        }

        /* Small local preview */
        .video-call-local {
            position: absolute;
            width: 120px;
            height: 90px;
            bottom: 20px;
            right: 20px;
            border: 2px solid #fff;
            border-radius: 8px;
            overflow: hidden;
            z-index: 2100;
            cursor: move;
        }

        .video-call-local video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }

        @media (max-width: 480px) {
            .video-call-modal {
                width: 100%;
                height: 60%;
                top: 20%;
            }

            .video-call-local {
                width: 80px;
                height: 60px;
                bottom: 10px;
                right: 10px;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateX(-50%) translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
            }
        }
    </style>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('layouts.side-bar-menu')

            <div class="layout-page">

                @include('layouts.nav-bar')

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

                                                // Tick logic
                                                $status = $conversation->lastMessageStatus;
                                                $tick = '';
                                                if ($lastMessage && $lastMessage->sender_id == $user->id) {
                                                    if ($status == 'sent')
                                                        $tick = '✔';
                                                    elseif ($status == 'delivered')
                                                        $tick = '✔✔';
                                                    elseif ($status == 'read')
                                                        $tick = '✔✔';
                                                }
                                            @endphp

                                            <div class="conversation-item" data-id="{{ $conversation->id }}">
                                                <div class="avatar"
                                                    style="background-color: #cce5ff; color: #007bff; display:flex; align-items:center; justify-content:center; font-weight:bold; font-size:16px; border-radius:50%; width:40px; height:40px;">
                                                    {{ $initials }}
                                                </div>
                                                <div class="chat-info">
                                                    <span class="user-name">{{ $otherName }}</span>
                                                    <p class="last-message">
                                                        @if($tick)
                                                            <span
                                                                class="last-message-tick
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        @if($status === 'sent') single-gray
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        @elseif($status === 'delivered') double-gray
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        @elseif($status === 'read') double-blue
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        @endif
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ">
                                                                {{ $tick }}
                                                            </span>
                                                        @endif
                                                        {{ $lastMessage->message ?? 'No messages yet' }}
                                                    </p>
                                                </div>
                                                <div class="chat-status">
                                                    <span
                                                        class="timestamp">{{ $lastMessage?->created_at?->format('h:i A') ?? '' }}</span>
                                                    <span class="unread-count" @if(!$conversation->unread_count)
                                                    style="display:none;" @endif>
                                                        {{ $conversation->unread_count }}
                                                    </span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

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
                                        <div class="empty-chat-container">
                                            <div class="empty-chat-card">
                                                <img src="/assets-site/img/ChatPlaceholder.jpg" alt="No messages"
                                                    class="empty-chat-image" style="border-radius: 50%;">

                                                <h5>No Conversations Yet</h5>
                                                <p>Once a patient sends you a message, it will appear here. Encourage
                                                    patients to reach out!</p>
                                            </div>
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

                                {{-- <div class="chat-input-area">
                                    <i class="icon-attach">📎</i>
                                    <i class="icon-mic" style="margin-left:5px; cursor:pointer;">🎤</i>
                                    <i class="icon-video-call" style="margin-left:5px; cursor:pointer;">🎥</i>
                                    <textarea id="chatInput" placeholder="Select a conversation to start typing..."
                                        rows="1"></textarea>
                                    <i class="icon-send" onclick="sendMessage()">🚀</i>
                                </div> --}}

                                <div class="chat-input-area">
                                    <div class="chat-icons">
                                        <i class="icon-attach">📎</i>
                                        <i class="icon-mic">🎤</i>
                                        <i class="icon-video-call">🎥</i>
                                    </div>
                                    <div class="textarea-wrapper">
                                        <textarea id="chatInput" placeholder="Type a message..." rows="1"></textarea>
                                        <i class="icon-send" onclick="sendMessage()">🚀</i>
                                    </div>
                                </div>


                                <div id="recordingPreview" style="display:none; margin-left:10px; position:relative;"
                                    class="mb-4">
                                    <span id="recordingLabel" style="
                                        font-family: Arial, sans-serif;
                                        font-weight: 600;
                                        color: #e69539;
                                        position: relative;
                                        display: inline-block;
                                        ">
                                        🟠 Recording
                                        <style>
                                            #recordingLabel::after {
                                                content: '...';
                                                display: inline-block;
                                                animation: waveDots 1.5s infinite steps(4);
                                            }

                                            @keyframes waveDots {
                                                0% {
                                                    content: '';
                                                }

                                                25% {
                                                    content: '.';
                                                }

                                                50% {
                                                    content: '..';
                                                }

                                                75% {
                                                    content: '...';
                                                }

                                                100% {
                                                    content: '';
                                                }
                                            }
                                        </style>
                                    </span>

                                    <span id="stopRecording" style="
                                    color:green;
                                    cursor:pointer;
                                    margin-left:8px;
                                    font-weight:bold;
                                ">⏹ Send ></span>
                                    <span id="cancelRecording" style="
                                    color:red;
                                    cursor:pointer;
                                    margin-left:8px;
                                    font-weight:bold;
                                ">❌ Cancel</span>
                                </div>

                                <!-- Hidden file input for attachments -->
                                <input type="file" id="chatAttachment" style="display: none;" multiple>

                                <!-- Optional preview container -->
                                <div id="attachmentPreview" class="attachment-preview"
                                    style="display:none; margin:5px 0;"></div>

                            </div>

                        </div>
                    </div>
                </div>

                <script>
                    const currentUserId = {{ $user->id }};
                    let activeConversationId = null;
                    let currentDoctorIdForNew = null;
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

                            // Mark all incoming messages as read
                            $.post(`/chat/${conversationId}/mark-read`, { _token: csrfToken }, function () {
                                $(el).find('.unread-count').text('0').hide();
                                // Update tick in sidebar to "read" if last message was sent by current user
                                const lastMsg = messages[messages.length - 1];
                                if (lastMsg?.sender_id == currentUserId) {
                                    updateConversationPreview(conversationId, lastMsg.message, lastMsg.time, lastMsg.status);
                                }
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
                        $('.messages-area').html('<p class="no-messages text-center">No messages yet. Start typing below...</p>');

                        if (window.innerWidth <= 768) {
                            $('.chat-sidebar').addClass('hidden');
                            $('.chat-main').addClass('active');
                        }
                    }

                    // =========================
                    // Send message handler (clean version)
                    // =========================

                    function handleSend() {
                        const text = $('#chatInput').val().trim();
                        const files = $('#chatAttachment')[0].files;

                        // No text or file? Do nothing.
                        if (!text && files.length === 0) return;

                        const now = new Date();
                        const time = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', hour12: true });
                        const tempId = 'temp-' + Date.now();

                        // Optimistically append message with text + previews
                        appendMessage({
                            id: tempId,
                            sender_id: currentUserId,
                            conversation_id: activeConversationId,
                            message: text,
                            time: time,
                            status: 'sending',
                            attachments: files.length > 0 ? Array.from(files).map(f => ({
                                name: f.name,
                                type: f.type,
                                url: URL.createObjectURL(f)
                            })) : []
                        });

                        $('#chatInput').val('');

                        // Prepare FormData for AJAX upload
                        const formData = new FormData();
                        formData.append('_token', csrfToken);
                        if (text) formData.append('message', text);

                        for (let file of files) {
                            formData.append('attachments[]', file);
                        }

                        // === EXISTING CONVERSATION ===
                        if (activeConversationId) {
                            $.ajax({
                                url: `/chat/${activeConversationId}/send`,
                                method: 'POST',
                                data: formData,
                                processData: false,
                                contentType: false,
                            }).done(function (data) {
                                updateMessageStatus(tempId, data.id, data.status || 'sent');
                                moveConversationToTop(activeConversationId);
                                updateConversationPreview(activeConversationId, text || '[Attachment]', time, data.status || 'sent');

                                // Clear file input and preview
                                $('#chatAttachment').val('');
                                $('#attachmentPreview').empty().hide();
                            }).fail(function () {
                                const $msg = $(`.message[data-id="${tempId}"]`);
                                $msg.find('.tick').removeClass().addClass('tick error').text('❌');
                            });

                            // === NEW CONVERSATION ===
                        } else if (currentDoctorIdForNew) {
                            const el = $('.conversation-item.start-doctor.active')[0];
                            formData.append('doctor_id', currentDoctorIdForNew);
                            $.ajax({
                                url: `/chat/send-first-message`,
                                method: 'POST',
                                data: formData,
                                processData: false,
                                contentType: false,
                            }).done(function (data) {
                                if (data.conversation_id) {
                                    $(el).removeClass('start-doctor').attr('data-id', data.conversation_id);
                                    activeConversationId = data.conversation_id;
                                    currentDoctorIdForNew = null;

                                    updateMessageStatus(tempId, data.id, data.status || 'sent');
                                    moveConversationToTop(data.conversation_id);
                                    updateConversationPreview(data.conversation_id, text || '[Attachment]', time, data.status || 'sent');

                                    $(el).find('.unread-count').text('0').hide();

                                    // Clear file input and preview
                                    $('#chatAttachment').val('');
                                    $('#attachmentPreview').empty().hide();
                                }
                            }).fail(function () {
                                const $msg = $(`.message[data-id="${tempId}"]`);
                                $msg.find('.tick').removeClass().addClass('tick error').text('❌');
                            });
                        }
                    }

                    // =========================
                    // Updated send message to include attachments
                    // =========================

                    // =========================
                    // Append message dynamically
                    // =========================
                    function appendMessage(message) {
                        const $messagesArea = $('.messages-area');
                        const isSender = message.sender_id == currentUserId;

                        // Avoid duplicate messages
                        if ($(`.message[data-id="${message.id}"]`).length > 0) return;

                        // Message container
                        const $div = $('<div>').addClass('message').addClass(isSender ? 'sent' : 'received').attr('data-id', message.id);

                        // Text content
                        if (message.message) {
                            $div.append($('<p>').text(message.message));
                        }

                        // ✅ Attachments rendering
                        if (message.attachments && message.attachments.length > 0) {
                            const $attachments = $('<div>').addClass('attachments');
                            message.attachments.forEach(file => {
                                if (file.type.startsWith('image/')) {
                                    $attachments.append(`<img src="${file.url}" class="attachment-thumb" style="max-width:200px; max-height:150px; width:auto; height:auto; border-radius:8px;">`);
                                } else if (file.type.startsWith('video/')) {
                                    $attachments.append(`<video src="${file.url}" controls class="attachment-thumb" style="max-width:200px; max-height:150px; border-radius:8px;"></video>`);
                                } else {
                                    $attachments.append(`<a href="${file.url}" target="_blank" class="attachment-file">📄 ${file.name}</a>`);
                                }
                            });
                            $div.append($attachments);
                        }

                        // Time stamp
                        const $time = $('<span>').addClass('message-time').text(message.time);
                        $div.append($time);

                        // Tick for sender
                        if (isSender) {
                            const $tick = $('<span>').addClass('tick');
                            if (message.status === 'sent') $tick.addClass('single-gray').text('✔');
                            else if (message.status === 'delivered') $tick.addClass('double-gray').text('✔✔');
                            else if (message.status === 'read') $tick.addClass('double-blue').text('✔✔');
                            $div.append($tick);
                        }

                        // Append message to chat area
                        $messagesArea.append($div);
                        $messagesArea.scrollTop($messagesArea.prop("scrollHeight"));

                        // Unread counter logic
                        if (!isSender) {
                            const $chatItem = $(`.conversation-item[data-id="${message.conversation_id}"]`);
                            if (activeConversationId == message.conversation_id) {
                                $.post(`/chat/${message.conversation_id}/mark-read`, { _token: csrfToken });
                                $chatItem.find('.unread-count').text('0').hide();
                            } else {
                                const $count = $chatItem.find('.unread-count');
                                let count = parseInt($count.text() || '0', 10) + 1;
                                $count.text(count).show();
                            }
                        }
                    }

                    // =========================
                    // Update message status
                    // =========================
                    function updateMessageStatus(tempId, realId, status) {
                        const $msg = $(`.message[data-id="${tempId}"]`);
                        if ($msg.length) {
                            $msg.attr('data-id', realId);

                            const $tick = $('<span>').addClass('tick');
                            if (status === 'sent') $tick.addClass('single-gray').text('✔');
                            else if (status === 'delivered') $tick.addClass('double-gray').text('✔✔');
                            else if (status === 'read') $tick.addClass('double-blue').text('✔✔');

                            if ($msg.find('.tick').length) {
                                $msg.find('.tick').replaceWith($tick);
                            } else {
                                $msg.append($tick);
                            }

                            // Update conversation preview tick
                            const lastMsgText = $msg.find('p').text();
                            updateConversationPreview(activeConversationId, lastMsgText, $msg.find('.message-time').text(), status);
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

                    function updateConversationPreview(conversationId, lastMessage, time, status = null) {
                        const $conversation = $(`.conversation-item[data-id="${conversationId}"]`);
                        if ($conversation.length) {
                            $conversation.find('.last-message').text(lastMessage);
                            $conversation.find('.last-time').text(time);

                            // Remove existing tick
                            $conversation.find('.last-message-tick').remove();

                            // Only show tick for messages sent by current user
                            if (status && ['sent', 'delivered', 'read'].includes(status)) {
                                const $tick = $('<span>').addClass('last-message-tick');
                                if (status === 'sent') $tick.addClass('single-gray').text('✔');
                                else if (status === 'delivered') $tick.addClass('double-gray').text('✔✔');
                                else if (status === 'read') $tick.addClass('double-blue').text('✔✔');

                                // Insert tick BEFORE message text
                                $conversation.find('.last-message').prepend($tick).prepend(' '); // optional space after tick
                            }
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


                <script>
                    // =========================
                    // Handle attachment click
                    // =========================
                    $(document).on('click', '.icon-attach', function () {
                        $('#chatAttachment').click();
                    });

                    // =========================
                    // Handle file selection
                    // =========================
                    $('#chatAttachment').on('change', function (e) {
                        const files = e.target.files;
                        if (!files.length) return;

                        const $preview = $('#attachmentPreview');
                        $preview.html('').show();

                        Array.from(files).forEach((file, index) => {
                            let $previewItem;

                            if (file.type.startsWith('image/')) {
                                $previewItem = $(`
                <div class="attachment-item">
                    <img src="${URL.createObjectURL(file)}" class="attachment-thumb">
                    <span class="remove-attachment">×</span>
                </div>
            `);
                            } else if (file.type.startsWith('video/')) {
                                $previewItem = $(`
                <div class="attachment-item">
                    <video src="${URL.createObjectURL(file)}" controls class="attachment-thumb"></video>
                    <span class="remove-attachment">×</span>
                </div>
            `);
                            } else {
                                $previewItem = $(`
                <div class="attachment-item">
                    <div class="file-thumb">📄 ${file.name}</div>
                    <span class="remove-attachment">×</span>
                </div>
            `);
                            }

                            // Remove attachment on click
                            $previewItem.find('.remove-attachment').on('click', function () {
                                const dt = new DataTransfer();
                                Array.from(files).forEach((f, i) => { if (i !== index) dt.items.add(f); });
                                $('#chatAttachment')[0].files = dt.files;
                                $previewItem.remove();
                                if ($('#chatAttachment')[0].files.length === 0) $preview.hide();
                            });

                            $preview.append($previewItem);
                        });
                    });

                </script>

                <script>
                    // Click event to start Recorder call

                    let mediaRecorder;
                    let audioChunks = [];

                    $(document).on('click', '.icon-mic', async function () {
                        if (!activeConversationId) {
                            alert('Select a conversation first!');
                            return;
                        }

                        try {
                            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                            mediaRecorder = new MediaRecorder(stream);
                            audioChunks = [];

                            mediaRecorder.ondataavailable = e => audioChunks.push(e.data);

                            mediaRecorder.start();

                            // Show recording preview with cancel button
                            $('#recordingPreview').show();

                            mediaRecorder.onstop = async () => {
                                $('#recordingPreview').hide();
                                // If canceled, just return
                                if ($('#recordingPreview').data('canceled')) {
                                    $('#recordingPreview').data('canceled', false);
                                    return;
                                }

                                const blob = new Blob(audioChunks, { type: 'audio/webm' });
                                const file = new File([blob], `voice-${Date.now()}.webm`, { type: 'audio/webm' });

                                const formData = new FormData();
                                formData.append('_token', csrfToken);
                                formData.append('attachments[]', file);

                                const url = activeConversationId
                                    ? `/chat/${activeConversationId}/send`
                                    : `/chat/send-first-message`;

                                $.ajax({
                                    url,
                                    method: 'POST',
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    success: function (data) {
                                        appendMessage({
                                            id: data.id,
                                            sender_id: currentUserId,
                                            conversation_id: data.conversation_id,
                                            message: data.message,
                                            attachments: data.attachments,
                                            time: data.time,
                                            status: data.status
                                        });
                                    },
                                    error: function (xhr) {
                                        console.error(xhr.responseJSON);
                                        alert('Failed to send voice message.');
                                    }
                                });
                            };

                            // Stop recording after a certain time or when user clicks stop
                            // You can implement a stop button as before, here we just keep as-is

                        } catch (err) {
                            console.error('Microphone access error:', err);
                            alert('Could not access microphone.');
                        }
                    });

                    // Cancel recording handler
                    $('#cancelRecording').on('click', function () {
                        if (mediaRecorder && mediaRecorder.state !== 'inactive') {
                            mediaRecorder.stop();
                            $('#recordingPreview').data('canceled', true);
                            $('#recordingPreview').hide();
                            audioChunks = []; // discard chunks
                        }
                    });

                    $('#stopRecording').on('click', function () {
                        if (mediaRecorder && mediaRecorder.state !== 'inactive') {
                            mediaRecorder.stop(); // triggers onstop and sends
                        }
                    });

                </script>

                <script>

                    // Click event to start video call
                    let localStream = null;
                    let peerConnection = null;
                    let currentCallConversationId = null;
                    const config = { iceServers: [{ urls: 'stun:stun.l.google.com:19302' }] };

                    // Start call (Caller)
                    $(document).on('click', '.icon-video-call', async function () {
                        if (!activeConversationId) return alert('Select a conversation first!');

                        currentCallConversationId = activeConversationId;

                        const res = await $.post(`/chat/${activeConversationId}/start-video-call`, { _token: csrfToken });

                        // Prepare local stream
                        localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
                        showVideoModal(localStream, true); // true = caller
                    });

                    // Listen for incoming calls & signals
                    window.Echo.private(`user.${currentUserId}`)
                        .listen('VideoCallSignal', async (e) => {
                            if (e.type === 'call_initiated') {
                                showIncomingCallPopup(e.from_user, e.conversation_id);
                            } else if (e.type === 'offer') {
                                await handleOffer(e);
                            } else if (e.type === 'answer') {
                                await handleAnswer(e);
                            } else if (e.type === 'ice') {
                                await handleIceCandidate(e);
                            }
                        });

                    // Accept call (Receiver)
                    async function acceptCall(fromUserId, conversationId) {
                        currentCallConversationId = conversationId;
                        localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
                        showVideoModal(localStream, false);

                        peerConnection = createPeerConnection(fromUserId, conversationId);
                    }

                    // Reject call
                    function rejectCall(fromUserId) {
                        closeVideoModal();
                    }

                    // Create PeerConnection
                    function createPeerConnection(remoteUserId, conversationId) {
                        const pc = new RTCPeerConnection(config);

                        // Add local tracks
                        localStream.getTracks().forEach(track => pc.addTrack(track, localStream));

                        // Remote stream
                        const remoteVideo = document.getElementById('remoteVideo');
                        pc.ontrack = event => {
                            remoteVideo.srcObject = event.streams[0];
                        };

                        // ICE candidates
                        pc.onicecandidate = event => {
                            if (event.candidate) {
                                $.post('/chat/video-call-signal', {
                                    _token: csrfToken,
                                    to_user: remoteUserId,
                                    conversation_id: conversationId,
                                    type: 'ice',
                                    data: event.candidate
                                });
                            }
                        };

                        return pc;
                    }

                    // Handle offer (receiver)
                    async function handleOffer(e) {
                        peerConnection = createPeerConnection(e.from_user, e.conversation_id);
                        await peerConnection.setRemoteDescription(new RTCSessionDescription(e.data));
                        const answer = await peerConnection.createAnswer();
                        await peerConnection.setLocalDescription(answer);

                        $.post('/chat/video-call-signal', {
                            _token: csrfToken,
                            to_user: e.from_user,
                            conversation_id: e.conversation_id,
                            type: 'answer',
                            data: answer
                        });
                    }

                    // Handle answer (caller)
                    async function handleAnswer(e) {
                        await peerConnection.setRemoteDescription(new RTCSessionDescription(e.data));
                    }

                    // Handle ICE
                    async function handleIceCandidate(e) {
                        try {
                            await peerConnection.addIceCandidate(new RTCIceCandidate(e.data));
                        } catch (err) {
                            console.error(err);
                        }
                    }

                    // Video Modal UI
                    let localPreviewEl = null;

                    function showVideoModal(stream, isCaller) {
                        // Remove existing modal if any
                        const existingModal = document.querySelector('.video-call-modal');
                        if (existingModal) existingModal.remove();
                        if (localPreviewEl) localPreviewEl.remove();

                        // Create modal
                        const modal = document.createElement('div');
                        modal.className = 'video-call-modal';

                        // Remote video
                        const remoteVideo = document.createElement('video');
                        remoteVideo.id = 'remoteVideo';
                        remoteVideo.autoplay = true;
                        modal.appendChild(remoteVideo);

                        // Controls (Accept, Reject, End)
                        const controls = document.createElement('div');
                        controls.className = 'video-call-controls';
                        if (!isCaller) {
                            const acceptBtn = document.createElement('button');
                            acceptBtn.className = 'accept';
                            acceptBtn.innerText = '✔';
                            acceptBtn.title = 'Accept Call';
                            acceptBtn.onclick = () => acceptCall(remoteUserId, currentCallConversationId);
                            controls.appendChild(acceptBtn);

                            const rejectBtn = document.createElement('button');
                            rejectBtn.innerText = '✖';
                            rejectBtn.title = 'Reject Call';
                            rejectBtn.onclick = () => rejectCall(remoteUserId);
                            controls.appendChild(rejectBtn);
                        }

                        const endBtn = document.createElement('button');
                        endBtn.innerText = '⏹';
                        endBtn.title = 'End Call';
                        endBtn.onclick = closeVideoModal;
                        controls.appendChild(endBtn);

                        modal.appendChild(controls);
                        document.body.appendChild(modal);

                        // Local small preview
                        localPreviewEl = document.createElement('div');
                        localPreviewEl.className = 'video-call-local';
                        const localVideo = document.createElement('video');
                        localVideo.autoplay = true;
                        localVideo.muted = true;
                        localPreviewEl.appendChild(localVideo);
                        document.body.appendChild(localPreviewEl);

                        localVideo.srcObject = stream;
                        document.getElementById('remoteVideo').srcObject = null; // initially empty
                        localVideo.srcObject = stream;

                        // Make draggable
                        makeDraggable(localPreviewEl);
                    }

                    // Draggable function
                    function makeDraggable(el) {
                        let offsetX = 0, offsetY = 0, startX = 0, startY = 0;
                        el.onmousedown = dragMouseDown;

                        function dragMouseDown(e) {
                            e.preventDefault();
                            startX = e.clientX;
                            startY = e.clientY;
                            document.onmouseup = closeDragElement;
                            document.onmousemove = elementDrag;
                        }

                        function elementDrag(e) {
                            e.preventDefault();
                            offsetX = startX - e.clientX;
                            offsetY = startY - e.clientY;
                            startX = e.clientX;
                            startY = e.clientY;
                            el.style.top = (el.offsetTop - offsetY) + "px";
                            el.style.left = (el.offsetLeft - offsetX) + "px";
                        }

                        function closeDragElement() {
                            document.onmouseup = null;
                            document.onmousemove = null;
                        }
                    }

                    // Close modal
                    function closeVideoModal() {
                        if (peerConnection) { peerConnection.close(); peerConnection = null; }
                        if (localStream) { localStream.getTracks().forEach(t => t.stop()); localStream = null; }
                        const modal = document.querySelector('.video-call-modal');
                        if (modal) modal.remove();
                        if (localPreviewEl) { localPreviewEl.remove(); localPreviewEl = null; }
                    }

                    // Show incoming call popup
                    function showIncomingCallPopup(fromUserId, conversationId) {
                        if (confirm('Incoming video call! Accept?')) {
                            acceptCall(fromUserId, conversationId);
                        } else {
                            rejectCall(fromUserId);
                        }
                    }

                </script>

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-ecommerce.js"></script>
</body>

</html>