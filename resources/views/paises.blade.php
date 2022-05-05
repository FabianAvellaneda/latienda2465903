<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises</title>
</head>
<body>
    <h1>Paises de la Region</h1>
    <table class="table table-bordered table-stripered">
        <thead>
            <tr>
                <th style="background-color: lightblue;">Nombre</th>
                <th style="background-color: lightblue;">Capital</th>
                <th style="background-color: lightblue;">Moneda</th>
                <th style="background-color: lightblue;">Poblacion</th>
                <th style="background-color: lightblue;">Ciudades</th>
            </tr>
        </thead>
            <tbody>
                @foreach($paises as $pais => $infopais)
                <tr>
                    <td style="color: red;" rowspan='{{ count($infopais["ciudades"]) }}'>
                        {{ $pais }}
                    </td>
                    <td rowspan='{{ count($infopais["ciudades"]) }}'>
                        {{ $infopais["capital"] }}
                    </td>
                    <td rowspan='{{ count($infopais["ciudades"]) }}'>
                        {{ $infopais["moneda"] }}
                    </td>
                    <td rowspan='{{ count($infopais["ciudades"]) }}'>
                        {{ $infopais["poblacion"] }} millones hab.
                    </td>
                    @foreach($infopais["ciudades"] as $ciudad)
                    <th style="background-color: yellow;">
                        {{ $ciudad }} 
                    </th>
                </tr>
                    @endforeach
                @endforeach
            </tbody>
            <tfooter></tfooter>
    </table>
</body>
</html>