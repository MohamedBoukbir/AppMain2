<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


use Stevebauman\Location\Facades\Location;

class MultiStepForm extends Component
{///////////////////////////
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

    public function mount(){
        $this->currentStep = 1;
        // $this->push('scripts', view('livewire.component'));
    }


    public function render()
    {

        // $ipCleint = request()->ip();

        // $data = Location::get($ipCleint);
    //    dd( Location::get());
       

        // if ($position = Location::get()) {
        //     echo $position->cityName.', '.$position->regionName.', '.$position->countryName;
        // }


        return view('livewire.multi-step-form');
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
        $user = User::find(Auth::user()->id);
        // dd('nadi');

        $user->helper_nationality =$this->helper_nationality ;
        $user->gender = $this->gender;
        $user->religion = $this->religion;
       $user->education_level =$this->education_level;
       $user->contract_situation = $this->contract_situation;
       $user->monthly_salary = $this->monthly_salary;
       $user->currency_coin =$this->currency_coin;
      
        $user->define_needs = $this->define_needs;
        $user->title_of_offer = $this->title_of_offer;
        $user->address = $this->address;
        $user->phone = $this->phone;
        $user->country = $this->country;
        $user->child_baby =$this->child_baby;
        $user->child_kid = $this->child_kid;
        $user->child_boy = $this->child_boy;
        $user->type_of_employment = $this->type_of_employment;
        $user->living_arrangement =$this->living_arrangement;
        $user->accommodation = $this->accommodation;
        $user->day_off = $this->day_off;
        $user->expected_start_date = $this->expected_start_date;

        $user->save();

            //   User::insert($values);
            //   $this->reset();
            //   $this->currentStep = 1;
            // $data = ['name'=>$this->first_name.' '.$this->last_name,'email'=>$this->email];
            return redirect()->route('registration.famille.success');
        //   }
    }
}