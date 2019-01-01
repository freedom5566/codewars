<?php

//我的答案

function countWins($winnerList, $country) {
    $list = array_count_values(array_column($winnerList,'country'));
    if(array_key_exists($country,$list)) return $list[$country];
    else return 0;
}
  
// best
function countWins($winnerList, $country) {
    return count(array_filter($winnerList, function($v)use (&$country){return $v['country'] == $country;}));
}
// oop
function countWins($winnerList, $country) {
    return WList::load($winnerList)->countWinnersByCountry($country);
 }
 
 
 class WList {
  protected $items;
  
  protected function addItem($item) {
    $this->items[] = $item;
  }
  
  public static function load($array) {
    $instance = new self();
    foreach($array as $item) {
      $instance->addItem(ListItemFactory::build($item));
    }
    
    return $instance;
  }
  
  public function countWinnersByCountry($country) {
    $wonByCountry = function($carry, $item) use ($country) {
       if ($item->country == $country) $carry++;
       
       return $carry;
    };
    $wons = array_reduce($this->items, $wonByCountry);
 
    return $wons;
  }
 }
 
 class ListItem {
   public $season;
   public $team;
   public $country;
   
   public function __construct($season, $team, $country){
      $this->season = $season;
      $this->team = $team;
      $this->country = $country;
   }
 }
 
 class ListItemFactory {
   public static function build(array $data) {
     return new ListItem($data['season'], $data['team'], $data['country']);
   }
 }
