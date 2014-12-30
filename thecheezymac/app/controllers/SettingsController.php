<?php

use Aracademia\Dbbackup\Dbbackup;
use Protechmaster\Gtmetrix\GtmetrixScore;

class SettingsController extends \BaseController
{
    protected $layout = "public.layout.default";
    /**
     * @var
     */
    private $dbBackup;
    /**
     * @var GtmetrixScore
     */
    private $gtmetrixScore;

    /**
     * @param Dbbackup $dbBackup
     * @param GtmetrixScore $gtmetrixScore
     */
    public function __construct(Dbbackup $dbBackup, GtmetrixScore $gtmetrixScore)
    {

        $this->dbBackup = $dbBackup;
        $this->gtmetrixScore = $gtmetrixScore;
    }

    public function index()
    {
        $this->layout->content = View::make("private.settings");
    }

    public function DbBackup()
    {
        if($this->dbBackup->backup()== false)
        {
            return Redirect::to('/webadmin/settings')->withErrors('There was a technical issue. Please try again');
        }
        return Redirect::to('/webadmin/settings')->withSuccess('Database was backed up successfully');
    }

    public function performance()
    {

        $this->gtmetrixScore->test([
            'url'   =>  Config::get('app.url')
        ]);

        $this->gtmetrixScore->get_results();
        $results = $this->gtmetrixScore->results();


        $this->layout->content = View::make("private.settings", compact('results'));
    }

}
