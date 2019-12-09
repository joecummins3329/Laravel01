<!DOCTYPE html>

<html>

<head>

     <title>Create a Session</title>

</head>

<body>

  
  
  <form method="POST" action="/session">
 
  {{ csrf_field() }}
 
     <div><input type="text" placeholder="Session Title" name="title"></div>
 
     <div><textarea name="description" placeholder="Describe Your session"></textarea></div>
 
     <div><button type="submit">Create Session</button></div>
 
  </form>

</body>

</html>