<html>
    <head>
        <title>Hello</title>
    </head>
    <body>
        <h1 align="center">Hello</h1>
        <hr>
        <h3>Make new comment</h3>
        <form name=form action="table.php" method=POST>
            <p>Surname</p>
            <input type=text name=surname required>
            <p>Name</p>
            <input type=text name=name required>
            <p>Your comment</p>
            <textarea name="comment" class="form-control" id="comtextarea" required></textarea>
            <input type=submit value = 'Make comment'>
        </form>
        <hr>
        <h2><a href="table.php">Check last comments</a></h2>
    </body>
</html>
