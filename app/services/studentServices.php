<?php

    namespace app\services;
    use App\StudentModel;
    use DB;


    class studentServices
    {


            public function getView()
            {
                return view('student/create');
            }

            public function getData($data)
            {
                        $StudentModel =new StudentModel();
                       $StudentModel->firstname=$data['firstname'];
                        $StudentModel->lastname=$data['lastname'];
                        $StudentModel->dob=$data['dob'];
                        $StudentModel->department=$data['department'];
                        $StudentModel->phone=$data['phone'];
                        $StudentModel->state=$data['state'];
                        $StudentModel->zip_code=$data['zipcode'];
                        $StudentModel->email=$data['email'];
                        $StudentModel->password=$data['password'];
                        $StudentModel->save();
                        return redirect()->route('student.list');

            }

            public function getUserList()
            {
                $studentdata = StudentModel::All();
                $studData=json_encode($studentdata);
                return view('student.studentlist',['studentdata'=> $studData]);
              
            }

            public function getDepartment()
            {
                $users = DB::select('select * from department_list');
                return  json_encode($users);
            }

            public function viewData($id)
            {
                $studentdata = DB::table('student_list')->where('id', $id)->first();
                 return view('student.studentView',['studentdata'=> $studentdata]);      
               
            }

            public function updateData($id)
            {
                
                 $studentdata = DB::table('student_list')->where('id', $id)->first();
                 return view('student.studentEdit',['studentdata'=> $studentdata]);      
            }


    }




?>



