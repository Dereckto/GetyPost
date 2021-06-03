<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>

  <div class="container">
  <form action="repuesta2.php" method="GET">
      <div class="row justify-content-center">
          <div class="col-sm-8 col-xl-8">
              <div class="card">
  
                  <div class="card-header">
                      <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
                          <a class="list-group-item list-group-item-action active" id="list-login-list" data-toggle="list" href="#list-login" role="tab" aria-controls="login">Formulario</a>
                      </div>
                  </div>
  
                  <div class="card-body">
                      <div class="tab-content" id="nav-tabContent">
                           <!-- Formulario Login -->
                          <div class="tab-pane fade show active" id="list-login" role="tabpanel" aria-labelledby="list-form-list">
                              <form>
                              <div class="form-group">
                                      <label for="identificacion">Identificacion</label>
                                      <input type="text" class="form-control" id="identificacion" name="identificacion">
                                  </div>

                                  <div class="form-group">
                                      <label for="nombres">Nombres</label>
                                      <input type="text" class="form-control" id="nombres" name="nombres">
                                  </div>

                                  <div class="form-group">
                                      <label for="apellidos">Apellidos</label>
                                      <input type="text" class="form-control" id="apellidos" name="apellidos">
                                  </div>

                                  
                                  <div class="form-group">
                                      <label for="edad">edad</label>
                                      <input type="number" class="form-control" id="edad" name="edad" required>
                                  </div>
                                  <div class="form-group">
                                      <label for="email">Correo electrónico</label>
                                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                                  </div>
                                  <br>
                                  
                                  <button type="submit" class="btn btn-primary">Enviar</button>


                              </form>  
                          </div>
  
                          
                          
                        </div>
                  </div>
              </div>
          </div>
      </div>
  <div>
   
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>