<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HBeamPiper extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
       $nominees = [
            [
                'category' => 'H. Beam Piper Memorial Award',
                'nominee'  => 'Angles of Attack by Marko Kloos'
            ],
            [
                'category' => 'H. Beam Piper Memorial Award',
                'nominee'  => 'Riding Redemption by Joile Mason'
            ],
            [
                'category' => 'H. Beam Piper Memorial Award',
                'nominee'  => 'Son of the Black Sword by Larry Correia'
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
		//
	}

}
