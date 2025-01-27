<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ninjas Network | Home</title>
</head>
<body>
  <h2>Currently Available Ninjas</h2>
  
  @if ($greeting == 'hello')
    <p>Hi from inside if statement</p>
  @endif
  
  <p>{{ $greeting }}</p>
  <ul>
    @foreach ($ninjas as $ninja)
      <li>
        <p>{{ $ninja['name'] }}</p>
        <a href="/ninjas/{{ $ninja['id'] }}">View details</a>
      </li>
    @endforeach    
  </ul>
</body>
</html>