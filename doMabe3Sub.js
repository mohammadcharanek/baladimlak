 function  doPriceSub(counter) { 
        var se3r; var se3rS; var si3rM; var mabe3Today;
       se3r=document.getElementsByClassName("se3r")[counter].value;
	   se3rS=document.getElementsByClassName("se3rS")[counter].value;
       si3rM = document.getElementsByClassName("si3rM")[counter].value;
	   mabe3Today = document.getElementsByClassName("mabe3Today")[counter].value;
       var mult=price*Qty;
       bakiAmount=(mult-waslAmount);
      document.getElementsByClassName("baki")[counter].value=bakiAmount;
    }