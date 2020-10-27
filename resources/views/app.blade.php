<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    @routes
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  </head>
  <body>
    @inertia
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
                delay:200,
                duration:1500,
                once:false,
            });
    </script>
  </body>
</html>
