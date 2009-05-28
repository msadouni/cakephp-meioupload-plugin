<?php

class MeioUploadAppModel extends AppModel
{
    function invalidate($field, $value = true)
    {
        parent::invalidate($field, __d('meio_upload', $value, true));
    }
}