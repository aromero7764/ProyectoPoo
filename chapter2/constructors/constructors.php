<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bulma.min.css">
    <title>Document</title>
</head>
<body>
            <?php
            require 'Comment.php';
            require '../creating-object.php';

            $comment = new Comment('Lorem ipsum dolor sit amet ESTE ES EL TEXTO consectetur, adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nisi repellendus veniam, nihil pariatur quasi alias et? 
            Dolor aperiam at repellat recusandae. Beatae iste ullam facere eius reprehenderit nisi autem?');
            
        
            $garyObject = new User();

        $garyObject->name = 'Alberto Romero';
        $garyObject->username = '@aromero';
        $garyObject->fallowCount = '150';

        //echo $comment->text;

                
            ?>

<div class="columns">
  <div class="column is-three-fifths">
  <div class="column">
  <div class="column">


<div class="box">
  <article class="media">
    <div class="media-left">
      <figure class="image is-64x64">
        <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
      </figure>
    </div>
    <div class="media-content">
      <div class="content">
        <p>
          <strong><?=$garyObject->name; ?> </strong> <small><?=$garyObject->username; ?></small> <small>31m</small>
          <br>
         <?=$comment->text; ?>
        </p>
      </div>
      <nav class="level is-mobile">
        <div class="level-left">
          <a class="level-item" aria-label="reply">
            <span class="icon is-small">
              <i class="fas fa-reply" aria-hidden="true"></i>
            </span>
          </a>
          <a class="level-item" aria-label="retweet">
            <span class="icon is-small">
              <i class="fas fa-retweet" aria-hidden="true"></i>
            </span>
          </a>
          <a class="level-item" aria-label="like">
            <span class="icon is-small">
              <i class="fas fa-heart" aria-hidden="true"></i>
            </span>
          </a>
        </div>
      </nav>
    </div>
  </article>
</div>

</div>
</div>



</body>
</html>