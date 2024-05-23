function  doMath(counter) {
       var nValue1, nValue2, nValue3, nValue4, nValue5, nValue6, nValue7, nValue8, nValue9; var amount;
       var price1, price2, price3, price4, price5, price6, price7, price8, price9;
       var badlahP, badlahQ;
       nValue1 = document.getElementsByClassName("shi3arN")[counter].value;
       price1=document.getElementsByClassName("shi3ar")[counter].value;
       
        nValue2 = document.getElementsByClassName("rotbahN")[counter].value;
       price2=document.getElementsByClassName("rotbah")[counter].value;


 nValue3 = document.getElementsByClassName("splaytN")[counter].value;
       price3=document.getElementsByClassName("splayt")[counter].value;
       
       
 nValue4 = document.getElementsByClassName("kabou3N")[counter].value;
       price4=document.getElementsByClassName("kabou3")[counter].value;


 nValue5 = document.getElementsByClassName("law7aN")[counter].value;
       price5=document.getElementsByClassName("law7a")[counter].value;
       
       
 nValue6 = document.getElementsByClassName("yakaN")[counter].value;
       price6=document.getElementsByClassName("yaka")[counter].value;


 nValue7 = document.getElementsByClassName("waynakN")[counter].value;
       price7=document.getElementsByClassName("waynak")[counter].value;
       
       
 nValue8 = document.getElementsByClassName("notahN")[counter].value;
       price8=document.getElementsByClassName("notah")[counter].value;


 nValue9 = document.getElementsByClassName("kravtaN")[counter].value;
       price9=document.getElementsByClassName("kravta")[counter].value;
price=document.getElementsByClassName("price")[counter].value;
badlahQ=document.getElementsByClassName("bQty")[counter].value;
badlahP=price*badlahQ;
 

       amount=(nValue1*price1 + nValue2*price2 + nValue3*price3 + nValue4*price4 + nValue5*price5 + nValue6*price6 + nValue7*price7 + nValue8*price8 + nValue9*price9 + badlahP);
     
      vat_rate=document.getElementsByClassName("VAT")[counter].value;
      
var vat = amount/100*vat_rate;

var total = amount; 

var grandtotal = total + vat;

 document.getElementsByClassName("overallP")[counter].value=grandtotal ;

    }