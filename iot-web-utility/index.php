<?php
///////////////////////////////////////////////
//     Файл вывода информации и управления   //
//         состояниями выходов (реле)        //
//-------------------------------------------//
//        Автор: Гринько Роман Сергеевич     //
//             rsgrinko@gmail.com            //
///////////////////////////////////////////////
?>
<html>
<head>
<title>IoT - Гараж</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

 <link rel="stylesheet" type="text/css" href="style.css">
 <script>  
        function show()  
        {  
            $.ajax({  
                url: "transfer/var1.php",  
                cache: false,  
                success: function(html){  
                    $("#content").html(html); 
				}
             }); 
           $.ajax({  
                url: "transfer/var2.php",  
                cache: false,  
                success: function(html){  
                    $("#content-1").html(html); 
                }
             }); 
             
             $.ajax({  
                url: "transfer/control_rele1.php",  
                cache: false,  
                success: function(html){  
                    $("#content-2").html(html); 
                }
             }); 
			 
			  $.ajax({  
                url: "transfer/control_rele2.php",  
                cache: false,  
                success: function(html){  
                    $("#content-3").html(html); 
                }
             }); 
			 
			  $.ajax({  
                url: "transfer/control_rele3.php",  
                cache: false,  
                success: function(html){  
                    $("#content-4").html(html); 
                }
             }); 
			 
			  $.ajax({  
                url: "transfer/control_rele4.php",  
                cache: false,  
                success: function(html){  
                    $("#content-5").html(html); 
                }
             }); 
             
        }
        
        $(document).ready(function(){  
            show();  
            setInterval('show()',500);  
        }); 
        
 
      function AjaxFormRequest(result_id,led,url) {
      jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+led).serialize(),
         });
}


</script>
    
    
    
</head>
    <body>
	
	
	<table border="0px"  width="100%">
	<tr><td width="50%">
	  <div class="r">
          <p class="r1">Температура в гараже</p>
          <div class="r2" style="display:inline-block;">
          <div class="r3" id="content"></div> 
          <div class="r3"> C<sup>o</sup></div>
          </div>
          </div>
	</td><td  width="50%">
     <div class="r">
          <p class="r1">Напряжение питания</p>
          <div class="r2" >
          <div class="r3" id="content-1"></div> 
          <div class="r3"> В.</div>
          </div>
          </div>
	</td></tr>
   <tr><td>
    <div class="r">
          <p class="r1">Уличное освещение</p>
          <div class="r2" style="display:inline-block;">
		  <form  id="led" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led', 'transfer/rele1.php')" >
          </form>
          <div class="r3" id="content-2"></div> 
          </div>
          </div>
   </td><td>
   <div class="r">
          <p class="r1">Внутреннее освещение</p>
          <div class="r2" style="display:inline-block;">
		  <form  id="led2" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led2', 'transfer/rele2.php')" >
          </form>
          <div class="r3" id="content-3"></div> 
          </div>
          </div>	
   </td></tr>
	<tr><td>
  <div class="r">
          <p class="r1">Реле 3</p>
          <div class="r2" style="display:inline-block;">
		  <form  id="led3" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led3', 'transfer/rele3.php')" >
          </form>
          <div class="r3" id="content-4"></div> 
          </div>
          </div>	

	</td><td>
	
	
          <div class="r">
          <p class="r1">Реле 4</p>
          <div class="r2" style="display:inline-block;">
		  <form  id="led4" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led4', 'transfer/rele4.php')" >
          </form>
          <div class="r3" id="content-5"></div> 
          </div>
          </div>
	</td></tr>
	<tr><td>
	
	
	</td><td>
	
	
	</td></tr>
	
	
	</table>
	
	
	<!--
          <div class="r">
          <p class="r1">Температура в гараже</p>
          <div class="r2" style="display:inline-block;">
          <div class="r3" id="content"></div> 
          <div class="r3"> C<sup>o</sup></div>
          </div>
          </div>
        

          <div class="r">
          <p class="r1">Напряжение питания модуля</p>
          <div class="r2" >
          <div class="r3" id="content-1"></div> 
          <div class="r3"> В.</div>
          </div>
          </div>
          
		 
		  
          <div class="r">
          <p class="r1">Уличное освещение</p>
          <div class="r2" style="display:inline-block;">
		  <form  id="led" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led', 'transfer/rele1.php')" >
          </form>
          <div class="r3" id="content-2"></div> 
          </div>
          </div>		  



          <div class="r">
          <p class="r1">Внутреннее освещение</p>
          <div class="r2" style="display:inline-block;">
		  <form  id="led2" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led2', 'transfer/rele2.php')" >
          </form>
          <div class="r3" id="content-3"></div> 
          </div>
          </div>			


          <div class="r">
          <p class="r1">Реле 3</p>
          <div class="r2" style="display:inline-block;">
		  <form  id="led3" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led3', 'transfer/rele3.php')" >
          </form>
          <div class="r3" id="content-4"></div> 
          </div>
          </div>	


          <div class="r">
          <p class="r1">Реле 4</p>
          <div class="r2" style="display:inline-block;">
		  <form  id="led4" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led4', 'transfer/rele4.php')" >
          </form>
          <div class="r3" id="content-5"></div> 
          </div>
          </div>


-->



		  
	

<!--
          <div class="r">
          <p class="r1">Реле 3</p>
          <div class="r2" style="display:inline-block;">
		  <form  id="led3" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led3', 'transfer/rele1.php')" >
          </form>
          <div class="r3" id="content-4"></div> 
          </div>
          </div>	
		  
		  
          <div class="r">
          <div class="rl">
          <p class="r1">Реле 1</p>
          <div class="r2" style="font-size:35px" >
          <form  id="led" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led', 'transfer/rele1.php')" >
          </form>
          </div>
          </div>
          
          <div class="rr">
          <p class="r1">Состояние</p>
          <div class="r2"style="font-size:35px" >
          <div class="r3" id="content-2"></div> 
          </div>
          </div>
          
          </div>
        

         <div class="r">
          <div class="rl">
          <p class="r1">Реле 2</p>
          <div class="r2" style="font-size:35px" >
          <form  id="led2" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led2', 'transfer/rele2.php')" >
          </form>
          </div>
          </div>
          
          <div class="rr">
          <p class="r1">Состояние</p>
          <div class="r2"style="font-size:35px" >
          <div class="r3" id="content-3"></div> 
          </div>
          </div>
          
          </div>
        
           <div class="r">
          <div class="rl">
          <p class="r1">Реле 3</p>
          <div class="r2" style="font-size:35px" >
          <form  id="led3" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led3', 'transfer/rele3.php')" >
          </form>
          </div>
          </div>
          
          <div class="rr">
          <p class="r1">Состояние</p>
          <div class="r2"style="font-size:35px" >
          <div class="r3" id="content-4"></div> 
          </div>
          </div>
          
          </div>
              

         <div class="r">
          <div class="rl">
          <p class="r1">Реле 4</p>
          <div class="r2" style="font-size:35px" >
          <form  id="led4" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ON </label>
          <label><input type="radio" name="status" value="0"> OFF </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led4', 'transfer/rele4.php')" >
          </form>
          </div>
          </div>
          
          <div class="rr">
          <p class="r1">Состояние</p>
          <div class="r2"style="font-size:35px" >
          <div class="r3" id="content-5"></div> 
          </div>
          </div>
          
          </div>
        -->
		
   </body>
</html> 