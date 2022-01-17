<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <h3>Alumno <span class="badge bg-secondary">{{ $alumno->nombre }}</span> cursa las materias:</h3>
                    <table class="table table-striped table-hover">
                        <thead class="bg-primary text-white">
                            <th>Materias</th>
                        </thead>
                        <tbody>
                            @foreach($alumno->materias as $registro)
                            <tr>
                                <td>{{ $registro->nombre }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-auto">
                    <h3>Materia <span class="badge bg-secondary">{{ $materia->nombre }}</span> es cursada por:</h3>
                    <table class="table table-striped table-hover">
                        <thead class="bg-primary text-white">
                            <th>Materias</th>
                        </thead>
                        <tbody>
                            @foreach($materia->alumnos as $registro)
                            <tr>
                                <td>{{ $registro->nombre }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>