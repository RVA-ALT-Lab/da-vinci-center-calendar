
//set hrs for events into form
  jQuery(document).ready(function() {

        if (document.getElementById('tribe-events')){

           var idea = document.getElementsByClassName('tribe-meta-value')[0];
           console.log(idea);
           var hrs = idea.innerHTML;
           console.log(hrs);
           var field = document.getElementById('input_4_7');
           field.value = hrs;
        }
    });


//hide and show button for reflection 
jQuery( "#student-log-button" ).click(function() {
  jQuery( "#student-log" ).toggle( "slow", function() {
    // Animation complete.
  });
});



//adds up the hours
  jQuery(document).ready(function() {
    var theHrs = 0;
    if (document.getElementById('totalHours')){
      var getHrs = document.getElementsByClassName('hours-data');
      console.log(getHrs);
      for(var i = 0; i < getHrs.length; i++){
        theHrs += parseInt(getHrs[i].innerHTML, 10);        
      }
      document.getElementById('totalHours').innerHTML = theHrs;
    }
  });
