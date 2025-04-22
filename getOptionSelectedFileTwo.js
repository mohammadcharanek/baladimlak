       function GetOptionSelected(counter){

  var selectBox = document.getElementsByClassName("naw3al3amalValue"),
      option = selectBox.options[selectBox.text];

  document.getElementsByClassName("optionSelected").value = option.text;
}
window.load=function(){};