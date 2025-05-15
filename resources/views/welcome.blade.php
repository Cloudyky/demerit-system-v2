<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome | Kvdsazi Demerit System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f0f4f8 0%, #e0e7ef 100%);
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }
        .filament-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(60, 72, 88, 0.12);
            padding: 40px;
            max-width: 480px;
            margin: 80px auto 0 auto;
        }
        .filament-title {
            font-size: 2rem;
            font-weight: bold;
            color: #2563eb;
            margin-bottom: 8px;
            text-align: center;
        }
        .filament-subtitle {
            font-size: 1.1rem;
            color: #64748b;
            margin-bottom: 24px;
            text-align: center;
        }
        .filament-btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 24px;
            background: #2563eb;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s;
        }
        .filament-btn:hover {
            background: #1d4ed8;
        }
        .logo {
            width: 56px;
            height: 56px;
            margin-bottom: 1rem;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .mr-2 {
            margin-right: 8px;
        }
        .flex {
            display: flex;
            justify-content: center;

    </style>
</head>
<body>
    <div class="filament-card">
        <img src="https://filamentphp.com/images/logo.svg" alt="logo" class="logo">
        <h1 class="filament-title">Kvdsazi Demerit System</h1>
        <p class="filament-subtitle">
            Sistem pengurusan demerit untuk KVDSAZI. Mudahkan pemantauan disiplin pelajar dengan sistem yang moden, selamat, dan mudah digunakan.
        </p>
        <div class="flex">
            <a href="{{ route('login') }}" class="filament-btn">
                <svg class="mr-2" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><use href="#tabler-login" /></svg>
                Log Masuk
            </a>
        </div>
    </div>
    <!-- Tabler Icon Sprite -->
    <svg style="display:none;">
        <symbol id="tabler-login" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5m0 0l-5-5m5 5H3"/>
        </symbol>
    </svg>
</body>
</html>