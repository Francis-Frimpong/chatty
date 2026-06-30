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
    {{ $slot }}
  </div>

</body>
</html>