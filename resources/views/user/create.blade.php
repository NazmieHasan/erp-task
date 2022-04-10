<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ERP Task Project</title>
    </head>
    <body>
    
        <div class="container">
            <h3>Create User</h3>
            <form method="POST" action="/user">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="app_url">App URL:</label>
                    <textarea class="form-control" rows="6" id="app_url" name="app_url"></textarea>
                </div>
                <div class="form-group">
                    <label for="text">Language:</label>
                    <input type="text" class="form-control" id="language" name="language">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        
    </body>
</html>
