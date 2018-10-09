<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="barcodegenerator.php">Generate Bar Code</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
<div class="container">
    <form action='insert.php' method='post' enctype="multipart/form-data">
    <fieldset>
        <legend>Registration Form</legend>
        <div class="form-group">
            <label class="col-form-label" for="firstname">First Name</label>
            <input type="text" class="form-control" placeholder="First Name" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label class="col-form-label" for="lastname">Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname">
        </div>
        <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="col-xs-3">
            <label for="phone">Telephone number</label>
            <input type="tel" class="form-control" id="phone" name="phone" size="10" maxlength="10" required="required" title="">
        </div>
        <div class="form-group">
        <label for="exampleTextarea">Address</label>
        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
        </div>     

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </fieldset>
    </form>
<div>
</body>
</html>