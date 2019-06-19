<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BooksRepository;

class LandingController
{
    /**
     * @Route("/roll")
     */
    public function number(BooksRepository $book)
    {
        $data = $book->get();

        print_r($data[0]->getBookName());die;
    }
}

?>
