<?php
/* nota: include no detiene flujo en caso de error. En tal caso se
   carga contenido por defecto */
// include ('loadContent.php');
session_start();
include('header.php');
?>  
  
  <div class="container">
    <div class="btn-group">
      <a class="btn btn-default" href="#" id="set-top-b" name="set-top-b"><i class="fa fa-level-up"></i></a>
      <a class="btn btn-default" href="#" id="rot-left-b" name="rot-left-b"><i class="fa fa-rotate-left"></i></a>
      <a class="btn btn-default" href="#" id="rot-right-b" name="rot-right-b"><i class="fa fa-rotate-right"></i></a>
      <a class="btn btn-default" href="#" id="save-b" name="save-b"><i class="fa fa-save"></i></a>
    </div>
    
    <div class="board">
      <!-- <img id="jeans" src="images/jeans.jpg" width="320" height="240" alt="Test" /> -->      
      <div class="dragable"><img id="shirt" class="ui-widget-content item" src="images/shirt.png" alt="Test" /></div>
      <div class="dragable"><img id="bg1" class="ui-widget-content item" src="images/bg2.jpg" alt="Test" /></div>
    </div> <!-- /board> -->

    <div class="result">
    </div>
    
    <!--   <canvas id="mycanvas">
      </canvas>        
     -->
  </div>


      
  <div class="wrapper">
      

  </div><!-- /wrapper --> 

    
  <div class="footer">
    <div class="container">
      <p class="text-muted">Smash Magazine &copy;2014</p>
    </div>
  </div>   
                               
    <!-- <script src="js/jquery-1.11.1.js" type="text/javascript"></script> -->
    <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>  
    <!-- <script src="js/grid/jquery.grid-a-licious.js" type="text/javascript"></script> -->    
    <script src="js/moment.min.js" type="text/javascript"></script>
    <script src="js/moment.lang.min.js" type="text/javascript"></script>    
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <!-- <script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script> -->
    <script src="js/jQueryRotateCompressed.js" type="text/javascript"></script>       
    <script src="js/html2canvas.js" type="text/javascript"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/board.js" type="text/javascript"></script> 
    
  </body>
</html>
