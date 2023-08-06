<?php

namespace App\Controllers;

class Home extends BaseController
{
    public $session;

    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        $logged_in = $this->session->get('user_logged_in');
        if ($logged_in) {
            return redirect()->to(base_url('dashboard'));
        } else {
            echo view('login');
        }
    }

    public function auth()
    {
        $incoming = $this->request->getPost();
        $incoming['password'] = sha1($incoming['password']);
        $Users = new \App\Models\Users();

        if ($udata = $Users->where($incoming)->find()) {
            $newdata = array(
                'user' => $udata[0],
                'user_logged_in' => TRUE
            );
            $this->session->set($newdata);
            return redirect()->to(base_url('dashboard'));
        } else {
            return redirect()->to(base_url('/'));
        }
    }

    public function register()
    {
        echo view('register');
    }

    public function postregister()
    {
        $incoming = $this->request->getPost();
        $Users = new \App\Models\Users();

        $incoming['password'] = sha1($incoming['password']);
        $incoming['bal'] = 0.0;

        if($Users->insert($incoming)){
            echo "success";
        }else{
            echo('not reg');
        }


    }

    public function logout()
    {
        $logged_in = $this->session->get('user_logged_in');
        if ($logged_in) {
            $this->session->destroy();
            return redirect()->to(base_url('/'));
        } else {
            echo view('login');
        }
    }

    public function dashboard()
    {  
        $logged_in = $this->session->get('user_logged_in');
        $udata = $this->session->get('user');
        if ($logged_in) {
            echo view('dashboard', $udata);
        } else {
            return redirect()->to(base_url('/'));
        }
    }


    public function home()
    {  
        $logged_in = $this->session->get('user_logged_in');
        $udata = $this->session->get('user');
        if ($logged_in) {
            echo view('template/header', $udata);
            echo view('home', $udata);
            echo view('template/footer');
        } else {
            return redirect()->to(base_url('/'));
        }
    }


    public function deposit()
    {  
        $logged_in = $this->session->get('user_logged_in');
        $udata = $this->session->get('user');
        if ($logged_in) {
            echo view('template/oheader', $udata);
            echo view('deposit', ['udata'=>$udata,'msg'=>'']);
        } else {
            return redirect()->to(base_url('/'));
        }
    }


    public function postvoucher()
    {
        $incoming = $this->request->getPost();
        $Vouchers = new \App\Models\Vouchers();
        $Users = new \App\Models\Users();

        $logged_in = $this->session->get('user_logged_in');
        $udata = $this->session->get('user');
        if ($logged_in) {
            $usedBy = $udata['id'].'-'.$udata['email'];
            $v = $Vouchers->where('pin',$incoming['pin'])->find();
            if(!empty($v) && $v[0]['used'] != true){
                if($Vouchers->set(['usedBy'=>$usedBy,'used'=>1])->where('id',$v[0]['id'])->update()){
                    $u = $Users->where('id',$udata['id'])->find()[0];
                    $ret = $Users->set(['bal'=>$u['bal'] + $v[0]['worth']])->where('id',$u['id'])->update();
                    return redirect()->to(base_url('logout'));
                }else{
                    echo('cant set to used');
                }
            }else{
                echo view('template/oheader', $udata);
                echo view('deposit', ['udata'=>$udata,'msg'=>'Invalid Pin Supplied']);
            }
            
        } else {
            return redirect()->to(base_url('/'));
        }
    }
}
