<!--- 20 Colors to use in the Chart Graph 

$colors = "3366CC,DC3912,FF9900,109618,990099,3B3EAC,0099C6,DD4477,66AA00,B82E2E,316395,994499,22AA99,AAAA11,6633CC,E67300,8B0707,329262,5574A6,3B3EAC";
--->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>chart 1</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-secondary">

<div class="col-6 offset-3">
  <div class="card mt-4">
    <div class="card-header">
    Chart 1
    </div>
    <div class="card-body">
      <div class="container">
        <canvas id="myChart"></canvas>
      </div>
    </div>
  </div>
</div>


 

<script>
  const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
  ];

  const data = {
    labels: labels,
    datasets: [
      {
      label: 'My First dataset',
      backgroundColor: '#3366CC',
      borderColor: '#3366CC',
      data: [0, 10, 5, 2, 20, 30, 45],
    },
    {
      label: 'My Second dataset',
      backgroundColor: '#DC3912',
      borderColor: '#DC3912',
      data: [10, 15, 7, 9, 60, 50, 85],
    }
  ]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
</script>

<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>