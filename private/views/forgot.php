<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: inherit;
        }
        html {
            box-sizing: border-box;
            font-family: sans-serif;
            font-size: 100%;
        }
        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #485485;
            color: white;
        }
        h1 {
            font-size: 5rem;
            animation-name: fadeSlide;
            animation: fadeSlide linear .5s;
            animation-delay: .5s;
            animation-fill-mode: backwards;
        }
        @keyframes fadeSlide {
            0% { 
                opacity: 0;
                transform: translateY(30px);
            }
            100% { 
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>
<body>

    <h1>Forgot page</h1>
    
</body>
</html>