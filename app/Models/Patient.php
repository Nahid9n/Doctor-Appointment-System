<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    private static $patient,$image,$imageName,$directory,$extension,$imageUrl;
    private static function getImage($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'uploads/doctor/doctors/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newPatient($request){
        self::$patient = new Patient();
        self::$patient->name = $request->name;
        self::$patient->age = $request->age;
        self::$patient->email = $request->email;
        self::$patient->mobile = $request->mobile;
        self::$patient->image = $request->file('image') ? self::getImage($request):'';
        self::$patient->gender = $request->gender;
        self::$patient->department_id = $request->department_id;
        self::$patient->date = $request->date;
        self::$patient->address = $request->address;
        self::$patient->time = $request->time;
        self::$patient->status = $request->status;
        self::$patient->save();
    }
    public static function updatePatient($request,$id){
        self::$patient = Patient::find($id);
        self::$imageUrl = $request->file('image') ? self::getImage($request):'';
        if ($request->file('image')){
            if (file_exists(self::$patient->image)){
                unlink(self::$patient->image);
            }
            self::$patient->image = self::$imageUrl;
        }
        self::$patient->name = $request->name;
        self::$patient->age = $request->age;
        self::$patient->email = $request->email;
        self::$patient->mobile = $request->mobile;
        self::$patient->department_id = $request->department_id;
        self::$patient->gender = $request->gender;
        self::$patient->date = $request->date;
        self::$patient->address = $request->address;
        self::$patient->time = $request->time;
        self::$patient->status = $request->status;
        self::$patient->save();
    }
    public static function deletePatient($id){
        self::$patient = Patient::find($id);
        if (file_exists(self::$patient->image)){
            unlink(self::$patient->image);
        }
        self::$patient->delete();
    }
    public function department(){
        return $this->belongsTo(DoctorDepartment::class);
    }
}
