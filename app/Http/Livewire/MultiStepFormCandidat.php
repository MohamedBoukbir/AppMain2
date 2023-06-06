<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


use Stevebauman\Location\Facades\Location;

class MultiStepFormCandidat extends Component
{///////////////////////////
    use WithFileUploads;
    public $child_baby;
    public $child_kid;
    public $child_boy;
    public $type_of_employment;
    public $expected_start_date;
    public $day_off;
    public $accommodation;
    public $living_arrangement;
    public $helper_nationality;
   
    public $contract_situation;
    public $monthly_salary;
    public $currency_coin;
///////////////////////////
   
    public $address;
   
   
   
    public $status;
    public $city;
    public $domain;
    public $child;
    public $social_status;
    //////////////////////////////candidat ////////////
    
    
    
   
  ////////////////////////////
  public $middle_name;
  public $number_of_children;
  public $date_of_birth;
  public $gender;
  public $country;
  public $phone;
  public $education_level;
  public $religion;
  public $languages;
  public $passport_number;
public $visa_expiry_date;
// public $selectedOptions = [];
public $driving_license;
public $access_to_a_car;
public $first_Aid_training;
public $image;
public $babysitter;
public $nanny;
public $childminder;
public $maid;
public $title_of_offer;
public $define_needs;
public $years_experience;
  ////////////////////////////////
    public $totalSteps =4;
    public $currentStep = 1;

    public function mount(){
        $this->currentStep = 1;
        $user=User::find(auth()->user()->id);
        $this->middle_name=$user->username;

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


        return view('livewire.multi-step-form-candidat');
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
                'phone'=>'required',
                'country'=>'required',
                'gender'=>'required',
                'date_of_birth'=>'required',
                'number_of_children'=>'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'education_level'=>'required',
                 'languages'=>'required',
                 'religion'=>'required',
              ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                'passport_number'=>'required',
              ]);
        }
    }

    public function register(){
          $this->resetErrorBag();
          if($this->currentStep == 4){
              $this->validate([
                'title_of_offer'=>'required',
                'define_needs'=>'required',
                'years_experience'=>'required',
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

            // $imageName = time() . '.' . $this->image->extension();
            // $this->image->storeAs('images', $imageName, 'public');


             $imagePath = $this->image->store('images', 'public');
    
        $user = User::find(Auth::user()->id);
        
        $user->image = $imagePath;
        // $user->image = $imageName;
        $user->number_of_children =$this->number_of_children ;
        $user->date_of_birth = $this->date_of_birth;
        $user->gender = $this->gender;
       $user->country =$this->country;
       $user->phone = $this->phone;
       $user->education_level = $this->education_level;
       $user->religion =$this->religion;
      
        $user->languages = $this->languages;
        $user->passport_number = $this->passport_number;
        $user->visa_expiry_date = $this->visa_expiry_date;
        $user->first_Aid_training = $this->first_Aid_training;
        $user->driving_license = $this->driving_license;
        $user->access_to_a_car=$this->access_to_a_car;
        $user->maid = $this->maid;
        $user->childminder = $this->childminder;
        $user->nanny = $this->nanny;
        $user->babysitter =$this->babysitter;
        $user->title_of_offer =$this->title_of_offer;
        $user->define_needs =$this->define_needs;
        $user->years_experience = $this->years_experience;
        // $user->day_off = $this->day_off;
        // $user->expected_start_date = $this->expected_start_date;

        $user->save();

            //   User::insert($values);
            //   $this->reset();
            //   $this->currentStep = 1;
            // $data = ['name'=>$this->first_name.' '.$this->last_name,'email'=>$this->email];
            return redirect()->route('candidat.index');
        //   }
    }
}