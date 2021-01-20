<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css" <?php echo time(); ?>>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
  

    <title>The Basic Banking System</title>
  </head>
  <style>
    .section1{
      width:100%;
      height:100vh;
      background-color:whiteSmoke;
      
    }
    .box1, .box2{
      height:100%;
      display:flex;
      justify-content:center;
      align-items:center;
    }
    .box2{
      margin-top:5%;
      margin-bottom:5%;
    }
    .box1{
      margin-top:5%;
      margin-bottom:5%;
    }
    h1, h3{
      text-align:center;
      font-size:2.8rem;
    }
    .svg{
      height:650px;
      width:600px;
    }
    @media(max-width: 900px) {
      .svg{
        height:250px;
        width:300px;
      }
    }
.section2{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    height:100vh;
    min-height: 100vh;
    background-color: #fff;
    position:relative;
}

.title2{
  position:absolute;
  top:2%;
  left:45%;
}

@media(max-width:762px){
  .title2{
  position:absolute;
  top:2%;
  left:30%;
  margin-bottom:2rem;
}
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    max-width: 1200px;
    margin:40px 0;
}

.container .card{
    cursor:pointer;
    position: relative;
    min-width: 320px;
    height: 440px;
    border-radius: 15px;
    box-shadow: inset 5px 5px 15px rgba(0, 0, 0, 0.2),
                inset -5px -5px 15px rgba(255, 255, 255, 0.07),
                -5px -5px 15px rgba(255, 255, 255, 0.07),
                5px 5px 15px rgba(0, 0, 0, 0.2);
    margin:30px;
}

.container .card .box{
    position: absolute;
    top: 20px;
    left: 20px;
    right:20px;
    bottom:20px;
    color:#333;
    background: rgba(0, 0, 0, 0.2);
    border-left: 2px solid rgba(0, 0, 0, 0.2);
    border-top:2px solid rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    transition: 0.5s;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    backdrop-filter:blur(5px)
}

.container .card .box::before{
   content: '';
   width: 50%;
   position: absolute;
   top:0;
   left:0;
   height: 100%;
   background: rgba(255, 255, 255, 0.05);

}

.container .card .box:hover{
    box-shadow: 0 40px 70px rgba(0, 0, 0, 0.3);
    transform: translateY(-50px);
}

.container .card .box .content{
    padding: 20px;
    text-align: center;
}

.container .card .box .content h2{
    position: absolute;
    top:-10px;

    right:30px;
    font-size: 8em;
    color: rgba(0, 0, 0, 0.05);
}

.container .card .box .content h3{
    font-size: 1.8em;
    color: rgba(0, 0, 0, 0.62);
    z-index: 1;
    transition: 0.5s;
}

.container .card .box .content p{
    font-size: 16px;
    color:rgba(0, 0, 0, 0.5);
    font-weight: 300;
    z-index: 1;
    transition: 0.5s;
    line-height: 1.5rem;
    text-indent: 35px;
    padding:9px;
    text-align: justify;
}

.container .card .box .content a{
    position: relative;
    display: inline-block;
    padding: 8px 20px;
    background: #000;
    margin-top: 15px;
    border-radius: 20px;
    text-decoration: none;
    font-weight: 400;
    color: #fff;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.container .card:nth-child(1) .box .content a{
    background-color: #2196f3;
}
.container .card:nth-child(2) .box .content a{
    background-color: #e91e63;
}
.container .card:nth-child(3) .box .content a{
    background-color: #97dc47;
}
  </style>
  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid section1">
      <!-- Introduction section -->
              <div class="row justify-content-center align-items-center">
                <div class="col-md-6 box1">
                  <div>
                    <h3>Welcome to</h3>
                    <h1>BASIC BANK</h1>
                  </div>
                  
                </div>
              
                <!-- <img src="img/bank.png" class="img-fluid pt-2" width="400" height="250"> -->
                  <div class='col-md-6 box2'>
                  
                    <div>
                    <img  class='svg' src="img/bank.svg">
                  </div>
              </div>
      </div>
      
      <!-- Activity section -->
      <section class='section2'>
      <h1 class='title2'>Features</h1>
      <div class="container">
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>01</h2>
                    <h3>Create User</h3>
                    <!-- <p>
                       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus at beatae eos optio dolorum, suscipit pariatur. Architecto, veniam iusto nemo a velit minus optio doloremque eligendi? Deserunt itaque sit aut.
                    </p> -->
                    <img src="img/addUser.svg" width='200' height='150'>
                    <a href="createuser.php">Click-Me</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>02</h2>
                    <h3>Make Transaction</h3>
                    <!-- <p>
                       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus at beatae eos optio dolorum, suscipit pariatur. Architecto, veniam iusto nemo a velit minus optio doloremque eligendi? Deserunt itaque sit aut.
                    </p> -->
                    <img src="img/transfer.svg" width='200' height='150'>
                    <a href="transfermoney.php">Click-Me</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>03</h2>
                    <h3>Transaction History</h3>
                    <!-- <p>
                       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus at beatae eos optio dolorum, suscipit pariatur. Architecto, veniam iusto nemo a velit minus optio doloremque eligendi? Deserunt itaque sit aut.
                    </p> -->
                    <img src="img/history.svg" width='200' height='150'>
                    <a href="transactionhistory.php">Click-Me</a>
                </div>
            </div>
        </div>
   </div>

      </section>
             <!-- <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>  -->
      <!-- </div> -->
      <!-- <footer class="text-center mt-5 py-2">
      </footer> -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>