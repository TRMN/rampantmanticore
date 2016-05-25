<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class export extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'export';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export the voting record.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function fire()
    {
        $nominees = [];

        foreach (Nominee::orderBy('category')->get(['category', 'nominee']) as $nominee) {
            $nominees[$nominee->id] = $nominee->toArray();
            unset( $nominees[$nominee->id]['_id'] );
        }

        $votes = Vote::all();

        $out = "Name,RMN Number,";

        foreach ($nominees as $nominee) {
            $out .= '"' . $nominee['category'] . ' ' . $nominee['nominee'] . '",';
        }

        $out = rtrim($out, ',') . "\n";

        foreach ($votes as $vote) {
            $member = User::find($vote->member);

            $line = $member->getFullName() . ',' . $member->member_id . ',';

            foreach ($nominees as $id => $nominee) {
                $line .= $vote->votes[$id] . ',';
            }

            $out .= rtrim($line, ',') . "\n";

        }
        print $out;
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }

}
