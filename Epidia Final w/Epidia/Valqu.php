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
        
        <form action="Valqu.php" method="post">
<div>
        <img src="vq1.jpg" alt="Image" width="350" height="250"><br><br>
            Q1. Which of these characters is not in Valorent?<br><br>
          
            <input type="radio" id="html" name="s1" value="A">
            Spec <br><br>
            <input type="radio" id="html" name="s1" value="B">
            Sova <br><br><br><br>
</div>
<div>
        <img src="vq2.jpg" alt="Image" width="350" height="250"><br><br>  
            Q2.What is the agents specialty?<br><br>
           
            
            
            <input type="radio" id="html2" name="s2" value="C">
            Plants<br><br>
            
            <input type="radio" id="html2" name="s2" value="D">
            Poison<br><br><br><br>
</div>
<div>
        <img src="vq3.jpg" alt="Image" width="350" height="250"><br> <br>

            Q3. Which Agent is not in Valorent?<br><br>
            
            <input type="radio" id="html3" name="s3" value="E">
            Reyna<br><br>
            
            <input type="radio" id="html3" name="s3" value="F">
            Sypher<br><br><br><br>
</div>
<div>
        <img src="Vq4.jpg" alt="Image" width="350" height="250"><br><br>      
            Q4.What is the weapon called?<br><br>
            
            <input type="radio" id="html4" name="s4" value="G">
            The Bulldog<br><br>
            
            <input type="radio" id="html4" name="s4" value="H">
            Frenzy<br><br><br><br>
</div>
<div>
        <img src="vq5.jpg" alt="Image" width="350" height="250"><br>  <br>    
            Q5.What are the maps in Valorent? <br><br>
           
            <input type="radio" id="html5" name="s5" value="I">
            Bind<br><br>
            
            <input type="radio" id="html5" name="s5" value="J">
            Splash<br><br>
</div>
            
            
            <input type="submit"name="submit"> 
            
            

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
              echo "Answer-1: WRONG!!!Correct answer is (Spec)";
            }
          } 
          
        
            if ($_POST["submit"] && ($_POST["s2"]=="C"))
            {
               echo "<br>"; 
               echo "Answer-2: WRONG!!!Correct answer is (Poison)";          
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
               echo "Answer-3: WRONG!!!Correct answer is (Sypher) ";       
            }
            if($_POST["submit"] && ($_POST["s3"]=="F"))
            { 
              echo "<br>";
              echo "Answer-3: Correct answer";  
              $Mark ++;
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
              echo "Answer-4: WRONG!!!Correct answer is (The Bulldog)";  
            }
            if ($_POST["submit"] && ($_POST["s5"]=="I"))
            {
              echo "<br>"; 
              echo "Answer-5: WRONG!!!Correct answer is (Splash)";          
            }
            if($_POST["submit"] && ($_POST["s5"]=="J"))
            { 
              echo "<br>";
              echo "Answer-5: Correct answer ";
              $Mark ++;
            }
            
          
        
        }
        ?>
        <div>
        <aside id="sidebar" style ="margin-top:-2500px">
        
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