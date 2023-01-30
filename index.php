 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   

    <!-- LIBRARIES -->
        <!-- BOOTSTRAP -->        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <!--// BOOTSTRAP //-->  
        
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
        <!--// GOOGLE FONTS //-->


        <style>
            body {
                font-family: 'Almarai', sans-serif;
            }

            .bg-primary {
                background: #811538 !important;
                color: white;
            }

            .bg-secondary {
                background: #5b0d25 !important;
                color: white;
            }

            #header-background {
                background-image: url("pattern.png");
            }

            #header {
                clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 80%);
                border-bottom: solid 20px #5b0d25;
            }

            #logo-header {
                position: absolute;
                z-index: 999;
                left: 100px;
                top: 60px;
            }

            #logo-img {
                height: 300px;
                -webkit-filter: drop-shadow(5px 5px 30px #222);
                filter: drop-shadow(5px 5px 30px #222);
            }
            #submit {
                
                margin: 20px 50px 10px 0px ;  
                padding: 5px;  
            }
            .equipe{   
         margin: 5px ; 

           };
        </style>
</head>
<body>
    
    <!-- LOGO HEADER -->
    <div id="logo-header">
        <img id="logo-img" src="logo.png" alt="">
    </div>
    <!-- LOGO HEADER -->

    <!-- HEADER -->
    <div id="header" style="height: 20rem;" class="bg-primary">
        <div id="header-background" style="width: 100%; height: 100%;">

            <div class="p-5" style="direction: rtl; font-size: 50px; margin-right: 100px; color: white">
                <h1 style="font-size: 70px; font-weight: 800;">كأس</h1>
                <h1 style="font-size: 90px; font-weight: 800">العالم</h1>
            </div>
        </div>
    </div>
    <!--// HEADER //-->


    <!-- QATAR WORD -->
    <div class="d-flex justify-content-center" style="margin-top: 30px;">
        <img src="qatar-word.png" alt="" style="width: 400px">
    </div>
    <!--// QATAR WORD //-->


    <!-- MAIN CONTENT -->
    <div class="container" style="margin-top: 50px">

        <!-- STANDINGS -->
        <div class="p-5 mt-1">

            <!-- TITLE ROW -->
            <div class="row" style="direction: rtl;">
                <h1>
                    <b>
                    المجموعات
                    </b>
                    <!-- <?php echo 'bonjour' ?> -->
               </h1>


    
    <form action="index.php" method="post" id="form">
        <div >
            equipe1:<input type="number" name="equipe1-matche1">   
            <input type="number" name="equipe2-matche1" class="equipe" > equipe2<br>   
        </div>
        <div >
            equipe3:<input type="number" name="equipe3-matche1">     
            <input type="number" name="equipe4-matche1" class="equipe" >equipe4<br>   
        </div>
        <div id ="equipe">
            equipe4:<input type="number" name="equipe4-matche2">    
            <input type="number" name="equipe1-matche2" class="equipe">equipe1<br>   
        </div>
        <div >
            equipe3:<input type="number" name="equipe3-matche2">     
            <input type="number" name="equipe2-matche2" class="equipe">equipe2<br>   
        </div>
        <div  >
            equipe1:<input type="number" name="equipe1-matche3">  
            <input type="number" name="equipe3-matche3"  class="equipe">equipe3<br>  
        </div>
        <div >
            equipe2:<input type="number" name="equipe2-matche3">   
            <input type="number"name="equipe4-matche3"  class="equipe">equipe4<br> 
        </div>
       <input type="submit" value="sumuler" name="submit" id ="submit"> 
    </form>



  <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Equipes</th>
      <th scope="col">pts</th>
      <th scope="col">MJ</th>
      <th scope="col">MG</th>
      <th scope="col">Null</th>
      <th scope="col">MP</th>
      <th scope="col">BM</th>
      <th scope="col">BE</th>
      <th scope="col">dif</th>

    </tr>
  </thead>
  <tbody>
 
    <?php

        if(isset($_POST['submit'])){
        $equipes = ["equipe1"=>["nom"=>"equipe1","point"=>0,"MJ"=>0,"MG"=>0,"null"=>0,"MP"=>0,"BM"=>0,"BE"=>0,"dif"=>0],
        "equipe2"=>["nom"=>"equipe2","point"=>0,"MJ"=>0,"MG"=>0,"null"=>0,"MP"=>0,"BM"=>0,"BE"=>0,"dif"=>0],
        "equipe3"=>["nom"=>"equipe3","point"=>0,"MJ"=>0,"MG"=>0,"null"=>0,"MP"=>0,"BM"=>0,"BE"=>0,"dif"=>0],
        "equipe4"=>["nom"=>"equipe4","point"=>0,"MJ"=>0,"MG"=>0,"null"=>0,"MP"=>0,"BM"=>0,"BE"=>0,"dif"=>0]];
            // MATCHE1
            if($_POST['equipe1-matche1'] ==''and $_POST['equipe2-matche1']==''){
                $equipes["equipe1"]["point"]+=0;
                $equipes["equipe2"]["point"]+=0;
                
            }elseif($_POST['equipe1-matche1'] > $_POST['equipe2-matche1']){
                $equipes["equipe1"]["point"]+=3;
                $equipes["equipe1"]["MJ"]+=1;
                $equipes["equipe2"]["MJ"]+=1;
                $equipes["equipe1"]["MG"]+=1;
                $equipes["equipe1"]["MP"]+=1;
                $equipes["equipe1"]["BM"]+=$_POST['equipe1-matche1'];
                $equipes["equipe2"]["BE"]+=$_POST['equipe1-matche1'];
            }elseif($_POST['equipe1-matche1'] < $_POST['equipe2-matche1']){
                $equipes["equipe2"]["point"]+=3;
                $equipes["equipe1"]["MJ"]+=1;
                $equipes["equipe2"]["MJ"]+=1;
                $equipes["equipe2"]["MG"]+=1;
                $equipes["equipe2"]["BM"]+=$_POST['equipe2-matche1'];
                $equipes["equipe1"]["BE"]+=$_POST['equipe2-matche1'];
            }elseif($_POST['equipe1-matche1'] == $_POST['equipe2-matche1']){
                $equipes["equipe1"]["point"]+=1;
                $equipes["equipe2"]["point"]+=1;
                $equipes["equipe1"]["MJ"]+=1;
                $equipes["equipe2"]["MJ"]+=1;
                $equipes["equipe1"]["null"]+=1;
                $equipes["equipe2"]["null"]+=1;
            }
        // MATCHE2
            if($_POST['equipe3-matche1'] ==''and $_POST['equipe4-matche1']==''){
                $equipes["equipe3"]["point"]+=0;
                $equipes["equipe4"]["point"]+=0;
            }elseif($_POST['equipe3-matche1'] > $_POST['equipe4-matche1']){
                $equipes["equipe3"]["point"]+=3;
                $equipes["equipe3"]["MJ"]+=1;
                $equipes["equipe4"]["MJ"]+=1;
                $equipes["equipe3"]["MG"]+=1;
                $equipes["equipe3"]["BM"]+=$_POST['equipe3-matche1'];
                $equipes["equipe4"]["BE"]+=$_POST['equipe3-matche1'];
            }elseif($_POST['equipe3-matche1'] < $_POST['equipe4-matche1']){
                $equipes["equipe4"]["point"]+=3;
                $equipes["equipe3"]["MJ"]+=1;
                $equipes["equipe4"]["MJ"]+=1;
                $equipes["equipe4"]["MG"]+=1;
                $equipes["equipe4"]["BM"]+=$_POST['equipe4-matche1'];
                $equipes["equipe3"]["BE"]+=$_POST['equipe4-matche1'];
            }elseif($_POST['equipe3-matche1'] == $_POST['equipe4-matche1']){
                $equipes["equipe3"]["point"]+=1;
                $equipes["equipe4"]["point"]+=1;
                $equipes["equipe3"]["MJ"]+=1;
                $equipes["equipe4"]["MJ"]+=1;
                $equipes["equipe3"]["null"]+=1;
                $equipes["equipe4"]["null"]+=1;
            }
        //  MATCHE3
            if($_POST['equipe1-matche2'] ==''and $_POST['equipe4-matche2']==''){
                $equipes["equipe1"]["point"]+=0;
                $equipes["equipe4"]["point"]+=0;
            }elseif($_POST['equipe1-matche2'] > $_POST['equipe4-matche2']){
                $equipes["equipe1"]["point"]+=3;
                $equipes["equipe1"]["MJ"]+=1;
                $equipes["equipe4"]["MJ"]+=1;
                $equipes["equipe1"]["MG"]+=1;
                $equipes["equipe1"]["BM"]+=$_POST['equipe1-matche2'];
                $equipes["equipe4"]["BE"]+=$_POST['equipe1-matche2'];
            }elseif($_POST['equipe1-matche2'] < $_POST['equipe4-matche2']){
                $equipes["equipe4"]["point"]+=3;
                $equipes["equipe1"]["MJ"]+=1;
                $equipes["equipe4"]["MJ"]+=1;
                $equipes["equipe4"]["MG"]+=1;
                $equipes["equipe4"]["BM"]+=$_POST['equipe4-matche2'];
                $equipes["equipe1"]["BE"]+=$_POST['equipe4-matche2'];
            }elseif($_POST['equipe1-matche2'] == $_POST['equipe4-matche2']){
                $equipes["equipe1"]["point"]+=1;
                $equipes["equipe4"]["point"]+=1;
                $equipes["equipe1"]["MJ"]+=1;
                $equipes["equipe4"]["MJ"]+=1;
                $equipes["equipe3"]["null"]+=1;
                $equipes["equipe4"]["null"]+=1;
               
            }
         //  MATCHE4
            if($_POST['equipe2-matche2'] ==''and $_POST['equipe3-matche2']==''){
                $equipes["equipe2"]["point"]+=0;
                $equipes["equipe3"]["point"]+=0;
            }elseif($_POST['equipe2-matche2'] > $_POST['equipe3-matche2']){
                $equipes["equipe2"]["point"]+=3;
                $equipes["equipe2"]["MJ"]+=1;
                $equipes["equipe3"]["MJ"]+=1;
                $equipes["equipe2"]["MG"]+=1;
                $equipes["equipe2"]["BM"]+=$_POST['equipe2-matche2'];
                $equipes["equipe3"]["BE"]+=$_POST['equipe2-matche2'];
            }elseif($_POST['equipe2-matche2'] < $_POST['equipe3-matche2']){
                $equipes["equipe3"]["point"]+=3;
                $equipes["equipe2"]["MJ"]+=1;
                $equipes["equipe3"]["MJ"]+=1;
                $equipes["equipe3"]["MG"]+=1;
                $equipes["equipe3"]["BM"]+=$_POST['equipe3-matche2'];
                $equipes["equipe2"]["BE"]+=$_POST['equipe3-matche2'];
            }elseif($_POST['equipe2-matche2'] == $_POST['equipe3-matche2']){
                $equipes["equipe2"]["point"]+=1;
                $equipes["equipe3"]["point"]+=1;
                $equipes["equipe2"]["MJ"]+=1;
                $equipes["equipe3"]["MJ"]+=1;
                $equipes["equipe3"]["null"]+=1;
                $equipes["equipe4"]["null"]+=1;
            }
          //  MATCHE5
            if($_POST['equipe1-matche3'] ==''and $_POST['equipe3-matche3']==''){
                $equipes["equipe1"]["point"]+=0;
                $equipes["equipe3"]["point"]+=0;
            }elseif($_POST['equipe1-matche3'] > $_POST['equipe3-matche3']){
                $equipes["equipe1"]["point"]+=3;
                $equipes["equipe1"]["MJ"]+=1;
                $equipes["equipe3"]["MJ"]+=1;
                $equipes["equipe1"]["MG"]+=1;
                $equipes["equipe4"]["null"]+=1;
                $equipes["equipe1"]["BM"]+=$_POST['equipe1-matche3'];
                $equipes["equipe3"]["BE"]+=$_POST['equipe1-matche3'];
            }elseif($_POST['equipe1-matche3'] < $_POST['equipe3-matche3']){
                $equipes["equipe3"]["point"]+=3; 
                $equipes["equipe1"]["MJ"]+=1;
                $equipes["equipe3"]["MJ"]+=1;
                $equipes["equipe3"]["MG"]+=1;
                $equipes["equipe3"]["BM"]+=$_POST['equipe3-matche3'];
                $equipes["equipe1"]["BE"]+=$_POST['equipe3-matche3'];
            }elseif($_POST['equipe1-matche3'] == $_POST['equipe3-matche3']){
                $equipes["equipe1"]["point"]+=1;
                $equipes["equipe3"]["point"]+=1;
                $equipes["equipe1"]["MJ"]+=1;
                $equipes["equipe3"]["MJ"]+=1;
                $equipes["equipe3"]["null"]+=1;  
                $equipes["equipe1"]["null"]+=1;  
            }
         //  MATCHE6
            if($_POST['equipe2-matche3'] ==''and $_POST['equipe4-matche3']==''){
                $equipes["equipe2"]["point"]+=0;
                $equipes["equipe4"]["point"]+=0;
            }elseif($_POST['equipe2-matche3'] > $_POST['equipe4-matche3']){
                $equipes["equipe2"]["point"]+=3;
                $equipes["equipe2"]["MJ"]+=1;
                $equipes["equipe4"]["MJ"]+=1;
                $equipes["equipe2"]["MG"]+=1;
                $equipes["equipe2"]["BM"]+=$_POST['equipe2-matche3'];
                $equipes["equipe4"]["BE"]+=$_POST['equipe2-matche3'];
            }elseif($_POST['equipe2-matche3'] < $_POST['equipe4-matche3']){
                $equipes["equipe4"]["point"]+=3;
                $equipes["equipe2"]["MJ"]+=1;
                $equipes["equipe4"]["MJ"]+=1;
                $equipes["equipe4"]["MG"]+=1;
                $equipes["equipe4"]["null"]+=1;
                $equipes["equipe4"]["BM"]+=$_POST['equipe4-matche3'];
                $equipes["equipe2"]["BE"]+=$_POST['equipe4-matche3'];
            }elseif($_POST['equipe2-matche3'] == $_POST['equipe4-matche3']){
                $equipes["equipe2"]["point"]+=1;
                $equipes["equipe4"]["point"]+=1;
                $equipes["equipe2"]["MJ"]+=1;
                $equipes["equipe2"]["null"]+=1;
                $equipes["equipe4"]["null"]+=1;

            }

            foreach($equipes as $equipe){
                echo "<tbody><td>".$equipe["nom"]."</td>
                <td>".$equipe["point"]."</td>
                <td>".$equipe["MJ"]."</td>
                <td>".$equipe["MG"]."</td>
                <td>".$equipe["null"]."</td>
                <td>".$equipe["MP"]."</td>
                <td>".$equipe["BM"]."</td>
                <td>".$equipe["BE"]."</td>
                <td>".$equipe["dif"]=$equipe["BM"]-$equipe["BE"]."</td>
                </tbody>";
            }

             function cmpPoints($a, $b){
                {
                    return $a["point"] - $b["point"];
                }
                usort($equipes, "cmpPoints");
                }       
  };

 
        
    ?>
    </tbody>
    </table>




    
   
</body>
</html>    









<!-- localhost/FOOTBALL -->