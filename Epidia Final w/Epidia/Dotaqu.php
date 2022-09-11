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
        
        <form action="Dotaqu.php" method="post">
<div>
        <img src="Dq1.jpg" alt="Image" width="350" height="250"><br><br> 
            Q1. What kind of bonus hand of midas gives?<br><br> 
          
            <input type="radio" id="html" name="s1" value="A">
            +40 attach speed <br><br> 
            <input type="radio" id="html" name="s1" value="B">
            +40 strengh <br><br><br><br>
</div>
<div>
        <img src="Dq2.jpg" alt="Image" width="350" height="250"><br>  <br> 
            Q2.What does Dota stand for?<br><br> 
           
            
            
            <input type="radio" id="html2" name="s2" value="C">
            Damage of the angels<br><br> 
            
            <input type="radio" id="html2" name="s2" value="D">
            Defense of the Ancients<br><br><br><br>
</div>
<div>
        <img src="Dq3.jpg" alt="Image" width="350" height="250"><br><br>  

            Q3. Which company is developer and publisher of Dota 2?<br><br> 
            
            <input type="radio" id="html3" name="s3" value="E">
            Actual developer valve<br><br> 
            
            <input type="radio" id="html3" name="s3" value="F">
            EA games<br><br><br><br>
</div>
<div>
        <img src="Dq4.jpg" alt="Image" width="350" height="250"><br><br>       
            Q4.When was the game released on windows?<br><br> 
            
            <input type="radio" id="html4" name="s4" value="G">
            2010<br><br> 
            
            <input type="radio" id="html4" name="s4" value="H">
            2015<br><br><br><br>
</div>
<div>
        <img src="Dq5.jpg" alt="Image" width="350" height="250"><br>  <br>     
            Q5.How many lane creeps are there in Dota 2? <br><br> 
           
            <input type="radio" id="html5" name="s5" value="I">
            7<br><br> 
            
            <input type="radio" id="html5" name="s5" value="J">
            8<br><br>      
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
              echo "Answer-1: WRONG!!!Correct answer is (Spec)";
            }
          } 
          
        
            if ($_POST["submit"] && ($_POST["s2"]=="C"))
            {
               echo "<br>"; 
               echo "Answer-2: WRONG!!!Correct answer is (DEfense of the ancients)";          
            }
            if($_POST["submit"] && ($_POST["s2"]=="D"))
            { 
               echo "<br>";
               echo "Answer-2: Correct answer ";
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
              echo "Answer-3: WRONG!!!Correct answer is (Actual developer valve)";  
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
              echo "Answer-4: WRONG!!!Correct answer is (2010)";  
            }
            if ($_POST["submit"] && ($_POST["s5"]=="I"))
            {
              echo "<br>"; 
              echo "Answer-5: WRONG!!!Correct answer is (8)";          
            }
            if($_POST["submit"] && ($_POST["s5"]=="J"))
            { 
              echo "<br>";
              echo "Answer-5: Correct answer ";
              $Mark ++;
            }
            
          
        
        }
        ?>
        <aside id="sidebar" style ="margin-top:-2800px">
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