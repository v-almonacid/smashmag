var clicked;
var baseZindex = 1;

$(document).ready(function () {
  // init z-index for all items
  // this allow as to put items over/under other items
  $('.dragable').css( "z-index", baseZindex );
  console.log($('#bg1').css('z-index'));
  console.log($('#shirt').css('z-index'));

  // make dragable objects... dragable
  $('.dragable').draggable();

  // make resizable items (inside .dragable) resizable, 
  // but not yet enabled...
  $('.dragable').find('item').resizable({disabled: true, aspectRatio: true, handles: 'ne, se, sw, nw'});
  
  // testing canvas (an alternative implementation of our board)
  // var canvas = document.getElementById('mycanvas');
  // if (canvas.getContext){
  //   var ctx = canvas.getContext('2d');
  //   // drawing code here
  //   var imageObj = new Image();

  //   imageObj.onload = function() {
  //     ctx.drawImage(imageObj,50,50);
  //   };
  //   imageObj.src = 'images/shirt.png';
    
  // } else {
  // // canvas-unsupported code here
  // }

});

// $('.item' )
//   .mouseover(function() {    
//     $( this ).resizable({disabled: false, aspectRatio: true });
//   })
//   .mouseout(function() {
//     $( this ).resizable( "destroy" );
//   });


$('.dragable').click(function(e) {
  e.preventDefault();
  console.log($(this).css( "z-index"));    
  if( clicked ){
    // remove selected properties of previous selected item
    //clicked.resizable( "destroy" );
    clicked.find('.item').resizable({disabled: true});
    clicked.removeClass(".selected");
  }
  clicked = $(this);
  // add selected properties of previous selected item
  clicked.find('.item').resizable({disabled: false, aspectRatio: true });
  if (typeof clicked.getRotateAngle()[0] === 'undefined') {
    clicked.data('alpha', 0);
  } else {
    clicked.data('alpha', clicked.getRotateAngle()[0]);
  }
  width = clicked.width();  
  height = clicked.height();
  console.log(width + ' ' + height);
});

$('#set-top-b').click(function(e) {
  e.preventDefault();  
  $('.item').css( "z-index", baseZindex );
  clicked.css( "position", "absolute" );
  clicked.css( "zIndex", "+=1" );
});

$('#rot-left-b').click(function(e) {
  e.preventDefault();
  // if (typeof clicked.resizable( "instance" ) != 'undefined' ){
  //   clicked.resizable( "destroy" );
  // }  
  alpha = clicked.data('alpha') - 45;
  clicked.rotate({animateTo: alpha});  
  clicked.data('alpha', alpha);
  console.log(alpha); 
});

$('#rot-right-b').click(function(e) {
  e.preventDefault();
  alpha = clicked.data('alpha') + 45;
  clicked.rotate({animateTo: alpha});
  clicked.data('alpha', alpha);
  console.log(alpha); 
});


$('#save-b').click(function(e) {  
  //clicked.resizable( "destroy" );
   $('.dragable').find('.item').resizable({disabled: true});
  //$('.dragable').find('.item').resizable("destroy");
  html2canvas( $('.board'), {
  onrendered: function(canvas) {        
    $('.result').append(canvas);            
    var dataURL = canvas.toDataURL(); 
    console.log(dataURL);
    $.ajax({
      type: "POST",
      url: "collage",      
      data: { 
         imgBase64: dataURL
      }      
    }).done(function(o) {
      console.log(o); 
      // If you want the file to be visible in the browser 
      // - please modify the callback in javascript. All you
      // need is to return the url to the file, you just saved 
      // and than put the image in your browser.
    });
  },
  //width: 300,
  //height: 300
  });
});

// $("#rot-left-b").rotate({ 
//    bind: 
//      { 
//         click: function(){
//             value +=30;
//             $(this).rotate({ animateTo:value})
//         }
//      }    
// });
