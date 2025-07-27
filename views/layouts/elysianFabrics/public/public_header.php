<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ERP Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body,
    html {
      height: 100%;
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: url('https://images.unsplash.com/photo-1567401893414-76b7b1e5a7a5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Z2FybWVudHN8ZW58MHx8MHx8fDA%3D') no-repeat center center fixed;
      background-size: cover;
    }

    .login-wrapper {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      backdrop-filter: blur(4px);
    }

    .login-box {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .login-box .form-control {
      border-radius: 8px;
    }

    .login-box .btn {
      border-radius: 8px;
    }

    .login-logo {
      font-weight: bold;
      color: #28a745;
      margin-bottom: 10px;
      font-size: 2rem;
    }

    .form-icon {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #6c757d;
    }

    .position-relative {
      position: relative;
    }

    .error-message {
      color: #ff5722;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>