<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ApiController extends \BaseController {

    public function getTest() {
        $data = Array(
            Array('id' => 1, 'title' => 'Test Response1',),
        );
        return Response::json(array('status' => 'success', 'result' => $data));
    }

    
    public function getProject() {
        $data = Array(
            Array('id' => 1, 'title' => 'Project1','organization'=>'org1',
                'createdtime'=>'00','usercallcode'=>'000','startinfo'=>'startinfo1',
                'totalresponse'=>'12','concludinginfo'=>'concinfo1',),
            Array('id' => 2, 'title' => 'Project2','organization'=>'org2',
                'createdtime'=>'00','usercallcode'=>'001','startinfo'=>'startinfo2',
                'totalresponse'=>'13','concludinginfo'=>'concinfo2',),
            Array('id' => 3, 'title' => 'Project3','organization'=>'org3',
                'createdtime'=>'00','usercallcode'=>'010','startinfo'=>'startinfo3',
                'totalresponse'=>'14','concludinginfo'=>'concinfo3',),
            Array('id' => 4, 'title' => 'Project4','organization'=>'org4',
                'createdtime'=>'00','usercallcode'=>'011','startinfo'=>'startinfo4',
                'totalresponse'=>'15','concludinginfo'=>'concinfo4',),
        );
        return Response::json(array('status' => 'success', 'result' => $data));
    }

    
    public function getQuestions($id) {

        var_dump($id);
        if ($id == 1) {
            //project1 quesiton
            $data=Array(
                Array('id'=>1,'title'=>'P1Question1','projectid'=>1,'type'=>1,),
                Array('id'=>2,'title'=>'P1Question2','projectid'=>1,'type'=>2,),
                Array('id'=>3,'title'=>'P1Question3','projectid'=>1,'type'=>3,),
                
            );
        } elseif ($id == 2) {
            //2
            $data=Array(
                Array('id'=>4,'title'=>'P2Question1','projectid'=>2,'type'=>1,),
                Array('id'=>5,'title'=>'P2Question2','projectid'=>2,'type'=>2,),
                Array('id'=>6,'title'=>'P2Question3','projectid'=>2,'type'=>3,),
                Array('id'=>7,'title'=>'P2Question4','projectid'=>2,'type'=>4,),
                Array('id'=>8,'title'=>'P2Question5','projectid'=>2,'type'=>5,),
                Array('id'=>9,'title'=>'P2Question6','projectid'=>2,'type'=>6,),
                
            );
        } elseif ($id == 3) {
            //3
            $data=Array(
                Array('id'=>10,'title'=>'P3Question1','projectid'=>3,'type'=>1,),
                Array('id'=>11,'title'=>'P3Question2','projectid'=>3,'type'=>2,),
                Array('id'=>12,'title'=>'P3Question3','projectid'=>3,'type'=>3,),
                Array('id'=>13,'title'=>'P3Question4','projectid'=>3,'type'=>4,),
                Array('id'=>14,'title'=>'P3Question5','projectid'=>3,'type'=>5,),
                Array('id'=>15,'title'=>'P3Question6','projectid'=>3,'type'=>6,),
                
            );
        } elseif ($id == 4) {
            //4
            $data=Array(
                Array('id'=>16,'title'=>'P3Question1','projectid'=>4,'type'=>1,),
                
            );
        }
        return Response::json(array('status' => 'success', 'result' => $data));
    }

    public function getUsers() {
        $data = Array(
            Array('id' => 1, 'Name'=>'Ram Prasad Dahal','projectid'=>1),
            Array('id' => 2, 'Name'=>'Shyam Prasad Mishra','projectid'=>2),
            Array('id' => 3, 'Name'=>'Ranju Phuyal','projectid'=>3),
            Array('id' => 4, 'Name'=>'Golcha','projectid'=>4),
        );
        return Response::json(array('status'=>'success','result'=>$data));
    }

    public function getResponse($id) {
        
        var_dump($id);
        if ($id == 1) {
            //project1 quesiton
            $data=Array(
                Array('id'=>1,'res'=>'P1Q1Response','userid'=>1),
                Array('id'=>2,'res'=>'P1Q2Response','userid'=>1),
                Array('id'=>3,'res'=>'P1Q3Response','userid'=>1),
                
            );
        } elseif ($id == 2) {
            //2
            $data=Array(
                Array('id'=>4,'res'=>'P2Q1Response','userid'=>2),
                Array('id'=>5,'res'=>'P2Q1Response','userid'=>2),
                Array('id'=>6,'res'=>'P2Q1Response','userid'=>2),
                Array('id'=>7,'res'=>'P2Q1Response','userid'=>2),
                Array('id'=>8,'res'=>'P2Q1Response','userid'=>2),
                Array('id'=>9,'res'=>'P2Q1Response','userid'=>2),
                            );
        } elseif ($id == 3) {
            //3
            $data=Array(
                Array('id'=>10,'res'=>'P2Q1Response','userid'=>3),
                Array('id'=>11,'res'=>'P2Q1Response','userid'=>3),
                Array('id'=>12,'res'=>'P2Q1Response','userid'=>3),
                Array('id'=>13,'res'=>'P2Q1Response','userid'=>3),
                Array('id'=>14,'res'=>'P2Q1Response','userid'=>3),
                Array('id'=>15,'res'=>'P2Q1Response','userid'=>3),
                
            );
        } elseif ($id == 4) {
            //4
            $data=Array(
                Array('id'=>16,'res'=>'P2Q1Response','userid'=>4),
                
            );
        }
        return Response::json(array('status' => 'success', 'result' => $data));
    }

}
