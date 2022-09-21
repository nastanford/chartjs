<?php
  include 'config.php';
  include 'qry_items.php';
  include 'qry_colors.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Line Chart</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <canvas id="my-chart" width="400" height="300"></canvas>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<script>
  const ctx = document.getElementById('my-chart').getContext('2d');
  const chart = new Chart(ctx, 
    {
      // The type of chart we want to create
      type: 'line',

      // The data for our dataset
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
          label: 'Aaa',
          backgroundColor: ['#3366CC'], 
          borderColor: ['#3366CC'], 
          data: [0, 10, 5, 2, 20, 30, 45]
        },
        {
          label: 'Bbb',
          backgroundColor: ['#DC3912'], 
          borderColor: ['#DC3912'], 
          data: [11, 15, 15, 33, 50, 43, 48]
        }
      
      ]
      },

      // Configuration options go here
      options: {}
    });

</script>
<?php 
  // echo "\n<ul/>\n";
  // // loop through data  
  // foreach ($items as $item) {
  //   echo "\t<li>".$item['title'] . "</li>\n";
  // }
  // echo "</ul>\n";
?>

