<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Landing Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #3498db, #2980b9);
            background-size: contain;
            background-image: url('data/public/pictures/brandon-griggs-wR11KBaB86U-unsplash.jpg');
            
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .content h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #0e2a67;
        }

        .content p {
            font-size: 18px;
            color: #333;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0e2a67;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Welcome to HOME HARMONY</h1>
            <p><b>Welcome to HOME HARMONY,<br> your solution for efficient and hassle-free flat management.<br> Discover how our comprehensive Flat Management System can make your life easier.</b></p>
            <a class="cta-button" href="authentication/sign_in.html">Sign In</a>
            <a class="cta-button" href="authentication/sign_up.html">Sign Up</a>
        </div>
    </div>
</body>
</html>



