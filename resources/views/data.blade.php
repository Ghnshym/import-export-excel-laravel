<!DOCTYPE html>
<html lang="en">
<head>
  <title>imported</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Excel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('data') }}">Exported Data</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item active float-right">

                <a href="" class="nav-link">nav</a>
            </li>

          </ul>
        </div>
    </nav>
    
    <div class="conatiner">
        <h1>Imported data</h1>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $sno = 1;
                @endphp
                    
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $sno++ }} </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>

</body>
</html>
