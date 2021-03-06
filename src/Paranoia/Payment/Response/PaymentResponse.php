<?php
namespace Paranoia\Payment\Response;

class PaymentResponse extends ResponseAbstract implements ResponseInterface
{
    private $mdStatus;
    private $data;

    public function setMdStatus($mdStatus)
    {
        $this->mdStatus = $mdStatus;
        return $this;
    }

    public function getMdStatus()
    {
        return $this->mdStatus;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }
}
