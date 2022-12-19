<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
body {
  height: 100%;
}

.container {
  display: flex;
  height: 100%;
  justify-content: center;
  align-items: center;
}

.rectangle {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  positon: relative;
  width: 50px;
  height: 50px;
  background: #23C552;
  transform: scale(0);
  border-radius: 50%;
  color: white;
  opacity: 0;
  overflow: hidden;
  animation: scale-in 0.3s ease-out forwards, expand 0.35s 0.25s ease-out forwards;
}

.notification-text {
  display: flex;
  align-items: center;
  padding: 0 16px;
  font-family: "Roboto", sans-serif;
  font-size: 14px;
  animation: fade-in 0.65s ease-in forwards;
}

@keyframes scale-in {
  100% {
    transform: scale(1);
    opacity: 1;
  }
}
@keyframes expand {
  50% {
    width: 350px;
    border-radius: 6px;
  }
  100% {
    width: 300px;
    border-radius: 4px;
    box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(0, 0, 0, 0.14), 0px 3px 3px -1px rgba(0, 0, 0, 0.12);
  }
}
@keyframes fade-in {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 0.8;
  }
}
    </style>
</head>

<body>
<div class="container">
	<div class="rectangle">
		<div class="notification-text">
      <center>
      <span>Penambahan Data Telah Berhasil</span>
      </center>
		</div>
	</div>
  <h1 style="color:black">Back to Home</h1>
</div>

</body>
</html>