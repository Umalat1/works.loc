<?php

    class User
    {
        private $db, $date, $session_name;

        public function __construct($user = null)
        {
            $this->db = Database::getInstance();
            $this->session_name = Config::get('session.user_session');

            if(!$user) {
                if (Session::exists($this->session_name))  {
                    $user = Session::get($this->session_name);

                    if ($this->find($user)) {
                        $this->isLoggedIn = true;
                    } else {

                    }
                }
            }
        }

        public function create($fields = [])
        {
            $this->db->insert('users', $fields);

        }

        public function login($email = null, $passwword = null, $remember = false) {
            if(!$email && !$passwword && $this->exists()) {
                Session::put($this->session_name, $this->date()->id);
            } else {
                $user = $this->find($email);
                if ($user){
                    if(password_verify($passwword, $this->date->password)) {
                        Session::put($this->session_named, $this->date->id);

                        if($remember){
                            $hash = hash('sha256', uniqid());

                            $hashCheck = $this->db->get('user_session', ['user_id', '=', $this->date()->id]);

                            if(!$hashCheck->count()) {
                                $this->db->insert('user_session', [
                                    'user_id' => $this->date()->id,
                                    'hash' => $hash
                                ]);
                            } else {
                                $hash = $hashCheck->first()->hash;
                            }

                            Config::put($this->cookieName, $hash, Config::get('cookie.cookie_expiry'));
                        }
                        return true;
                    }
                }

            }
            return false;
        }

        public function find($value = null) {
            if (is_numeric($value)) {
                $this->date = $this->db->get('users', ['id', '=', $value])->first();
            } else {
                $this->date = $this->db->get('users', ['email', '=', $value])->first();
            }


            if($this->date) {
                return true;
            }
            return false;
            }
        public function data() {
            return $this->date;
        }

        public function isLoggedIn() {
            return $this->isLoggedIn;
        }

        public function logout() {
            return Session::delete($this->session_name);
        }
    }