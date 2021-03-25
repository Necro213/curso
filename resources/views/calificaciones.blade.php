<html>
<head>
    <title>Curso</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br><br>
                <div align="center">
                    <h2>Calificaciones</h2>
                </div>
                <br><br>
                <!--form id="form-calificaciones" method="post" action="{{route("calificacion.reg")}}"-->
                <form id="form-calificaciones">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <label for="alumno">Alumno</label>
                            <input type="text" class="form-control" id="alumno" name="alumno">
                        </div>
                        <div class="col-md-6">
                            <label for="materia">Materia</label>
                            <input type="text" class="form-control" id="materia" name="materia">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="calificacion">Calificacion</label>
                            <input type="number" class="form-control" name="calificacion" id="calificacion">
                        </div>
                        <div class="col-md-6">
                            <label for="aprobada">Aprobada</label>
                            <input type="text" class="form-control" name="aprobada" id="aprobada">
                        </div>
                    </div>
                    <br>
                    <div align="center">
                        <!--input class="btn btn-success" type="submit" value="Registrar"-->
                        <a class="btn btn-success" id="botoncito">Registrar</a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
        <hr>
        <h1>Tabla creada mediante php</h1>
        <div class="row">
            <table class="table">
                <thead>
                <th>Alumno</th>
                <th>Materia</th>
                <th>Calificacion</th>
                <th>Aprobada</th>
                </thead>
                <tbody>
                    @foreach($calificaciones as $calificacion)
                        <tr>
                            <td>{{$calificacion->alumno}}</td>
                            <td>{{$calificacion->materia}}</td>
                            <td>{{$calificacion->calificacion}}</td>
                            <td>{{$calificacion->aprobada}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <h1>Tabla creada desde javascript</h1>
        <div class="row" id="tabla-js">

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('/js/calificaciones.js')}}"></script>
</body>
</html>
