<?php

use Aracademia\Dbbackup\Dbbackup;

class SettingsController extends \BaseController
{
    protected $layout = "public.layout.default";
    /**
     * @var
     */
    private $dbBackup;

    /**
     * @param Dbbackup $dbBackup
     */
    public function __construct(Dbbackup $dbBackup)
    {

        $this->dbBackup = $dbBackup;
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

}
