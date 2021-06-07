<!DOCTYPE html>
        <html lang="en">
                <head>
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
                    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

                    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">

                    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css">

     
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
   
   
                    <title>Graph</title>   
                </head>

                <body>
                    <h2 style = "text-align: center; padding: 20px; background-color: #333; color: #fff;">Results </h2>
                    <div class = "container" style = "margin-top: 40px; padding: 30px;">
    
  
     

   

                    <table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No#</th>
                                <th>Time</th>
                                <th>Subject_01</th>
                                <th>Subject_02</th>
                                <th>Subject_03</th>
                                <th>Total</th>
                                
                            </tr>
                    </thead>
                <tbody>


            <?php
                require 'db_connect.php';
                $sql = "SELECT * FROM student";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    $i = 0;
                    while($row = $result->fetch_assoc()) {
                        $create_at   =  $row["create_at"];
                        $sub_01      =  $row["sub_01"];        
                        $sub_02      =  $row["sub_02"];
                        $sub_03      =  $row["sub_03"];
                        $total    =  $row["total"];
            ?>

                        <tr>
                            <td><?php $i++; echo $i; ?></td>
                            <td><?php echo $create_at; ?></td>
                            <td><?php echo $sub_01; ?></td>
                            <td><?php echo $sub_02; ?></td>
                            <td><?php echo $sub_03; ?></td>
                            <td><?php echo $total; ?></td>
                            <td>
                                
                            </td>
                         <?php }  ?>
                        </tr>
                     <?php } ?>  
                 </tbody>
              </table>



  


    <button class = "btn btn-primary btn-sm"><a href = "chart.php" style = "text-decoration: none; color: #fff;"><i class="fas fa-chart-bar"></i> Gprahical Results</a></button>


    <script src="https://code.jquery.com/jquery-3.4.0.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    
    </body>
</html>