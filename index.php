<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Restro POS System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        :root {
            --primary-color: #6d28d9;
            --secondary-color: #4c1d95;
            --background-color: #f9fafb;
            --text-color: #1f2937;
            --hover-color: #7c3aed;
            --gradient: linear-gradient(135deg, #6d28d9, #4c1d95);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            background: url('https://images.pexels.com/photos/12935094/pexels-photo-12935094.jpeg') no-repeat center center fixed;
            background-size: cover; /* Ensures the image covers the entire viewport */
            background-attachment: fixed; /* Keeps the image fixed while scrolling */
            color: var(--text-color);
            font-family: 'Inter', sans-serif;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        /* Centered Frame */
        .centered-frame {
            background: rgba(255, 255, 255, 0.7); /* More transparent white background */
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 800px;
            width: 90%;
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Text-based Logo */
        .text-logo {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            animation: fadeIn 1s ease-in-out;
        }

        .text-logo i {
            margin-right: 10px;
            color: var(--primary-color);
        }

        .title {
            font-size: 4.5rem;
            font-weight: 700;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 1.5rem;
            animation: fadeIn 1.5s ease-in-out;
        }

        .subtitle {
            font-size: 1.5rem;
            color: var(--text-color);
            margin-bottom: 3rem;
            animation: fadeIn 2s ease-in-out;
        }

        .links {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .links a {
            color: var(--primary-color);
            padding: 15px 30px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            border: 2px solid var(--primary-color);
            border-radius: 50px;
            transition: all 0.3s ease;
            background: white;
        }

        .links a:hover {
            background: var(--gradient);
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Icon Section */
        .icon-section {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 3rem;
        }

        .icon-box {
            text-align: center;
            padding: 20px;
            border-radius: 20px;
            background: white;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .icon-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .icon-box i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .icon-box h3 {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--text-color);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .title {
                font-size: 3rem;
            }

            .subtitle {
                font-size: 1.2rem;
            }

            .links {
                flex-direction: column;
                gap: 1rem;
            }

            .links a {
                width: 100%;
                text-align: center;
            }

            .icon-section {
                flex-direction: column;
                align-items: center;
            }

            .icon-box {
                width: 100%;
                max-width: 250px;
            }

            .centered-frame {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <!-- Centered Frame -->
        <div class="centered-frame">
            <!-- Text-based Logo -->
            <div class="text-logo">
                <i class="fas fa-utensils"></i> Restro POS
            </div>

            <!-- Title -->
            <div class="title">
                Restaurant POS
            </div>

            <!-- Subtitle -->
            <div class="subtitle">
                Streamline Your Restaurant Operations with Our Modern POS System
            </div>

            <!-- Links -->
            <div class="links">
                <a href="Restro/admin/">Admin Log In</a>
                <a href="Restro/cashier/">Cashier Log In</a>
                <a href="Restro/customer">Customer Log In</a>
            </div>

            <!-- Icon Section -->
            <div class="icon-section">
                <div class="icon-box">
                    <i class="fas fa-user-cog"></i>
                    <h3>Admin</h3>
                </div>
                <div class="icon-box">
                    <i class="fas fa-cash-register"></i>
                    <h3>Cashier</h3>
                </div>
                <div class="icon-box">
                    <i class="fas fa-users"></i>
                    <h3>Customer</h3>
                </div>
            </div>
        </div>
    </div>
</body>

</html>