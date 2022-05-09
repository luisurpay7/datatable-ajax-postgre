<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<body>
    DENTRO DE HTML

    <input type="text" id="test01"></input>
    <button id="setText">setText</button>
    <br><br>

    <table id="example" class="display" style="width:100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>DNI</th>
              <th>APELLIDOS</th>
              <th>NOMBRES</th>
              <th>CMP</th>   
              <th>SEXO</th>
              
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>


    <?php //echo base_url();?>
    <script src="js/dt_productos.js"></script>

    <script>
        /*$("#setText").click(
          function(event) {
            $("#test01").val("GeeksForGeeks");
        });*/
    </script>

</body>
</html>