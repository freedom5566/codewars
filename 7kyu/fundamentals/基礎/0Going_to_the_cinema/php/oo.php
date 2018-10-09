<?php
function movie($card, $ticket, $percentage) {
    $calculator = new Calculator($card, $ticket, $percentage);
    return $calculator->calculateVisitsToBreakEven();
}

class Calculator
{
    private $card_price;
    private $ticket_price;
    private $last_ticket_price_with_card;
    private $percentage;
    
    private $visits;
    private $amount_spent_with_card;
    private $amount_spent_without_card = 0;
    
    public function __construct($card_price, $ticket_price, $percentage)
    {
        $this->card_price = $card_price;
        $this->ticket_price = $ticket_price;
        $this->last_ticket_price_with_card = $ticket_price;
        $this->percentage = $percentage;
        
        $this->amount_spent_without_card = 0;
        $this->amount_spent_with_card = $this->card_price;
    }
    
    public function calculateVisitsToBreakEven()
    {
        return $this->goToTheCinema();
    }
    
    private function goToTheCinema()
    {
        $this->visits += 1;
        
        $this->amount_spent_with_card += $this->getTicketPriceWithCard();
        $this->amount_spent_without_card += $this->ticket_price;
        
        if (ceil($this->amount_spent_with_card) < $this->amount_spent_without_card) {
            return $this->visits;
        } else {
            return $this->goToTheCinema();
        }
    }
    
    private function getTicketPriceWithCard()
    {
        $this->last_ticket_price_with_card *= $this->percentage;
        return $this->last_ticket_price_with_card;
    }
}