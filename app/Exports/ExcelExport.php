<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;

class ExcelExport implements FromCollection, WithMapping, WithHeadings, WithStyles, WithColumnWidths
{
    protected $data;
    private $row = 0;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return $this->data;
    }

    public function map($data): array
    {
        return [
            ++$this->row,
            $data->periode,
            $data->id_no,
            $data->nama_lengkap,
            $data->divisi,
            $data->created_at,
            $data->updated_at,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'DATA CALON ANGGOTA KOPASUS IT',
            ],
            [' '],
            [
                'No',
                'Periode',
                'No Pendaftaran',
                'Nama',
                'Divisi',
                'Created',
                'Updated',
            ],
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('A3:J3')->getFont()->setBold(true);
        $sheet->mergeCells('A1:J1');
        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center');
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 10,
            'C' => 15,
            'D' => 50,
            'E' => 12,
            'F' => 40,
            'G' => 40,
            'H' => 12,
            'I' => 12,
            'J' => 12,
        ];
    }
}