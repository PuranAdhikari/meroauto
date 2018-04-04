<?php

namespace App\Observers;

class RecordFingerPrintObserver
{

    protected $userID;

    public function __construct()
    {
        $this->userID = \Auth::id();
    }

    public function updating($model)
    {
        $model->updated_by = $this->userID;
    }

    public function updated($model)
    {
        $model->updated_by = $this->userID;
    }


    public function creating($model)
    {
        $model->created_by = $this->userID;
    }

    public function created($model)
    {
        $model->created_by = $this->userID;
    }


    public function deleting($model)
    {
        $model->deleted_by = $this->userID;
    }

    public function deleted($model)
    {
        $model->deleted_by = $this->userID;
    }
}