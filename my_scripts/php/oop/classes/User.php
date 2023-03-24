<?php

    class User
    {
        private $db, $date, $session_name;

        public function __construct()
        {
            $this->db = Database::getInstance();
            $this->session_name = Config::get('session.user_session');
        }

        public function create($fields = [])
        {
            $this->db->insert('users', $fields);

        }

        public function login($email = null, $passwword = null) {
            if($email) {
                $user = $this->find($email);
                if ($user){
                    if(password_verify($passwword, $this->date->password)) {
                        Session::put($this->session_named, $this->date->id);
                        return true;
                    }
                }

            }
            return false;
        }

        public function find($email = null) {
            $this->date = $this->db->get('users', ['email', '=', $email])->first();
            if($this->date) {
                return true;
            }
            return false;
            }
        public function data() {
            return $this->date;
        }
    }