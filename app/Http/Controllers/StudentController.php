<?php

namespace App\Http\Controllers;

use App\services\studentServices;
use Illuminate\Http\Request;
use App\StudentModel;
use App\User;
use App\StudentCredentials;
use App\testDataModel;
use DB;

class StudentController extends Controller
{
        private $data;
        
        public function __construct(studentServices $dataServ)
        {
                $this->data = $dataServ;
        }

    
        public function create()
        {
            return $this->data->getView();
        }

        public function store(Request $request)
        {
              return $this->data->getData($request->all());
        }


        public function userList()
        {
                return $this->data->getUserList();
        }

        public function departmentList()
        {
                return $this->data->getDepartment();
        }

        public function viewData($id)
        {
               return $this->data->viewData($id);
        }


        public function getDataupdate($id)
        {
                return $this->data->updateData($id);
                // $studentdata = DB::table('student_list')->where('id', $id)->first();
                // return view('student.studentEdit',['studentdata'=> $studentdata]);      
        }

        public function Dataupdate(Request $request, $id )
        {
                $studentmodel = StudentModel::find($request->route('id'));
                $studentmodel->firstname= $request->input('firstname');
                $studentmodel->lastname= $request->input('lastname');
                $studentmodel->dob= $request->input('dob');
                $studentmodel->department= $request->input('department');
                $studentmodel->phone= $request->input('phone');
                $studentmodel->state= $request->input('state');
                $studentmodel->zip_code= $request->input('zip_code');
                $studentmodel->email= $request->input('email');
                $studentmodel->password= $request->input('password');
                $studentmodel->save(); //persist the data
                
                return redirect()->route('student.list')->with('info','Employee Updated Successfully');
                
        //        $data=DB::update('update student_list set firstname = ?,lastname=?,dob=?,department=?,phone=?,state=?,zip_code=?,email=?,password=? where id = ?',[$firstname,$lastname,$dob,$department,$phone,$state,$department,$zip,$email,$password,$id]);
        //         var_dump($data);
        //        exit();  
        //        //return redirect()->route('student.list');
        }


        public function deleteData($id)
        {       
                $s_id=$id;
               // echo $s_id;
               $studentdata=DB::table('student_list')->where('id',$s_id)->delete();
                //$studentdata = StudentModel::All();
               //return view('student.studentlist',['studentdata'=> $studentdata]);
               return view('student.studentlist');

        }


        
        public function testGet()
        {
                return view('student.testSubmit');
        }

        public function testSubmit(Request $request)
        {
              //dump("IN");  
              $testDataModel =new testDataModel();
                
               $testDataModel->firstname=$request->input('firstname');
               $testDataModel->lastname=$request->input('lastname');
               //dump($testDataModel);exit();
               $testDataModel->save();
               return response()->json($testDataModel);

        }




        //Passport Pi Authenticate

        public function register(Request $request)
    {
            
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
 
        $User = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
 
        $token = $User->createToken('Create Token')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }

                // End Passport Pi Authenticate





}
