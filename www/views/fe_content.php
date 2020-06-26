<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
    <link href="{!!VENDORS_URL!!}bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{!!RES_URL!!}css/global.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
    @if (count($content) > 0)
    <h1>{{$content['content_title']}}</h1>
        {!!($content['content_image']!='') ? '<img src="'.$CONFIG['website']['path'].$content['content_image'].'" align="left">' : ''!!}
        {!!$content['content_description']!!}
    @else
        <h3>Page not found.</h3>
    @endif
    <hr>
    <a href="{!!$CONFIG['website']['path']!!}">Back to home</a>
    </div>
    <script src="{!!VENDORS_URL!!}jquery/jquery-3.4.1.min.js"></script>
    <script src="{!!VENDORS_URL!!}bootstrap/4.3.1/js/bootstrap.js"></script>
</body>
</html>
