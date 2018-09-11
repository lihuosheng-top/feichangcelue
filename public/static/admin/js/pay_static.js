(function () {
  var vals = $("tbody").children('tr').find('td').eq(2).html();
   var leg =$("tbody").children('tr').length;
    var a =1;
    var b =2;
   for(var  i= 0;i<leg;i++){

    if(vals==1){
        console.log(a);
    }
       if(vals==2){
        console.log(b);
       }
   }

})();