$(document).ready(function () {
	var n = 0;
    var tools = $('#sub-menu');
	 $('#lang').click(function () {
    	if (n === 0 ) {
    		tools.slideDown(400);
    		n = 1;
    	}
    });
    tools.mouseleave(function () {
        if (n === 1) {
            tools.slideUp(400);
            n = 0;
        }
    });
});
function scrollDown() {
	$("html, body").animate({ scrollTop: 630 }, "slow");
}

function ShowContactForm()
{
    $(".contactPage").fadeIn(400);
    $(".contactForm").fadeIn(400);
    $("body").css("overflow","hidden");
    $("html, body").animate({ scrollTop: 0 }, "slow");
}
function CloseContactForm()
{
     $(".contactPage").fadeOut(400);
     $(".contactForm").fadeOut(400);
     $("body").css("overflow","visible");
}
$(document).keyup(function(e) {
     if (e.key === "Escape") { 
        CloseContactForm();
    }
});


// fun
 $(document).ready(function(){
      $('#submit-btn').click(function(event){
        event.preventDefault();
         $.ajax({
            dataType: 'JSON',
            url: 'Views/servises/contactLogic.php',
            type: 'POST',
            data: $('#contact').serialize(),
            beforeSend: function(xhr){
              $('#submit-btn').html('SENDING...');
            },
            success: function(response){
              if(response){
                console.log(response);
                if(response['signal'] == 'ok'){
                 $('#msg').html('<div class="alert alert-success">'+ response['msg']  +'</div>');
                  $('input, textarea').val(function() {
                     return this.defaultValue;
                  });
                }
                else{
                  $('#msg').html('<div class="alert alert-danger">'+ response['msg'] +'</div>');
                }
              }
            },
            error: function(){
              $('#msg').html('<div class="alert alert-danger">Errors occur. Please try again later.</div>');
            },
            complete: function(){
              $('#submit-btn').html('SEND MESSAGE');
            }
          });
      });
    });

 
var n = 0
 $(document).ready(function () {
   $("#main-nav a").hover(function () {
    var elements = $(this).children(this);
    var oneelement = elements.get(0);
    if (n == 0 ) {
      oneelement.classList.add('changeWidth');
      oneelement.classList.remove('changeWidthMinus');
      oneelement.style.width = "100%";
      n =1;
    }else
    {
      oneelement.classList.remove('changeWidth');
      oneelement.classList.add('changeWidthMinus');
      oneelement.style.width = "0%";
      n =0;
    }
  });
 })