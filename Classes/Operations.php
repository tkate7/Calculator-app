<?php

    class Operations {
        
        private $operator;
        private $first;
        private $second;
        
        public function __construct (string $operator, int $first, int $second) {
            
            $this->operator = $operator;
            $this->first = $first;
            $this->second = $second;
        }
        
        public function calculate () {
            
            if (isset($_POST['calculate'])) {
                
                if ($_POST['operator'] == 'add') {
                    
                    return '<h3>The result for the given value is<h3>' . $this->first + $this->second;
                }
                
                else if ($_POST['operator'] == 'sub') {
                    
                    return '<h3>The result for the given value is<h3>' . $this->first - $this->second;
                }
                
                else if ($_POST['operator'] == 'div'){
                    
                    return '<h3>The result for the given value is<h3>' . $this->first / $this->second;
                }
                
                else if ($_POST['operator'] == 'mult') {
                    
                    return '<h3>The result for the given value is<h3>' . $this->first * $this->second;
                }
            }
        }
    }