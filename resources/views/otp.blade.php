<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/user-otp.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"/>
  </head>
  
  <body>
    <a class="back" href="/">&#60; Back</a>
    <div class="container">
      <h3>Enter OTP Code</h3>
      <div class="txt-container">
        <div>Please enter OTP code sent to:</div>
        <div>namaEmailnya@gmail.com</div>
      </div>
      <form>
        <div class="input-field">
          <input type="number" autofocus/>
          <input type="number" disabled /> 
          <input type="number" disabled />
          <input type="number" disabled />
          <input type="number" disabled />
          <input type="number" disabled />
        </div>
        <p>Error message</p>

        <div class="btn-container">
          <button class="resend">Resend code</button>
          <button class="submit">Continue</button>
        </div>
      </form>
    </div>
    <script src="js/otp.js"></script>
  </body>
</html>

