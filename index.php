<!DOCTYPE html>
<html>
  <head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

<link rel="stylesheet" href= "https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" >

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $jeux = array('battlefront', 'metal gear solid', 'gta', 'need for speed', 'call of duty');
    $nombre = count($jeux);
    print_r($nombre);
    function table($name){
      echo '<tr> <td>'.$name. '</td> </tr>';
    }
     ?>

     <table id = "myTable">
       <thead>
         <th></th>
       </thead>
       <tbody>

     <?php
    for ($i=0;$i<$nombre;$i++) {
      table($jeux[$i]);
    }
    ?>

</tbody>
    </table>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
  </body>
</html>
