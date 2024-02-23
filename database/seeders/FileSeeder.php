<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\File;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        File::create([
            'title' => 'Sample File 1',
            'file_path' => '1708667781_uas tisi.docx',
            'author' => 'John Doe',
        ]);
        
        File::create([
            'title' => 'Sample File 2',
            'file_path' => '1708667781_uas tisi.docx',
            'author' => 'Jane Smith',
        ]);
        
        // Add more seed data if needed
        
    }
}
