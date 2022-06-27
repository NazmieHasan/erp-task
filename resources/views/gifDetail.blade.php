<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ERP Task Project</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    </head> 
    <body>
        <div class="container mt-5 mb-5"> 
            <div class="row">      
                <div class="col-md-6 offset-md-3 col-sm-12 mb-5 text-center">
                    <p>{{$gif_detail->data->title}}</p>
                    <img src="{{$gif_detail->data->images->original->url}}" alt="img" class="img-thumbnail p-0">
                </div> 
            </div>
        </div>        
    </body>
</html>
