<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700">
  <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
  <!-- Code by Angela Delise  
 https://codepen.io/angeladelise/pen/mdEaQZd
 -->

</head>

<body>
  <div class="container">
    <h2 class="container__header">Create an account</h2>
    <form action="" class="form">
      <div class="form__group">
        <label for="username" class="form__label">Username</label>
        <input type="text" class="form__input" placeholder="Create a username" autocomplete="off">
        <svg class="form__successicon" viewBox="0 0 512 512" width="100" title="check-circle">
          <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
        </svg>
        <svg class="form__erroricon" viewBox="0 0 512 512" width="100" title="exclamation-circle">
          <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z" />
        </svg>
        <p class="form__message"></p>
      </div>

      <div class="form__group">
        <label for="password" class="form__label">Password</label>
        <input type="text" class="form__input" id="form__password" placeholder="Create a password" autocomplete="off">
        <svg class="form__successicon" viewBox="0 0 512 512" width="100" title="check-circle">
          <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
        </svg>
        <svg class="form__erroricon" viewBox="0 0 512 512" width="100" title="exclamation-circle">
          <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z" />
        </svg>
        <p class="form__message"></p>
      </div>

      <button class="form__button">Submit</button>
    </form>
  </div>

</body>

<!--

Icons




  
-->