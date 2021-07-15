<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SEU Enrollment System</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SEU Enrollment System</a>
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="/students">Enroll</a>
        <a class="nav-link" href="/viewstudents">View Students</a>
        <a class="nav-link" href="#">About Us</a>
    </nav>
    <form method="POST" action={{ route('students.store') }}>
      @csrf
      <div class="container">
        <div class="mb-3">
          <label class="form-label">Student First Name</label>
          <input type="text" class="form-control" name="firstName"/>
          <label class="form-label">Student Middle Name</label>
          <input type="text" class="form-control" name="middleName"/>
          <label class="form-label">Student Last Name</label>
          <input type="text" class="form-control" name="lastName"/>
          <label class="form-label">Address</label>
          <input type="text" class="form-control" name="address"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
