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
        
        <form action="CSqu.php" method="post">
<div>
        <img src="Cq1.jpg" alt="Image" width="350" height="250"><br><br>
            Q1.The best team of CS:GO is?<br><br>
          
            <input type="radio" id="html" name="s1" value="A">
            Team Liquid <br><br>
            <input type="radio" id="html" name="s1" value="B">
            Navi<br><br><br><br>
</div>
<div>
        <img src="Cq2.jpg" alt="Image" width="350" height="250"><br>  <br>
            Q2.The most damaging grenades?<br><br>
           
            
            
            <input type="radio" id="html2" name="s2" value="C">
            Explosive<br><br>
            
            <input type="radio" id="html2" name="s2" value="D">
            FlashBang<br><br><br><br>
</div>
<div>
        <img src="Cq3.jpg" alt="Image" width="350" height="250"><br> <br>

            Q3. Have you ever participated in a cs tournament?<br><br>
            
            <input type="radio" id="html3" name="s3" value="E">
            Once<br><br>
            
            <input type="radio" id="html3" name="s3" value="F">
            Many times<br><br><br><br>
</div>
<div>
        <img src="Cq4.jpg" alt="Image" width="350" height="250"><br>   <br>   
            Q4.The map in CS:GO that guides the best?<br><br>
            
            <input type="radio" id="html4" name="s4" value="G">
            Train<br><br>
            
            <input type="radio" id="html4" name="s4" value="H">
            Dust<br><br><br><br>
</div>
<div>
        <img src="Cq5.jpg" alt="Image" width="350" height="250"><br> <br>     
            Q5.The best gun in CS:Go game? <br><br>
           
            <input type="radio" id="html5" name="s5" value="I">
            USP-s<br><br>
            
            <input type="radio" id="html5" name="s5" value="J">
            P250<br><br>

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
              echo "Answer-1: WRONG!!!Correct answer is (Team Liquid)";
            }
          } 
          
        
            if ($_POST["submit"] && ($_POST["s2"]=="C"))
            {
               echo "<br>"; 
               echo "Answer-2: WRONG!!!Correct answer is (Flashbang)";          
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
              echo "Answer-3: WRONG!!!Correct answer is (Once)";  
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
              echo "Answer-4: WRONG!!!Correct answer is (Train)";  
            }
            if ($_POST["submit"] && ($_POST["s5"]=="I"))
            {
              echo "<br>"; 
              echo "Answer-5: WRONG!!!Correct answer is (P250)";          
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