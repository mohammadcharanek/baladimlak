 function  doPriceSub(counter) { 
       var Qty; var price; var waslAmount; var bakiAmount;
       Qty=document.getElementsByClassName("qty")[counter].value;
	   price=document.getElementsByClassName("tPrice")[counter].value;
       waslAmount = document.getElementsByClassName("wasl")[counter].value;
       var mult=price*Qty;
       bakiAmount=(mult-waslAmount);
      document.getElementsByClassName("baki")[counter].value=bakiAmount;
    }