<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{!! $title !!}</title>
    <script type="text/javascript" src="js/app.js"></script>
    <link rel='stylesheet' href='css/app.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded" rel="stylesheet">
  </head>
  <body>
    <h1 class="header">Welcome to e-learning, please, choose your role!</h1>
    <div class="flex">
      <div class="block-teacher">
        <a href="teacher"><li class="fas fa-chalkboard-teacher"></li>
        <div class="text-teacher">I am a teacher</div>
        </a>
      </div>
      <div class="vertical-line">
      </div>
      <div class="block-student">
        <a href="student">
          <li class="fas fa-graduation-cap"></li>
          <div class="text-student">I am a student</div>
        </a>
      </div>
    </div>
  </body>
</html>
