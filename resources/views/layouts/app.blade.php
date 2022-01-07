<html>
<head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">

 <!-- ici c'est le test quand j'avais changé de couleur de fond <link rel="stylesheet" href="{{asset ('css/app.css')}}"> -->

</head>
<body>
    @include('partials/navbar')
    @yield ('content')
</body>
<script src="{{ asset ('js/app.js')}}"></script>
</html>