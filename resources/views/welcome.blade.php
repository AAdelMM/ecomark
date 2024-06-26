<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>We're Under Construction</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <style>
    /* Add some custom styles to make the page look nicer */
    body {
      @apply h-screen flex justify-center items-center;
      background: linear-gradient(to bottom, #87CEEB, #4567b7);
    }
    .construction-icon {
      @apply w-6 h-6 rounded-full bg-orange-500 p-2;
      animation: spin 2s linear infinite;
    }
    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }
  </style>
</head>
<body>
  <header class="flex justify-center mb-4">
    <h1 class="text-3xl font-bold text-white">We're Under Construction</h1>
    <div class="construction-icon ml-2"></div>
  </header>
  <main class="max-w-md mx-auto p-4 bg-white rounded shadow-md">
    <p class="text-lg text-gray-600 mb-4">We're performing some essential maintenance to improve your experience. We apologize for the inconvenience and appreciate your patience.</p>
    <div class="progress-bar mb-4">
      <div class="bg-orange-500 h-2 rounded" style="width: 60%;"></div>
      <div class="text-sm text-gray-600">Database Update (60%)</div>
    </div>
    <div class="estimated-time mb-4">
      <div class="text-2xl font-bold text-orange-500">00:30:00</div>
      <div class="text-sm text-gray-600">Estimated time remaining</div>
    </div>
    <div class="additional-info mb-4">
      <h2 class="text-lg font-bold text-gray-600">FAQ</h2>
      <ul>
        <li class="mb-2">
          <span class="text-gray-600">What's being updated?</span>
          <span class="text-sm text-gray-500">Our database and server infrastructure.</span>
        </li>
        <li class="mb-2">
          <span class="text-gray-600">Will my data be affected?</span>
          <span class="text-sm text-gray-500">No, your data will not be affected.</span>
        </li>
      </ul>
      <a href="#" class="text-sm text-orange-500 hover:text-orange-700">Learn more about our maintenance</a>
    </div>
  </main>
  <footer class="text-center text-sm text-gray-600 mb-4">
    Thank you for your patience. We'll be back online soon!
    <a href="#" class="text-sm text-orange-500 hover:text-orange-700">Follow us on Twitter</a>
  </footer>
</body>
</html>