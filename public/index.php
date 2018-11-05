<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rentapy by Webtraining</title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <!--
  Inline spinner styles to be able to display spinner right away.
  Inspared by: https://github.com/tomastrajan/angular-ngrx-material-starter
  -->
  <style type="text/css">
    body, html {
      height: 100%;
      background-color: #f5f6f7;
    }

    .app-loading {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    .app-loading .spinner {
      height: 200px;
      width: 200px;
      animation: rotate 2s linear infinite;
      transform-origin: center center;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
    }

    .app-loading .spinner .path {
      stroke-dasharray: 1, 200;
      stroke-dashoffset: 0;
      animation: dash 1.5s ease-in-out infinite;
      stroke-linecap: round;
      stroke: #ddd;
    }

    .app-loading .logo {
      text-transform: uppercase;
    }

    @keyframes rotate {
      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes dash {
      0% {
        stroke-dasharray: 1, 200;
        /*stroke-dashoffset: 0;*/
      }
      50% {
        stroke-dasharray: 89, 200;
        /*stroke-dashoffset: -35px;*/
      }
      100% {
        stroke-dasharray: 89, 200;
        /*stroke-dashoffset: -124px;*/
      }
    }
  </style>
</head>
<body>
<app-root>
  <!-- loading layout replaced by app after startupp -->
  <div class="app-loading">
    <div class="logo">
      Rentapy
    </div>
    <svg class="spinner" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
  </div>
</app-root>
<script type="text/javascript" src="runtime.js"></script><script type="text/javascript" src="polyfills.js"></script><script type="text/javascript" src="styles.js"></script><script type="text/javascript" src="vendor.js"></script><script type="text/javascript" src="main.js"></script></body>
</html>
