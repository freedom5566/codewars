<?php
function validateNumber($str){
  $str = str_replace('-', '', $str);
  if (strlen($str)<11) return 'Plenty more fish in the sea';
  if(substr($str,0,3) === '+44'){
    if(strlen($str)-3 === 10) return 'In with a chance';
    else return 'Plenty more fish in the sea';
  }
  if(substr($str,0,2) === '07'){
    if(strlen($str)>11) return 'Plenty more fish in the sea';
    else return 'In with a chance';
  }
  return 'Plenty more fish in the sea';
}
function validateNumber($str){
    return preg_match('~\A(\+44|0)7(-*[0-9]){9}\z~', $str) ? 'In with a chance' : 'Plenty more fish in the sea';
}
function validateNumber($str){

    return preg_match("/^((07\d{9})|(\+44\d{10}))$/", str_replace("-", "", $str))
       ? "In with a chance" : 'Plenty more fish in the sea';
  }