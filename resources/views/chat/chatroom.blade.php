@include('layouts.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('layouts.side-bar-menu')

            <div class="layout-page">

                @include('layouts.nav-bar')

                {{-- <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">

                    </div>
                </div> --}}

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
                                <div class="conversations-list">
                                    <div class="conversation-item active" data-id="jane"
                                        onclick="openChat('jane', this)">
                                        <div class="avatar online">
                                            <img src="{{ asset('assets-site/img/team/team-1.jpg')}}" alt="Dr. Smith"
                                                class="profile-img">
                                        </div>
                                        <div class="chat-info">
                                            <span class="user-name">Dr. Jane Smith</span>
                                            <p class="last-message">Ok, let's schedule for next Tuesday.</p>
                                        </div>
                                        <div class="chat-status">
                                            <span class="timestamp">9:45 AM</span>
                                            <span class="unread-count">3</span>
                                        </div>
                                    </div>

                                    <div class="conversation-item" data-id="john" onclick="openChat('john', this)">
                                        <div class="avatar online">
                                            <img src="{{ asset('assets-site/img/team/team-2.jpg')}}" alt="Dr. John"
                                                class="profile-img">
                                        </div>
                                        <div class="chat-info">
                                            <span class="user-name">Dr. John Smith</span>
                                            <p class="last-message">Don’t forget our meeting this afternoon.</p>
                                        </div>
                                        <div class="chat-status">
                                            <span class="timestamp">10:15 AM</span>
                                            <span class="unread-count">1</span>
                                        </div>
                                    </div>

                                    <div class="conversation-item" data-id="huzaiphar"
                                        onclick="openChat('huzaiphar', this)">
                                        <div class="avatar online">
                                            <img src="{{ asset('assets-site/img/team/team-3.jpg')}}" alt="Dr. Huzaiphar"
                                                class="profile-img">
                                        </div>
                                        <div class="chat-info">
                                            <span class="user-name">Dr. Bukenya Huzaiphar</span>
                                            <p class="last-message">Please review the new lab results.</p>
                                        </div>
                                        <div class="chat-status">
                                            <span class="timestamp">11:00 AM</span>
                                            <span class="unread-count">5</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Main Chat -->
                            <div class="chat-main">
                                <div class="chat-header">
                                    <!-- Back button (only mobile) -->
                                    {{-- <i class="icon-back" onclick="goBack()">⬅</i> --}}
                                    <i class="icon-back" onclick="goBack()" style="
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.1);
  font-weight: bold;
  font-size: 20px;
  cursor: pointer;
  user-select: none;
