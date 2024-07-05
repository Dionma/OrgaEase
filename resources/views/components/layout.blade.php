<!doctype html>
<html class="h-full bg-gray-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind -->
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

  <!-- Alpine.js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>

</head>

<body class="h-full">
  <div class="flex h-screen w-screen min-h-full">
    <div class="flex w-screen h-screen ">
      <!-- Sidebar -->
      <x-sidebar></x-sidebar>

      <!-- Content -->
      <div class="grow" id="content">
        <x-navbar></x-navbar>

        <x-header>{{ $title }}</x-header>

        <main>
          <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
          </div>
        </main>
      </div>
    </div>
  </div>

  <!-- Scripting -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>
    let toggleButton = document
        .querySelector("#menuToggleBtn")
        .addEventListener("click", ()=> {
        let sidebar = document.querySelector("#sidebar");
        sidebar.classList.toggle("translate-x-[-100%]");
        sidebar.classList.toggle("w-[0px]");
    });
  </script>
</body>

</html>
