<?php

    namespace RandomQuotes;

    class RandomQuotes {

    public function getRandomQuotes() {

        //Get the list of quotes.
        $quotes = file_get_contents('C:\Users\ADMIN\Desktop\PHP-random-quotes-generator\src\inc\quotes.json');
        //Convert the JSON document into a PHP array.
        $quotes = json_decode( $quotes, true );
        //Get a random index number.
        $index = mt_rand( 0, count( $quotes ) );
        //Return the random quote.
        return $quotes [ $index ];
    }

        public function generate() {

            return $this->getRandomQuotes();

        }
    }
