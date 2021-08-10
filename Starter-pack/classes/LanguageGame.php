<?php

class LanguageGame
{
    private array $words;
    // public Word $randomWord;
    public string $randomWord;

    public function __construct()
    {
        $this->words = Data::words();
        // var_dump($this->words);
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // TODO: create instances of the Word class to be added to the words array
        // $word = new Word();  
        // var_dump($word); // object(Word)#2 (0) { } object(Word)#3 (0) { } 

        $this->word = new Word($frenchTranslation, $englishTranslation);

        // var_dump($this->word); // object(Word)#2 (0) { } object(Word)#3 (0) { }
        }
        // $this->words[] = $this->word; // Alternatively
        array_push($this->words, $this->word);

        // ! ERROR, an extra empty object 
        // var_dump($this->words); // array(9) { ["pain"]=> string(5) "bread" [
    }

    public function run()
    {
        // TODO: check for option A or B

        // Option A: user visits site first time (or wants a new word)
        // select a random word for the user to translate
        // array_rand — Pick one or more random keys out of an array
        $randomWord = array_rand($this->words);
        // var_dump($randomWord);


        echo $randomWord;
        echo "<br/>";

        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        // get the value using the key-word chosen
        // $array[$key];

        echo $this->words[$randomWord];
        

        // TODO: generate a message for the user that can be shown
    

        // TODO: add the random word value
    }
}