<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ERP Task Project</title>
    </head>
    <body>
    
        <div class="container">
            <h3>Login</h3>
            <form action="user-login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">User:</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        
    </body>
</html>
