<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Dashboard</title>
    <style>
        .container{
            padding: 50px;
        }
        body{
            font-family:   Verdana, sans-serif;
        }
        form{
            padding:30px;
        }
        .title{
            background: #9333ea;
            padding:30px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
   <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between">
                <div>
                    <p class='display-1'>'<?= session()->fname.' '.session()->lname ?>'</p>                  
                </div>
                <div class='mt-5'>
                    <a href="<?= base_url('auth/logout')?>" role='button' class='btn btn-danger'>Logout</a>
                </div>
            </div>
        </div>
        <hr>
        <br><br>
        
        <div class="row">
<?php 
    if (session()->getFlashdata('invalid')){
    
        echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">'.session()->getFlashdata("prayer").'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
}
?>
                <div class="form">

                    <form class="form-control"  action="<?= base_url('user/pray') ?>" method="post">
                        <center><p style="color:teal;" class="display-6">Prayer Attendence</p></center>
                        <br>
                        <div class="d-flex justify-content-around">
                            <div>
                                <table class="table table-hover">
                                    <tr>
                                        <th>Prayer</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th>Fajr</th>
                                            <td><input  type="radio" name="fajr" value="2" required></td>
                                            <td><input  type="radio" name="fajr" value="0" required></td>
                                        </tr>
                                        <tr>
                                            <th>Duhr</th>
                                            <td><input  type="radio" name="duhr" value="4" required></td>
                                            <td><input  type="radio" name="duhr" value="0" required></td>
                                        </tr>
                                        <tr>
                                            <th>Asr</th>
                                            <td><input  type="radio" name="asr" value="4" required></td>
                                            <td><input  type="radio" name="asr" value="0" required></td>
                                        </tr>
                                        <tr>
                                            <th>Magrib</th>
                                            <td><input  type="radio" name="magrib" value="3" required></td>
                                            <td><input  type="radio" name="magrib" value="0" required></td>
                                        </tr>
                                        <tr>
                                            <th>Esha</th>
                                            <td><input  type="radio" name="esha" value="4" required></td>
                                            <td><input  type="radio" name="esha" value="0" required></td>
                                        </tr>
                                        <tr>
                                            <th>Badness</th>
                                            <td><input  type="radio" name="bad" value="1" required></td>
                                            <td><input  type="radio" name="bad" value="0" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <input class="form-control"  type="number" name="tahajjud" placeholder="Tahajjud" required><br>
                                <input class="form-control"  type="number" name="quran" placeholder="Quran Hifz" required><br>
                                <input class="form-control"  type="number" name="hadith" placeholder="Per Hadith" required><br>
                            </div>
                            <div>
                                <h3 style='color:tomato;'>Instruction</h3>
                                <ol>
                                    <li>Insert number of ayat in Quran </li>
                                    <li>Insert number of Hadith</li>
                                    <li>Number of Rakat prayed in Tahajjud</li>
                                    <li>Don't keep empty any box. Write 0 as Null value</li>
                                </ol>
                                <label for="">Date: </label>
                                <input type="date" name='date' class="form-control" required>
                            </div>
                        </div>
                        <br>
                        <input class="btn btn-primary form-control" type="submit" value="Mark Attendence">
                        <br>
                    </form>
            
            </div>
        </div>
        <br><br>
        <div class="title">
                <p class='display-1'>Last 7-day Visualization</p>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <p class="display-4">Fajr</p>
               <canvas id="fajr" style="width:100%;max-width:600px"></canvas>
            </div>
            <div class="col-sm-6">
               <p class="display-4">Duhr</p>
               <canvas id="duhr" style="width:100%;max-width:600px"></canvas>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <p class="display-4">Asr</p>
               <canvas id="asr" style="width:100%;max-width:600px"></canvas>
            </div>
            <div class="col-sm-6">
                 <p class="display-4">Magrib</p>
               <canvas id="magrib" style="width:100%;max-width:600px"></canvas>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <p class="display-4">Esha</p>
               <canvas id="esha" style="width:100%;max-width:600px"></canvas>
            </div>
            <div class="col-sm-6">
               <p class="display-4">Bad Sign</p>
               <canvas id="bad" style="width:100%;max-width:600px"></canvas>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <p class="display-4">Quran</p>
               <canvas id="quran" style="width:100%;max-width:600px"></canvas>
            </div>
            <div class="col-sm-6">
               <p class="display-4">Hadith</p>
               <canvas id="hadith" style="width:100%;max-width:600px"></canvas>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <p class="display-4">Tahajjud</p>
               <canvas id="tahajjud" style="width:100%;max-width:600px"></canvas>
            </div>
            <div class="col-sm-6">
               <p class="display-4">Progress</p>
               <canvas id="progress" style="width:100%;max-width:600px"></canvas>
            </div>
        </div>
        <br><br>
   </div>

<script>
const fajr = [
    <?php 
            foreach ($data as $key) {
                echo "'".$key['date']."'".',';
            }
        ?>
];

new Chart("fajr", {
  type: "bar",
  data: {
    labels: fajr,
    datasets: [{ 
         backgroundColor: 'green',
      data: [<?php 
            foreach ($data as $key) {
                echo $key['fajr'].',';
            }
        ?>],
      borderColor: "red",
      fill: false
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Fajr Prayer Graph"
    }
  }
});
//-----------------------Duhr--------------------
const duhr = [
    <?php 
            foreach ($data as $key) {
                echo "'".$key['date']."'".',';
            }
        ?>
];

new Chart("duhr", {
  type: "bar",
  data: {
    labels: duhr,
    datasets: [{ 
         backgroundColor: 'tomato',
      data: [<?php 
            foreach ($data as $key) {
                echo $key['duhr'].',';
            }
        ?>],
      borderColor: "tomato",
      fill: false
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Duhr Prayer Graph"
    }
  }
});
//-------------------------Asr-------------------
const asr = [
    <?php 
            foreach ($data as $key) {
                echo "'".$key['date']."'".',';
            }
        ?>
];
new Chart("asr", {
  type: "bar",
  data: {
    labels: asr,
    datasets: [{ 
        backgroundColor:'#22c55e',
      data: [<?php 
            foreach ($data as $key) {
                echo $key['asr'].',';
            }
        ?>],
      borderColor: "#22c55e",
      fill: false
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Asr Prayer Graph"
    }
  }
});

//-------------------------Magrib-------------------
const magrib = [
    <?php 
            foreach ($data as $key) {
                echo "'".$key['date']."'".',';
            }
        ?>
];
new Chart("magrib", {
  type: "bar",
  data: {
    labels: magrib,
    datasets: [{ 
        backgroundColor:'#10b981',
      data: [<?php 
            foreach ($data as $key) {
                echo $key['magrib'].',';
            }
        ?>],
      borderColor: "#10b981",
      fill: false
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Magrib Prayer Graph"
    }
  }
});
//-------------------------Esha-------------------
const esha = [
    <?php 
            foreach ($data as $key) {
                echo "'".$key['date']."'".',';
            }
        ?>
];
new Chart("esha", {
  type: "bar",
  data: {
    labels: esha,
    datasets: [{ 
    backgroundColor:'#7c3aed',
      data: [<?php 
            foreach ($data as $key) {
                echo $key['esha'].',';
            }
        ?>],
      borderColor: "#7c3aed",
      fill: false
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Esha Prayer Graph"
    }
  }
});

//-------------------------Bad-------------------
const bad = [
    <?php 
            foreach ($data as $key) {
                echo "'".$key['date']."'".',';
            }
        ?>
];
new Chart("bad", {
  type: "bar",
  data: {
    labels: bad,
    datasets: [{
        backgroundColor:'#dc2626', 
      data: [<?php 
            foreach ($data as $key) {
                echo $key['bad'].',';
            }
        ?>],
      borderColor: "#dc2626",
      fill: false
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Bad Habit Graph"
    }
  }
});
//-------------------------Quran Learning-------------------
const quran = [
    <?php 
            foreach ($data as $key) {
                echo "'".$key['date']."'".',';
            }
        ?>
];
new Chart("quran", {
  type: "line",
  data: {
    labels: quran,
    datasets: [{ 
        
      data: [<?php 
            foreach ($data as $key) {
                echo $key['quran'].',';
            }
        ?>],
      borderColor: "red",
      fill: false
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Quran Hifz"
    }
  }
});
//-------------------------Hadith Learning-------------------
const hadith = [
    <?php 
            foreach ($data as $key) {
                echo "'".$key['date']."'".',';
            }
        ?>
];
new Chart("hadith", {
  type: "line",
  data: {
    labels: hadith,
    datasets: [{ 
      data: [<?php 
            foreach ($data as $key) {
                echo $key['hadith'].',';
            }
        ?>],
      borderColor: "red",
      fill: false
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Hadith Hifz"
    }
  }
});
//-------------------------Tahajjud-------------------
const tahajjud = [
    <?php 
            foreach ($data as $key) {
                echo "'".$key['date']."'".',';
            }
        ?>
];
new Chart("tahajjud", {
  type: "line",
  data: {
    labels: hadith,
    datasets: [{ 
      data: [<?php 
            foreach ($data as $key) {
                echo $key['tahajjud'].',';
            }
        ?>],
      borderColor: "green",
      fill: false
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Tahajjud"
    }
  }
});

//-------------------------progress-------------------
const progress = [
    <?php 
            foreach ($data as $key) {
                echo "'".$key['date']."'".',';
            }
        ?>
];
new Chart("progress", {
  type: "line",
  data: {
    labels: progress,
    datasets: [{
      data: [
         <?php 
            foreach ($data as $key) {
                echo $key['fajr'].',';
            }
        ?>
      ],
      borderColor: "red",
      fill: false
    },{
      data: [
        <?php 
            foreach ($data as $key) {
                echo $key['duhr'].',';
            }
        ?>
      ],
      borderColor: "green",
      fill: false
    },{
      data: [
        <?php 
            foreach ($data as $key) {
                echo $key['asr'].',';
            }
        ?>
      ],
      borderColor: "blue",
      fill: false
    },{
      data: [
        <?php 
            foreach ($data as $key) {
                echo $key['magrib'].',';
            }
        ?>
      ],
      borderColor: "steelblue",
      fill: false
    },{
      data: [
        <?php 
            foreach ($data as $key) {
                echo $key['esha'].',';
            }
        ?>
      ],
      borderColor: "purple",
      fill: false
    },
]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Progress of Salat"
    }
  }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>