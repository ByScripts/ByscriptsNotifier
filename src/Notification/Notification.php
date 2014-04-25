<?php


namespace Byscripts\Notifier\Notification;

class Notification
{
    private $successMessages = array();
    private $errorMessages = array();
    private $exceptions = array();

    static public function ensure(Notification &$notification = null)
    {
        if (null === $notification) {
            $notification = new Notification();
        }
    }

    public function addSuccessMessage($message)
    {
        $this->successMessages[] = $message;
    }

    public function addErrorMessage($message)
    {
        $this->errorMessages[] = $message;
    }

    public function hasSuccessMessage()
    {
        return !empty($this->successMessages);
    }

    public function hasErrorMessage()
    {
        return !empty($this->errorMessages);
    }

    public function hasMessage()
    {
        return $this->hasSuccessMessage() || $this->hasErrorMessage();
    }

    public function addException(\Exception $exception)
    {
        $this->exceptions[] = $exception;
        $this->addErrorMessage($exception->getMessage());
    }

    public function getSuccessMessages()
    {
        return $this->successMessages;
    }

    public function getErrorMessages()
    {
        return $this->errorMessages;
    }
}