<?php $BASE_URL = "/projects/university/msgboard/laravel/public/"; ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signit - @yield('title')</title>
    @vite('resources/css/app.css')
  </head>

  <body>
    <section class="pageHeader">
      <div class="container mx-auto">
        <h1>Sign It!</h1>
      </div>
    </section>
    <navbar class="navigation">
      <div class="container mx-auto">
        <ul class="navbar">
          <li><a href="<?= $BASE_URL ?>">Home</a></li>
          if (Auth::guest())
          <li><a href="<?= $BASE_URL ?>login">Login</a></li>
          @else
          <li><a href="<?= $BASE_URL ?>visitors">Visitors</a></li>
          <li><a href="<?= $BASE_URL ?>visitors/create">Add visitor</a></li>
          @endif
        </ul>
      </div>
    </navbar>
    <section class="pageTitle">
      <div class="container mx-auto">
        <h2>@yield('title')</h2>
      </div>
    </section>
    <section class="content">
      <div class="container mx-auto">
        @yield('content')
      </div>
    </section>
  </body>
</html>