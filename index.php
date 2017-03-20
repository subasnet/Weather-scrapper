<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather Scrapper</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style type="text/css">
        html {
            background: url(background.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
        body {
            background: none;
        }
        
        .container {
            text-align: center;
            margin-top: 200px;
            width: 450px;
        }
        
        input {
            margin: 20px auto;
        }
    </style>
    
</head>

<body>
    <div class="container">
        
        <h1>What is the weather?</h1>
        
        <form class="form-group">
            <fieldset>
                <label for="city">Enter the name of a city.</label>
                <br>
                <input id="city" name="city" class="form-control input-lg" type="text" placeholder="Eg. Oulu">
            </fieldset>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>