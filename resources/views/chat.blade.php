<x-userlayout>

<div class="row h-100">

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
      @foreach ($users as $user)

        <a href="{{ route('chat.show', $user->id) }}"
           class="list-group-item list-group-item-action
           {{ $activeUser && $activeUser->id == $user->id ? 'active' : '' }}">

          {{ $user->name }}
          <br>
          <small>Last message preview...</small>

        </a>

      @endforeach
    </div>

  </div>


  <!-- Chat Area -->
  <div class="col-8 col-md-9 chat-area">

    <!-- Chat Header (SELECTED USER) -->
    <div class="p-3 border-bottom">
      <h6 class="mb-0">
        {{ $activeUser?->name ?? 'Select a chat' }}
      </h6>
    </div>

    <!-- Messages -->
    <div class="messages p-3">

      @if($activeUser)
        <div class="message received">
          Hello! This is a chat with {{ $activeUser->name }}.
        </div>

        <div class="message sent">
          Hi 👋
        </div>
      @else
        <div class="text-muted text-center mt-5">
          Select a user to start chatting
        </div>
      @endif

    </div>

    <!-- Input -->
    <div class="chat-input p-3 border-top">
      <form class="d-flex">
        <input type="text" class="form-control me-2" placeholder="Type a message...">
        <button class="btn btn-primary">Send</button>
      </form>
    </div>

  </div>

</div>

</x-userlayout>