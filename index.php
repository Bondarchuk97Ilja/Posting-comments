<?
    class Comment
    {
        public $name;
        public $email;
        public $comment;
        public $like;

        public function Comment($name, $email,$comment)
        {
            $this->name = $name;
            $this->email = $email;
            $this->comment = $comment;
        }

        public function Post()
        {
            ?> <div class="comment">
        <div class = "name">name: <? echo $this->name?></div>
        <div class = "email">email: <? echo $this->email?></div>
        <div class = "text"><? echo $this->comment?></div>
        <div class = "photo"></div>
    </div>
    <?
        }
    }

?>

<html>
<head>

</head>

<body>

    <div class="comment">
        <div class = "name">name: Kudesnik</div>
        <div class = "email">email: Kudesnik11142@gmail.com</div>
        <div class = "text">Point taken, to be honest I have not required It's just something whipped up, to talk to a piece of hardware that uses tailored fonts (hand produced bitmaps ranging up 0xFF). I was using OC-Console but had no way to automate the sending of multiple packets, thus this venture. Cheers</div>
        <div class = "photo"></div>
    </div>
    <?
    $comments = array();

    if (isset($_POST['submit']))
    {
        $comment = new Comment($_POST['name'],$_POST['email'],$_POST['comment']);

        $comments[] = $comment;
        foreach ($comments as $com)
        {
            $com->Post();
        }
    }
    ?>

<div style = "position: relative; margin: 10px;">
    <form method = "post" action = " ">
        Name<br>
        <input type = "text" name = "name" required /><br>
        Email<br>
        <input type = "email" name = "email" required /><br>
        Comment<br>
        <textarea name = "comment" style = "width: 500px; height: 250px" required></textarea><br>
        <input type = "submit" value = "Post your answer" name = "submit"/>
    </form>
</div>

</body>

<style>

    body{
        margin: 0;
        padding: 0;
    }

    .comment{
        margin: 10px;
        position: relative;
        width: 500px;
        height: 150px;
        border: 1px solid black;
    }

    .name{
        color: blue ;
        position: absolute;
        top: 10px;
        left: 70px;
    }

    .email{
        color:blue;
        position: absolute;
        top: 30px;
        left: 70px;
    }

    .text{
        color:black;
        position: absolute;
        top: 70px;
        left: 10px;
        width: 480px;
        height: 70px;
        background-color: white;
        word-wrap: break-word;
    }
    .photo{
        position: absolute;
        top: 10px;
        left: 10px;
        width: 50px;
        height: 50px;
        background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUM0fDY5692fv9Paab4idq8OJO_LoHGFsXSp6M4cL8wxUd0AqMsA);
        background-size: contain;
    }

</style>
</html>
