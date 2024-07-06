<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">
<head>
    <!-- Meta tags and other necessary links -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Dashboard - Entreprise57</title>

    <!-- Favicon -->
    <link rel="icon" type="image/jpg" href="images/logo.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/dashboard.css">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- jQuery (optional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div id="app">
        @include('layouts.app')
    </div>

    <!-- SVG icons for theme toggle -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
                id="bd-theme"
                type="button"
                aria-expanded="false"
                data-bs-toggle="dropdown"
                aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
                </button>
            </li>
        </ul>
    </div>

    @include('layouts.sidebar')

    <div>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top:100px">
  
    @yield('content')


<div class="container">

      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
          <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->

      <div class="row gutters-sm">
        <div class="col-md-4 d-none d-md-block">
          <div class="card">
            <div class="card-body">
              <nav class="nav flex-column nav-pills nav-gap-y-1">
                <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Profile Information
                </a>
                <a href="#account" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Account Settings
                </a>
                <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>Security
                </a>
                <a href="#notification" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>Notification
                </a>
                <a href="#billing" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>Billing
                </a>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header border-bottom mb-3 d-flex d-md-none">
              <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                <li class="nav-item">
                  <a href="#profile" data-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#account" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#security" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#notification" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></a>
                </li>
                <li class="nav-item">
                  <a href="#billing" data-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                </li>
              </ul>
            </div>
            <div class="card-body tab-content">
              <div class="tab-pane active" id="profile">
                <h6>YOUR PROFILE INFORMATION</h6>
                <hr>
                <form>
                  <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" id="fullName" aria-describedby="fullNameHelp" placeholder="Enter your fullname" value="Kenneth Valdez">
                    <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small>
                  </div>
                  <div class="form-group">
                    <label for="bio">Your Bio</label>
                    <textarea class="form-control autosize" id="bio" placeholder="Write something about you" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;">A front-end developer that focus more on user interface design, a web interface wizard, a connector of awesomeness.</textarea>
                  </div>
                  <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" id="url" placeholder="Enter your website address" value="http://benije.ke/pozzivkij">
                  </div>
                  <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" id="location" placeholder="Enter your location" value="Bay Area, San Francisco, CA">
                  </div>
                  <div class="form-group small text-muted">
                    All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
                  </div>
                  <button type="button" class="btn btn-primary">Update Profile</button>
                  <button type="reset" class="btn btn-light">Reset Changes</button>
                </form>
              </div>
              <div class="tab-pane" id="account">
                <h6>ACCOUNT SETTINGS</h6>
                <hr>
                <form>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter your username" value="kennethvaldez">
                    <small id="usernameHelp" class="form-text text-muted">After changing your username, your old username becomes available for anyone else to claim.</small>
                  </div>
                  <hr>
                  <div class="form-group">
                    <label class="d-block text-danger">Delete Account</label>
                    <p class="text-muted font-size-sm">Once you delete your account, there is no going back. Please be certain.</p>
                  </div>
                  <button class="btn btn-danger" type="button">Delete Account</button>
                </form>
              </div>
              <div class="tab-pane" id="security">
                <h6>SECURITY SETTINGS</h6>
                <hr>
                <form>
                  <div class="form-group">
                    <label class="d-block">Change Password</label>
                    <input type="text" class="form-control" placeholder="Enter your old password">
                    <input type="text" class="form-control mt-1" placeholder="New password">
                    <input type="text" class="form-control mt-1" placeholder="Confirm new password">
                  </div>
                </form>
                <hr>
                <form>
                  <div class="form-group">
                    <label class="d-block">Two Factor Authentication</label>
                    <button class="btn btn-info" type="button">Enable two-factor authentication</button>
                    <p class="small text-muted mt-2">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.</p>
                  </div>
                </form>
                <hr>
                <form>
                  <div class="form-group mb-0">
                    <label class="d-block">Sessions</label>
                    <p class="font-size-sm text-secondary">This is a list of devices that have logged into your account. Revoke any sessions that you do not recognize.</p>
                    <ul class="list-group list-group-sm">
                      <li class="list-group-item has-icon">
                        <div>
                          <h6 class="mb-0">San Francisco City 190.24.335.55</h6>
                          <small class="text-muted">Your current session seen in United States</small>
                        </div>
                        <button class="btn btn-light btn-sm ml-auto" type="button">More info</button>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <div class="tab-pane" id="notification">
                <h6>NOTIFICATION SETTINGS</h6>
                <hr>
                <form>
                  <div class="form-group">
                    <label class="d-block mb-0">Security Alerts</label>
                    <div class="small text-muted mb-3">Receive security alert notifications via email</div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                      <label class="custom-control-label" for="customCheck1">Email each time a vulnerability is found</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck2" checked="">
                      <label class="custom-control-label" for="customCheck2">Email a digest summary of vulnerability</label>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <label class="d-block">SMS Notifications</label>
                    <ul class="list-group list-group-sm">
                      <li class="list-group-item has-icon">
                        Comments
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                          <label class="custom-control-label" for="customSwitch1"></label>
                        </div>
                      </li>
                      <li class="list-group-item has-icon">
                        Updates From People
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch2">
                          <label class="custom-control-label" for="customSwitch2"></label>
                        </div>
                      </li>
                      <li class="list-group-item has-icon">
                        Reminders
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch3" checked="">
                          <label class="custom-control-label" for="customSwitch3"></label>
                        </div>
                      </li>
                      <li class="list-group-item has-icon">
                        Events
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch4" checked="">
                          <label class="custom-control-label" for="customSwitch4"></label>
                        </div>
                      </li>
                      <li class="list-group-item has-icon">
                        Pages You Follow
                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                          <input type="checkbox" class="custom-control-input" id="customSwitch5">
                          <label class="custom-control-label" for="customSwitch5"></label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
              <div class="tab-pane" id="billing">
                <h6>BILLING SETTINGS</h6>
                <hr>
                <form>
                  <div class="form-group">
                    <label class="d-block mb-0">Payment Method</label>
                    <div class="small text-muted mb-3">You have not added a payment method</div>
                    <button class="btn btn-info" type="button">Add Payment Method</button>
                  </div>
                  <div class="form-group mb-0">
                    <label class="d-block">Payment History</label>
                    <div class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm">You have not made any payment.</div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js'></script>

    </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- Custom JS -->
    <script src="bootstrap-5.3.3-dist/js/color-modes.js"></script>
    <script src="bootstrap-5.3.3-dist/js/dashboard.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const themeToggle = document.getElementById('bd-theme');
            const themeItems = document.querySelectorAll('.dropdown-item');
            const body = document.body;

            themeItems.forEach(item => {
                item.addEventListener('click', function () {
                    themeItems.forEach(btn => {
                        btn.classList.remove('active');
                        btn.setAttribute('aria-pressed', 'false');
                        btn.querySelector('svg.d-none')?.classList.add('d-none');
                    });

                    this.classList.add('active');
                    this.setAttribute('aria-pressed', 'true');
                    this.querySelector('svg.d-none')?.classList.remove('d-none');

                    const theme = this.getAttribute('data-bs-theme-value');
                    switchTheme(theme);
                });
            });

            function switchTheme(theme) {
                if (theme === 'light') {
                    body.classList.remove('theme-dark');
                    body.classList.add('theme-light');
                } else if (theme === 'dark') {
                    body.classList.remove('theme-light');
                    body.classList.add('theme-dark');
                } else {
                    body.classList.remove('theme-light', 'theme-dark');
                }

                localStorage.setItem('selectedTheme', theme);
            }

            const savedTheme = localStorage.getItem('selectedTheme') || 'auto';
            switchTheme(savedTheme);

            document.querySelector(`[data-bs-theme-value="${savedTheme}"]`).classList.add('active');
            document.querySelector(`[data-bs-theme-value="${savedTheme}"]`).setAttribute('aria-pressed', 'true');
            document.querySelector(`[data-bs-theme-value="${savedTheme}"] svg.d-none`)?.classList.remove('d-none');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> 
</body>
</html>
