
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFF THE RECORD — Private Archive</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: #171819;
            color: #dedbd2;
            font-family: Georgia, 'Times New Roman', serif;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            opacity: 0.12;
            background-image:
                repeating-linear-gradient(
                    0deg,
                    transparent,
                    transparent 2px,
                    #ffffff 3px
                );
            z-index: 2;
        }

        .page {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            padding: 35px 7%;
            position: relative;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #41403b;
            padding-bottom: 22px;
            font-family: Arial, sans-serif;
        }

        .logo {
            font-size: 15px;
            letter-spacing: 4px;
            color: #dedbd2;
        }

        .status {
            color: #a34b45;
            font-size: 11px;
            letter-spacing: 2px;
        }

        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 0;
        }

        .content {
            max-width: 850px;
            width: 100%;
        }

        .classification {
            color: #a34b45;
            font: 12px Arial, sans-serif;
            letter-spacing: 5px;
            margin-bottom: 28px;
        }

        h1 {
            font-size: clamp(55px, 10vw, 110px);
            font-weight: normal;
            letter-spacing: 5px;
            line-height: 0.95;
        }

        h1 span {
            color: #a34b45;
        }

        .subtitle {
            margin-top: 35px;
            color: #aaa69d;
            font: 13px Arial, sans-serif;
            letter-spacing: 3px;
        }

        .description {
            max-width: 480px;
            margin-top: 25px;
            color: #8f8d86;
            font: 15px/1.8 Arial, sans-serif;
        }

        .actions {
            display: flex;
            gap: 18px;
            margin-top: 45px;
            flex-wrap: wrap;
        }

        .button {
            display: inline-block;
            padding: 15px 28px;
            text-decoration: none;
            font: 11px Arial, sans-serif;
            letter-spacing: 2px;
            transition: 0.25s;
        }

        .primary {
            background: #873c38;
            color: #f0eae0;
            border: 1px solid #873c38;
        }

        .primary:hover {
            background: #a34b45;
        }

        .secondary {
            color: #b7b3aa;
            border: 1px solid #55534d;
        }

        .secondary:hover {
            border-color: #a34b45;
            color: #ffffff;
        }

        footer {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
            border-top: 1px solid #41403b;
            padding-top: 20px;
            color: #66655f;
            font: 10px Arial, sans-serif;
            letter-spacing: 2px;
        }

        @media (max-width: 600px) {
            .page {
                padding: 25px 7%;
            }

            header, footer {
                gap: 12px;
            }

            .status {
                text-align: right;
            }

            main {
                padding: 70px 0;
            }

            h1 {
                letter-spacing: 1px;
            }
        }
    </style>
</head>

<body>
<div class="page">

    <header>
        <div class="logo">O.T.R. / ARCHIVE</div>
        <div class="status">● PRIVATE SYSTEM</div>
    </header>

    <main>
        <div class="content">

            <div class="classification">
                UNAUTHORIZED ACCESS PROHIBITED
            </div>

            <h1>
                OFF THE<br>
                <span>RECORD.</span>
            </h1>

            <div class="subtitle">
                PRIVATE INVESTIGATION ARCHIVE
            </div>

            <p class="description">
                Не каждое дело попадает в официальные отчёты.
                Некоторые истории остаются за пределами протокола.
                Здесь хранятся сведения, которые кто-то предпочёл бы забыть.
            </p>

            <div class="actions">
                <a href="{{ route('login') }}" class="button primary">
                    ACCESS ARCHIVE →
                </a>

                <a href="{{ route('register') }}" class="button secondary">
                    CREATE ACCOUNT
                </a>
            </div>

        </div>
    </main>

    <footer>
        <span>O.T.R. — INTERNAL DATABASE</span>
        <span>ALL RECORDS ARE CONFIDENTIAL</span>
        <span>EST. 1998</span>
    </footer>

</div>
</body>
</html>
