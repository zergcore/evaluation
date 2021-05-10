<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->

    <!-- estilos -->

    {{-- tailwind --}}
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    @yield('css')
</head>
<body>
<!-- header -->
<!-- nav -->

    @yield('content')

    <!-- footer -->
    <!-- script -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->

    <script>
        var count;
        function qualify(item){
            console.log(item)
            count=item.id[0]; //captura el primer caracter
            let n=item.id.substring(1); //4 'estrella captura todo menos el primer caracter'
            for (let i=0; i<5; i++){
                if (i<count){
                    document.getElementById((i+1)+n).style.color="orange";
                }else{
                    document.getElementById((i+1)+n).style.color="black";
                }
            }
        }

        function show(item, stars){
            console.log(item)
            //count=item.id[0]; //captura el primer caracter
            let n=item.id.substring(1); //4 'estrella captura todo menos el primer caracter'
            for (let i=0; i<5; i++){
                if (i<stars){
                    document.getElementById((i+1)+n).style.color="orange";
                }else{
                    document.getElementById((i+1)+n).style.color="black";
                }
            }
        }
    </script>

    @yield('js')

</body>
</html>