<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

    <?php echo $comment; ?>

        <h1>donnez votre commentaire</h1>

        <form method = POST>
        
        <button type="text">Laissez votre commentaire</button>

    </form>

<!--méthode leavecomment stockée dans une propriete "comment" et stocker dans une propriete à laquelle la date à été commenter-->
 public function leaveComment($userComment) {
    if($this->status === "avis") {
        $this->comment= $userComment;
        $this ->commentAt= "comment";
    }
}

$message= "votre message à été envoyé";

    </main>
</body>
</html>