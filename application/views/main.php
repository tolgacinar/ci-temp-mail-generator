
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="htmlcss bootstrap menu, navbar, offcanvas, sidebar nav menu CSS examples" />
  <meta name="description" content="Bootstrap 5 navbar make offcanvas on responsive mobile" />  

  <title>Demo - Bootstrap 5 navbar offcanvas on mobile. html code example </title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

  <style type="text/css">
    :root {
      --white: #afafaf;
      --red: #e31b23;
      --bodyColor: #292a2b;
      --borderFormEls: #fff;
      --bgFormEls: hsl(0, 0%, 14%);
      --bgFormElsFocus: hsl(0, 7%, 20%);
    }

    .form-control:disabled, .form-control[readonly] {
      background-color: inherit;
    }

    .bg-body {
      background-color: #3a3a3a !important;
    }

    a {
      color: inherit;
    }

    input,
    select,
    textarea,
    button {
      font-family: inherit;
      font-size: 100%;
    }

    button,
    label {
      cursor: pointer;
    }

    select {
      appearance: none;
    }

    select::-ms-expand {
      display: none;
    }

    select:-moz-focusring {
      color: transparent !important;
      text-shadow: 0 0 0 var(--white);
    }

    textarea {
      resize: none;
    }

    ul {
      list-style: none;
    }

    .card-body::-webkit-scrollbar-track
    {
      -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      background-color: #000000;
    }

    .card-body::-webkit-scrollbar
    {
      width: 6px;
      background-color: #000000;
    }

    .card-body::-webkit-scrollbar-thumb
    {
      background-color: #ffc107;
    }

    .my-form h1 {
      margin-bottom: 1.5rem;
    }

    .my-form li,
    .my-form .grid > *:not(:last-child) {
      margin-bottom: 1.5rem;
    }

    .my-form select,
    .my-form input,
    .my-form textarea{
      padding: 12px 10px;
      border: 1px solid var(--borderFormEls);
      color: var(--white);
      background: var(--bgFormEls);
      transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
      transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
    }

    .my-form textarea {
      height: 170px;
    }

    .my-form ::placeholder {
      color: inherit;
      /*Fix opacity issue on Firefox*/
      opacity: 1;
    }

    .my-form select:focus,
    .my-form input:focus,
    .my-form textarea:focus,
    .my-form input[type="checkbox"]:focus + label {
      background: var(--bgFormElsFocus);
      color: inherit;
      border-color: inherit !important;
    }

    *:focus{
      outline: none !important;
      box-shadow: none !important;
    }

    .my-form select:focus,
    .my-form input:focus,
    .my-form textarea:focus {
      /*transform: scale(1.02);*/
    }

    .my-form *:required,
    .my-form select {
      background-repeat: no-repeat;
      background-position: center right 12px;
      background-size: 15px 15px;
    }

    .my-form *:required {
      background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg);  
    }

    .my-form select {
      background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/down.svg);
    }

    .my-form *:disabled {
      cursor: default;
      filter: blur(2px);
    }

    .my-form .required-msg {
      display: none;
      background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg)
      no-repeat center left / 15px 15px;
      padding-left: 20px;
    }

    .my-form input[type="checkbox"] {
      position: absolute;
      left: -9999px;
    }

    .my-form input[type="checkbox"] + label {
      position: relative;
      display: inline-block;
      padding-left: 2rem;
      transition: background 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
    }

    .my-form input[type="checkbox"] + label::before,
    .my-form input[type="checkbox"] + label::after {
      content: '';
      position: absolute;
    }

    .my-form input[type="checkbox"] + label::before {
      left: 0;
      top: 6px;
      width: 18px;
      height: 18px;
      border: 2px solid var(--white);
    }

    .my-form input[type="checkbox"]:checked + label::before {
      background: var(--red);
    }

    .my-form input[type="checkbox"]:checked + label::after {
      left: 7px;
      top: 7px;
      width: 6px;
      height: 14px;
      border-bottom: 2px solid var(--white);
      border-right: 2px solid var(--white);
      transform: rotate(45deg);
    }


    footer {
      font-size: 1rem;
      text-align: right;
      backface-visibility: hidden;
    }

    footer a {
      text-decoration: none;
    }

    footer span {
      color: var(--red);
    }

    @media screen and (min-width: 600px) {
      .my-form .grid {
        display: grid;
        grid-gap: 1.5rem;
      }

      .my-form .grid-2 {
        grid-template-columns: 1fr 1fr;
      }

      .my-form .grid-3 {
        grid-template-columns: auto auto auto;
        align-items: center;
      }

      .my-form .grid > *:not(:last-child) {
        margin-bottom: 0;
      }

      .my-form .required-msg {
        display: block;
      }
    }

    @media screen and (min-width: 541px) {
      .my-form input[type="checkbox"] + label::before {
        top: 50%;
        transform: translateY(-50%);
      }

      .my-form input[type="checkbox"]:checked + label::after {
        top: 3px;
      }
    }

    body.offcanvas-active{
      overflow:hidden;
    }

    .offcanvas-header{ display:none; }

    .screen-darken{
      height: 100%;
      width:0%;
      z-index: 30;
      position: fixed;
      top: 0;
      right: 0;
      opacity:0;
      visibility:hidden;
      background-color: rgba(34, 34, 34, 0.6);
      transition:opacity .2s linear, visibility 0.2s, width 2s ease-in;
    }

    .screen-darken.active{
      z-index:10; 
      transition:opacity .3s ease, width 0s;
      opacity:1;
      width:100%;
      visibility:visible;
    }

    @media all and (max-width: 991px) {

      .offcanvas-header{ display:block; }

      .mobile-offcanvas{
        visibility: hidden;
        transform:translateX(-100%);
        border-radius:0; 
        display:block;
        position: fixed;
        top: 0; left:0;
        height: 100%;
        z-index: 1200;
        width:80%;
        overflow-y: scroll;
        overflow-x: hidden;
        transition: visibility .3s ease-in-out, transform .3s ease-in-out;
      }

      .mobile-offcanvas.show{
        visibility: visible;
        transform: translateX(0);
      }
      .mobile-offcanvas .container, .mobile-offcanvas .container-fluid{
        display: block;
      }

    } 
  </style>

  <script type="text/javascript">

    function darken_screen(yesno){
      if( yesno == true ){
        document.querySelector('.screen-darken').classList.add('active');
      }
      else if(yesno == false){
        document.querySelector('.screen-darken').classList.remove('active');
      }
    }

    function close_offcanvas(){
      darken_screen(false);
      document.querySelector('.mobile-offcanvas.show').classList.remove('show');
      document.body.classList.remove('offcanvas-active');
    }

    function show_offcanvas(offcanvas_id){
      darken_screen(true);
      document.getElementById(offcanvas_id).classList.add('show');
      document.body.classList.add('offcanvas-active');
    }

    document.addEventListener("DOMContentLoaded", function(){
      document.querySelectorAll('[data-trigger]').forEach(function(everyelement){

        let offcanvas_id = everyelement.getAttribute('data-trigger');

        everyelement.addEventListener('click', function (e) {
          e.preventDefault();
          show_offcanvas(offcanvas_id);

        });
      });

      document.querySelectorAll('.btn-close').forEach(function(everybutton){

        everybutton.addEventListener('click', function (e) {
          e.preventDefault();
          close_offcanvas();
        });
      });

      document.querySelector('.screen-darken').addEventListener('click', function(event){
        close_offcanvas();
      });

    }); 
  // DOMContentLoaded  end
