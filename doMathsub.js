 function  doMathsub(counter) {
       var inAmount; var amount;
       var price;
	   price=document.getElementsByClassName("overallP")[counter].value;
       inAmount = document.getElementsByClassName("wasl")[counter].value;
       amount=(price-inAmount);
       document.getElementsByClassName("baki")[counter].value=amount ;
    }
