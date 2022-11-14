<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class UploadService {
    private $params;
    public function __construct(ParameterBagInterface $params) {
        $this->params = $params;
    }
    public function upload(UploadedFile $file, $place) {
        $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_BASENAME);
        $cleanFileName = strtolower(str_replace(" ", "", $fileName));
        try {
            $file->move($this->getTargetDirectory($place), $cleanFileName);
        }
        catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }
        return $cleanFileName;
    }

    public function getTargetDirectory($place) {
        return $this->params->get('kernel.project_dir') . '/public/assets/images/' . $place;
    }

}
