<?php
namespace App\Http\Controllers;
use App\Entities\SpecialtyDirection;
use App\Entities\Universities;
use App\Entities\UniversityJoinSpecialty;
use App\Entities\UniversityQualification;
use App\Entities\UniversitySpecialty;
use App\Entities\UniversitySubject;
use Illuminate\Http\Request;

class UniversitySpecialtyController extends Controller
{
    public function Specialty(){
        $ObjSpecialty = new UniversitySpecialty();
        $specialities = $ObjSpecialty->get();
        $qualifications = UniversitySpecialty::with('qualification')->get();
        $directions = UniversitySpecialty::with('direction')->get();
        $subjects = UniversitySpecialty::with('subject')->get();
        $universities = UniversitySpecialty::with('university')->get();
        return view('admin.specialty',
            [
                'specialities' => $specialities,
                'qualifications' => $qualifications,
                'directions' => $directions,
                'subjects' => $subjects,
                'universities' => $universities,
            ]);
    }
    public function AddSpecialty(){
        $ObjUniversity = new Universities();
        $ObjQualification = new UniversityQualification();
        $ObjSubject = new UniversitySubject();
        $ObjDirection = new SpecialtyDirection();
        $universities = $ObjUniversity->get();
        $qualifications = $ObjQualification->get();
        $subjects = $ObjSubject->get();
        $direction = $ObjDirection->get();
        return view('admin.add_specialty',
            [
                'universities' => $universities,
                'qualifications' => $qualifications,
                'subjects' => $subjects,
                'direction' => $direction,
            ]);
    }
    public function AddRequestSpecialty(Request $request){

        $objSpecialty = new UniversitySpecialty();
        $objUniversity_Specialty = new UniversityJoinSpecialty();

        $objSpecialty = $objSpecialty ->create([

            'specialty_name' => $request ->input('specialty_name'),
            'specialty_cipher' => $request ->input('specialty_cipher'),
            'direction_id' => $request ->input('specialty_direction'),
            'qualification_id' => $request ->input('specialty_qualification'),
            'subject_id' => $request ->input('subjects'),

        ]);


        if($objSpecialty){
            foreach($request->input('university_id') as $university_id){
                $university_id = (int)$university_id;
                $objUniversity_Specialty = $objUniversity_Specialty->create([
                    'university_id' => $university_id,
                    'specialty_id'  => $objSpecialty->id
                ]);
            }
            return redirect(route('admin_specialty'))->with('success','Специальность успешно добавлена');
        }

        return back()->with('error','Не удалось добавить специальность');

    }
}