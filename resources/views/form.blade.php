<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>contact form</h2>
  <form action="{{Route('store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="firstname">Firstname:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="first_name">
    </div>
    <div class="form-group">
        <label for="lasttname">Lastname:</label>
        <input type="text" class="form-control" id="fi" placeholder="Enter lastname" name="last_name">
      </div>
    <div class="form-group">
      <label for="mobno">Mobile no:</label>
      <input type="integer" class="form-control" id="mobno" placeholder="Enter mobile No" name="mob_no">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
