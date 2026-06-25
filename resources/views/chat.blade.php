<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chat UI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      overflow: hidden;
    }
    .chat-container {
      height: 100vh;
    }
    .sidebar {
      border-right: 1px solid #ddd;
      height: 100%;
      overflow-y: auto;
    }
    .chat-area {
      display: flex;
      flex-direction: column;
      height: 100%;
    }
    .messages {
      flex: 1;
      overflow-y: auto;
      padding: 15px;
      background: #f8f9fa;
    }
    .message {
      max-width: 60%;
      padding: 10px;
      border-radius: 10px;
      margin-bottom: 10px;
    }
    .sent {
      background: #0d6efd;
      color: white;
      margin-left: auto;
    }
    .received {
      background: #e9ecef;
    }
    .chat-input {
      border-top: 1px solid #ddd;
      padding: 10px;
    }
  </style>
</head>
<body>

<div class="container-fluid chat-container">
  <div class="row h-100">

    <!-- Sidebar -->
   <!-- Sidebar -->
<div class="col-4 col-md-3 border-end p-0">

  <!-- Sidebar Header -->
  <div class="p-3 border-bottom d-flex justify-content-between align-items-center">
    <h6 class="mb-0">Chats</h6>

    <form action="{{ route('logout') }}" method="POST" class="m-0">
      @csrf
      <button type="submit" class="btn btn-outline-danger btn-sm">
        Logout
      </button>
    </form>
  </div>

  <!-- Contact List -->
  <div class="list-group list-group-flush">

    <a href="#" class="list-group-item list-group-item-action active">
      John Doe
      <br><small>Last message preview...</small>
    </a>

    <a href="#" class="list-group-item list-group-item-action">
      Jane Smith
      <br><small>Hello there!</small>
    </a>

    <a href="#" class="list-group-item list-group-item-action">
      Alex
      <br><small>See you later</small>
    </a>

  </div>

</div>

    <!-- Chat Area -->
    <div class="col-8 col-md-9 chat-area">

      <!-- Header -->
      <div class="p-3 border-bottom">
        <h6 class="mb-0">John Doe</h6>
      </div>

      <!-- Messages -->
      <div class="messages">

        <div class="message received">
          Hello! How are you?
        </div>

        <div class="message sent">
          I'm good! How about you?
        </div>

        <div class="message received">
          Doing great!
        </div>

      </div>

      <!-- Input -->
      <div class="chat-input">
        <form class="d-flex">
          <input type="text" class="form-control me-2" placeholder="Type a message...">
          <button class="btn btn-primary">Send</button>
        </form>
      </div>

    </div>

  </div>
</div>

</body>
</html>