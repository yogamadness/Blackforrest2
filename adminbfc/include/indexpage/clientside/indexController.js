$(document).ready(function(){

 $.getJSON('include/indexpage/serverside/getData.php', function(data){


	new Morris.Bar({
  element: 'myfirstchart',
 data: data,
  xkey: 'product',
  ykeys: ['total'],
  labels: ['Total penjualan']
  
}); 




});

});

 Array.prototype.mapProperty = function(property) {
   return this.map(function (obj) {
       return obj[property];
   });
 };