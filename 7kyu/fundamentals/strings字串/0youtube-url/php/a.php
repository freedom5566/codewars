<?php

// 我都忘記我怎麼想到這種解的......
function makeYoutubeLink(string $url): string {

    if(strpos($url,'=') !==false){
      return 'https://www.youtube.com/embed/'.substr($url,strpos($url,'=')+1);
    } else {
      return 'https://www.youtube.com/embed/'.substr(strrchr($url, "/"), 1);
    }
}
  
function makeYoutubeLink(string $str): string {
    preg_match('/[a-zA-Z0-9]+$/', $str, $end);
    return 'https://www.youtube.com/embed/' . $end[0];
}  