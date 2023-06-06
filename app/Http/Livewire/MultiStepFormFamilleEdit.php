<?php

namespace App\Http\Livewire;

use App\Models\Annonce;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MultiStepFormFamilleEdit extends Component
{

    public $child_baby;
    public $child_kid;
    public $child_boy;
    public $type_of_employment;
    public $expected_start_date;
    public $day_off;
    public $accommodation;
    public $living_arrangement;
    public $helper_nationality;
    public $gender;
    public $education_level;
    public $contract_situation;
    public $monthly_salary;
    public $currency_coin;
///////////////////////////
    public $title_of_offer;
    public $define_needs;
    public $address;
    public $country;
    public $religion;
    public $phone;
    // public $status;
    public $city;
    public $domain;
    public $child;
    public $social_status;
   
    public $totalSteps =4;
    public $currentStep = 1;
    public $id_annonce ;
 
    public function edit(){
        $this->id_annonce=session()->get('id_annonce');
        $annonce_old = Annonce::where('id',$this->id_annonce)->first();
        $this->helper_nationality =$annonce_old->helper_nationality ;
        $this->gender = $annonce_old->gender;
        $this->religion = $annonce_old->religion;
       $this->education_level =$annonce_old->education_level;
       $this->contract_situation = $annonce_old->contract_situation;
       $this->monthly_salary = $annonce_old->monthly_salary;
       $this->currency_coin =$annonce_old->currency_coin;
      
        $this->define_needs = $annonce_old->define_needs;
        $this->title_of_offer = $annonce_old->title_of_offer;
        $this->address = $annonce_old->address;
        $this->phone = $annonce_old->phone;
        $this->country = $annonce_old->country;
        $this->child_baby =$annonce_old->child_baby;
        $this->child_kid = $annonce_old->child_kid;
        $this->child_boy = $annonce_old->child_boy;
        $this->type_of_employment = $annonce_old->type_of_employment;
        $this->living_arrangement =$annonce_old->living_arrangement;
        $this->accommodation = $annonce_old->accommodation;
        $this->day_off = $annonce_old->day_off;
        $this->expected_start_date = $annonce_old->expected_start_date;
    }
    public function mount(){
        $this->currentStep = 1;
        $this->edit();
        $this->id_annonce=session()->get('id_annonce');
         session()->forget('id_annonce');
        // $this->push('scripts', view('livewire.component'));
    }


    
    public function render()
    {
        return view('livewire.multi-step-form-famille-edit');
    }
    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){

        // if($this->currentStep == 1){
        //     $this->validate([
        //         'first_name'=>'required|string',
        //         'last_name'=>'required|string',
        //         'social_status'=>'required',
        //         'child'=>'required'
        //     ]);
        // }
         if($this->currentStep == 1){
            $this->validate([
                'child_baby'=>'required',
                'child_kid'=>'required',
                'child_boy'=>'required',
                'type_of_employment'=>'required'
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'living_arrangement'=>'required',
                 'accommodation'=>'required',
                 'day_off'=>'required',
                 'expected_start_date'=>'required'
              ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                  'title_of_offer'=>'required|min:30|max:60',
                  'define_needs'=>'required|min:200',
                  'country'=>'required',
                  'phone'=>'required|digits:9',
                  'address'=>'required'
              ]);
        }
    }

    public function register(){
          $this->resetErrorBag();
          if($this->currentStep == 4){
              $this->validate([
                'helper_nationality'=>'required',
                  'gender'=>'required',
                  'religion'=>'required',
                  'education_level'=>'required',
                  'contract_situation'=>'required',
                  'monthly_salary'=>'required',
                  'currency_coin'=>'required',
              ]);
          }

        //   $cv_name = 'CV_'.$this->cv->getClientOriginalName();
        //   $upload_cv = $this->cv->storeAs('students_cvs', $cv_name);

        //   if($upload_cv){
            //   $values = array(
            //       "firstName"=>$this->first_name,
            //       "lastName"=>$this->last_name,
            //       "address"=>$this->address,
            //       "religion"=>$this->religion,
            //       "phone"=>$this->phone,
            //       "country"=>$this->country,
            //       "social_status"=>$this->social_status,
            //       "domain"=>$this->domain,
            //       "child"=>$this->child,
            //     //   "cv"=>$cv_name,
            //   );
            
            // dd($this->id_annonce);
        // $annonce = Annonce::where('id',Auth::user()->id)->first();
        $annonce = Annonce::where('id',$this->id_annonce)->first();
        // $annonce = Annonce::find();
        // dd($annonce);
        $annonce->helper_nationality =$this->helper_nationality ;
        $annonce->gender = $this->gender;
        $annonce->religion = $this->religion;
       $annonce->education_level =$this->education_level;
       $annonce->contract_situation = $this->contract_situation;
       $annonce->monthly_salary = $this->monthly_salary;
       $annonce->currency_coin =$this->currency_coin;
      
        $annonce->define_needs = $this->define_needs;
        $annonce->title_of_offer = $this->title_of_offer;
        $annonce->address = $this->address;
        $annonce->phone = $this->phone;
        $annonce->country = $this->country;
        $annonce->child_baby =$this->child_baby;
        $annonce->child_kid = $this->child_kid;
        $annonce->child_boy = $this->child_boy;
        $annonce->type_of_employment = $this->type_of_employment;
        $annonce->living_arrangement =$this->living_arrangement;
        $annonce->accommodation = $this->accommodation;
        $annonce->day_off = $this->day_off;
        $annonce->expected_start_date = $this->expected_start_date;
        $annonce->user_id=Auth::user()->id;
        $annonce->save();
            //   User::insert($values);
            //   $this->reset();
            //   $this->currentStep = 1;
            // $data = ['name'=>$this->first_name.' '.$this->last_name,'email'=>$this->email];
            return redirect()->route('famille.index');
        //   }
    }

}



//////////////////////////

    // public function render()
    // {

        // $ipCleint = request()->ip();

        // $data = Location::get($ipCleint);
    //    dd( Location::get());
       

        // if ($position = Location::get()) {
        //     echo $position->cityName.', '.$position->regionName.', '.$position->countryName;
        // }


    //     return view('livewire.multi-step-form');
    // }

   
  
