<?php

namespace App\Http\Helpers;

class Helpers
{
    public static function unsetEachPivot($photos)
    {
        $photos->each(function ($item) {
            unset($item->pivot);
        });
        return $photos;
    }
    public static function renameProperty($object, $oldName, $newName)
    {
        $object->$newName = $object->$oldName;
        unset($object->$oldName);
    }
    public static function attachAllWithPivot($modelObj, $ids, $pivotName)
    {
        foreach ($ids as $id) {
            $modelObj->$pivotName()->attach($id);
        }
    }
}
