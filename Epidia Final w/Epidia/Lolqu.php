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
        
        <form action="Lolqu.php" method="post">
<div>
        <img src="lq1.jpg" alt="Image" width="350" height="250"><br><br>
            Q1. What year did leauge of legend debut?<br><br>
            <input type="radio" id="html" name="s1" value="A">
            2008 <br><br>
            <input type="radio" id="html" name="s1" value="B">
            2009<br><br>
            <input type="radio" id="html" name="s1" value="C">
            2010 <br><br>
            <input type="radio" id="html" name="s1" value="D">
            2011<br><br><br><br>
</div>
<div>
        <img src="lq2.jpg" alt="Image" width="350" height="250"><br> <br> 
            Q2. Which game developer created LOL?<br>   <br>
            <input type="radio" id="html2" name="s2" value="E">
            Riot<br><br>
            <input type="radio" id="html2" name="s2" value="F">
            Activision Blizzard<br><br>
            <input type="radio" id="html2" name="s2" value="G">
            Nintendo<br><br>
            <input type="radio" id="html2" name="s2" value="H">
            Rockstar Games<br><br> <br><br>  
</div>
<div>
        <img src="lq3.jpg" alt="Image" width="350" height="250"><br> <br>

            Q3. Which of this champion is a mage?<br><br>  
            <input type="radio" id="html3" name="s3" value="I">
            Sona<br><br> 
            <input type="radio" id="html3" name="s3" value="J">
            Miss Fortune <br><br>
            <input type="radio" id="html3" name="s3" value="K">
            Annie <br><br>
            <input type="radio" id="html3" name="s3" value="L">
            Leona <br><br><br><br>
</div>
<div>
        <img src="lq4.jpg" alt="Image" width="350" height="250"><br>  <br>    
            Q4. Who is this champion?<br><br>
            
            <input type="radio" id="html4" name="s4" value="M">
            Olaf<br><br>
            
            <input type="radio" id="html4" name="s4" value="N">
            Garen<br><br><br><br>
</div>
<div>
        <img src="lq5.jpg" alt="Image" width="350" height="250"><br> <br>     
            Q5. Which of these champions is garen's sibling? <br><br>
           
            <input type="radio" id="html5" name="s5" value="O">
            Lux<br><br>
            
            <input type="radio" id="html5" name="s5" value="P">
            Braum<br><br>    
            <input type="radio" id="html10" name="s10" value="Q">
            Shen<br><br><br>
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
              echo "Answer-1: WRONG!!!Correct answer is (2009)";
            }
            if ($_POST["submit"] && ($_POST["s1"]=="B"))   
            {
              echo "<br>"; 
              echo "Answer-1: Correct answer ";
              $Mark ++;
            }
            if($_POST["submit"] && ($_POST["s1"]=="C"))
            { 
              echo "<br>"; 
              echo "Answer-1: WRONG!!!Correct answer is (2009)";
            }
            if($_POST["submit"] && ($_POST["s1"]=="D"))
            { 
              echo "<br>"; 
              echo "Answer-1: WRONG!!!Correct answer is (2009)";
            }
          } 
          
        
            if ($_POST["submit"] && ($_POST["s2"]=="E"))
            {
               echo "<br>";
               echo "Answer-2: Correct answer";
               $Mark ++;        
            }
            if($_POST["submit"] && ($_POST["s2"]=="F"))
            { 
               echo "<br>";
               echo "Answer-2: WRONG!!!Correct answer is (Riot )"; 
            }
            if ($_POST["submit"] && ($_POST["s2"]=="G"))
            {
               echo "<br>"; 
               echo "Answer-2: WRONG!!!Correct answer is (Riot )";          
            }
            if ($_POST["submit"] && ($_POST["s2"]=="H"))
            {
               echo "<br>"; 
               echo "Answer-2: WRONG!!!Correct answer is (Riot)";          
            }
       
            if($_POST["submit"] && ($_POST["s3"]=="I"))
            { 
              echo "<br>";
              echo "Answer-3: WRONG!!!Correct answer is (Annie)";  
            }
            if($_POST["submit"] && ($_POST["s3"]=="J"))
            { 
              echo "<br>";
              echo "Answer-3: WRONG!!!Correct answer is (Annie)";  
            }
            if ($_POST["submit"] && ($_POST["s3"]=="K"))
            {
               echo "<br>"; 
               echo "Answer-3: Correct answer ";     
               $Mark ++;   
            }
            if($_POST["submit"] && ($_POST["s3"]=="L"))
            { 
              echo "<br>";
              echo "Answer-3: WRONG!!!Correct answer is (Annie)";  
            }
            if($_POST["submit"] && ($_POST["s4"]=="M"))
            { 
              echo "<br>";
              echo "Answer-4: WRONG!!!Correct answer is (Garen)";  
            }
            if ($_POST["submit"] && ($_POST["s4"]=="N"))
            {
              echo "<br>"; 
              echo "Answer-4: Correct answer ";
              $Mark ++;        
            }           
            if($_POST["submit"] && ($_POST["s5"]=="O"))
            { 
              echo "<br>";
              echo "Answer-5: Correct answer ";
              $Mark ++;
            } 
            if ($_POST["submit"] && ($_POST["s5"]=="P"))
            {
              echo "<br>"; 
              echo "Answer-5: WRONG!!!Correct answer is (Lux)";          
            }
            if ($_POST["submit"] && ($_POST["s5"]=="Q"))
            {
              echo "<br>"; 
              echo "Answer-5: WRONG!!!Correct answer is (Lux)";          
            }      
        }
        ?> 
        <aside id="sidebar" style ="margin-top:-3300px">
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