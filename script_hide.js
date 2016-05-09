$(document).ready(function(){
  $('input:radio[name=depart]').change(function(){
    $(".stage").hide();
    if(this.value =='echange'){
      $(".stage").hide();
      $(".echange").show();
    }
    else if (this.value == 'stage'){
      $(".echange").hide();
      $(".stage").show();
      
    }
  
});

});
