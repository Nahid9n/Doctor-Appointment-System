<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    private static $doctor,$image,$imageName,$directory,$extension,$imageUrl;
    private static function getImage($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'uploads/doctor/doctors/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newDoctor($request){
        self::$doctor = new Doctor();
        self::$doctor->first_name = $request->first_name;
        self::$doctor->last_name = $request->last_name;
        self::$doctor->email = $request->email;
        self::$doctor->phone = $request->phone;
        self::$doctor->image = $request->file('image') ? self::getImage($request):'';
        self::$doctor->department_id = $request->department_id;
        self::$doctor->gender = $request->gender;
        self::$doctor->experience = $request->experience;
        self::$doctor->facebook = $request->facebook;
        self::$doctor->instagram = $request->instagram;
        self::$doctor->linkedIn = $request->linkedIn;
        self::$doctor->twitter = $request->twitter;
        self::$doctor->bio_data = $request->bio_data;
        self::$doctor->status = $request->status;
        self::$doctor->save();
    }
    public static function updateDoctor($request,$id){
        self::$doctor = Doctor::find($id);
        self::$imageUrl = $request->file('image') ? self::getImage($request):'';
        if ($request->file('image')){
            if (file_exists(self::$doctor->image)){
                unlink(self::$doctor->image);
            }
            self::$doctor->image = self::$imageUrl;
        }
        self::$doctor->first_name = $request->first_name;
        self::$doctor->last_name = $request->last_name;
        self::$doctor->email = $request->email;
        self::$doctor->phone = $request->phone;
        self::$doctor->department_id = $request->department_id;
        self::$doctor->gender = $request->gender;
        self::$doctor->experience = $request->experience;
        self::$doctor->facebook = $request->facebook;
        self::$doctor->instagram = $request->instagram;
        self::$doctor->linkedIn = $request->linkedIn;
        self::$doctor->twitter = $request->twitter;
        self::$doctor->bio_data = $request->bio_data;
        self::$doctor->status = $request->status;
        self::$doctor->save();
    }
    public static function deleteDoctor($id){
        self::$doctor = Doctor::find($id);
        if (file_exists(self::$doctor->image)){
            unlink(self::$doctor->image);
        }
        self::$doctor->delete();
    }
    public function department(){
        return $this->belongsTo(DoctorDepartment::class);
    }
}
