
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESS TERMINAL — OFF THE RECORD</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #171819;
            color: #dedbd2;
            font-family: Georgia, 'Times New Roman', serif;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            opacity: 0.10;
            background: repeating-linear-gradient(
                0deg,
                transparent,
                transparent 2px,
                #ffffff 3px
            );
            z-index: 10;
        }

        .auth-page {
            min-height: 100vh;
            padding: 35px 7%;
            display: flex;
            flex-direction: column;
        }

        .auth-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 22px;
            border-bottom: 1px solid #41403b;
            font-family: Arial, sans-serif;
        }

        .auth-logo {
            color: #dedbd2;
            text-decoration: none;
            font-size: 14px;
            letter-spacing: 4px;
        }

        .auth-status {
            color: #a34b45;
            font-size: 10px;
            letter-spacing: 2px;
        }

        .auth-main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 65px 0;
        }

        .auth-panel {
            width: 100%;
            max-width: 440px;
        }

        .auth-classification {
            color: #a34b45;
            font: 11px Arial, sans-serif;
            letter-spacing: 4px;
            margin-bottom: 20px;
        }

        .auth-title {
            font-size: 42px;
            font-weight: normal;
            letter-spacing: 2px;
            margin: 0;
        }

        .auth-description {
            color: #85837d;
            font: 12px/1.7 Arial, sans-serif;
            letter-spacing: 1px;
            margin: 15px 0 35px;
        }

        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .auth-form label {
            display: block;
            color: #aaa69d;
            font: 10px Arial, sans-serif;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 9px;
        }

        .auth-form input {
            width: 100%;
            background: #202122 !important;
            color: #dedbd2 !important;
            border: 1px solid #484640 !important;
            border-radius: 0 !important;
            padding: 13px 14px !important;
            font: 13px Arial, sans-serif !important;
            outline: none;
            box-shadow: none !important;
        }

        .auth-form input:focus {
            border-color: #a34b45 !important;
        }

        .auth-form input[type="checkbox"] {
            width: auto;
            accent-color: #a34b45;
        }

        .auth-form button,
        .auth-submit {
            width: 100%;
            padding: 15px;
            margin-top: 8px;
            background: #873c38;
            border: 1px solid #873c38;
            border-radius: 0;
            color: #f0eae0;
            font: 11px Arial, sans-serif;
            letter-spacing: 2px;
            cursor: pointer;
            transition: 0.25s;
        }

        .auth-form button:hover,
        .auth-submit:hover {
            background: #a34b45;
        }

        .auth-form a {
            color: #b76a62;
            text-decoration: none;
            font: 12px Arial, sans-serif;
        }

        .auth-form a:hover {
            color: #e0a099;
        }

        .auth-footer {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
            padding-top: 20px;
            border-top: 1px solid #41403b;
            color: #66655f;
            font: 9px Arial, sans-serif;
            letter-spacing: 2px;
        }

        .auth-bottom {
            margin-top: 28px;
            color: #77746d;
            font: 12px Arial, sans-serif;
            text-align: center;
        }

        @media (max-width: 600px) {
            .auth-page {
                padding: 25px 7%;
            }

            .auth-title {
                font-size: 34px;
            }
        }
    </style>
</head>

<body>
<div class="auth-page">

    <header class="auth-header">
        <a href="/" class="auth-logo">O.T.R. / ARCHIVE</a>
        <div class="auth-status">● SECURE CONNECTION</div>
    </header>

    <main class="auth-main">
        <section class="auth-panel">

            <div class="auth-classification">
                RESTRICTED ACCESS
            </div>

            {{ $slot }}

        </section>
    </main>

    <footer class="auth-footer">
        <span>O.T.R. — INTERNAL DATABASE</span>
        <span>CONNECTION ENCRYPTED</span>
        <span>EST. 1998</span>
    </footer>

</div>
</body>
</html>
