<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babili Blog</title>
</head>
<body>
            <form action="/new_blog" method="POST">
                @csrf
                <label for="user">User:</label>
                <input type="text" id="user" name="user"><br><br>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title"><br><br>
                <label for="text">Post:</label>
                <textarea name="post" id="post" cols="30" rows="10"></textarea>
                <button type="submit">Send</button> 
            </form>
        </div>
</body>
</html>