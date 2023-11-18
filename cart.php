
<!DOCTYPE HTML>
  <html>
   <head>
     <title>E-COMMERCE WEBSITE</title>

     <!------------------------------------CSS LINK-------------------------->

           <link rel="stylesheet" type="text/css" href="style.css">
           <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <!--------------------------- FONT AWESOME LINK------------------>

          <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
          <link rel="stylesheet" type="text/css" href="css/all.min.css">
     <!--------------------------- JAVASCRIPT LINK---------------------------->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

     <!---------------------------- jQuery library ------------------------------->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

           <style>
           body{
             margin:0px;
             padding:0px;
           }
           .bgpic{
             background-image: url('img/bg_1.jpg');
             background-attachment: fixed;
             background-size:100% 100%;
             width: 100%;
             height: 667px;
           }
           .banner-content{
            padding-top:10%;
            padding-bottom:10%;
            margin-left:17%;
            margin-top:16%;
            margin-bottom: 12%;
            background-color:rgba(0,0, 0, 0.6);
            max-width: 660px;
            text-align:center;
            font-weight: bold;
           }
           .footer{
             
             padding:10px;
             background-color:#101010;
             width: 100%;
            
           }
           .footer h4{
             font-weight: bold;
           }


           </style>
   </head>
        <body>
          <div class=".bgpic">
            <header>
              <nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark bg-dark">
                <div class="container">
                  <h3 class="navbar-brand bg-secondary text-white">LIFESTYLE STORE</h3>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mymenu">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  
                  <div class="collapse navbar-collapse text-center" id="mymenu">
                    <ul class="navbar-nav ml-auto">
                       <li class="nav-item">
                        <a class="nav-link text-white"href=""><i class="fas fa-cart">Cart</i></a></li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href=""><i class="fas fa-setting">Setting</i></a></li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href=""><i class="fas fa-logout">Logout</i></a></li>
                    </ul>
                </div>
                </div>
              </nav>
            </header>
 
            <div class="container center_div  shadow">
                 <div class=" container row d-flex flex.row justify-content-center mb-5">
                   <div class="admin-form shadow">    
                      <table class="table table-striped">
                         <thead>
                           <tr>
                            <th scope="col">ITEM-NUMBER</th>
                            <th scope="col">ITEM-NAME</th>
                            <th scope="col">PRICE</th>
                            <th scope="col"></th>
                            </tr>
                           </thead> 

                           <tbody>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                             </tbody>   

                             <tbody>
                                <td></td>
                                <td>Total</td>
                                <td>Rs.0</td>
                                <td a href="logout"><button class="btn btn-primary">Confirm Orded</button></a></td>
                             </tbody>                   
                   </div>
                 </div>
             </div>
       
      <div class="footer">
        <h4 class="font-italic text-white lead text-justify text-center">Copy@Right:) Life Style Store</h4>
      </div>
        </body>

  </html>
