<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Your website description here">
    <meta name="keywords" content="keywords, separated, by, commas">
    <meta name="author" content="Your Name">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Feedback tool</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/emojionearea/dist/emojionearea.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha384-xzjw3Tp5xGzCf6l51Z8z+JT6jUgA3UHDOpmxpBHTqke0ddowJz5PzDWz1wOVHptW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Google Fonts - Nunito -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            font-size: 1rem;
            color: #333;
        }

        header {
            background: linear-gradient(90deg, #021048, #1e38a3) !important;
            color: #fff;
            padding: 50px 20px;
            text-align: center;
        }

        section {
            padding: 50px 20px;
            text-align: center;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            color: #1e38a3;
        }

        p {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 40px;
        }

        .navbar {
            background: linear-gradient(90deg, #021048, #1e38a3) !important;
        }

        .navbar-brand,
        .nav-link {
            color: #fff !important;
            font-size: 1.2em;
        }

        .btn-primary {
            background: linear-gradient(90deg, #021048, #1e38a3) !important;
            border-color: #1e38a3;
            font-size: 1.2em;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #001430, #142e89) !important;
            border-color: #142e89;
        }

        /* Additional styles for Font Awesome icons within buttons */
        .btn i {
            margin-left: 5px;
        }

        /* Animation styles */
        .animate__animated {
            animation-duration: 1s;
        }

        .animate__fadeIn {
            animation-name: fadeIn;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