</script>

</head>
<body class="bg-body">
  <span class="screen-darken"></span>
  <div class="container-fluid d-md-none bg-dark">
    <div class="row">
      <div class="col d-flex justify-content-between align-items-center" style="height:60px;">
        <span class="text-white">Logo Alanı</span>
        <button data-trigger="navbar_main" class="btn btn-warning" type="button">Menü</button>
      </div>
    </div>
  </div>
  <!-- ============= COMPONENT ============== -->
  <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
    <div class="offcanvas-header">  
      <button class="btn-close float-end"></button>
    </div>
    <a class="navbar-brand" href="#">Logo</a>

    <ul class="navbar-nav">
      <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
      <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
      <li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  More items  </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
          <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
          <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
        </ul>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
      <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dropdown right </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
          <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<section class="section-content py-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="img bg-dark text-white w-100 d-flex justify-content-center align-items-center" style="height: 62px;">
          <h3>Banner Alanı</h3>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-12 d-flex flex-column col-md-9 order-1 order-md-0">
        <div class="card h-50 text-white bg-dark mb-3">
          <div class="card-header">Hesap Bilgileri</div>
          <div class="card-body d-flex justify-content-center flex-column">
            <div class="my-form">
              <div class="grid">
               <div class="input-group mb-3">
                <input type="text" class="form-control" readonly="readonly" value="<?php echo $this->session->userdata("address") ?>" />
                <button class="btn btn-dark" style="border-color: #fff;" type="button" id="button-addon1">Kopyala</button>
              </div>
            </div>  
          </div>
          <div class="row mt-3">
            <div class="col-12 col-md-6">
              <button class="btn btn-warning w-100 w-md-25">Yenile</button>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0">
              <button class="btn btn-primary w-100 w-md-25">Değiştir</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card h-50 text-white bg-dark" style="min-height: 350px;max-height: 350px;">
        <div class="card-header">Gelen Kutusu</div>
        <div class="card-body p-0" style="overflow-y: scroll;">
          <ul class="list-group">
            <li class="list-group-item bg-dark">Test</li>
            <li class="list-group-item bg-dark">Tes</li>
            <li class="list-group-item bg-dark">Te</li>
            <li class="list-group-item bg-dark">T</li>
            <li class="list-group-item bg-dark">Test</li>
            <li class="list-group-item bg-dark">Tes</li>
            <li class="list-group-item bg-dark">Te</li>
            <li class="list-group-item bg-dark">T</li>
            <li class="list-group-item bg-dark">Test</li>
            <li class="list-group-item bg-dark">Tes</li>
            <li class="list-group-item bg-dark">Te</li>
            <li class="list-group-item bg-dark">T</li>
            <li class="list-group-item bg-dark">Test</li>
            <li class="list-group-item bg-dark">Tes</li>
            <li class="list-group-item bg-dark">Te</li>
            <li class="list-group-item bg-dark">T</li>
            <li class="list-group-item bg-dark">Test</li>
            <li class="list-group-item bg-dark">Tes</li>
            <li class="list-group-item bg-dark">Te</li>
            <li class="list-group-item bg-dark">T</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-3 order-0 order-md-1 mb-md-0 mb-3">
      <div class="card text-white bg-dark h-100">
        <div class="card-header">Reklam Alanı</div>
        <div class="card-body">
        </div>
      </div>
    </div>
  </div>
</div>
</section>


</body>
</html>