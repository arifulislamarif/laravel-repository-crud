<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <title>Doctor</title>
  </head>
  <body>
    <div class="container">
        <h1>Laravel Respositry Pattern</h1>
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Doctor Table
                        <a href="{{ route('doctor.create') }}" class="float-right btn btn-primary">Add</a>
                    </div>
                    <div class="card-body">
                         @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->email }}</td>
                                        <td>
                                            <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('doctor.destroy', $doctor->id) }}" method="post" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
