<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chat UI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  @vite('resources/js/app.js')
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
      @foreach ($users as $user )
        <a href="#" class="list-group-item list-group-item-action active">
          {{ $user->name }}
          <br><small>Last message preview...</small>
        </a>
        
      @endforeach

     

    </div>

  </div>

    <!-- Chat Area -->
    <div class="col-8 col-md-9 chat-area">

     {{ $slot }}

    </div>

  </div>
</div>

</body>
</html>