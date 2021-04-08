<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <title>Student</title>
  </head>
  <body>
    <div class="container">
        <h1>Laravel Respositry Pattern</h1>
        <div class="row mt-5 justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Student Edit
                        <a href="{{ route('student.index') }}" class="float-right btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('student.update', $student->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Name" value="{{ $student->name }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="text" class="form-control" placeholder="Email" value="{{ $student->email }}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
