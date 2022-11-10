<?php
declare(strict_types = 1);
namespace App;


class Payment
{
private PaymentStatus $status;
 public function updateStatus(
     PaymentStatus $status
 ): payment {
     $this->status = $status;

     return $this;
 }
 public function status():  PaymentStatus{
     return $this->status;
 }
}
