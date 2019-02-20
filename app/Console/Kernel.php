<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\data_penduduk;
use App\kode_area_dusun;


class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function () {
            $kode_area_dusuns=kode_area_dusun::all();


            for($i=1;$i<=$kode_area_dusuns->count();$i++){
            
            $data_penduduks=data_penduduk::where('id_dusun',$i)->get();

            foreach ($data_penduduks as $data_penduduk) {
                # code...
                $rumususia = Carbon\Carbon::now()->diffInDays($data_penduduk[0]->Tanggal_Lahir, false);
                $usia = (($rumususia/365)*-1);

                 data_penduduk::where('id_dusun',$i)->update([
                'Usia' => floor($usia)            
             ]);  
            }
        }
        })->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
