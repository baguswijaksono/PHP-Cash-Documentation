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
            <select class="form__input">
              <option value="1">Ade Prasetyo</option>
              <option value="2">Afifah Naura Kamilia</option>
              <option value="3">Agustinus Ricad Simbolon</option>
              <option value="4">Annisa Aisyah Amini Nur Rohmah</option>
              <option value="5">Azyumi Azra</option>
              <option value="6">Bagus Muhammad Wijaksono</option>
              <option value="7">Dewi Maharani</option>
              <option value="8">Dwi Krisnandi</option>
              <option value="9">Faris Adhi Laksana Yusuf</option>
              <option value="10">Febrian Giovanni</option>
              <option value="11">Ferina Ayu Fella Puspita</option>
              <option value="12">Kanya Audy Prahmadyta</option>
              <option value="13">Maulana Arya Yoga Juliansyah</option>
              <option value="14">Muhammad Naufal Yesha Rendra</option>
              <option value="15">Nabilla Syaharani Putri S</option>
              <option value="16">Nandya Nurmala</option>
              <option value="17">Putri Ayu Widyaningrum</option>
              <option value="18">Raihana Khalika Putri</option>
              <option value="19">Salma Afdhila Khalda</option>
              <option value="20">Syalita Widyandini</option>
              <option value="21">Vannisa Ardiani</option>
              <option value="22">Yudha Zaniargo</option>
            </select>
          </div>
          <div class="form__field">
            <label for="firstname">Nama Penerima</label>
            <select class="form__input">
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
            <select class="form__input">
            <option value="1">Tunai</option>
              <option value="2">Gopay</option>
              <option value="3">Dana</option>
              <option value="4">ShopeePay</option>
              <option value="5">Ovo</option>
            </select>
          </div>

          <div class="form__field">
            <label for="email">Payment For</label>
            <select class="form__input">
            <option value="1">1 Weeks</option>
            <option value="2">2 Weeks</option>
            <option value="3">3 Weeks</option>
            <option value="4">4 Weeks</option>
            <option value="5">5 Weeks</option>
            <option value="6">6 Weeks</option>
            <option value="7">7 Weeks</option>
            <option value="8">8 Weeks</option>
            <option value="9">9 Weeks</option>
            <option value="10">10 Weeks</option>
            </select>
          </div>
          <div class="form__field">
            <label for="email">Payment Amount</label>
            <select class="form__input">
            <option value="1">Rp.5000,00</option>
              <option value="2">Rp.10.000,00</option>
              <option value="3">Rp.15.000,00</option>
              <option value="4">Rp.20.000,00</option>
              <option value="5">Rp.25.000,00</option>
              <option value="6">Rp.30.000,00</option>
              <option value="7">Rp.35.000,00</option>
            </select>
          </div>
          <div class="form__field">
            <label for="email">Payment Status</label>
            <select class="form__input">
              <option value="1">Done</option>
              <option value="1">Undone</option>
            </select>
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