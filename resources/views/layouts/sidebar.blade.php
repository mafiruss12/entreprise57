<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
<div class="container-fluid ">
  <div class="row ">
   <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary " style="height:100vh;position:fixed;top:50px">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary " tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3" style="overflow-y: auto;">
      <ul class="nav flex-column">
        <li class="nav-item" style="background: gainsboro;border-radius:5px">
          <a class="nav-link d-flex align-items-center gap-2 active" href="{{ route('dashboard') }}" class=" aria-current="page" href="#">
            <svg class="bi"><use xlink:href="#house-fill"/></svg>
            {{ __('dashboard') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{ route('services') }}" class="">
          <svg class="bi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M48 448V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zM96 96c-8.8 0-16 7.2-16 16s7.2 16 16 16h80c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zm0 64c-8.8 0-16 7.2-16 16s7.2 16 16 16h80c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zm54.2 221.8L160 349l16.7 55.6c1.9 6.3 7.4 10.8 13.9 11.3s12.8-2.9 15.7-8.8l10.6-21.3c.6-1.2 1.8-1.9 3.1-1.9s2.5 .7 3.1 1.9l10.6 21.3c2.7 5.4 8.3 8.8 14.3 8.8h40c8.8 0 16-7.2 16-16s-7.2-16-16-16H257.9l-6.2-12.4c-6-12-18.3-19.6-31.7-19.6c-8.6 0-16.8 3.1-23.1 8.6l-11.3-37.5C182.2 311.7 171.8 304 160 304s-22.2 7.7-25.6 19.1l-14.9 49.5c-2 6.8-8.3 11.4-15.3 11.4H96c-8.8 0-16 7.2-16 16s7.2 16 16 16h8.2c21.2 0 39.9-13.9 46-34.2z"/></svg>            Services
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2 " href="{{ route('chat.index') }}">
        <svg class="bi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M128 0C110.3 0 96 14.3 96 32V224h96V192c0-35.3 28.7-64 64-64H480V32c0-17.7-14.3-32-32-32H128zM256 160c-17.7 0-32 14.3-32 32v32h96c35.3 0 64 28.7 64 64V416H576c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32H256zm240 64h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H496c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zM64 256c-17.7 0-32 14.3-32 32v13L187.1 415.9c1.4 1 3.1 1.6 4.9 1.6s3.5-.6 4.9-1.6L352 301V288c0-17.7-14.3-32-32-32H64zm288 84.8L216 441.6c-6.9 5.1-15.3 7.9-24 7.9s-17-2.8-24-7.9L32 340.8V480c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V340.8z"/></svg>           
           Chat<span class="badge bg-primary  ml-auto">4</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#" class=">
          <svg class="bi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>                      Localisation
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi"><use xlink:href="#graph-up"/></svg>
            Reports
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="paymant" >
            <svg class="bi"><use xlink:href="#puzzle"/></svg>
            Paiment
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
        <span>Saved reports</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <svg class="bi"><use xlink:href="#plus-circle"/></svg>
        </a>
      </h6>
      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
            Current month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
            Last quarter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
            Social engagement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="#">
            <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
            Year-end sale
          </a>
        </li>
      </ul>

      <hr class="my-3">

      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{ route('profile.settings') }}">
            <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
            {{ __('settings') }}
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <svg class="bi"><use xlink:href="#door-closed"/></svg>
            {{ __('logout') }}
          </a>
        </li>
      </ul>
    </div>
  </div>
  
</div>
    
</body>
</html>