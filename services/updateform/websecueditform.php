<?php
 session_start();
 if($_SESSION['off2']==0){
  ?>
  <script>
    alert('You are not Supposed to be here...');
    window.location="/project22/services/services.php";
  </script>

<?php
 }
?>
<?php
$name=$_SESSION['username'];
$con=mysqli_connect("localhost","root","","duowebizz");
$sql="SELECT `Name`, `Mail`, `Type of buisness`, `Frontendlang`, `Backendlang`, `templates`, `Website details` FROM `securityupdate` WHERE Mail='$name'";
$result= mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
  $frntend =$row['Frontendlang'];
  $backend=$row['Backendlang'];
  $aboutweb=$row['Website details'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
        margin: 0;
        padding: 0
     }
     body{
        background-color:#8f8a81;
        width: 100vw;
     }
     h2{
     font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
     color: white;
     text-shadow: 3px 3px 15px gray;
     }
     main{
        display: flex;
        justify-content: center;
        align-items: center;
        height:100vh;
        flex-direction: column;
     }
      #formdiv{
        margin-top: 10px;
      }
      form{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        font-weight: 600;
        flex-direction: column;
        justify-content: center;
        align-items: center; 
        width: 800px;
        background-color: orange;
        padding: 1pc;
        border-radius: 10px;
        border: 2px solid black;
        background-color: white;
    }
      #txtbox{

        border-radius: 10px;
        border: 3px solid orange;
      }
      .btns{
    background-color: orange;
    padding: .5pc;
    border-radius: 10px;
    border: 2px solid black;
}
.btns:hover{
    background-color: white;
    cursor: pointer;
    transition: .6s;
}

.hadcon{
    display:flex;
    background-color: orange;
    height: 100px;
    width: 100vw;
    display: flex;
    
    justify-content: center;
    align-items: center;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

    </style>
</head>
<body>
<main>
        <div class="hadcon">
           <IMG src="/project22/icons/secuweb.png"></IMG> <h2 align="center">Update/Edit Your Security request Form</h2>
             </div>
                 

            <div id="formdiv">
                <form action="formupdate2.php" method="post">
                    <div>
                        Type of your website :
        <input type = "radio" name="webtype" value="For buisness" checked>  Buisness
        <input type ="radio" name="webtype" value="For Blogs">Blogs
        <input type="radio" name="webtype" value="Other" id=""> Other
                      </div> <br>
                      <div>
                      Front-end languages of your website : <input type="text" name="frntend" id="txtbox"  value="<?php echo $frntend ?>">
                        </div>  <br>
                      
                      <div>
                      Back-end languages of your website  : <input type="text" name="backend" id="txtbox" value="<?php echo $backend ?>">
                      </div>
        <br>
          <div>
            
          Your website based on templates?
          <input type = "radio" name="temp" value="Yes" checked>  Yes
        <input type ="radio" name="temp" value="No">No
          </div><br>
          <div>
          Tell about your website in details:
          <textarea name="aboutweb" id="txtbox" cols="50" rows="10"> <?php echo $aboutweb ?></textarea>
          </div><br>
          <div>
          <input type="submit" value="UPDATE" class="btns">
          <input type="reset" value="RESET" class="btns">
        </div>       
        </form>
            </div>
          
     </main>
</body>
</html>
<?php

 $usermail=$_SESSION['username'];
 if($usermail == false){
    ?>
    <script>
        window.location="/project22/loginpage.html";
    </script>
        <?php
 }
?>
<script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>
<script>
    function loadGoogleTranslate(){
        new google.translate.TranslateElement("google_element");
    }
</script>