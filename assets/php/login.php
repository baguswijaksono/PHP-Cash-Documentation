<link rel="stylesheet" href="..\css\login_style.css">
<body class="align">

  <div class="grid">

    <form action="validasi_login.php" method="POST" class="form login">
      <div class="form__field">
        <input id="username" type="text" name="username" class="form__input" placeholder="Username" required>
      </div>
      <div class="form__field">
        <input id="password" type="password" name="password" class="form__input" placeholder="Password" required>
      </div>
      <div class="form__field">
        <input type="submit">
      </div>
    </form>
  </div>
</body>