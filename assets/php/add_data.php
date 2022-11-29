
<link rel="stylesheet" href="..\css\add_data_style.css">
<body class="align">
  <div class="grid">
    <form action="" class="form">
      <fieldset class="form__fieldset">
        <legend class="form__legend">Name</legend>

        <div class="form__fields">
          <div class="form__field">
            <label for="name">Name</label>
            <input class="form__input" type="text" autocomplete="name">
          </div>

          <div class="form__field">
            <label for="firstname">Firstname</label>
            <input class="form__input" type="text" autocomplete="given-name">
          </div>

          <div class="form__field">
            <label for="lastname">Lastname</label>
            <input class="form__input" type="text" autocomplete="family-name">
          </div>
        </div>
      </fieldset>

      <fieldset class="form__fieldset">
        <legend class="form__legend">Contact</legend>

        <div class="form__fields">
          <div class="form__field">
            <label for="phone">Phone</label>
            <input class="form__input" type="tel" autocomplete="tel">
          </div>

          <div class="form__field">
            <label for="email">E-Mail</label>
            <input class="form__input" type="email" autocomplete="email">
          </div>
        </div>
      </fieldset>

      <fieldset class="form__fieldset">
        <legend class="form__legend">Address</legend>

        <div class="form__fields">
          <div class="form__field">
            <label for="street-address">Street Address</label>
            <input class="form__input" autocomplete="street-address">
          </div>

          <div class="form__field">
            <label for="postal-code">Postal Code</label>
            <input class="form__input" autocomplete="postal-code">
          </div>

          <div class="form__field">
            <label for="country">Country</label>
            <select class="form__input" autocomplete="country-name">
              <option value="es">Spain</option>
              <option value="de">Germany</option>
            </select>
            <input class="form__input" autocomplete="country-name">
          </div>
        </div>
      </fieldset>

      <fieldset class="form__fieldset">
        <legend class="form__legend">Payment</legend>

        <div class="form__fields">
          <div class="form__field">
            <label>Name on card</label>
            <input autocomplete="cc-name" class="form__input">
          </div>

          <div class="form__field">
            <label>Card Number</label>
            <input autocomplete="cc-number" class="form__input">
          </div>

          <div class="form__field">
            <label>CVC</label>
            <input autocomplete="cc-csc" class="form__input">
          </div>

          <div class="form__field">
            <label>Expiry</label>
            <input autocomplete="cc-exp" class="form__input">
          </div>
        </div>
      </fieldset>

      <fieldset class="form__fieldset">
        <legend class="form__legend">Login</legend>

        <div class="form__fields">
          <div class="form__field">
            <label>Username</label>
            <input autocomplete="username" class="form__input">
          </div>

          <div class="form__field">
            <label>Current Password</label>
            <input class="form__input" type="password" autocomplete="current-password">
          </div>

          <div class="form__field">
            <label>New Password</label>
            <input class="form__input" type="password" autocomplete="new-password">
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</body>

