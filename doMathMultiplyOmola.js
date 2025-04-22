    function doMathMultiplyOmola(){
        var initialOmolaVal=0; 
    var finalOmolaVal=0;
       var qtyValue=0;
       var qtyOverallValue=0;
       var mult;
	   initialOmolaVal=document.getElementById("txtInput").value;
       qtyValue = document.getElementById("qty").value;
       qtyOverallValue = document.getElementById("bQty").value;
       mult=qtyValue*qtyOverallValue;
       finalOmolaVal=initialOmolaVal*mult;
       
       document.getElementById("txtInput2").value=finalOmolaVal;
    }