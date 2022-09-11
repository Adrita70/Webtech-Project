<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz</title>
    <link rel="stylesheet" href="Quiz.css" />  
</head>
<body>
    <header id="main-header">
        <h1 >Weekly Quiz</h1>
        
    </header>
    <div class="container">
        <article id="main">
        
        <form action="Apexqu.php" method="post">
<div>
        <img src="AL1.jpg" alt="Image" width="350" height="250"><br><br>
            Q1. Which Legends come from the same planet?<br><br>
            <input type="radio" id="html" name="s1" value="A">
            Loba, Revenant, Crypto, Pathfinder <br><br>
            <input type="radio" id="html" name="s1" value="B">
            Octane, Lifeline, Horizon, Loba <br><br><br><br>
</div>
<div>
        <img src="AL2.jpg" alt="Image" width="350" height="250"><br> <br> 
            Q2. How did Octane lose his legs?<br>   <br>
            <input type="radio" id="html2" name="s2" value="C">
            Experimenting on his own body<br><br>
            
            <input type="radio" id="html2" name="s2" value="D">
            Trying to break a Gauntlet record<br><br><br><br>
</div>
<div>
        <img src="AL3.jpg" alt="Image" width="350" height="250"><br> <br>

            Q3. Which map is the Skyhook POI from?<br><br>
            
            <input type="radio" id="html3" name="s3" value="E">
            Olympus<br><br>
            
            <input type="radio" id="html3" name="s3" value="F">
            World's Edge <br><br><br><br>
</div>
<div>
        <img src="AL4.jpg" alt="Image" width="350" height="250"><br>  <br>    
            Q4. Which Legend used to be a Pilot?<br><br>
            
            <input type="radio" id="html4" name="s4" value="G">
            Wraith<br><br>
            
            <input type="radio" id="html4" name="s4" value="H">
            Bangalore<br><br><br><br>
</div>
<div>
        <img src="AL5.jpg" alt="Image" width="350" height="250"><br> <br>     
            Q5. Which class contains the most Legends? <br><br>
           
            <input type="radio" id="html5" name="s5" value="I">
            Defensive<br><br>
            
            <input type="radio" id="html5" name="s5" value="J">
            Offensive<br><br>    
            <input type="radio" id="html5" name="s5" value="K">
            22<br><br><br>
            <input type="submit"name="submit"> 
</div>          
        </form>
		
    <?php
    $Mark= 0;  
        {
          if (isset($_POST["submit"]))        
          {            
             if ($_POST["submit"] && ($_POST["s1"]=="A"))   
            {
              echo "<br>"; 
              echo "Answer-1: Correct answer ";
              $Mark ++;
            }
            if($_POST["submit"] && ($_POST["s1"]=="B"))
            { 
              echo "<br>"; 
              echo "Answer-1: WRONG!!!Correct answer is (Loba, Revenant, Crypto, Pathfinder)";
            }
          } 
          
        
            if ($_POST["submit"] && ($_POST["s2"]=="C"))
            {
               echo "<br>"; 
               echo "Answer-2: WRONG!!!Correct answer is (Trying to break a Gauntlet record)";          
            }
            if($_POST["submit"] && ($_POST["s2"]=="D"))
            { 
               echo "<br>";
               echo "Answer-2: Correct answer";
               $Mark ++;
            }
       
            if ($_POST["submit"] && ($_POST["s3"]=="E"))
            {
               echo "<br>"; 
               echo "Answer-3: Correct answer ";     
               $Mark ++;   
            }
            if($_POST["submit"] && ($_POST["s3"]=="F"))
            { 
              echo "<br>";
              echo "Answer-3: WRONG!!!Correct answer is (Olympus)";  
            }
            if ($_POST["submit"] && ($_POST["s4"]=="G"))
            {
              echo "<br>"; 
              echo "Answer-4: Correct answer ";
              $Mark ++;        
            }
            if($_POST["submit"] && ($_POST["s4"]=="H"))
            { 
              echo "<br>";
              echo "Answer-4: WRONG!!!Correct answer is (Wraith)";  
            }
            if ($_POST["submit"] && ($_POST["s5"]=="I"))
            {
              echo "<br>"; 
              echo "Answer-5: WRONG!!!Correct answer is (Offensive)";          
            }
            if($_POST["submit"] && ($_POST["s5"]=="J"))
            { 
              echo "<br>";
              echo "Answer-5: Correct answer ";
              $Mark ++;
            } 
            if($_POST["submit"] && ($_POST["s5"]=="K"))
            { 
              echo "<br>";
              echo "Answer-5: WRONG!!!Correct answer is (Offensive)";
            }      
        }
        ?>
        <aside id="sidebar" style ="margin-top:-2900px">
        <?php
        echo "Total Mark =". $Mark;
    ?>  
    </article>
        </div>  
      </aside> 
        </div>
        <div>
          <br>
        <footer id="main-footer" >  
    <h2><><><>Winner will announce in gallery section<><><></h2>    
    </footer> 
        </div>
</body>
</html>