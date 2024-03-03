<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static $student,$image,$imageNewName,$directory,$imageUrl;

    public static function newStudent($request)
    {
        self::$student                    = new Student();
        self::$student->name              = $request->name;
        self::$student->student_id        = $request->student_id;
        self::$student->batch             = $request->batch;
        self::$student->image             = self::saveImage($request);
        self::$student->save();
    }

    public static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = 'stu-'.rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'asset/student-image/';
        self::$imageUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imageUrl;
    }

    public static function updateStudent($request, $student)
    {
        $student->name              = $request->name;
        $student->student_id        = $request->student_id;
        $student->batch             = $request->batch;

        if ($request->file('image'))
        {
            if ($student->image)
            {
                if (file_exists($student->image))
                {
                    unlink($student->image);
                    $student->image = self::saveImage($request);
                }

            }
            else
            {
                $student->image = self::saveImage($request);
            }
        }


        $student->save();
    }

}
