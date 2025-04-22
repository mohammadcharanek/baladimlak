function  doMath() { 
       var nValue1, nValue2, nValue3, nValue4, nValue5, nValue6, nValue7, nValue8, nValue9; var amount;
       var price1, price2, price3, price4, price5, price6, price7, price8, price9;
       var badlahP, badlahQ;
       nValue1 = document.getElementById("shi3arN").value;
       price1=document.getElementById("shi3ar").value;
       
        nValue2 = document.getElementById("rotbahN").value;
       price2=document.getElementById("rotbah").value;


 nValue3 = document.getElementById("splaytN").value;
       price3=document.getElementById("splayt").value;
       
       
 nValue4 = document.getElementById("kabou3N").value;
       price4=document.getElementById("kabou3").value;


 nValue5 = document.getElementById("law7aN").value;
       price5=document.getElementById("law7a").value;
       
       
 nValue6 = document.getElementById("yakaN").value;
       price6=document.getElementById("yaka").value;


 nValue7 = document.getElementById("waynakN").value;
       price7=document.getElementById("waynak").value;
       
       
 nValue8 = document.getElementById("notahN").value;
       price8=document.getElementById("notah").value;


 nValue9 = document.getElementById("kravtaN").value;
       price9=document.getElementById("kravta").value;
price=document.getElementById("price").value;
badlahQ=document.getElementById("qty").value;
badlahP=price*badlahQ;
       amount=(nValue1*price1 + nValue2*price2 + nValue3*price3 + nValue4*price4 + nValue5*price5 + nValue6*price6 + nValue7*price7 + nValue8*price8 + nValue9*price9 + badlahP);
       document.getElementById("overallP").value=amount ;
    }
    function  doMathsub(){ 
       var inAmount; var amount;
       var price;
	   price=document.getElementById("overallP").value;
       inAmount = document.getElementById("wasl").value;
       amount=(price-inAmount);
       document.getElementById("baki").value=amount ;
    }