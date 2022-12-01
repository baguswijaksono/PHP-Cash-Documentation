<style>
    .button {
    display: flex;
    height: 50px;
    padding: 0;
    background: #009578;
    border: none;
    outline: none;
    border-radius: 5px;
    overflow: hidden;
    font-family: "Quicksand", sans-serif;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
  }
  
  .button:hover {
    background: #008168;
  }
  
  .button:active {
    background: #006e58;
  }
  
  .button__text,
  .button__icon {
    display: inline-flex;
    align-items: center;
    padding: 0 24px;
    color: #fff;
    height: 100%;
    width: 100%;
  }
</style>
<link rel="stylesheet" href="..\css\add_data_style.css">
<body class="align">
  <div class="grid">
    <form action="" class="form">
      <fieldset class="form__fieldset">
        <legend class="form__legend">Name</legend>
        <div class="form__fields">
          <div class="form__field">
            <label for="name">Nama Pembayar</label>
            <select class="form__input" autocomplete="country-name">
              <option value="es">Ade Prasetyo</option>
              <option value="de">Afifah Naura Kamilia</option>
              <option value="es">Agustinus Ricad Simbolon</option>
              <option value="de">Annisa Aisyah Amini Nur Rohmah</option>
              <option value="es">Azyumi Azra</option>
              <option value="de">Bagus Muhammad Wijaksono</option>
              <option value="es">Dewi Maharani</option>
              <option value="de">Dwi Krisnandi</option>
              <option value="es">Faris Adhi Laksana Yusuf</option>
              <option value="de">Febrian Giovanni</option>
              <option value="es">Ferina Ayu Fella Puspita</option>
              <option value="de">Kanya Audy Prahmadyta</option>
              <option value="es">Maulana Arya Yoga Juliansyah</option>
              <option value="de">Muhammad Naufal Yesha Rendra</option>
              <option value="es">Nabilla Syaharani Putri S</option>
              <option value="de">Nandya Nurmala</option>
              <option value="es">Putri Ayu Widyaningrum</option>
              <option value="de">Raihana Khalika Putri</option>
              <option value="es">Salma Afdhila Khalda</option>
              <option value="de">Syalita Widyandini</option>
              <option value="es">Vannisa Ardiani</option>
              <option value="de">Yudha Zaniargo</option>
            </select>
          </div>
          <div class="form__field">
            <label for="firstname">Nama Penerima</label>
            <select class="form__input" autocomplete="country-name">
            <option value="es">Bagus Muhammad Wijaksono</option>
              <option value="es">Nandya Nurmala</option>
            </select>
          </div>
      </fieldset>

      <fieldset class="form__fieldset">
        <legend class="form__legend">Payment Details</legend>
        <div class="form__fields">
          <div class="form__field">
            <label for="phone">Payment Method</label>
            <select class="form__input" autocomplete="country-name">
            <option value="es">Tunai</option>
              <option value="es">Gopay</option>
              <option value="de">Dana</option>
              <option value="es">ShopeePay</option>
              <option value="de">Ovo</option>
            </select>
          </div>

          <div class="form__field">
            <label for="email">Payment For</label>
            <input class="form__input" type="email" autocomplete="email">
          </div>
          <div class="form__field">
            <label for="email">Payment Amount</label>
            <input class="form__input" type="email" autocomplete="email">
          </div>
          <div class="form__field">
            <label for="email">Payment Status</label>
            <input class="form__input" type="email" autocomplete="email">
          </div>
        </div>
      </fieldset>
      <button type="button" class="button">
  <span class="button__text">Submit</span>
  <span class="button__icon">
  </span>
</button>
    </form>
  </div>
</body>