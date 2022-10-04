<?php session_start();
include "header.php";
?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iCREAM - Ice Cream Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
@charset "UTF-8";
.container {
  max-width: 800px;
  margin: 5px auto;
}

img {
  max-width: 100%;
  height: auto;
  vertical-align: middle;
}

.cardtypeinfo {
  align-items: center;
  background: #e9ecef;
  padding: 10px;
  display: flex;
  justify-content: space-between;
  margin: 20px 0;
}
.cardtypeinfo__title-icon {
  --circleSize: 15px;
  color: #fff;
  background: #adb5bd;
  width: var(--circleSize);
  height: var(--circleSize);
  display: inline-flex;
  justify-content: center;
  align-items: center;
  border-radius: var(--circleSize);
  font-size: 12px;
  margin-right: 4px;
}
.cardtypeinfo__images img {
  max-width: 45px;
}

.cardnumber {
  position: relative;
}
.cardnumber .cardimg {
  position: absolute;
  right: 0;
  top: 20px;
  width: 55px;
  overflow: hidden;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.cardnumber img {
  max-width: 45px;
}
.cardnumber input {
  padding-right: 70px !important;
}

.posrelative {
  position: relative;
}
.posrelative .cvvinfo {
  cursor: pointer;
  position: absolute;
  top: -10px;
  right: 5px;
}
.posrelative .cvvinfo__icon {
  --circleSize: 15px;
  color: #fff;
  background: #adb5bd;
  width: var(--circleSize);
  height: var(--circleSize);
  display: inline-flex;
  justify-content: center;
  align-items: center;
  border-radius: var(--circleSize);
  font-size: 12px;
}
.posrelative .cvvinfo__figure {
  border-radius: 5px;
  display: none;
  margin: 0;
  width: 200px;
  z-index: 99;
  position: absolute;
  right: 0;
}
.posrelative .cvvinfo__figure img {
  border-radius: 5px;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.posrelative .cvvinfo:hover .cvvinfo__figure {
  display: block;
}

.md-group {
  position: relative;
  margin-bottom: 15px;
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.md-group input:not([type=submit]),
.md-group input:not([type=reset]),
.md-group textarea,
.md-group select,
.md-group select.form-control {
  border: none;
  border: 1px solid #ced4da;
  border-radius: 0px;
  background-clip: unset;
  color: transparent;
  padding: 15px;
  height: 40px;
}
.md-group input:not([type=submit])::placeholder,
.md-group input:not([type=reset])::placeholder,
.md-group textarea::placeholder,
.md-group select::placeholder,
.md-group select.form-control::placeholder {
  color: transparent;
}
.md-group input:not([type=submit]):focus,
.md-group input:not([type=reset]):focus,
.md-group textarea:focus,
.md-group select:focus,
.md-group select.form-control:focus {
  outline: none;
  border-color: blue;
  box-shadow: none;
  color: #333 !important;
}
.md-group input:not([type=submit]):focus::placeholder,
.md-group input:not([type=reset]):focus::placeholder,
.md-group textarea:focus::placeholder,
.md-group select:focus::placeholder,
.md-group select.form-control:focus::placeholder {
  color: #dee2e6 !important;
}
.md-group input:not([type=submit]):focus + label,
.md-group input:not([type=submit]):focus .ng2-tag-input-focus + label,
.md-group input:not([type=reset]):focus + label,
.md-group input:not([type=reset]):focus .ng2-tag-input-focus + label,
.md-group textarea:focus + label,
.md-group textarea:focus .ng2-tag-input-focus + label,
.md-group select:focus + label,
.md-group select:focus .ng2-tag-input-focus + label,
.md-group select.form-control:focus + label,
.md-group select.form-control:focus .ng2-tag-input-focus + label {
  top: 0;
  font-size: rem(12);
}
.was-validated .md-group input:not([type=submit]):invalid,
.was-validated .md-group input:not([type=reset]):invalid,
.was-validated .md-group textarea:invalid,
.was-validated .md-group select:invalid,
.was-validated .md-group select.form-control:invalid {
  border-bottom: 1.2px solid #fa6541;
}
.was-validated .md-group input:not([type=submit]):invalid ~ label,
.was-validated .md-group input:not([type=reset]):invalid ~ label,
.was-validated .md-group textarea:invalid ~ label,
.was-validated .md-group select:invalid ~ label,
.was-validated .md-group select.form-control:invalid ~ label {
  color: #fa6541;
}
.md-group input:not([type=submit]):valid:focus, .md-group input:not([type=submit]):invalid:focus,
.md-group input:not([type=reset]):valid:focus,
.md-group input:not([type=reset]):invalid:focus,
.md-group textarea:valid:focus,
.md-group textarea:invalid:focus,
.md-group select:valid:focus,
.md-group select:invalid:focus,
.md-group select.form-control:valid:focus,
.md-group select.form-control:invalid:focus {
  outline: none;
  box-shadow: none;
}
.was-validated .md-group input:not([type=submit]):valid,
.was-validated .md-group input:not([type=reset]):valid,
.was-validated .md-group textarea:valid,
.was-validated .md-group select:valid,
.was-validated .md-group select.form-control:valid {
  border-bottom: 1.2px solid #09c098;
}
.was-validated .was-validated .md-group input:not([type=submit]):valid ~ label,
.was-validated .was-validated .md-group input:not([type=reset]):valid ~ label,
.was-validated .was-validated .md-group textarea:valid ~ label,
.was-validated .was-validated .md-group select:valid ~ label,
.was-validated .was-validated .md-group select.form-control:valid ~ label {
  color: #09c098;
}
.md-group textarea {
  height: auto;
}
.md-group label {
  margin: 0;
  position: absolute;
  top: 1.5rem;
  pointer-events: none;
  display: block;
  left: 0.75rem;
  transition: all 0.2s ease-in-out;
  color: #adb5bd;
  z-index: 9;
}
.md-group.is-valid {
  border-bottom: 1.2px solid #09c098;
}
.md-group.is-valid ~ label {
  color: #09c098;
}
.md-group.is-invalid {
  border-bottom: 1.2px solid #fa6541;
}
.md-group.is-invalid ~ label {
  color: #fa6541;
}
.md-group.input-group [class*=input-group] {
  opacity: 0;
  visibility: hidden;
  width: 0;
}
.md-group.input-group .form-control {
  width: 100%;
}

.show-label label {
  color: #4267b2;
  top: -10px;
  left: 0;
  font-size: rem(14);
}
.show-label.input-group [class*=input-group] {
  opacity: 1;
  visibility: visible;
  width: auto;
}
.show-label.input-group .form-control {
  width: 1%;
}
.show-label .form-control {
  color: #344051 !important;
}
.show-label .form-control::placeholder {
  color: #dee2e6 !important;
}

.input-group-text {
  border: none;
}

.form-check-input {
  display: none;
}
.form-check-input ~ label:before {
  content: "";
  display: block;
  position: absolute;
  top: rem(3);
  left: 0;
  font-size: rem(16);
  border: 1px solid #ccc;
  border-radius: rem(2);
  transition: all 0.3s ease-in-out;
}
.form-check-input ~ label:after {
  content: "";
  display: block;
  position: absolute;
  top: rem(3);
  left: rem(3);
  content: "";
  font-family: "fontawesome";
  color: white;
  font-size: rem(12);
  opacity: 0;
  transition: all 0.3s ease-in-out;
}
.form-check-input:checked ~ label:before {
  background-color: blue;
  border-color: transparent;
}
.form-check-input:checked ~ label:after {
  opacity: 1;
}

.form-check {
  padding-left: rem(28);
}

    </style>
</head>

<body>
<div>
</div>

<div class="container py-1">
  
<h1></h1>
      
    
  </div>

<div class="container">
  <div class="cardpaymentform">
  <div class="cardtypeinfo">
    <span class="cardtypeinfo__title">
      <span class="cardtypeinfo__title-icon">i</span>
      
    </span>
    <span class="cardtypeinfo__images">
      <img src="https://i.postimg.cc/c6PnPLsN/visa.png" alt="">
    </span>
  </div>
<div class="container">
  <div class="cardpaymentform">
  <div class="cardtypeinfo">
    <span class="cardtypeinfo__title">
      <span class="cardtypeinfo__title-icon">i</span>
      Accepted Card Type
    </span>
    <span class="cardtypeinfo__images">
      <img src="https://i.postimg.cc/c6PnPLsN/visa.png" alt="">
    </span>
  </div>
  <form action="">
    <div class="row">
      <div class="col-12">
        <div class="form-group md-group">
                    <label for="">Full Name</label>
                    <input type="text" placeholder="Card Holder's Name" class="form-control">
                  </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="cardnumber">
          <div class="form-group md-group">
                    <label for="">Card Number</label>
                    <input type="tel" placeholder="Card Number" class="form-control">
                  </div>
           <figure class="cardimg visa">
            <img src="https://i.postimg.cc/rzD4hr2J/mastercard-logo.png" alt="">
      <img src="https://i.postimg.cc/c6PnPLsN/visa.png" alt="">
      <img src="https://i.postimg.cc/nCQvLQdz/amex.png" alt="">
          </figure>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group md-group">
                    <label for="">Expiry Date</label>
                    <input type="date" placeholder="Expiry Date" class="form-control">
                  </div>
      </div>
      <div class="col-6">
        <div class="posrelative">
          <div class="form-group md-group">
                    <label for="">CVV</label>
                    <input type="text" placeholder="123" class="form-control">
                  </div>
          <div class="cvvinfo">
            <span class="cvvinfo__icon">i</span>
            <figure class="cvvinfo__figure">
              <img src="https://i.postimg.cc/RV6tkyYV/signature.png" alt="">
            </figure>
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-primary">
      Continue
    </button>
  </form>
</div>
</div>
<script>
$('.md-group').on('focus', '.form-control', function(){
    $(this).closest('.md-group').addClass('show-label');
});
$('.md-group').on('blur', '.form-control', function(){
     if ($(this).val() == '') {
            if ($(".md-group").hasClass('show-label')) {
                $(this).closest(".md-group").removeClass('show-label');
            }
        }
});


   $('.md-group .form-control').each(function(){
    if ($(this).val()){
       $(this).closest('.md-group').addClass('show-label');
    }
    });
 $(".md-group select.form-control").change(function() {
        $(this).closest('.md-group').addClass('show-label');
    });
     
</script>
</body>
</html>
<?php include "footer.php"; ?> 