<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Admin Login</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @foreach($finalHeaderCssData as $name => $csskey)
        
      	<link rel="stylesheet" href="{{url($csskey)}}" />
		    @endforeach
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>