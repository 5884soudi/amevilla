
$(function() {


$(function() {

    let s1=1;

    $('.humberger').on('click', function() {

       s1=s1+1;
       console.log(s1)
       if(s1%2==0){

       
    
    
   

        
            $('.one').addClass('add1');
            $('.two').addClass('add2');
            $('.three').addClass('add3');
            
        
            $('.sp').css('opacity', 0);

            $('.header-right').css('opacity',1)
        


       }else{ 
        $('.one').removeClass('add1');
        $('.two').removeClass('add2');
        $('.three').removeClass('add3');
        
    
        $('.sp').css('opacity', 1);

        $('.header-right').css('opacity',0)
    


       }




    
    

      
    })



})

//  $(function(){

//      $('.humberger').on('click',function()
//      {
//          $('.humberger').removeclass('zero');
//      })
//  })


  
});