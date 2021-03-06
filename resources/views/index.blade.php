<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ERP Task Project</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    </head> 
    <body>
        <div class="container tex-center mt-5 mb-5"> 
            <div class="row">      
                @foreach($giphy_trending->data as $giphy)
                    <div class="col-md-3 col-sm-12 mb-5">
                        <img src="{{$giphy->images->original->url}}" alt="img" class="img-thumbnail p-0">
                        <a href="/gif-detail/{{$giphy->id}}" target=_blank>
                            <p>{{$giphy->title}}</p>
                        </a>
                    </div> 
                @endforeach
            </div>
        </div>        
    </body>
</html>
