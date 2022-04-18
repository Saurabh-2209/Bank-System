<!-- navbar --> 
   <html>
     <head>
       <style>
         
         .nav-link{
           
          text-shadow :2px 2px 0px rgb(3, 3, 3);

           padding: 0;
           
           margin-right:50px;
           font-size: 22px;
           font-weight: bold;
           
         }
         .nav-link:hover{
           color: aquamarine;
         }
        
         .navbar-toggler{
          background-color: aqua;
         }
         
       </style>
     </head>
       <body>  

<nav class="navbar navbar-expand-md navbar-light bg-dark">
     <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt="logo" width="70" height="70"></a></b>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto" >
              
              <li class="nav-item">
                <a class="nav-link" style="color: antiquewhite;" href="index.php">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" style="color: antiquewhite;"  href="transfermoney.php">Transfer Money</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: antiquewhite;"  href="transactionhistory.php">Transaction History</a>
              </li>
            </ul>
          </div>
       </nav>
       </body>
       </html>