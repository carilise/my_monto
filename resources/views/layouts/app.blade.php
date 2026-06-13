<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Monto</title>
    <script src="https://cdn.tailwindcss.com"></script> 
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }


        .anim-hidden {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.7s ease-out, transform 0.7s ease-out;
        }

        .anim-hidden.from-left {
            transform: translateX(-40px);
        }

        .anim-hidden.from-right {
            transform: translateX(40px);
        }

        .anim-hidden.zoom-in {
            transform: scale(0.93);
        }

        .anim-visible {
            opacity: 1 !important;
            transform: none !important;
        }

        .delay-100 {
            transition-delay: 100ms;
        }

        .delay-200 {
            transition-delay: 200ms;
        }

        .delay-300 {
            transition-delay: 300ms;
        }

        .delay-400 {
            transition-delay: 400ms;
        }

        .delay-500 {
            transition-delay: 500ms;
        }




        /* Navbar */
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 1;
                transform: translateY(0) scale(1);
            }

            to {
                opacity: 0;
                transform: translateY(-20px) scale(0.95);
            }
        }
    </style>
</head>

<body class="antialiased bg-white">
    @yield('content')
</body>

</html>

<!-- overflow-x-hidden -->
<!-- gray-100 -->