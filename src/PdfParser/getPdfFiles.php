<?php 
class GetPdfFiles
{
    public function getPdfFiles(){
        $pdfFiles = '';
        if (!file_exists('Data')) {
            throw new Exception('PDF files already exist in the Data folder.');
        }
        $files = scandir('pdfs');
        $pdfFiles = [];
        foreach($files as $file){
            if(pathinfo($file, PATHINFO_EXTENSION) == 'pdf'){
                $pdfFiles[] = $file;
            }
        }
        return $pdfFiles;
    }
}