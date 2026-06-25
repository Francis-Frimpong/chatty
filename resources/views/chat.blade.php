<x-userlayout>
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
</x-userlayout>