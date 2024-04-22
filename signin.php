<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> hello    user</h1>
    <form action="phpsignin.php" method="POST">
        <div class="row">
            <label for="name">name</label>
            <input type="text" name="name" placeholder="enter your name">
        </div><br>
        
        
        
        </div><br>
        <div class="row">
            <label for="email">email</label>
            <input type="email" name="email" placeholder="enter your email">
        </div><br>
        <div class="row">
            <label for="password">password</label>
            <input type="number" name="password" placeholder="enter your password">
        </div><br>
        <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div><br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="login.php"> alreadys sign up</a>
    </form>
</body>
</html>