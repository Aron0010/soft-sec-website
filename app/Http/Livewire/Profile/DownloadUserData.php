<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Spatie\PersonalDataExport\Jobs\CreatePersonalDataExportJob;

class DownloadUserData extends Component
{
    public function downloadUserData()
    {
        dispatch(new CreatePersonalDataExportJob(auth()->user()));
    }

    public function render()
    {
        return view('livewire.profile.download-user-data');
    }
}
