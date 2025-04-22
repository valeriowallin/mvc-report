<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyControllerJson
{
  #[Route("/api/lucky/number")]
  public function jsonNumber(): Response
  {
      $number = random_int(0, 100);

      $data = [
          'lucky-number' => $number,
          'lucky-message' => 'Hi there!',
      ];

      return new JsonResponse($data);
  }
  #[Route("/api/quote")]
  public function apiQuote(): Response
  {
      $number = random_int(0, 100);
      $quotes = [
        "Just one small positive thought in the morning can change your whole day.",
        "Programming isn't about what you know; it's about what you can figure out.",
        "The only way to learn a new programming language is by writing programs in it."
      ];
      $day = date('j');
      $todaysDate = date('Y-m-d');
      $created = time();
      $quote = $day % count($quotes);
      $data = [
          'quote-of-the-day' => $quotes[$quote],
          'todays-date' => $todaysDate,
          'created' => $created
      ];

      return new JsonResponse($data);
  }
}
