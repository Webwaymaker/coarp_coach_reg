<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {

//------------------------------------------------------------------------------
// Properties
//------------------------------------------------------------------------------

	protected $commands = [];


//------------------------------------------------------------------------------
// Protected Functions
//------------------------------------------------------------------------------

	// Schedule -----------------------------------------------------------------
	protected function schedule(Schedule $schedule) {

		$schedule->Call(function () {
			$path = public_path("cron_test.txt"); 
			$fp = fopen($path, "a");
				fwrite($fp, "CRON Job ran at " . date("Y-m-d H:i:s") . "\n");
			fclose($fp);
		})->everyMinute();

		$schedule->command('command:RunRegistrationReport')
					->timezone('America/Chicago')
					->at('01:00');

	}

	// Commands -----------------------------------------------------------------
	protected function commands() {
		$this->load(__DIR__.'/Commands');
		require base_path('routes/console.php');
	}


} //End of class
