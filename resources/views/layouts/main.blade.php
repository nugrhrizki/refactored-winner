<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
  @if($title == 'Home')
    Technical Test
  @else
    {{ $title }} | Technical Test
  @endif
  </title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  <link href="/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
  @include('partials/header')
  <main class="container-md">
    @yield('content')
  </main>
  <div class="container-md">
    @include('partials/footer')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('script')
</body>
</html>
