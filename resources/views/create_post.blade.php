<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babili Blog</title>
</head>
<body>
            <form action="/create_post" method="POST">
                @csrf
<<<<<<< HEAD
=======
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
>>>>>>> 573a6bf28c18af6adeaa49354b93b13bbe256ed3

                <label for="title">Title:</label>
                <input type="text" id="title" name="title"><br><br>

                <label for="text">Post:</label>
<<<<<<< HEAD
                <textarea name="post" id="post" cols="30" rows="10"></textarea>
                
=======
                <textarea name="content" id="post" cols="30" rows="10"></textarea>
>>>>>>> 573a6bf28c18af6adeaa49354b93b13bbe256ed3
                <button type="submit">Send</button> 
            </form>
        </div>
</body>
</html>