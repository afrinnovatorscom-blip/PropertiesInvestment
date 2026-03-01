<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties Investment</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

   <!-- Alpine.js CDN (for interactivity) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Your custom CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-Mm78Z79j.css') }}">
  

    <!-- Tailwind Config (for custom colors) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af', // Replace with your primary color
                        secondary: '#dc2626', // Replace with your secondary color
                        foreground: '#1f2937',
                        accent: '#f3f4f6',
                    }
                }
            }
        }
    </script>
</head>

<body>
@include('front.layouts.nav')
   @yield('content')
    <!-- Your custom JS -->
    <script src="{{ asset('build/assets/app-BuG9aa18.js') }}"></script>

    @include('front.layouts.footer')

</body>

</html>