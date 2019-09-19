<?php

namespace App\Exports;

use App\Register;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class RegistersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Register::all();
    }
    public function headings(): array
    {
        return [
            '#',
            'FirstName',
            'LastName',
            'Created at',
            'Updated at'
        ];
    }
}
