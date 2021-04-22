<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <title>Welcome</title>
  </head>
  <body>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <a href="{{ route('student.index') }}" class="btn btn-primary mr-1">Student</a>
        <a href="{{ route('doctor.index') }}" class="btn btn-primary ml-1">Doctor</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
