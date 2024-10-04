<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class PlayHangman extends Command
{
    protected $signature = 'play:hangman';
    protected $description = 'Play a game of Hangman';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        do {
            $this->line("Welcome to Hangman!");
            $secretWord = strtolower($this->ask("Player 1: Please enter the secret word"));
            $secretWordArray = str_split($secretWord);

            system('clear');

            $guessedLetters = [];
            $attempts = 0;
            $maxAttempts = 6;
            $guessedWordArray = array_fill(0, count($secretWordArray), '_');
            

            while ($attempts < $maxAttempts && implode('', $guessedWordArray) != $secretWord) {
                $this->info("Current word: " . implode(' ', $guessedWordArray));
                $this->info("Attempts remaining: " . ($maxAttempts - $attempts));
                $letter = strtolower($this->ask("Player 2: Guess a letter"));

                if (in_array($letter, $guessedLetters)) {
                    $this->warn("You've already guessed that letter.");
                    continue;
                }

                $guessedLetters[] = $letter;

                if (in_array($letter, $secretWordArray)) {
                    foreach ($secretWordArray as $index => $char) {
                        if ($char === $letter) {
                            $guessedWordArray[$index] = $letter;
                        }
                    }
                    $this->info("Good guess!");
                } else {
                    $attempts++;
                    $this->warn("Incorrect guess!");
                }
            }


            if (implode('', $guessedWordArray) === $secretWord) {
                $this->info("Congratulations! You guessed the word: $secretWord");
                $gameResult = "won";
            } else {
                $this->warn("Sorry! The man is hanged. The correct word was: $secretWord");
                $gameResult = "lost";
            }


            $logEntry = "Secret word: $secretWord, Result: $gameResult, Guessed letters: " . implode(', ', $guessedLetters) . "\n";
            Storage::append('hangman.log', $logEntry);


            $restart = $this->confirm("Do you want to restart the game?");
        } while ($restart);

        return 0;
    }
}