">⬅</i>

                                    <div class="header-info">
                                        <span class="header-name">Dr. Jane Smith</span>
                                        <span class="header-status">Online now</span>
                                    </div>
                                    {{-- <div class="header-actions">
                                        <i class="icon-call">📞</i>
                                        <i class="icon-video">📹</i>
                                        <i class="icon-menu">⋮</i>
                                    </div> --}}
                                </div>

                                <div class="messages-area">
                                    <div class="message received">
                                        <p>Hello Dr. Smith, I have a question about my medication dosage.</p>
                                        <span class="message-time">9:01 AM</span>
                                    </div>

                                    <!-- Typing indicator (hidden by default) -->
                                    <div class="typing-indicator" style="display: none;">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>

                                <div class="chat-input-area">
                                    <i class="icon-attach">📎</i>
                                    <textarea id="chatInput" placeholder="Type your message..." rows="1"></textarea>
                                    <i class="icon-send"
                                        onclick="sendMessage(document.getElementById('chatInput').value); document.getElementById('chatInput').value=''">🚀</i>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <script>

                    const chats = {
                        jane: {
                            name: "Dr. Jane Smith",
                            status: "online",   // can be "online" or "offline"
                            lastSeen: "Today at 9:40 AM",
                            avatar: "{{ asset('assets-site/img/team/team-1.jpg') }}",
                            messages: [
                                { type: "received", text: "Hello Dr. Smith, I have a question about my medication dosage.", time: "9:01 AM" },
                                { type: "sent", text: "Sure, can you send me the prescription details?", time: "9:05 AM" }
                            ]
                        },
                        john: {
                            name: "Dr. John Smith",
                            status: "offline",
                            lastSeen: "Yesterday at 8:15 PM",
                            avatar: "{{ asset('assets-site/img/team/team-2.jpg') }}",
                            messages: [
                                { type: "received", text: "Hi John, don’t forget our meeting this afternoon.", time: "10:15 AM" },
                                { type: "sent", text: "Noted, thanks!", time: "10:20 AM" }
                            ]
                        },
                        huzaiphar: {
                            name: "Dr. Bukenya Huzaiphar",
                            status: "Online now",
                            lastSeen: "Yesterday at 8:15 PM",
                            avatar: "{{ asset('assets-site/img/team/team-3.jpg') }}",
                            messages: [
                                { type: "received", text: "Please review the new lab results.", time: "11:00 AM" },
                                { type: "sent", text: "Okay, I’ll check them shortly.", time: "11:05 AM" }
                            ]
                        }
                    };

                    // Function to load chat

                    let activeChatId = null; // track which chat is currently open

                    function openChat(userId, element) {
                        const chat = chats[userId];
                        activeChatId = userId; // mark active chat

                        // Update header
                        document.querySelector(".header-name").textContent = chat.name;
                        document.querySelector(".header-status").textContent = chat.status;

                        if (chat.status === "online") {
                            document.querySelector(".header-status").textContent = "Online now";
                            document.querySelector(".header-status").style.color = "#28a745";
                        } else {
                            document.querySelector(".header-status").textContent = `Last seen ${chat.lastSeen}`;
                            document.querySelector(".header-status").style.color = "#999";
                        }

                        // Update messages
                        const messagesArea = document.querySelector(".messages-area");
                        messagesArea.innerHTML = ""; // clear old messages

                        chat.messages.forEach(msg => {
                            const div = document.createElement("div");
                            div.className = `message ${msg.type}`;
                            div.innerHTML = `<p>${msg.text}</p><span class="message-time">${msg.time}</span>`;
                            messagesArea.appendChild(div);
                        });

                        // 👉 Update active conversation highlight
                        document.querySelectorAll(".conversation-item").forEach(item => {
                            item.classList.remove("active");
                        });
                        element.classList.add("active");

                        // 👉 Mark chat as read (hide unread bubble)
                        const unreadBubble = element.querySelector(".unread-count");
                        if (unreadBubble) {
                            unreadBubble.style.display = "none";
                            unreadBubble.textContent = "0";
                        }

                        // 👉 Handle mobile toggle
                        if (window.innerWidth <= 768) {
                            const sidebar = document.querySelector('.chat-sidebar');
                            const chatMain = document.querySelector('.chat-main');
                            sidebar.classList.add('hidden');
                            chatMain.classList.add('active');
                        }
                    }

                    // ✅ Move conversation to top
                    function moveConversationToTop(userId) {
                        const conversationsList = document.querySelector(".conversations-list");
                        const conversation = document.querySelector(`.conversation-item[data-id="${userId}"]`);

                        if (conversation && conversationsList.firstChild !== conversation) {
                            conversationsList.removeChild(conversation);
                            conversationsList.insertBefore(conversation, conversationsList.firstChild);
                        }
                    }

                    // ✅ Update last message preview in sidebar
                    function updateLastMessage(userId, text, time) {
                        const conversation = document.querySelector(`.conversation-item[data-id="${userId}"]`);
                        if (conversation) {
                            const lastMessageEl = conversation.querySelector(".last-message");
                            const timestampEl = conversation.querySelector(".timestamp");

                            // Shorten if too long
                            let preview = text.length > 40 ? text.substring(0, 40) + "..." : text;

                            if (lastMessageEl) lastMessageEl.textContent = preview;
                            if (timestampEl) timestampEl.textContent = time;
                        }
                    }

                    // ✅ Simulate receiving a new message
                    function receiveMessage(userId, text, time = "Now") {
                        const chat = chats[userId];

                        chat.messages.push({ type: "received", text, time });

                        if (activeChatId === userId) {
                            // Show directly in open chat
                            const messagesArea = document.querySelector(".messages-area");
                            const div = document.createElement("div");
                            div.className = "message received";
                            div.innerHTML = `<p>${text}</p><span class="message-time">${time}</span>`;
                            messagesArea.appendChild(div);

                            // ✅ Auto-scroll to bottom
                            messagesArea.scrollTop = messagesArea.scrollHeight;
                        } else {
                            // Increment unread count
                            const conversation = document.querySelector(`.conversation-item[data-id="${userId}"]`);
                            if (conversation) {
                                let unreadBubble = conversation.querySelector(".unread-count");
                                if (!unreadBubble) {
                                    unreadBubble = document.createElement("span");
                                    unreadBubble.className = "unread-count";
                                    unreadBubble.textContent = "1";
                                    conversation.querySelector(".chat-status").appendChild(unreadBubble);
                                } else {
                                    let current = parseInt(unreadBubble.textContent) || 0;
                                    unreadBubble.textContent = current + 1;
                                    unreadBubble.style.display = "inline-block";
                                }
                            }
                        }

                        // 👉 Update sidebar preview + reorder
                        updateLastMessage(userId, text, time);
                        moveConversationToTop(userId);
                    }


                    // ✅ Sending a message (outgoing)
                    function sendMessage(text) {
                        if (!activeChatId || !text.trim()) return;

                        const chat = chats[activeChatId];
                        const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

                        chat.messages.push({ type: "sent", text, time });

                        // Show in chat area
                        const messagesArea = document.querySelector(".messages-area");
                        const div = document.createElement("div");
                        div.className = "message sent";
                        div.innerHTML = `<p>${text}</p><span class="message-time">${time}</span>`;
                        messagesArea.appendChild(div);

                        // 👉 Update sidebar preview + reorder
                        updateLastMessage(activeChatId, text, time);
                        moveConversationToTop(activeChatId);
                    }

                    // Show typing indicator
                    function showTyping(userId) {
                        if (activeChatId === userId) {
                            document.querySelector(".typing-indicator").style.display = "flex";
                        } else {
                            // If chat not open, mark sidebar with "typing..."
                            const conversation = document.querySelector(`.conversation-item[data-id="${userId}"] .last-message`);
                            if (conversation) {
                                conversation.textContent = "typing...";
                                conversation.style.fontStyle = "italic";
                                conversation.style.color = "#28a745";
                            }
                        }
                    }

                    function hideTyping(userId) {
                        if (activeChatId === userId) {
                            document.querySelector(".typing-indicator").style.display = "none";
                        } else {
                            // Reset last message preview
                            const lastMsg = chats[userId].messages.slice(-1)[0]; // get last msg
                            const conversation = document.querySelector(`.conversation-item[data-id="${userId}"] .last-message`);
                            if (conversation && lastMsg) {
                                conversation.textContent = lastMsg.text;
                                conversation.style.fontStyle = "normal";
                                conversation.style.color = "#666";
                            }
                        }
                    }

                    setTimeout(() => {
                        showTyping("jane");
                        setTimeout(() => {
                            hideTyping("jane");
                            receiveMessage("jane", "I’ll update your prescription shortly.", "Now");
                        }, 3000);
                    }, 5000);

                    function setOnline(userId) {
                        chats[userId].status = "online";
                        chats[userId].lastSeen = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

                        // Header update
                        if (activeChatId === userId) {
                            document.querySelector(".header-status").textContent = "Online now";
                            document.querySelector(".header-status").style.color = "#28a745";
                        }

                        // Sidebar avatar update
                        const avatar = document.getElementById(`avatar-${userId}`);
                        if (avatar) {
                            avatar.classList.add("online");
                        }
                    }

                    function setOffline(userId) {
                        chats[userId].status = "offline";
                        chats[userId].lastSeen = "Today at " + new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

                        // Header update
                        if (activeChatId === userId) {
                            document.querySelector(".header-status").textContent = `Last seen ${chats[userId].lastSeen}`;
                            document.querySelector(".header-status").style.color = "#999";
                        }

                        // Sidebar avatar update
                        const avatar = document.getElementById(`avatar-${userId}`);
                        if (avatar) {
                            avatar.classList.remove("online");
                        }
                    }


                    // Example simulation:
                    setTimeout(() => setOffline("jane"), 8000); // Dr. Jane goes offline after 8s
                    setTimeout(() => setOnline("jane"), 15000); // Dr. Jane comes back online after 15s


                    function goBack() {
                        const sidebar = document.querySelector('.chat-sidebar');
                        const chatMain = document.querySelector('.chat-main');
                        if (window.innerWidth <= 768) {
                            chatMain.classList.remove('active');
                            sidebar.classList.remove('hidden');
                        }
                    }

                </script>


                @include('layouts.footer')