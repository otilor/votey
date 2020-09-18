<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;

class CreateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create different roles for the application e.g "student", "admin"';

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
     * @return int
     */
    public function handle()
    {
        Role::create(['name'=>'student']);
        Role::create(['name' => 'admin']);

        // This should have been a status as in contestant
        // as it can be easily revoked.
        Role::create(['name' => 'contestant']);
    }
}
