<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nominees extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $nominees = [
            [
                'category' => 'Best Author – Military SciFi Short Story',
                'nominee'  => 'Yes! Yes! Yes!  By Lily Velden'
            ],
            [
                'category' => 'Best Author – Military SciFi Short Story',
                'nominee'  => 'Blue Knight by Carol Pedroso'
            ],
            [
                'category' => 'Best Author – Military SciFi Short Story',
                'nominee'  => 'Horus Heresey #31 by Graham McNeill'
            ],
            [
                'category' => 'Best Author – Military SciFi Short Story',
                'nominee'  => 'Raider Captured by J.J. Lore'
            ],
            [
                'category' => 'Best Author – Military SciFi Short Story',
                'nominee'  => 'F.I.S.T.S. #2 by Bey Deckard'
            ],
            [
                'category' => 'Best Author – Military Fantasy Short Story',
                'nominee'  => 'Royal Guardian by Jo Tannah'
            ],
            [
                'category' => 'Best Author – Military Fantasy Short Story',
                'nominee'  => 'The Way Home by Linda Nagata'
            ],
            [
                'category' => 'Best Author – Military Fantasy Short Story',
                'nominee'  => 'Rules of Enchantment by David Klecha and Tobias S. Buckell'
            ],
            [
                'category' => 'Best Author – Military Fantasy Short Story',
                'nominee'  => 'Wrong Place, Wrong Time by Joe Abercrombie'
            ],
            [
                'category' => 'Best Author – Military Fantasy Short Story',
                'nominee'  => 'Look at Me Now by Sarah Norman'
            ],
            [
                'category' => 'Best Author – Military SciFi Novella',
                'nominee'  => 'Gypsy by Carter Scholz'
            ],
            [
                'category' => 'Best Author – Military SciFi Novella',
                'nominee'  => 'Perry Rhodan Lemuria 1: Ark of the Stars'
            ],
            [
                'category' => 'Best Author – Military SciFi Novella',
                'nominee'  => 'Riding Redemption: A 47th Lancers Novella by Jolie Mason'
            ],
            [
                'category' => 'Best Author – Military SciFi Novella',
                'nominee'  => 'Burnside’s Killer by Timothy Ellis'
            ],
            [
                'category' => 'Best Author – Military SciFi Novella',
                'nominee'  => 'Draxius Redeemed: A Gateway Novella by Brian Dorsey'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novella',
                'nominee'  => 'Tallaran: Ironclad by John French'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novella',
                'nominee'  => 'Such a Clever Deception: A Stolen Tear Prequel by Courtney Pearson'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novella',
                'nominee'  => 'Tiger’s Paw: A Novella by Kimberly A. Rogers'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novella',
                'nominee'  => 'Bounty Hunter: A Novella by Samantha Harvey'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novella',
                'nominee'  => 'We Walk In Darkness: A Spell Weaver Novella by Bill Hiatt'
            ],
            [
                'category' => 'Best Author – Military SciFi Novel',
                'nominee'  => 'Doc Savage: The Flight into Fear by Kenneth Robeson'
            ],
            [
                'category' => 'Best Author – Military SciFi Novel',
                'nominee'  => 'Angles of Attack by Marko Kloos'
            ],
            [
                'category' => 'Best Author – Military SciFi Novel',
                'nominee'  => 'Oncoming Storm by Christopher Nuttall'
            ],
            [
                'category' => 'Best Author – Military SciFi Novel',
                'nominee'  => 'Warship by Joshua Dalzelle'
            ],
            [
                'category' => 'Best Author – Military SciFi Novel',
                'nominee'  => 'Starship Eternal by M.R. Forbes'
            ],
            [
                'category' => 'Best Author – Military SciFi Novel',
                'nominee'  => 'King of Thieves by Evan C. Currie'
            ],
            [
                'category' => 'Best Author – Military SciFi Novel',
                'nominee'  => 'An Ancient Peace by Tanya Huff'
            ],
            [
                'category' => 'Best Author – Military SciFi Novel',
                'nominee'  => 'The End of All Things by John Scalzi'
            ],
            [
                'category' => 'Best Author – Military SciFi Novel',
                'nominee'  => 'Nemesis Games by James S.A. Corey'
            ],
            [
                'category' => 'Best Author – Military SciFi Novel',
                'nominee'  => 'The Tide of War by Lori Witt'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novel',
                'nominee'  => 'Cold Iron by Stina Leicht'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novel',
                'nominee'  => 'Clash of Eagles by Alan Smale'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novel',
                'nominee'  => 'Son of the Black Sword by Larry Correia'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novel',
                'nominee'  => 'Lord of Ashes by Richard Ford'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novel',
                'nominee'  => 'The Dinosaur Lords by Victor Milan'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novel',
                'nominee'  => 'Those Above by Daniel Polansky'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novel',
                'nominee'  => 'A Crown for Cold Silver by Alex Marshall'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novel',
                'nominee'  => 'Guns of the Dawn by Adrian Tchaikovsky'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novel',
                'nominee'  => 'The Astronaut’s Windlass by Jim Butcher'
            ],
            [
                'category' => 'Best Author – Military Fantasy Novel',
                'nominee'  => 'The Price of Valor by Django Wexler'
            ],
        ];

        foreach($nominees as $nominee) {
            Nominee::create($nominee);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }

}
