<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorDepartment extends Model
{
    use HasFactory;
    private static $department,$banner,$bannerName,$bannerUrl,$directory,$extension;
    private static function getBanner($request){
        self::$banner = $request->file('banner');
        self::$extension = self::$banner->getClientOriginalExtension();
        self::$bannerName = time().'.'.self::$extension;
        self::$directory = 'uploads/doctor/department/';
        self::$banner->move(self::$directory,self::$bannerName);
        self::$bannerUrl = self::$directory.self::$bannerName;
        return self::$bannerUrl;
    }
    public static function newDepartment($request){
        self::$department = new DoctorDepartment();
        self::$department->name = $request->name;
        self::$department->banner = $request->file('banner') ? self::getBanner($request):'';
        self::$department->status = $request->status;
        self::$department->save();
    }
    public static function updateDepartment($request,$id){
        self::$department = DoctorDepartment::find($id);
        self::$department->name = $request->name;
        self::$bannerUrl = $request->file('banner') ? self::getBanner($request):'';
        if ($request->file('banner')){
            if (file_exists(self::$department->banner)){
                unlink(self::$department->banner);
            }
            self::$department->banner = self::$bannerUrl;
        }
        self::$department->status = $request->status;
        self::$department->save();
    }
    public static function deleteDepartment($id){
        self::$department = DoctorDepartment::find($id);
        if (file_exists(self::$department->banner)){
            unlink(self::$department->banner);
        }
        self::$department->delete();
    }
    public function doctor(){
        return $this->hasMany(Doctor::class);
    }

}
