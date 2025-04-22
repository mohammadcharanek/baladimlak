       function GetOptionSelected(counter){

  var selectBox = document.getElementsByClassName("naw3al3amalValues"),
      option = selectBox.options[selectBox.selectedIndex];

  document.getElementsByClassName("optionSelected").value = option.text;
}
window.load=function(){};